<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReviewResource;
use App\Models\Review;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ReviewsController extends Controller
{

    public function show($slug) {
        $review = Review::with('edition')->where('slug', $slug)->firstOrFail();

        return Inertia::render('Review', [
            'review' => ReviewResource::make($review),
        ]);
    }
}
