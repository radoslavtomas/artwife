<?php

namespace App\Http\Controllers;

use App\Http\Resources\EditionResource;
use App\Http\Resources\PageResource;
use App\Models\Page;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $page = Page::where('page_key', 'festival')->firstOrFail();

        return Inertia::render('Home', [
            'page' => PageResource::make($page),
        ]);
    }
}
