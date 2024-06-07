<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Movie extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function generateSlug($title){
        $slug = Str::slug($title, '-');
        
        return $slug;

    }

    public function movies_rooms(){
        return $this->belongsToMany(MovieRoom::class);
    }
}
