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
        'release_year',
        'cover_image',
        'description'
    ];

    public function studios()
    {
        return $this->belongsToMany(Studio::class);
    }

    public function audience() //E' una one to many, il metodo di relazione va scritto al singolare!!!
    {
        return $this->belongsTo(Audience::class);
    }
}
