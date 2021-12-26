<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Recent Posts</h1>
    <form method="POST" action="{{ route("recposts.store") }}" >
        @csrf 
        <label for="">Date: </label>
        <input type="date" name="date">

        <label for="">Title: </label>
        <input type="text" name="title">

        <label for="">Image: </label>
        <input type="text" name="photo">
        
        <label for="">Description: </label>
        <input type="text" name="description"><br><br>
      <input type="submit" value="Submit" />
    </form>
</body>
</html>