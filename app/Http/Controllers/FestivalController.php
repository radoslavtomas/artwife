<?php

namespace App\Http\Controllers;

use App\Http\Resources\EditionResource;
use App\Http\Resources\PageResource;
use App\Models\Edition;
use App\Models\Page;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FestivalController extends Controller
{
    public function festival()
    {
        $editions = Edition::all()->sortByDesc('year');
        $page = Page::where('page_key', 'festival')->firstOrFail();

        return Inertia::render('Festival', [
            'editions' => EditionResource::collection($editions),
            'page' => PageResource::make($page),
        ]);
    }
}
