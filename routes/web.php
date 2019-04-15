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

Route::get('/ppmnh', function () {
    return view('layouts/homepage');
});
Route::get('/visimisi', function () {
    return view('layouts/visimisi');
});
Route::get('/sejarah', function () {
    return view('layouts/sejarah');
});
Route::get('/why', function () {
    return view('layouts/why');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
