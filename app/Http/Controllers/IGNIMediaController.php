<?php

namespace App\Http\Controllers;

use App\Services\IGNIMediaService;
use Illuminate\Http\Request;

class IGNIMediaController extends Controller
{
    public function index()
    {
        return (new IGNIMediaService())->index();
    }

    public function show($id)
    {
        return (new IGNIMediaService())->show($id);
    }

}
