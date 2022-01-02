@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row " style=" background-image: url('{{ asset('image/event/'.$header->Background) }}');">
            <div class="col-md-2">
                <img src={{ asset('image/event/'.$header->logo) }} alt="logo" style="height:100px; width:150px; margin:10px;">
            </div>
    
            <div class="col-md-4" >
                <p>{{ $header->Title_np }}</p>
                <h5><b><p style="color:red">{{ $header->Department_np }}</p></b></h5>
               <h4><b> <p>{{ $header->Topic_np }}</p></b></h4>
            </div>
            <div class="col-md-4 ">
                <h5 class="text-center mt-3">{{ $header->slogan }}</h5>
            </div>
            <div class="col-md-2">
               <img src="{{ asset('image/event/' .$header->Flag) }}" alt="aa" srcset="" style="height: 100px;margin:10px;">
            </div>
        </div>
     </div>
@endsection