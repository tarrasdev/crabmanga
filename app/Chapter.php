<?php

namespace App;

class Chapter extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
}
