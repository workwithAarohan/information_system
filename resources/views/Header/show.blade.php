@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row" >
      <div class="col-md-4">
        <img src={{ asset('image/information/bookpic.jpg') }} alt="logo" style="height:100px; width:150px; margin:10px;">
      </div>
    
      <div class="col-md-4">
        <p>{{ $header->Title_en }}</p>
      </div>
    </div>
  </div>
@endsection