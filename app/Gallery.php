<?php

namespace App;

class Gallery extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
