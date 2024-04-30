<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'date_start' => $this->date_start->format('d.m'),
            'date_start_day' => $this->date_start->dayName,
            'time_start' => $this->time_start->format('H:i'),
            'date_end' => $this->date_end ? $this->date_end->format('d.m') : null,
            'time_end' => $this->time_end ? $this->time_end->format('H:i') : null,
            'place' => $this->place,
            'type' => $this->type,
            'image' => $this->image,
            'title' => $this->title,
            'teaser' => $this->teaser,
            'body' => $this->body,
            'slug' => $this->slug,
            'featured' => $this->featured,
        ];
    }
}
