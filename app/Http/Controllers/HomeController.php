<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function festival()
    {
        return view('festival');
    }

    public function artwife()
    {
        return view('artwife');
    }

    public function event()
    {
        return view('event');
    }

    public function about()
    {
        return view('about');
    }
}
