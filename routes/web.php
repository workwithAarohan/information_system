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


Route::get('/home', function () {
    return view('home');
});

Route::get('/test', function() {
    return view('test');
});


Route::get('/drop', function() {
    return view(' layouts.dropdwon');
});


Route::get('/slideshow', function() {
    return view('slideshow');
});



Route::get('/testing', function() {
    return view('testing');
});

Route::get('/example', function() {
    return view('example');
});





Route::get('/tab', function() {
    return view('tabMenu');
});
Route::get('/try', function() {
    return view('try');
});

