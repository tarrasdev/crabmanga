<?php

namespace App;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
    public function chapter()
    {
        return $this->hasMany(Chapter::class);
    }
}
