<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
        .button1
        {
            background-color: #4CAF50; 
        }
        .button3
        {
            background-color: red; 
        }
        .button2
        {
            background-color: yellow; 
        }
        .button4
        {
            background-color:blue; 
        }
    </style>
    
</head>

<body>
    
    <table style=" width: 50%;">
    <tr>
        <th>id</th>
        <th>Image</th>
        <th>Title_en</th>
        <th>Title_np</th>
        <th>Department_en</th>
        <th>Department_np</th>
        <th>Topic_en</th>
        <th>Topic_np</th>
        <th>Slogan</th>
        <th>Flag</th>
        <th>Background</th>
    </tr>

    @foreach ($headers as $header)
       <tr>
        <td>{{ $header->id }} </td>
        <td>{{ $header->logo }} </td>
        <td>{{ $header->Title_en}} </td> 
        <td>{{ $header->Title_np }} </td>
        <td> {{ $header->Department_en }} </td>
        <td>{{ $header->Department_np }} </td>
        <td> {{ $header->Topic_en}} </td>
        <td>{{ $header->Title_np }} </td>
        <td>{{ $header->slogan }}</td>
        <td>{{ $header->Flag }}</td>
        <td>{{ $header->Background }}</td>
     

       <td style="display: flex; align: center;">
       <a href="{{ route('header.edit', $header->id)}}"> <button class="button button2">Edit </button></a>  
       &emsp;
       <a href="{{ route('header.show' ,$header->id)  }}"><button class="button button3">show</button></a>   

       &emsp;
    <form action="{{ route('header.destroy',$header->id) }}"method="post">
    @csrf
    @method('delete')
    <button  class="button button4" type="submit" >delete</button>


</form>
</tr>
    @endforeach
    </table>

    <br><br><a href="{{ route('header.create') }}"> <button class="button button1">create</button></a>
</body>
</html>