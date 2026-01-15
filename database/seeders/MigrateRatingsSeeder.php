<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MigrateRatingsSeeder extends Seeder
{
    public function run(): void
    {
        // Получаем старые рейтинги с джойном на tm_pages
        $oldRatings = DB::table('rating')
            ->join('tm_pages', 'rating.id_page', '=', 'tm_pages.id')
            ->select(
                'rating.id',
                'rating.rating',
                'rating.ip',
                'rating.date',
                'tm_pages.alias',
                'tm_pages.id as page_id'
            )
            ->get();

        $migrated = 0;
        $skipped = 0;

        foreach ($oldRatings as $old) {
            // Формируем URL страницы
            $pageUrl = '/' . $old->alias;

            DB::table('ratings')->insert([
                'page_url' => $pageUrl,
                'page_type' => 'page',
                'page_id' => $old->page_id,
                'rating' => $old->rating,
                'ip' => $old->ip,
                'created_at' => $old->date,
                'updated_at' => now(),
            ]);

            $migrated++;
        }

        // Проверяем сколько рейтингов без страниц (сироты)
        $orphans = DB::table('rating')
            ->leftJoin('tm_pages', 'rating.id_page', '=', 'tm_pages.id')
            ->whereNull('tm_pages.id')
            ->count();

        echo "Перенесено рейтингов: {$migrated}\n";
        echo "Пропущено (нет страницы): {$orphans}\n";
    }
}