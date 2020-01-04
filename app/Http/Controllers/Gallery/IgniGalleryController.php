<?php

namespace App\Http\Controllers\Gallery;

use App\Model\IgniGallery;
use App\Model\Media;
use App\Model\Post;
use App\Services\RequestTriggerService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IgniGalleryController extends Controller
{
    public function index()
    {
        //
        return "Igni Gallery Returned";

    }

    public function show(Media $media = null, Post $post = null)
    {
        return (new RequestTriggerService())->checkShowingParameter($media, $post);
    }



    public function update(Request $request, Media $media = null, Post $post = null)
    {
        (new RequestTriggerService())->updateMediaPost($request, $media, $post);
    }
}
