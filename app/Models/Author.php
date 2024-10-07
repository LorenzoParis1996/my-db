<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'nationality',
        'date_of_birth',
        'place_of_birth',
        'author_pic',
        'brief_biography',
    ];

    public function animes()
    {
        return $this->belongsToMany(Anime::class);
    }
}