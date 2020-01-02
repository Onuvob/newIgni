<?php

namespace App\Http\Controllers\Gallery;

use App\Model\IgniGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IgniGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Igni Gallery Returned";

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\IgniGallery  $igniGallery
     * @return \Illuminate\Http\Response
     */
    public function show(IgniGallery $igniGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\IgniGallery  $igniGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(IgniGallery $igniGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\IgniGallery  $igniGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IgniGallery $igniGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\IgniGallery  $igniGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(IgniGallery $igniGallery)
    {
        //
    }
}
