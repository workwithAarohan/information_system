<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recentpost;

class RecentpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('recentpost.index', [
            'recentposts' => Recentpost::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('recentpost.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $request->validate([

            'date' => 'required|string|max:255',

            'photo' => 'required',
            
            'title' => 'required|string|max:255',


            'description' => 'required|string|max:255',


        ]);

        $recentpost = new Recentpost();

        $recentpost->date = $request->input('date');
        $recentpost->photo = $request->input('photo');
        $recentpost->title = $request->input('title');
        $recentpost->description = $request->input('description');
        $recentpost->save();

        return redirect('/recposts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $recentpost = Recentpost::find($id);
        return view('recentpost.show', [
            'recentpost' => $recentpost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $recentpost = Recentpost::find($id);

        return view('/recentpost/edit', compact("recentpost")
    );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([

                'date' => 'required|string|max:255',
    
                'photo' => 'required',
                
                'title' => 'required|string|max:255',
        
                'description' => 'required|string|max:255',
    
    
        ]);

        
        $recentpost = Recentpost::find($id);
        
        $recentpost->date = $request->input('date');
        $recentpost->photo = $request->input('photo');
        $recentpost->title = $request->input('title');
        $recentpost->description = $request->input('description');
        $recentpost->save();

        return redirect('/recposts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $recentpost = Recentpost::find($id);

        $recentpost->delete();

        return redirect('/recposts');
    }
}
