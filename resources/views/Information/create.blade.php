<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="row mt-5" style="justify-content: center;">
        <div class="col-md-5 border p-4">
    <form action="{{ route('information.store') }}" method="post">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">category</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="category">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
        </div>
    </div>