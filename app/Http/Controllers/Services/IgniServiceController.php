<?php

namespace App\Http\Controllers\Services;

use App\Model\IgniService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IgniServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Igni Services Returned";

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
     * @param  \App\Model\IgniService  $igniService
     * @return \Illuminate\Http\Response
     */
    public function show(IgniService $igniService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\IgniService  $igniService
     * @return \Illuminate\Http\Response
     */
    public function edit(IgniService $igniService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\IgniService  $igniService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IgniService $igniService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\IgniService  $igniService
     * @return \Illuminate\Http\Response
     */
    public function destroy(IgniService $igniService)
    {
        //
    }
}
