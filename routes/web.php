<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/actsregulations', function() {
    return view('actsregulations');
})->name('acts');


Route::get('/testing', function() {
    return view('testing');
});

Route::get('/example', function() {
    return view('example');
});

Route::get('/dropdown', function() {
    return view('sub.newdropdown');
});
// Route::get('/profile', function() {
//     return view('sub.profile');
// });


Route::get('/profile', [\App\Http\Controllers\StaffController::class, 'index'])->name('profile.index');


Route::get('/navtitle', [\App\Http\Controllers\NavtitleController::class, 'index'])->name('navtitle.index');


/* Route::get('/recposts', [\App\Http\Controllers\RecentpostsController::class, 'index'])->name('recentpost.index'); */


Route::resource('/recposts', App\Http\Controllers\RecentpostController::class);


Route::get('/tab', function() {
    return view('tabMenu');
});

Route::get('/try', function() {
    return view('try');
});



Route::get('/datetime', function() {
    return view('datetimezoom');
});

Route::get('/modal', function() {
    return view('sub.modal');
});


Route::get('/nepali', function() {
    return view('nepalify');
});



Route::get('/nepal', function() {
    return view('layouts.nepalify');
});

Route::get('/text',[\App\Http\Controllers\Textcontroller::class, 'index'])->name('text.index');




Route::resource('/event',App\Http\Controllers\EventController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/photo', [App\Http\Controllers\PhotoController::class, 'index'])->name('photo.index');

Route::resource('/galleryType', App\Http\Controllers\GalleryTypeController::class);

Route::resource('/gallery', App\Http\Controllers\GalleryController::class);

Route::resource('/photogallery', App\Http\Controllers\PhotoController::class);


Route::resource('/information', App\Http\Controllers\InformationController::class);

Route::resource('/infodesc', App\Http\Controllers\InformationdescController::class);