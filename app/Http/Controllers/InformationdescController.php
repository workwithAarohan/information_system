<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information_desc;
use App\Models\Information;

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
    public function create($id)
    {
        //
        return view('Information_desc.create', [
            'information' => Information::find($id)
        ]);

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

            'file' => 'required',
            
            'title_en' => 'required|string|max:255',

            'title_np' => 'required|string|max:255',

            'desc_en' => 'required|string|max:255',

            'desc_np' => 'required|string|max:255',


        ]);


        if($request->hasFile('file'))
        {
            $image=$request->file('file');
            $filename = $image->getClientOriginalName();
            $Path = public_path('/image/information');
            $image->move($Path, $filename);
            // $request->image=$filename;
            $request->merge([
                'file' => $filename,
            ]);
        }


        $informationdesc = new Information_desc();

        $informationdesc->date = $request->input('date');
        $informationdesc->title_en = $request->input('title_en');
        $informationdesc->title_np = $request->input('title_np');
        $informationdesc->desc_en = $request->input('desc_en');
        $informationdesc->desc_np = $request->input('desc_np');
        $informationdesc->file = $request->input('file');
        $informationdesc->information_id = $request->input('information_id');

       /*  $gallery = Gallery::create([
            'title_en' => $request->input('title_en'),
            'title_np' => $request->input('title_np'),
            'file' => $request->input('file'),
            'is_active' => $request->input('is_active'),
            'type_id' => $request->input('type_id'),
        ]); */
        
        
        $informationdesc->save();

        return redirect('/information/'.$informationdesc->information_id);
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
        $informationdesc=Information_desc::findOrFail($id);

        /*    dd($information->descriptions); */
   
        //    dd($informationdesc->info->category);
        
           return view('Information_desc.show',[
               'informationdesc'=> $informationdesc,
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
        $informationdesc = Information_desc::find($id);

        return view('information_desc.edit', compact("informationdesc")
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
            
            'title_en' => 'required|string|max:255',

            'title_np' => 'required|string|max:255',

            'desc_en' => 'required|string|max:255',

            'desc_np' => 'required|string|max:255',


    ]);

    $informationdesc = Information_desc::find($id);

    
    if($request->hasFile('file'))
    {
        $image=$request->file('file');
        $filename = $image->getClientOriginalName();
        $Path = public_path('/image/posts');
        $image->move($Path, $filename);
        $informationdesc->file  = $filename;

       /*  dd($informationdesc->photo); */
        
    }

    
    $informationdesc->date = $request->input('date');
    $informationdesc->title_en = $request->input('title_en');
    $informationdesc->title_np = $request->input('title_np');
    $informationdesc->desc_en = $request->input('desc_en');
    $informationdesc->desc_np = $request->input('desc_np');
    
    $informationdesc->information_id = $request->input('information_id');
   
   
    $informationdesc->save();


    return redirect('/information/'.$informationdesc->information_id);
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
        $informationdesc = Information_desc::find($id);

        $informationdesc->delete();

        return redirect()->back();
    }
}
