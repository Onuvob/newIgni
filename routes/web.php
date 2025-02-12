<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Model\Post;

Route::get('/', function () {
    return view('welcome');
});


// Landing Router

//Route::get('/land', function () {
//    return "Hello";
//});
//
//
//Route::get('db-test', function() {
//
////    $post = new \App\Model\Post([
////        'id' => 1,
////        'title' => 'New Title',
////        'body' => 'New Body',
////        'tag' => 'New Tag',
////    ]);
//
//    $post = factory(\App\Model\Post::class)->create();
//
//
//    $post->medias()->create([
//       'file' => 'abcdefg',
//    ]);
//
//    dd($post->medias);
//
//});



Route::get('landing', 'Landing\LandingController@index');





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
