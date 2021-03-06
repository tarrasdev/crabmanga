<?php

namespace App;

class Gallery extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}
