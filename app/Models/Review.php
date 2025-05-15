<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status_id',
        'edition_id',
        'title',
        'slug',
        'author',
        'source',
        'source_link',
        'teaser',
        'text',
    ];

    use HasFactory;

    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }
}
