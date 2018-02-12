<?php

namespace App;

class Post extends Model
{
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
