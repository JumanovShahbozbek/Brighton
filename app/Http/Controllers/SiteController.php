<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function programs()
    {
        return view('pages.programs');
    }

    Public function contact()
    {
        return view('pages.contact');
    }
}
