<?php

namespace App;

class Post extends Model
{
    public function images()
    {
        return $this->hasOne(Image::class);
    }

    // public function addImage($title)
    // {
    //     Image::create([
    //         'title' => $title,
    //         'post_id' => $this->id
    //     ]);
    // }

}
