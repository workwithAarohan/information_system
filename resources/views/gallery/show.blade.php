@extends('layouts.app')

@section('style')


    .box-wrapper
    {
        width: 780px;
        margin: 100px auto 0;

    }

    .box-wrapper .box-title
    {
        font-size: 24px;
        color: #fff;
        font-weight: 700;
        text-align: center;
        margin-bottom: 50px;
    }

    .box-container
    {
        display: flex;
        flex-wrap: wrap;
    }

    .box-container .option_item
    {
        display: block;
        position: relative;
        width: 175px;
        height: 175px;
        margin: 10px;
    }

    .option_item .option_inner
    {
        cursor: pointer;
        display: block;
        border: 5px solid transparent;
        position: relative;
    }

    .option_item .checkbox
    {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 1;
        opacity: 0;
    }


    .option_item .checkbox:checked ~ .option_inner
    {
        border-color: #129b46;
    }

    .option_item .checkbox:checked ~ .option_inner .tickmark
    {
        position: absolute;
        top: -1px;
        left: -1px;
        border: 20px solid;
        border-color: #129b46 transparent transparent #129b46;
    }

    .option_item .checkbox:checked ~ .option_inner .tickmark:before
    {
        content: "";
        position: absolute;
        top: -10px;
        left: -15px;
        width: 15px;
        height: 5px;
        border: 3px solid;
        border-color: transparent transparent #fff #fff;
        transform: rotate(-45deg);
    }
@endsection

@section('content')
    <div class="container">
        <div class="row" style="column-gap: 20px;">
            <div class="col-md-8 bg-white p-4 shadow" >
                <div class="d-flex justify-content-between align-items-baseline">
                    <h4 class="mb-4">{{ $gallery->title }} Gallery</h4>
                    <input type="submit" id="submitButton" class="btn btn-primary fw-bold d-none" value="Save Changes">
                </div>

                <form action="" class="">
                    <div class="row justify-content-center">
                        @foreach ($gallery->galleries as $value)

                            <div class="col-md-3 mb-4 "  style="width: 270px;">
                                @if ($value->is_active)
                                    <label for="gallery{{ $value->id }}" class="option_item">
                                        <input type="checkbox" name="" id="gallery{{ $value->id }}" class="checkbox facebook" checked>
                                        <div class="option_inner">
                                            <div class="tickmark"></div>
                                            <div class="p-1">
                                                <img src="{{ asset('image/photoGallery/'. $value->file) }}" class="card-img-top" style="height: 280px; object-fit: cover; padding: 0 0 0 0; ">
                                                <div class="card-body d-flex justify-content-between">
                                                    <h5 class="card-title">{{ $value->title_en }}</h5>
                                                    <p>
                                                        <a href="{{ route('gallery.edit', $value->id) }}" class="btn btn-secondary">Edit</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                @else
                                    <label for="{{ $value->id }}" class="option_item">
                                        <input type="checkbox" name="" id="{{ $value->id }}" class="checkbox" >
                                        <div class="option_inner">
                                            <div class="tickmark"></div>
                                            <div class="p-1">
                                                <img src="{{ asset('image/photoGallery/'. $value->file) }}" class="card-img-top" style="height: 280px; object-fit: cover; padding: 0 0 0 0; ">
                                                <div class="card-body d-flex justify-content-between">
                                                    <h5 class="card-title">{{ $value->title_en }}</h5>
                                                    <p>
                                                        <a href="{{ route('gallery.edit', $value->id) }}" class="btn btn-secondary">Edit</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </form>
            </div>
            <div class="col bg-white shadow p-0" style="height: 480px;">
                <h4 class="bg-success p-2 w-100 text-white" style="text-align: center;">Add New Photo</h4>
                <div class="mt-3 p-4">
                    <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3" style="height: 80px;">
                            <label for="title_en" class="form-label">Title_en</label>
                            <input type="text" class="form-control  @error('title_en') is-invalid @enderror" name="title_en">
                            @error('title_en')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3" style="height: 80px;">
                            <label for="title_np" class="form-label">Title_np</label>
                            <input type="text" class="form-control @error('title_np') is-invalid @enderror" id="title_np" name="title_np">
                            @error('title_np')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3" style="height: 80px;">
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
            $('#gallery7').click(function() {
               $('#submitButton').show();
            });

            nepalify.interceptElementById("title_np");

        });
    </script>
@endsection
