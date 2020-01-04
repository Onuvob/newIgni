<?php

namespace App\Http\Controllers\ContactUs;

use App\Model\IgniContact;
use App\Model\Media;
use App\Model\Post;
use App\Services\RequestTriggerService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IgniContactController extends Controller
{

    public function index()
    {
        //
        return "Contact Us Returned";

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
