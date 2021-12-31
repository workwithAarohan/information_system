@extends('admin.dashboard')

@section('content')
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin: 10px;
        }
       

        td, th 
        {
            border: 5px solid #dddddd;
            text-align: left;
            padding: 20px;
        }
        .button3
        {
            background-color: red;
            padding: 10px;
        }
        .button2
        {
            background-color: yellow; 
            padding: 10px;
        }
        .button4
        {
            background-color:blue; 
            padding: 10px;
        }
        .button:hover{
          background-color: violet;
          
        }
        </style>

   
        

  <table style=" width: 50%;">
    <tr>
        <th> Id </th>
        <th> category </th>
        <th> Action </th>
       
    </tr>
    @foreach ($informations as $information)
      <tr>
    <td>{{ $information->id }}</td>
    <td>{{ $information->category }}</td>

    <td style="display: flex; align: center;">
        <a href="{{ route('information.edit', $information->id)}}"> <button class="button button2">Edit </button></a>  
        &emsp;
        <a href="{{ route('information.show' ,$information->id)  }}"><button class="button button3">Show</button></a>   
 
        &emsp;
     <form action="{{ route('information.destroy',$information->id) }}"method="post">
     @csrf
     @method('delete')
     <button  class="button button4" type="submit" >Delete</button>
 
 
 </form>
     
    
</tr>
@endforeach
  </table>

  <a href="{{ route('information.create') }}"><button style="padding: 10px">Create new category</button></a>

@endsection