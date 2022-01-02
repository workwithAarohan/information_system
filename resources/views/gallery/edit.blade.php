@extends('admin.nav')

@section('title')
    Edit {{ $gallery->title }}
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 bg-white shadow p-0" style="height: 350px;">
                <h4 class="bg-success p-2 w-100 text-white" style="text-align: center;">
                    Edit {{ $gallery->title }}
                </h4>
                <div class="mt-3 p-4">
                    <form action="{{ route('galleryType.update', $gallery->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3" style="height: 80px;">
                            <label for="code" class="form-label">Code: </label>
                            <input type="text" name="code" id="code" class="form-control @error('code') is-invalid @enderror" value="{{ $gallery->code }}">

                            @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3" style="height: 80px;">
                            <label for="title" class="form-label">Title: </label>
                            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ $gallery->title }}">

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <input type="submit" value="Update" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
