<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function newUser()
    {
        return view('pages.form');
    }
}
