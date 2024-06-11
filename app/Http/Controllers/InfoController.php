<?php

namespace App\Http\Controllers;

use App\Http\Resources\PageResource;
use App\Models\Page;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InfoController extends Controller
{
    public function info()
    {
        $page = Page::where('page_key', 'info')->firstOrFail();

        return Inertia::render('Info', [
            'page' => PageResource::make($page),
        ]);
    }
}
