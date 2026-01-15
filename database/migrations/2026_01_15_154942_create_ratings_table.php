<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->string('page_url'); // URL страницы
            $table->string('page_type')->nullable(); // тип: article, service, page
            $table->unsignedBigInteger('page_id')->nullable(); // ID если есть
            $table->tinyInteger('rating'); // оценка 1-5
            $table->string('ip', 45);
            $table->timestamps();
            
            // Индексы
            $table->index('page_url');
            $table->index(['page_type', 'page_id']);
            $table->index('ip');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};