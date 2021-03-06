<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryType;
use Illuminate\Http\Request;

class GalleryTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gallery.index', [
            'galleries' => GalleryType::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:gallery_types',
            'title' => 'required',
        ]);

        // $gallery = new GalleryType();   // Create Object
        // $gallery->title = $request->input('title');
        // $gallery->save();  //Insert

        GalleryType::create($request->all());

        return redirect('/galleryType');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryType $galleryType)
    {
        return view('gallery.show', [
            'gallery' => $galleryType
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(GalleryType $galleryType)
    {
        return view('gallery.edit', [
            'gallery' => $galleryType,        // Select * from gallery_types where id = $id;
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GalleryType $galleryType)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $galleryType->update($request->all());

        // GalleryType::create($request->all());

        return redirect('/galleryType');    //redirects to index page
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryType $galleryType)
    {
        $galleryType->delete();

        return redirect('galleryType');
    }
}
