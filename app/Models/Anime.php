<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Anime extends Model
{
    /** @use HasFactory<\Database\Factories\AnimeFactory> */
    use HasFactory;
    protected $fillable = [
        'mal_id',
        'title',
        'image_url',
        'rank',
        'status'
    ];

    public function AnimeDetails() :HasOne
    {
        return $this->hasOne(AnimeDetail::class);
    }
}
