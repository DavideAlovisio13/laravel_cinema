<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'minutes',
        'language',
        'thumb',
        'trailer',
        'release_date',

        
    ];

    public static function generateSlug($title){
        $slug = Str::slug($title, '-');
        return $slug;

    }
}
