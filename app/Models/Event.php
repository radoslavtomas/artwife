<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'edition_id',
        'status_id',
        'featured',
        'image',
        'title',
        'slug',
        'date_start',
        'time_start',
        'date_end',
        'time_end',
        'place',
        'teaser',
        'body',
        'language'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'title' => 'array',
            'teaser' => 'array',
            'body' => 'array',
            'date_start' => 'datetime',
            'time_start' => 'datetime',
            'date_end' => 'datetime',
            'time_end' => 'datetime',
        ];
    }

    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }
}
