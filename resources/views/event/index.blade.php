<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach ($events as $event)
       <tr>
        <th>{{ $event->id }} </th>
        <th>{{ $event->title }} </th> 
        <th> {{ $event->date }} </th>
       </tr>


        
    <form action="{{ route('event.destroy',$event->id) }}"method="post">
    @csrf
    @method('delete')
    <button type="submit">delete</button>


</form>

<a href="{{ route('event.show' ,$event->id)  }}">show</a>
    @endforeach
   <a href="{{ route('event.create') }}">create</a>

  
</body>
</html>