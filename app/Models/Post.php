<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public function likes()
    {
        return $this->hasMany(Like::class);
    } 
    

    public function shares()
    {
        return $this->hasMany(Share::class);
    }

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
