<?php


namespace App\Services;


use App\Http\Controllers\MediaController;
use App\Http\Controllers\PostController;

class RequestTriggerService
{
    public function checkShowingParameter($media, $post)
    {
        if ($media)
        {
            return (new MediaController())->show($media);
        }


        if ($post)
        {
            return (new PostController())->show($post);
        }
    }


    public function updateMediaPost($request, $media, $post)
    {
        if ($media)
        {
            (new MediaController())->update($request, $media);
        }


        if ($post)
        {
            (new PostController())->update($request, $post);
        }
    }

}