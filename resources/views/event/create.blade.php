<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('event.store') }}" method="post">
        @csrf
        <label for="image">image</label>
        <input type="text" name='image'>

        <label for="date">date</label> 
        <input type="date"name='date'>

        <label for="title" >titile</label>
        <input type="text"name='title'class="@error('title') is-invalid @enderror">
        @error('title')
            invalid
        @enderror

        <label for="desc">description</label>
        <input type="text" name='desc'>
       

        <input type="submit" value='submit'>
    </form>
</body>
</html>