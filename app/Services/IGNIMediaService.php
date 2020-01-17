<?php


namespace App\Services;


use App\Model\File;
use Illuminate\Http\Request;

class IGNIMediaService
{

    public function index()
    {
        return File::get();
    }

    public function show($id)
    {
        $media = File::where('article_id', $id)->first();

        return $media;

    }
}
