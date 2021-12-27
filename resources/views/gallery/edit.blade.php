@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row bg-white p-4">
            <h5>Update Gallery</h5>
            <form action="{{ route('galleryType.update', $gallery->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title: </label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ $gallery->title }}">

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <input type="submit" value="Update" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
