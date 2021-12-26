@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($photos as $photo)
                <div class="col-md-3">
                    <div class="card" style="width:18rem;">
                      <img src="image/photogallery/{{ $photo->photo }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">{{ $photo->english_title }}</h5>
                      </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
