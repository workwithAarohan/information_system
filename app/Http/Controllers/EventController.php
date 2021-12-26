<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('event.index', [
            'events' => Event::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
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
            'title_np' => 'required',
            'desc_np' => 'required',
            'image'=>'required',
            'date'=>'required',
        ]);
        $event= new Event();
        $event->title_en = $request->input('title_en');
        $event->title_np = $request->input('title_np');
        
        $event->date = $request->input('date');
        $event->description_np = $request->input('desc_np');
        $event->description_en = $request->input('desc_en');
      

       

        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $filename = $image->getClientOriginalName();
            $Path = public_path('/image/event');
            $image->move($Path, $filename);
            $event->image = $filename;
         
        }
        
        $event->save();
        return redirect('/event');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event= Event::find($id);

        return view('event.show',[
            'event'=>$event
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
        return view('event.edit',[
            "event"=>Event::find($id),
        ]
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
        $request->validate([
            'title_np' => 'required',
            'desc_np' => 'required',
            'image'=>'required',
            'date'=>'required',
        ]);
       $event=  Event::find($id);
       $event->title_en = $request->input('title_en');
       $event->title_np = $request->input('title_np');
       $event->image = $request->input('image');
       $event->date = $request->input('date');
       $event->description_np = $request->input('desc_np');
       $event->description_en= $request->input('desc_en');
       $event->save();

       return redirect('/event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event= Event::find($id);
        $event->delete();
    

        return redirect('event');
    }

}
