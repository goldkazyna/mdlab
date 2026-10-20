<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Один визит = одна сессия во вкладке браузера (переходы по страницам обновляют ту же запись)
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->string('session_id', 36)->unique();   // uuid сессии из sessionStorage
            $table->string('fingerprint', 32);              // отпечаток устройства
            $table->string('visitor_id', 36)->nullable();   // uuid из localStorage
            $table->string('ip', 45);
            $table->string('user_agent', 512)->nullable();
            $table->string('browser', 50)->nullable();
            $table->string('os', 50)->nullable();
            $table->string('device_type', 20)->nullable();  // desktop / mobile / tablet
            $table->string('screen', 20)->nullable();
            $table->string('language', 20)->nullable();
            $table->string('timezone', 50)->nullable();
            $table->text('landing_url')->nullable();
            $table->text('referrer')->nullable();
            $table->boolean('is_paid')->default(false);     // пришёл по рекламе Google
            $table->string('gclid', 255)->nullable();
            $table->string('utm_source', 100)->nullable();
            $table->string('utm_medium', 100)->nullable();
            $table->string('utm_campaign', 255)->nullable();
            $table->string('utm_term', 255)->nullable();
            $table->unsignedSmallInteger('pages')->default(1);
            $table->unsignedInteger('duration_sec')->default(0);
            $table->unsignedTinyInteger('max_scroll')->default(0); // %
            $table->boolean('clicked_phone')->default(false);
            $table->boolean('clicked_whatsapp')->default(false);
            $table->boolean('clicked_telegram')->default(false);
            $table->boolean('submitted_form')->default(false);
            $table->timestamps();

            $table->index('fingerprint');
            $table->index('ip');
            $table->index('created_at');
            $table->index(['is_paid', 'created_at']);
        });

        // Пометки по устройствам (блокировка, заметка)
        Schema::create('visit_devices', function (Blueprint $table) {
            $table->id();
            $table->string('fingerprint', 32)->unique();
            $table->boolean('blocked')->default(false);
            $table->string('note', 500)->nullable();
            $table->timestamps();
        });

        // Кэш геоданных по IP
        Schema::create('visit_ip_infos', function (Blueprint $table) {
            $table->id();
            $table->string('ip', 45)->unique();
            $table->string('country', 2)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('isp', 255)->nullable();
            $table->boolean('is_proxy')->default(false);
            $table->boolean('is_hosting')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visit_ip_infos');
        Schema::dropIfExists('visit_devices');
        Schema::dropIfExists('visits');
    }
};
