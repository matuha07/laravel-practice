<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view("pages.home", ["title" => "Главная"]);
    }

    public function about()
    {
        return view("pages.about", ["title" => "О проекте"]);
    }

    public function contacts()
    {
        return view("pages.contacts", ["title" => "Контакты"]);
    }
}
