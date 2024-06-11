<?php

namespace App\Http\Controllers;

use App\Http\Resources\EditionResource;
use App\Http\Resources\EventResource;
use App\Http\Resources\PageResource;
use App\Models\Edition;
use App\Models\Page;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $page = Page::where('page_key', 'artwife')->firstOrFail();
        $edition = Edition::where('status_id', 2)->orderBy('year', 'desc')->firstOrFail();
        $events = $edition->events()->get()->sortBy('date_start');

        $now = Carbon::now();

        $filtered = $events->filter(function ($event) use ($now) {
            $datetime = $event->date_start->toDateString() . ' ' . $event->time_start->toTimeString();
            $event_date = Carbon::createFromFormat('Y-m-d H:i:s', $datetime);
            return $event_date->gt($now);
        });

        $events = $filtered->all();

        return Inertia::render('Home', [
            'page' => PageResource::make($page),
            'events' => EventResource::collection($events),
            'edition' => EditionResource::make($edition),
        ]);
    }

    public function privacy()
    {
        return Inertia::render('Privacy');
    }
}
