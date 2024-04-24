<?php

namespace App\Http\Controllers;

use App\Http\Resources\EditionResource;
use App\Http\Resources\EventResource;
use App\Models\Edition;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProgramController extends Controller
{
    public function program()
    {
        $edition = Edition::where('active', 1)->orderBy('year', 'desc')->first();

        if(!$edition) {
            // @TODO: handle no active edition
            return Inertia::render('Program');
        }

        $events = $edition->events()->get();

        return Inertia::render('Program', [
            'edition' => EditionResource::make($edition),
            'events' => EventResource::collection($events),
        ]);
    }
}
