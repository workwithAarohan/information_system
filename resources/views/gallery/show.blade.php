@extends('admin.nav')

@section('title')
    {{ $gallery->title_en }} Gallery
@endsection

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

    .option_item .option_inner .Button
    {
        position: absolute;
        top: 2px;
        right: 4px;
    }

    .option_item .option_inner .Button .FormButton
    {
        background: transparent;
        padding: 6px;
        border: none;
        color: #203AB1;
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

    .tab-button
    {
        border: none;
        background: transparent;
    }

    .tab-button.active:after
    {
        content: "";
        display: block;
        width: auto;
        padding-top: 0px;
        border-bottom: 2px solid black;
    }

    .tab-button.active
    {
        font-weight: bold;
    }
@endsection

@section('content')
    <div class="container">
        <div class="row mb-3 justify-content-center">
            <div class="col-md-9 bg-white shadow p-0 me-3" >
                <h4 class="bg-success p-2 w-100 text-white" style="text-align: center;">Add New Photo</h4>
                <div class="mt-3 p-4">
                    <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="d-flex" style="flex-wrap: wrap; gap: 20px;">
                            <div class="mb-3" style="height: 80px; width: 35%;">
                                <label for="title_en" class="form-label">Title_en</label>
                                <input type="text" class="form-control  @error('title_en') is-invalid @enderror" name="title_en">
                                @error('title_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3" style="height: 80px; width: 35%;">
                                <label for="title_np" class="form-label">Title_np</label>
                                <input type="text" class="form-control @error('title_np') is-invalid @enderror" id="title_np" name="title_np">
                                @error('title_np')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3" style="height: 80px; width: 55%">
                            @if ($gallery->code =='01')
                                <label for="photo" class="form-label">Photo</label>
                                <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" id="photo">
                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            @elseif (($gallery->code == '02'))
                                <label for="video" class="form-label">Video</label>
                                <input type="text" name="file" class="form-control" placeholder="Video-Link" id="#video">
                            @endif
                            {{-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="tab-button active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Photo</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="tab-button" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Video Link</button>
                                </li>
                              </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" id="photo">
                                    @error('file')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="tab-pane" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <input type="text" name="file" class="form-control" placeholder="Video-Link" id="#video">

                                </div>
                            </div> --}}

                        </div>

                        <input type="hidden" name="type_id" value="{{ $gallery->id }}">

                        <input type="hidden" name="code" id="code">

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
        <div class="row" style="column-gap: 20px;">
            <div class="col bg-white p-4 shadow" >
                <div class="d-flex justify-content-between align-items-baseline">
                    <h4 class="mb-4">{{ $gallery->title }} Gallery</h4>
                    <input type="submit" id="submitButton" class="btn btn-primary fw-bold" value="Save Changes">
                </div>

                <form action="" class="">
                    <div class="row justify-content-center">
                        @foreach ($gallery->galleries as $value)

                            <div class="col-md-3 mb-4 "  style="">
                                @if ($gallery->id == 1)
                                    @if ($value->is_active)
                                        <label for="gallery{{ $value->id }}" class="option_item">
                                            <input type="checkbox" name="" id="gallery{{ $value->id }}" class="checkbox" checked>
                                            <div class="option_inner">
                                                <div class="tickmark"></div>
                                                <div class="Button d-flex">
                                                    <a href="{{ route('gallery.edit', $value->id) }}" class="FormButton">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <form action="{{ route('gallery.destroy', $value->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="FormButton" type="submit">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="p-1">
                                                    <img src="{{ asset('image/photoGallery/'. $value->file) }}" class="card-img-top" style="height: 280px; object-fit: cover; padding: 0 0 0 0; ">
                                                    <div class="card-body d-flex justify-content-between">
                                                        <a href="{{ route('gallery.show', $value->id) }}" class="card-title" style="text-decoration: none; font-size: small; font-weight: bold;">
                                                            {{ $value->title_en }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    @else
                                        <label for="{{ $value->id }}" class="option_item">
                                            <input type="checkbox" name="" id="{{ $value->id }}" class="checkbox" >
                                            <div class="option_inner">
                                                <div class="tickmark"></div>
                                                <div class="Button d-flex">
                                                    <a href="{{ route('gallery.edit', $value->id) }}" class="FormButton">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <form action="{{ route('gallery.destroy', $value->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="FormButton" type="submit">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="p-1">
                                                    <img src="{{ asset('image/photoGallery/'. $value->file) }}" class="card-img-top" style="height: 280px; object-fit: cover; padding: 0 0 0 0; ">
                                                    <div class="card-body d-flex justify-content-between">
                                                        <a href="{{ route('gallery.show', $value->id) }}" class="card-title" style="text-decoration: none; font-size: small; font-weight: bold;">
                                                            {{ $value->title_en }}
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    @endif
                                @elseif ($gallery->id == 2)
                                <label for="gallery{{ $value->id }}" class="option_item">
                                    <input type="checkbox" name="" id="gallery{{ $value->id }}" class="checkbox" checked>
                                    <div class="option_inner">
                                        <div class="tickmark"></div>
                                        <div class="Button d-flex">
                                            <a href="{{ route('gallery.edit', $value->id) }}" class="FormButton">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <form action="{{ route('gallery.destroy', $value->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="FormButton" type="submit">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="p-1">
                                            <iframe  height="280" class="w-100" src="{{ $value->file }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <div class="card-body d-flex justify-content-between">
                                                <a href="{{ route('gallery.show', $value->id) }}" class="card-title" style="text-decoration: none; font-size: small; font-weight: bold;">
                                                    {{ $value->title_en }}
                                                </a>
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

        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/nepalify.js') }}"></script>
    @section('script')
        $(document).ready(function(){
            nepalify.interceptElementById("title_np");
        });
    @endsection
@endsection
