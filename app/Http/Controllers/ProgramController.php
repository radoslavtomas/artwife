<?php

namespace App\Http\Controllers;

use App\Http\Resources\EditionResource;
use App\Http\Resources\EventResource;
use App\Models\Edition;
use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProgramController extends Controller
{
    public function program($year = null, $slug = null)
    {
        if($slug != null) {
            $event = Event::where('slug', $slug)->firstOrFail();

            return Inertia::render('Event', [
                'event' => EventResource::make($event),
            ]);
        }

        $search = [ 'status_id' => 2 ]; // published

        if($year != null) {
            $search['year'] = intval($year);
        }

        $edition = Edition::where($search)->orderBy('year', 'desc')->firstOrFail();
        $events = $edition->events()->get()->sortByDesc('date_start');

        return Inertia::render('Program', [
            'edition' => EditionResource::make($edition),
            'events' => EventResource::collection($events),
        ]);
    }
}
