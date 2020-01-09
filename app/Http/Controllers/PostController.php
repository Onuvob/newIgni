<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return (new PostService())->index();
    }

    public function show($id)
    {
        return (new PostService())->show($id);
    }


    public function update(Request $request, $id)
    {
        (new PostService())->update($request, $id);
    }
}
