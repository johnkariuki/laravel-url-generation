<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Root message for URL generation tutorial
 *
 */
Route::get('/', function () {
    return "A little about url generation";
});

/**
 * Get the current Url using the URL
 * facacde
 *
 */
Route::get('/foo', function () {
    return "<strong>URL::current():</strong> ".  URL::current();
});

/**
 * Get the current Url using the url
 * Service Container Binding
 *
 */
Route::get('/bar', function () {
    return "<strong>url()->current():</strong> ".  url()->current();
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
