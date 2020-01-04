<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\MediaController;
use App\Http\Controllers\PostController;
use App\Model\Media;
use App\Model\Post;
use App\Services\RequestTriggerService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LandingController extends Controller
{

    public function index()
    {
        return "Goto Heaven";
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














//
//    public function index()
//    {
//        return "Landing Page Returned";
//    }



//    public function create()
//    {
//
//    }


//    public function store(Request $request)
//    {
//
//    }



//    public function destroy(Media $media=null, Post $post=null)
//    {
//
//    }

