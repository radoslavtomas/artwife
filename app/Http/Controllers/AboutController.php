<?php

namespace App\Http\Controllers;

use App\Http\Resources\PageResource;
use App\Models\Page;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AboutController extends Controller
{
    public function about()
    {
        $pages = Page::whereIn('page_key', ['about', 'home'])->get();

        return Inertia::render('About', [
            'pages' => PageResource::collection($pages)
        ]);
    }
}
