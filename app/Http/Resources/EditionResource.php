<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EditionResource extends JsonResource
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
            'edition_key' => $this->edition_key,
            'year' => $this->year,
            'image' => $this->image,
            'title' => $this->title,
            'body' => $this->body,
        ];
    }
}
