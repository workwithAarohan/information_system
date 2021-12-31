
@extends('admin.dashboard')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <div class="row mt-5" style="justify-content: center;">
        <div class="col-md-5 border p-4">
    <form action="{{ route('information.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Code: </label>
            <input type="text" class="form-control" id="code" name="code">
          </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category: </label>
          <input type="text" class="form-control" id="category" name="category">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
        </div>
    </div>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
    @endsection