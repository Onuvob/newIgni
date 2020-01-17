<?php


namespace App\Services;


use App\Model\Article;
use Illuminate\Http\Request;

class ArticleService
{
    public function index()
    {
        return Article::get();
    }

    public function show($id)
    {
        return Article::find($id);
    }

}
