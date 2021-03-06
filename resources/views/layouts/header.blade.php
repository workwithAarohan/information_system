<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">

    <link href="{{ asset('/css/app.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/header.css">

    <link rel="stylesheet" type="text/css" href="/css/acts.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <script src="{{asset('js/app.js')}}"></script>


    <link rel="stylesheet" href="{{ asset('css/example.css') }}">

    <link rel="stylesheet" href="{{ asset('css/drop.css') }}">


    <script src="{{asset('js/header.js')}}"></script>

    <script src="{{asset('js/datetime.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
      @yield('style');
      </style>
      
</head>
<body >

<div class="topbar">
  <div class="row">
    <div class="col-md-6">

    <div class="d-flex" >

      <h4 class="far fa-calendar" style="font-size: 15px" id="displayDate"></h4>
      <h4 class="far fa-clock" style="font-size: 15px" id="time_span"></h4>
      <span>
      <i class="fas fa-envelope-square"></i>
      info@pis.gov.np
      </span>

      <i class="fas fa-phone-alt"></i>
      01-5010138,01-5428975</span>
    </div>

    </div>


<div class="col-md-6">
<div class="d-flex search">

<div class="input-group">
  <div class="form-outline">
    <input id="search-input" type="search" id="form1" class="form-control"  placeholder="search"/>
    <label class="form-label" for="form1"></label>
  </div>
  <button id="search-button" type="button" class="btn btn-primary">
  <i class="fas fa-search"></i>
  </button>
</div>

</div>

</div>



   </div>
</div>



    <div class="container-fluid mt-2" >

      @foreach ($headers as $header)
         
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






    @endforeach
      </div>



    <div class="nav" id="navbar">
<ul class="nav head">
  <li class="bg-white">
    <a href="#">
    <i class="fas fa-home fa-2x"></i>

    </a>
  </li>
  <li class="button-dropdown">
     <a href="javascript:void(0)" class="dropdown-toggle">
      About Us<span>???</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="#">
          Introduction
        </a>
      </li>
      <li>
        <a href="#">
          Aims and Goals
        </a>
      </li>
      <li>
        <a href="#">
          Staffs
        </a>
      </li>
    </ul>
  </li>
  <li>
    <a href="{{ route('acts') }}">
      Rules and Regulation
    </a>
  </li>
  <li class="button-dropdown">
    <a href="javascript:void(0)" class="dropdown-toggle">
      Citizen charter <span>???</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="#">
          asdf
        </a>
      </li>
    </ul>
  </li>


  <li>
    <a href="#">
      Publication
    </a>
  </li>



  <li>
    <a href="#">
      News and Notices
    </a>
  </li>







  <li class="button-dropdown">
     <a href="javascript:void(0)" class="dropdown-toggle">
      Information <span>???</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="#">
          General Information
        </a>
      </li>
      <li>
        <a href="#">
          Faqs
        </a>
      </li>
      <li>
        <a href="#">
          General Information
        </a>
      </li>
    </ul>
  </li>




  <li class="button-dropdown">
     <a href="javascript:void(0)" class="dropdown-toggle">
      Gallery<span>???</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="#">
          Photo Gallery
        </a>
      </li>
      <li>
        <a href="#">
          Video Gallery
        </a>
      </li>
      <li>
        <a href="#">
          Audio Gallery
        </a>
      </li>
    </ul>
  </li>
</ul>


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>


</div>
</div>




<div class="row">
<div class="col-md-1 ">

<i class="fas fa-bell fa-2x "></i>
</div>


<div class="col-md-9">
<marquee vspace="2%" hspace="5%" behavior="" direction="left">
<span ><b>Pis update campaign &nbsp;&nbsp;&nbsp; |Pis update campaign 8 &nbsp;&nbsp;&nbsp;|Pis update campaign 7 &nbsp;&nbsp;&nbsp;|Pis update campaign 6 &nbsp;&nbsp;&nbsp;|Pis update 5 </b> </span>
</marquee>
</div>





</div>



    <div class="main">
        @yield('content')

    </div>

</div>

<div class="footer">
    @include('layouts.footer')

</div>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/autoscroll.js') }}"></script>

    <script type="text/javascript">
      var today = new Date();
      var day = today.getDay();
      var daylist = ["Sun","Mon","Tue","Wed ","Thur","Fri","Sat"];
      var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
      var dateDay = date+','+daylist[day];


      document.getElementById("displayDate").innerHTML = dateDay;

        timer();

        function timer(){
        var currentTime = new Date()
        var hours = currentTime.getHours()
        var minutes = currentTime.getMinutes()
        var sec = currentTime.getSeconds()
        if (minutes < 10){
            minutes = "0" + minutes
        }
        if (sec < 10){
            sec = "0" + sec
        }
        var t_str = hours + ":" + minutes + ":" + sec + " ";
        if(hours > 11){
            t_str += "PM";
        } else {
        t_str += "AM";
        }
        document.getElementById('time_span').innerHTML = t_str;
        setTimeout(timer,1000);
        }

      </script>

</body>
</html>
