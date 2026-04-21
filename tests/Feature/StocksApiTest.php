<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class StocksApiTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        config(['services.stocks_api.token' => 'test-secret-token']);
        Storage::fake('local');
    }

    public function test_rejects_request_without_token(): void
    {
        $response = $this->postJson('/api/stocks', ['any' => 'data']);

        $response->assertStatus(401);
        $response->assertJson(['success' => false]);
        $this->assertNotEmpty($response->json('message'));
    }

    public function test_rejects_request_with_wrong_token(): void
    {
        $response = $this->postJson('/api/stocks', ['any' => 'data'], [
            'Authorization' => 'Bearer wrong-token',
        ]);

        $response->assertStatus(401);
        $response->assertJson(['success' => false]);
    }

    public function test_rejects_empty_body(): void
    {
        $response = $this->call(
            'POST',
            '/api/stocks',
            [],
            [],
            [],
            [
                'HTTP_Authorization' => 'Bearer test-secret-token',
                'CONTENT_TYPE' => 'application/json',
                'HTTP_ACCEPT' => 'application/json',
            ],
            ''
        );

        $response->assertStatus(400);
        $response->assertJson(['success' => false]);
        $this->assertNotEmpty($response->json('message'));
    }

    public function test_rejects_invalid_json(): void
    {
        $response = $this->call(
            'POST',
            '/api/stocks',
            [],
            [],
            [],
            [
                'HTTP_Authorization' => 'Bearer test-secret-token',
                'CONTENT_TYPE' => 'application/json',
                'HTTP_ACCEPT' => 'application/json',
            ],
            '{not valid json'
        );

        $response->assertStatus(400);
        $response->assertJson(['success' => false]);
    }

    public function test_saves_valid_json_payload(): void
    {
        $payload = json_encode([
            'items' => [
                ['code' => 'SKU-001', 'qty' => 10],
                ['code' => 'SKU-002', 'qty' => 5],
            ],
        ]);

        $response = $this->call(
            'POST',
            '/api/stocks',
            [],
            [],
            [],
            [
                'HTTP_Authorization' => 'Bearer test-secret-token',
                'CONTENT_TYPE' => 'application/json',
                'HTTP_ACCEPT' => 'application/json',
            ],
            $payload
        );

        $response->assertStatus(200);
        $response->assertJson(['success' => true]);

        $savedFile = $response->json('file');
        $this->assertNotEmpty($savedFile);

        Storage::disk('local')->assertExists($savedFile);
        $this->assertSame($payload, Storage::disk('local')->get($savedFile));
    }
}
