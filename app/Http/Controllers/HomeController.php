<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Recentpost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('main.home', [
            'photos' => Gallery::where('is_active',1)->get(),

            'events' => Information_desc::where('information_id', 1)
                ->orderBy('date','desc')
                ->get(),
            'recentposts' => Information_desc::where('information_id', 2)
                ->orderBy('date','desc')
                ->get(),

        ]);
    }
}
