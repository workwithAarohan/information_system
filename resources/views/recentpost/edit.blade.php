<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recentposts</title>
</head>
<body>
    <form action="{{ route('recposts.update', $recentpost->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="date">Date: </label>
        <input type="date" name='date' value="{{ $recentpost->date }}"> <br> <br>
        <label for="title">Title: </label>
        <input type="text" name='title' value="{{ $recentpost->title }}"> <br> <br>
        <label for="photo">Photo: </label>
        <input type="text" name='photo' value="{{ $recentpost->photo }}"> <br> <br>
        <label for="description">description: </label>
        <input type="text" name='description' value="{{ $recentpost->description }}"> <br> <br>
        
        <button type="Submit">Edit</button>
    </form>
</body>
</html>