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
            
            'title_en' => 'required|string|max:255',

            'title_np' => 'required|string|max:255',

            'description_en' => 'required|string|max:255',

            'description_np' => 'required|string|max:255',


        ]);

        $recentpost = new Recentpost();

        $recentpost->date = $request->input('date');
        $recentpost->photo = $request->input('photo');
        $recentpost->title_en = $request->input('title_en');
        $recentpost->title_np = $request->input('title_np');
        $recentpost->description_en = $request->input('description_en');
        $recentpost->description_np = $request->input('description_np');
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
                
                'title_en' => 'required|string|max:255',

                'title_np' => 'required|string|max:255',
    
                'description_en' => 'required|string|max:255',
    
                'description_np' => 'required|string|max:255',
    
    
        ]);

        
        $recentpost = Recentpost::find($id);
        
        $recentpost->date = $request->input('date');
        $recentpost->photo = $request->input('photo');
        $recentpost->title_en = $request->input('title_en');
        $recentpost->title_np = $request->input('title_np');
        $recentpost->description_en = $request->input('description_en');
        $recentpost->description_np = $request->input('description_np');
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
