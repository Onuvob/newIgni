<?php


namespace App\Services;


use App\Model\Post;
use Illuminate\Http\Request;

class PostService
{

    public function index()
    {
        $posts = Post::get();

        return $posts;
    }

    public function show($id)
    {
        $post = Post::find($id);

        return $post;

    }


    public function update(Request $request, $id)
    {

        $post = Post::where('id', '=', $id)->first();


        $title = $request->input('title');
        $body = $request->input('body');
        $tag = $request->input('tag');

        $post->title = $title;
        $post->body = $body;
        $post->tag = $tag;

        $post->save();

        return "Post has been saved!";

    }

}
