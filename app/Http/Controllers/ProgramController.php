<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProgramController extends Controller
{
    public function program()
    {
        return Inertia::render('Program');
    }
}
