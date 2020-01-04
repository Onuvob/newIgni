<?php

namespace App\Http\Controllers\Team;

use App\Model\IgniTeam;
use App\Model\Media;
use App\Model\Post;
use App\Services\RequestTriggerService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IgniTeamController extends Controller
{

    public function index()
    {
        //
        return "Igni Team Returned";

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
