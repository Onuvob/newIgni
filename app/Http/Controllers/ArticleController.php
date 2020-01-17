<?php

namespace App\Http\Controllers;

use App\Services\ArticleService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return (new ArticleService())->index();
    }

    public function show($id)
    {
        return (new ArticleService())->show($id);
    }

}
