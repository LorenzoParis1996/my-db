<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'original_title',
        'audience_id',
        'release_year'
    ];

    public function studios()
    {
        return $this->belongsToMany(Studio::class);
    }

    public function audiences()
    {
        return $this->belongsTo(Audience::class);
    }
}