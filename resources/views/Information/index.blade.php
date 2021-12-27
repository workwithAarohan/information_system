<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th 
        {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        </style>
</head>
<body>
   
        <a href="{{ route('information.create') }}">Create</a>

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
        <a href="{{ route('information.show' ,$information->id)  }}"><button class="button button3">show</button></a>   
 
        &emsp;
     <form action="{{ route('information.destroy',$information->id) }}"method="post">
     @csrf
     @method('delete')
     <button  class="button button4" type="submit" >delete</button>
 
 
 </form>
     
    
</tr>
@endforeach
  </table>
</body>
</html>