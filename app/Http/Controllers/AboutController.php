<?php

namespace App\Http\Controllers;


use App\Http\Resources\PageResource;
use App\Http\Resources\PeopleResource;
use App\Models\Page;
use App\Models\People;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AboutController extends Controller
{
    public function about()
    {
        $pages = Page::whereIn('page_key', ['about', 'support'])->get();
        $people = People::where('status_id', 2)->get()->sortBy('order'); // status_id = 2 (published)

        return Inertia::render('About', [
            'pages' => PageResource::collection($pages),
            'people' => PeopleResource::collection($people)
        ]);
    }
}
