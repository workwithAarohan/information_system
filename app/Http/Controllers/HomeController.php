<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Recentpost;
use Illuminate\Http\Request;
use App\Models\Information_desc;
use App\Models\Information;

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
        $eventExistence = Information::where('code', '01');
        $postExistence = Information::where('code', '02');
        $newsExistence = Information::where('code', '03');

        $events = $eventExistence->exists() ?
            Information_desc::where(
                'information_id', $eventExistence->pluck('id'))
                ->orderBy('date', 'desc')
                ->get()
                : [];

        $posts = $postExistence->exists() ?
            Information_desc::where(
                'information_id', $postExistence->pluck('id'))
                ->orderBy('date', 'desc')
                ->get()
                : [];

        $news = $newsExistence->exists() ?
            Information_desc::where(
                'information_id', $newsExistence->pluck('id'))
                ->orderBy('date', 'desc')
                ->get()
                : [];


        return view('main.home', [
            'photos' => Gallery::where('is_active',1)->get(),
            'events' => $events,
            'recentposts' => $posts,
            'news' => $news

            // 'events' => Information_desc::where(
            //     'information_id', Information::where(
            //         'code', '01')
            //         ->pluck('id')
            //     )->orderBy('date','desc')
            //     ->get(),


            // 'recentposts' => Information_desc::where(
            //     'information_id', Information::where(
            //         'code', '02')
            //         ->pluck('id')
            //     ) ->orderBy('date','desc')
            //     ->get(),

            // 'news' => Information_desc::where(
            //     'information_id', Information::where(
            //         'code', '03')
            //         ->pluck('id')
            //     ) ->orderBy('date','desc')
            //     ->get(),


        ]);
    }
}
