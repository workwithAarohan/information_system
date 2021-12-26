<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table, th, td {
          border: 1px solid black;
        }
        </style>
</head>
<body>


<table style=" width: 50%;">
    <tr>
        <th>Title</th>
        <th>date</th>
        <th>image</th>
        <th>description</th>
    </tr>
    <tr>
        <td>{{ $event->title_en }} </td>
        <td>{{ $event->date }} </td> 
        <td> {{ $event->image }} </td>
        <td> {{ $event->description_en}} </td>

</body>
</html>