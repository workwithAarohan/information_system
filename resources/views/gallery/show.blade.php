@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row" style="column-gap: 20px;">
            <div class="col-md-8 bg-white p-4 shadow h-100">
                <h4 class="mb-4">Photo Gallery</h4>
                <div class="row" style="column-gap: 10px;">
                    @foreach ($gallery->galleries as $value)
                        <div class="col-md-3 mb-3" style="width: 270px;">
                            <div class="card">
                                <img src="{{ asset('image/photoGallery/'. $value->file) }}" class="card-img-top" style="height: 280px; object-fit: cover; object-position: 50 % 50 % ;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $value->title_en }}</h5>
                                    @if ($value->is_active)
                                        <input type="checkbox" name="" id="" checked>
                                    @else
                                        <input type="checkbox" name="" id="">
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col bg-white shadow p-0" style="height: 500px;">
                <h4 class="bg-success p-2 w-100 text-white" style="text-align: center;">Add New Photo</h4>
                <div class="mt-3 p-4">
                    <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="title_en" class="form-label">Title_en</label>
                            <input type="text" class="form-control  @error('title_en') is-invalid @enderror" name="title_en">
                            @error('title_en')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="title_np" class="form-label">Title_np</label>
                            <input type="text" class="form-control @error('title_np') is-invalid @enderror" id="title_np" name="title_np">
                            @error('title_np')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="title_np" class="form-label">Photo</label>
                            <input type="file" class="form-control @error('file') is-invalid @enderror" name="file">
                            @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <input type="hidden" name="type_id" value="{{ $gallery->id }}">

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="is_active">
                            <label class="form-check-label @error('is_active') is-invalid @enderror" for="flexCheckDefault">
                              is_active
                            </label>
                            @error('is_active')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="submit" value="Add" class="btn btn-success form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/nepalify.js') }}"></script>
    <script>

        $(document).ready(function(){

            nepalify.interceptElementById("title_np");

        });
    </script>
@endsection
