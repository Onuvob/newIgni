<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $guarded = [];

    public function post()
    {
        return $this->belongsTo(\App\Model\Post::class);
    }
}
