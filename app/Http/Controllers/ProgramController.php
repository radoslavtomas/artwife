<?php

namespace App\Http\Controllers;

use App\Http\Resources\EditionResource;
use App\Http\Resources\EventResource;
use App\Http\Resources\ReviewResource;
use App\Models\Edition;
use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProgramController extends Controller
{
    public function program($year = null, $slug = null)
    {
        // if we have slug, return event
        if($slug != null) {
            $event = Event::where('slug', $slug)->firstOrFail();

            return Inertia::render('Event', [
                'event' => EventResource::make($event),
            ]);
        }

        // search only published events
        $search = [ 'status_id' => 2 ];

        if($year != null) {
            $search['year'] = intval($year);
        }

        $edition = Edition::where($search)->orderBy('year', 'desc')->firstOrFail();

        $events = $edition->events()->get()->sortBy([
            ['date_start', 'asc'],
            ['time_start', 'asc'],
        ]);

        $reviews = $edition->reviews()->get()->sortBy([
            ['created_at', 'asc'],
        ]);

        return Inertia::render('Program', [
            'edition' => EditionResource::make($edition),
            'events' => EventResource::collection($events),
            'reviews' => ReviewResource::collection($reviews),
        ]);
    }
}
