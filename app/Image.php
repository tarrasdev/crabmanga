<?php

namespace App;

class Image extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
