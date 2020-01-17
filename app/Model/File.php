<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function articles()
    {
        return $this->belongsTo(\App\Model\Article::class);
    }
}
