<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home');
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
