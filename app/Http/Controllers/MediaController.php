<?php

namespace App\Http\Controllers;

use App\Services\MediaService;
use Illuminate\Http\Request;

class MediaController extends Controller
{

    public function show($id)
    {
        return (new MediaService())->show($id);
    }


    public function update(Request $request, $id)
    {
        (new MediaService())->$this->update($request, $id);
    }

}
