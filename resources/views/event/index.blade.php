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
        <th> Id </th>
        <th> Title </th>
        <th> Date </th>
        <th> Action </th>
    </tr>

    @foreach ($events as $event)
       <tr>
        <td>{{ $event->id }} </td>
        <td>{{ $event->title_en }} </td> 
        <td> {{ $event->date }} </td>
     

       <td style="display: flex; align: center;">
       <a href="{{ route('event.edit', $event->id)}}"> <button class="button button2">Edit </button></a>  
       &emsp;
       <a href="{{ route('event.show' ,$event->id)  }}"><button class="button button3">show</button></a>   

       &emsp;
    <form action="{{ route('event.destroy',$event->id) }}"method="post">
    @csrf
    @method('delete')
    <button  class="button button4" type="submit" >delete</button>


</form>
</tr>
    @endforeach
    </table>

    <br><br><a href="{{ route('event.create') }}"> <button class="button button1">create new event</button></a>
</body>
</html>