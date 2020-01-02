<?php

namespace App\Http\Controllers\ContactUs;

use App\Model\IgniContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IgniContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Contact Us Returned";

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
     * @param  \App\Model\IgniContact  $igniContact
     * @return \Illuminate\Http\Response
     */
    public function show(IgniContact $igniContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\IgniContact  $igniContact
     * @return \Illuminate\Http\Response
     */
    public function edit(IgniContact $igniContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\IgniContact  $igniContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IgniContact $igniContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\IgniContact  $igniContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(IgniContact $igniContact)
    {
        //
    }
}
