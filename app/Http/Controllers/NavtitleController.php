<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Navtitle;

class NavtitleController extends Controller
{
    //
    public function index()
    {
        return view('navtitle.index', [
            'navtitles' => Navtitle::all(),
        ]);
    }
}
