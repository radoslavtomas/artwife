<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FestivalController extends Controller
{
    public function festival()
    {
        return Inertia::render('Festival');
    }
}
