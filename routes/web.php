<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/blog', 'HomeController@index')->name('blog');//names urls
//Route::get('/','HomeController@index');
Route::get('/blog/{slug}', 'HomeController@post');
Route::get('/pages', 'PageController@index')->name('pages');
Route::get('/pages/{slug}', 'PageController@page');
Route::get('/feedback', function() {
    return view('feedback');
})->name('feedback');
Route::post('/feedback/submit', 'ContactController@submit')->name('contact-form');
Route::get('/search', 'HomeController@search')->name('search');







/*
 * Voyager admin
 */
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
