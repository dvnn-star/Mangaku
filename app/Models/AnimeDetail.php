<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AnimeDetail extends Model
{
    protected $fillable = [
        'anime_id',
        'synopsis',
        'producers',
        'studios',
        'genres'
    ];
    public function Anime() :BelongsTo
    {
        return $this->belongsTo(Anime::class);
    }
}
