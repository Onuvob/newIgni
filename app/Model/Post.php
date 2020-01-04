<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function medias()
    {
        return $this->hasMany(\App\Model\Media::class);
    }
}
