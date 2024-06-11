<?php

namespace App\Http\Controllers;

use App\Http\Resources\EditionResource;
use App\Http\Resources\PageResource;
use App\Models\Edition;
use App\Models\Page;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ArchiveController extends Controller
{
    public function archive()
    {
        $editions = Edition::all()->sortByDesc('year');
        $page = Page::where('page_key', 'artwife')->firstOrFail();

        return Inertia::render('Archive', [
            'editions' => EditionResource::collection($editions),
            'page' => PageResource::make($page),
        ]);
    }
}
