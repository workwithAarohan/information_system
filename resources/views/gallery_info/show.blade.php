@extends('layouts.app')

@section('title')
    {{ $gallery->title_en }}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 bg-white p-3 shadow" style="height: 400px;">
                <div class="">
                  <img src="{{ asset('image/photoGallery/'.$gallery->file) }}" class="card-img-top" style="height: 280px; object-fit: cover; ">
                  <div class="card-body d-flex justify-content-between">
                      <div class="title">
                          <h5 class="card-title">{{ $gallery->title_en }}</h5>
                          <h6 class="card-title">{{ $gallery->title_np }}</h6>
                      </div>
                    <p class="card-text">{{ $gallery->created_at }}</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
