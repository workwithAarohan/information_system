


@extends('layouts.header')
    
@section('content')

    <div class="button p-5">
        
        <button id="hide" style="border: 1px solid; padding: 10px; border-radius: 50%;">&times;</button>
        </div>

<div class="img" id="img">
    <div class="row">
        <p class="para"><b>Online PIS Login Procedure</b></p> 
    </div>

<img src="{{ asset('/image/pislogin.png') }}" alt="pis" style="  ">
</div>




 
<script>
    $(document).ready(function(){
      $("#hide").click(function(){
        $(".img").hide();
        $('#hide').hide();
      });
      $("#show").click(function(){
        $(".img").show();
      });
    });
    </script>
    @endsection