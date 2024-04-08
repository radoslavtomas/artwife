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
}
