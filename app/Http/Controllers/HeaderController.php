<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Header.index', [
            'headers' => Header::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Header.create');
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
           
        ]);


        $header= new Header();
        
        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $filename = $image->getClientOriginalName();
            $Path = public_path('/image/event');
            $image->move($Path, $filename);
            $header->logo = $filename;
            
        }
        if($request->hasFile('flag'))
        {
            $image=$request->file('flag');
            $filename = $image->getClientOriginalName();
            $Path = public_path('/image/event');
            $image->move($Path, $filename);
            $header->Flag = $filename;
            
        }
        if($request->hasFile('background'))
        {
            $image=$request->file('background');
            $filename = $image->getClientOriginalName();
            $Path = public_path('/image/event');
            $image->move($Path, $filename);
            $header->Background = $filename;
            
        }
        $header->Title_en = $request->input('title_en');
        $header->Title_np = $request->input('title_np');
        $header->Department_en = $request->input('department_en');
        $header->Department_np = $request->input('department_np');
        $header->Topic_en = $request->input('topic_en');
        $header->Topic_np = $request->input('topic_np');
        $header->slogan = $request->input('slogan');
        
        $header->save();
        return redirect('/header');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $header= Header::findOrFail($id);

        return view('Header.show',[
            'header'=>$header
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
        return view('Header.edit',[
            "header"=>Header::find($id),
        ]
        );
        
        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $filename = $image->getClientOriginalName();
            $Path = public_path('/image/event');
            $image->move($Path, $filename);
            $header->logo = $filename;
         
        }
        if($request->hasFile('flag'))
        {
            $image=$request->file('flag');
            $filename = $image->getClientOriginalName();
            $Path = public_path('/image/event');
            $image->move($Path, $filename);
            $header->flag = $filename;
         
        }
        if($request->hasFile('background'))
        {
            $image=$request->file('background');
            $filename = $image->getClientOriginalName();
            $Path = public_path('/image/event');
            $image->move($Path, $filename);
            $event->background = $filename;
         
        }
        
        $event->save();
        return redirect('/header');
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
        $header=  Header::find($id);
        $header->Title_en = $request->input('title_en');
        $header->Title_np = $request->input('title_np');
        $header->Department_en = $request->input('dept_en');
        $header->Department_np = $request->input('dept_np');
        $header->Topic_en = $request->input('topic_en');
        $header->Topic_np = $request->input('topic_np');
        $header->slogan = $request->input('slogan');
    
       
 
        
        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $filename = $image->getClientOriginalName();
            $Path = public_path('/image/event');
            $image->move($Path, $filename);
            $header->logo = $filename;
         
        }
        if($request->hasFile('flag'))
        {
            $image=$request->file('flag');
            $filename = $image->getClientOriginalName();
            $Path = public_path('/image/event');
            $image->move($Path, $filename);
            $header->flag = $filename;
         
        }
        if($request->hasFile('background'))
        {
            $image=$request->file('background');
            $filename = $image->getClientOriginalName();
            $Path = public_path('/image/event');
            $image->move($Path, $filename);
            $header->background = $filename;
         
        }
        
        $header->save();
        return redirect('/header');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $header= Header::find($id);
        $header->delete();
    

        return redirect('header');
    }
}
