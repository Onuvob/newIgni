<?php

namespace App\Http\Controllers\AboutUs;

use App\Model\AboutIgni;
use App\Model\Media;
use App\Model\Post;
use App\Services\RequestTriggerService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AboutIgniController extends Controller
{

    public function index()
    {
        //
        return "About Us Returned";

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
