<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        return view('photoGallery.index', [
            'photos' => Gallery::all(),
        ]);
    }

    public function photoIndex()
    {
        return view('photoGallery.index', [
            'photos' => Gallery::where('type_id', 1)->get(),
        ]);
    }

    public function videoIndex()
    {
        return view('videoGallery.index', [
            'photos' => Gallery::where('type_id', 2)->get(),
        ]);
    }
}
