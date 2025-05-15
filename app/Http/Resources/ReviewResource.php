<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            'title' => $this->title,
            'slug' => $this->slug,
            'author' => $this->author,
            'source' => $this->source,
            'source_link' => $this->source_link,
            'teaser' => $this->teaser,
            'text' => $this->text,
            'edition' => $this->edition ? EditionResource::make($this->edition) : null,
        ];
    }
}
