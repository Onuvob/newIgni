<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function files()
    {
        return $this->hasMany(\App\Model\File::class);
    }
}
