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
 * facade
 *
 * http://laravel-urls.local/foo
 */
Route::get('/foo', function () {
    return URL::current();
});

/**
 * Get the current Url using the url
 * Service Container Binding
 *
 * http://laravel-urls.local/foo
 */
Route::get('/bar', function () {
    return url()->current();
});

/**
 * Get the full URL of the current page including the query string
 * parameters
 *
 * http://laravel-urls.local/url/full?page=2
 */
Route::get('url/full', function () {
    return URL::full();
});

/**
 * Click on this link to go to the url/previous Route
 *
 */
Route::get('click/link', function () {
    return '<a href="/url/previous">Click me</a>';
});

/**
 * Get the previous Url
 *
 * http://laravel-urls.local/click/link
 */
Route::get('url/previous', function () {
    return URL::previous();
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
