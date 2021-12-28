<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
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
        $request->validate([
            'title_en' => 'required',
            'title_np' => 'required',
            'file' => 'required',
        ]);

        if($request->has('is_active'))
        {
            $request->merge([
                'is_active' => 1,
            ]);
        }
        else
        {
            $request->merge([
                'is_active' => 0,
            ]);
        }


        if($request->hasFile('file'))
        {
            $image=$request->file('file');
            $filename = $image->getClientOriginalName();
            $Path = public_path('/image/photoGallery');
            $image->move($Path, $filename);
            // $request->image=$filename;
            $request->merge([
                'file' => $filename,
            ]);
        }

        $gallery = Gallery::create([
            'title_en' => $request->input('title_en'),
            'title_np' => $request->input('title_np'),
            'file' => $request->input('file'),
            'is_active' => $request->input('is_active'),
            'type_id' => $request->input('type_id'),
        ]);

        return redirect('/galleryType/'.$gallery->type_id);
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
    public function edit(Gallery $gallery)
    {
        return view('gallery_info.edit', [
            'gallery' => $gallery
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title_en' => 'required',
            'title_np' => 'required',
        ]);

        if($request->has('is_active'))
        {
            $request->merge([
                'is_active' => 1,
            ]);
        }
        else
        {
            $request->merge([
                'is_active' => 0,
            ]);
        }
        
        if($request->hasFile('file'))
        {
            $image=$request->file('file');
            $filename = $image->getClientOriginalName();
            $Path = public_path('/image/photoGallery');
            $image->move($Path, $filename);
            $gallery->file=$filename;
            // $request->merge([
            //     'file' => $filename,
            // ]);
        }

        $gallery->title_en = $request->input('title_en');
        $gallery->title_np = $request->input('title_np');
        $gallery->is_active = $request->input('is_active');

        $gallery->save();

        return redirect('/galleryType/'.$gallery->type_id);
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
