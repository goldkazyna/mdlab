<?php

namespace Tests\Feature;

use App\Models\Visit;
use App\Models\VisitDevice;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class VisitLogTest extends TestCase
{
    use RefreshDatabase;

    private const FP = 'aaaaaaaaaaaaaaaabbbbbbbbbbbbbbbb';

    protected function setUp(): void
    {
        parent::setUp();
        config(['services.visits.password' => 'secret']);
        Http::fake(['ip-api.com/*' => Http::response([
            ['status' => 'success', 'query' => '127.0.0.1', 'countryCode' => 'KZ', 'city' => 'Almaty', 'isp' => 'Kazakhtelecom', 'proxy' => false, 'hosting' => true],
        ])]);
    }

    private function track(array $data)
    {
        return $this->call('POST', '/api/v', [], $this->prepareCookiesForRequest(), [], ['CONTENT_TYPE' => 'application/json'], json_encode($data + [
            's' => 'sess-0001',
            'fp' => self::FP,
        ]));
    }

    public function test_paid_visit_is_recorded_with_utm(): void
    {
        $this->track([
            'url' => 'https://mdlab.kz/landing-page?gclid=abc123&utm_campaign=sites&utm_term=создать сайт',
            'scr' => '1920x1080',
        ])->assertNoContent();

        $visit = Visit::firstOrFail();
        $this->assertTrue($visit->is_paid);
        $this->assertSame('abc123', $visit->gclid);
        $this->assertSame('sites', $visit->utm_campaign);
        $this->assertSame('создать сайт', $visit->utm_term);
        $this->assertSame('/landing-page', $visit->landingPath());
    }

    public function test_organic_visit_is_not_paid(): void
    {
        $this->track(['url' => 'https://mdlab.kz/', 'ref' => 'https://www.google.com/'])->assertNoContent();

        $this->assertFalse(Visit::firstOrFail()->is_paid);
    }

    public function test_repeated_ping_updates_same_session(): void
    {
        $this->track(['url' => 'https://mdlab.kz/?gclid=x', 'dur' => 5, 'scroll' => 40]);
        $this->track(['url' => 'https://mdlab.kz/kontakty', 'dur' => 3, 'scroll' => 90, 'pages' => 2, 'ph' => 1]);

        $this->assertSame(1, Visit::count());
        $visit = Visit::firstOrFail();
        $this->assertSame(5, $visit->duration_sec);
        $this->assertSame(90, $visit->max_scroll);
        $this->assertSame(2, $visit->pages);
        $this->assertTrue($visit->clicked_phone);
        $this->assertSame('/', $visit->landingPath());
    }

    public function test_invalid_payload_is_rejected(): void
    {
        $this->track(['fp' => 'not-a-hash'])->assertStatus(422);
        $this->assertSame(0, Visit::count());
    }

    public function test_journal_requires_password(): void
    {
        $this->get('/visits')->assertRedirect('/visits/login');
        $this->post('/visits/login', ['password' => 'wrong'])->assertSessionHasErrors('password');
        $this->post('/visits/login', ['password' => 'secret'])
            ->assertRedirect('/visits')
            ->assertCookie('vl_ignore');
    }

    public function test_login_by_password_hash_when_env_password_is_empty(): void
    {
        config(['services.visits.password' => null, 'services.visits.password_hash' => password_hash('fromhash', PASSWORD_BCRYPT)]);

        $this->post('/visits/login', ['password' => 'wrong'])->assertSessionHasErrors('password');
        $this->post('/visits/login', ['password' => 'fromhash'])->assertRedirect('/visits');
    }

    public function test_tables_are_created_automatically_without_migrate(): void
    {
        Schema::drop('visits');
        Schema::drop('visit_devices');
        Schema::drop('visit_ip_infos');
        DB::table('migrations')->where('migration', '2026_10_20_120000_create_visits_tables')->delete();

        $this->track(['url' => 'https://mdlab.kz/?gclid=x'])->assertNoContent();
        $this->assertTrue(Schema::hasTable('visits'));

        $this->track(['url' => 'https://mdlab.kz/?gclid=x'])->assertNoContent();
        $this->assertSame(1, Visit::count());
    }

    public function test_own_visits_are_not_tracked_after_login(): void
    {
        $this->withCookie('vl_ignore', '1')->track(['url' => 'https://mdlab.kz/?gclid=x'])->assertNoContent();

        $this->assertSame(0, Visit::count());
    }

    public function test_device_with_many_paid_clicks_and_no_actions_is_suspicious(): void
    {
        foreach (range(1, 3) as $i) {
            $this->track(['s' => "sess-000{$i}", 'url' => 'https://mdlab.kz/?gclid=x' . $i, 'dur' => 4]);
        }
        $this->track(['s' => 'sess-0009', 'fp' => str_repeat('c', 32), 'url' => 'https://mdlab.kz/?gclid=y', 'dur' => 120, 'wa' => 1]);

        $this->withSession(['visit_log_auth' => true])
            ->get('/visits')
            ->assertOk()
            ->assertSee('подозрительно')
            ->assertSee(substr(self::FP, 0, 10))
            ->assertSee('Almaty')
            ->assertSee('хостинг');

        $devices = $this->withSession(['visit_log_auth' => true])->get('/visits')->viewData('devices');
        $this->assertSame(self::FP, $devices->first()->fingerprint);
        $this->assertEquals(1, $devices->first()->suspicious);
        $this->assertEquals(0, $devices->last()->suspicious);
    }

    public function test_blocking_device_adds_its_ips_to_export(): void
    {
        $this->track(['url' => 'https://mdlab.kz/?gclid=x']);

        $this->withSession(['visit_log_auth' => true])
            ->get('/visits/device/' . self::FP)
            ->assertOk()
            ->assertSee('Заблокировать');

        $this->withSession(['visit_log_auth' => true])
            ->post('/visits/device/' . self::FP, ['blocked' => 1, 'note' => 'конкурент'])
            ->assertRedirect();

        $this->assertTrue(VisitDevice::where('fingerprint', self::FP)->value('blocked'));
        $this->withSession(['visit_log_auth' => true])
            ->get('/visits?tab=visits')
            ->assertOk()
            ->assertSee('Скопировать IP')
            ->assertSee('127.0.0.1');
    }
}
