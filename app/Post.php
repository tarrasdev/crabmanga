<?php

namespace App;

class Post extends Model
{
    public function images()
    {
        return $this->hasOne(Image::class);
    }
}
