<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information_desc;

class InformationdescController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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


        if($request->hasFile('file'))
        {
            $image=$request->file('file');
            $filename = $image->getClientOriginalName();
            $Path = public_path('/image/posts');
            $image->move($Path, $filename);
            // $request->image=$filename;
            $request->merge([
                'file' => $filename,
            ]);
        }


        $informationdesc = new Informationdesc();

        $informationdesc->date = $request->input('date');
        $informationdesc->title_en = $request->input('title_en');
        $informationdesc->title_np = $request->input('title_np');
        $informationdesc->description_en = $request->input('description_en');
        $informationdesc->description_np = $request->input('description_np');
        $informationdesc->information_id = $request->input('information_id');

       /*  $gallery = Gallery::create([
            'title_en' => $request->input('title_en'),
            'title_np' => $request->input('title_np'),
            'file' => $request->input('file'),
            'is_active' => $request->input('is_active'),
            'type_id' => $request->input('type_id'),
        ]); */
        
        
        $informationdesc->save();

        return redirect('/infodesc');
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
    }
}
