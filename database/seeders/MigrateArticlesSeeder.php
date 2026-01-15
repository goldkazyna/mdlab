<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MigrateArticlesSeeder extends Seeder
{
    public function run(): void
    {
        // Получаем все записи из старой таблицы
        $oldArticles = DB::table('tm_news')->get();

        foreach ($oldArticles as $old) {
            DB::table('articles')->insert([
                'id' => $old->id,
                'title' => $old->title,
                'slug' => $old->alias,
                'description' => $old->discription,
                'content' => $old->text,
                'image' => $old->img ?: null,
                'meta_title' => $old->mt ?: null,
                'meta_description' => $old->md ?: null,
                'is_active' => true,
                'published_at' => $old->date,
                'created_at' => $old->date,
                'updated_at' => now(),
            ]);
        }

        echo "Перенесено статей: " . count($oldArticles) . "\n";
    }
}