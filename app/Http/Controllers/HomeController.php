<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Создание сайтов в Алматы от 200 000₸ | Разработка под ключ',
            'description' => 'Профессиональная разработка сайтов в Алматы ⭐ 10+ лет опыта ⭐ 300+ проектов'
        ]);
    }
}