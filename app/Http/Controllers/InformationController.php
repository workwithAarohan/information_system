<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('information.index', [
            'informations' => Information::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('information.create');
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

            'code' => 'required|string|unique:information',

            

            'category' => 'required|string|max:255',


        ]);



        $information= new Information();
        $information->code = $request->input('code');
        $information->category = $request->input('category');
        $information->save();

        return redirect('/information');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $information=Information::find($id);

     /*    dd($information->descriptions); */

        $information->descriptions = $information->descriptions()->orderBy('date','desc')->get();
        
        return view('Information.show',[
            'information'=> $information,
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
        return view('information.edit',[
            "information"=>Information::find($id),
        ]);
        return redirect('/information');
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
        $information=  Information::find($id);
        $information->category = $request->input('category');
         $information->save();
         return redirect('/information');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $information= Information::find($id);
        $information->delete();
    

        return redirect('information');
    }
}
