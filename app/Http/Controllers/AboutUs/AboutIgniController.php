<?php

namespace App\Http\Controllers\AboutUs;

use App\Model\AboutIgni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AboutIgniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "About Us Returned";

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
     * @param  \App\Model\AboutIgni  $aboutIgni
     * @return \Illuminate\Http\Response
     */
    public function show(AboutIgni $aboutIgni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\AboutIgni  $aboutIgni
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutIgni $aboutIgni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\AboutIgni  $aboutIgni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutIgni $aboutIgni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\AboutIgni  $aboutIgni
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutIgni $aboutIgni)
    {
        //
    }
}
