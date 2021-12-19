<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>






    <link href="{{ asset('/css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/app.js')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script src="{{asset('js/app.js')}}"></script>


    <link rel="stylesheet" href="{{ asset('css/example.css') }}">

  </head>
<body >

<div class="topbar">
  <div class="row">
    <div class="col-md-6">

  <div class="d-flex" >
      <span>
      <i class="far fa-calendar"></i>
        17 Dec 2021, Fri
      </span>
      <span>
      <i class="fas fa-envelope-square"></i>
      info@pis.gov.np
      </span>
      <span>
      <i class="far fa-clock"></i>
      12:07 PM</span>
      <span>
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



    <div class="container mt-5" >

    <style>
        @yield('style');
    </style>
</head>
<body >

    <div class="container mb-5" >

        <div class="row">
            <div class="col-md-2">

      <img src="{{ asset('/image/logo.png')}}" alt="logo" style="width:6em; height:6em;">
</div>





            <div class="col-md-3">


                  <p style="text-transform: uppercase;">Government of Nepal</p>
      <p>Ministry of Federal Affairs and General Administration</p>  <h5>Rastriya Kitabkhana (Nijamati)

</h5>



</div>

<div class="col-md-5" >
       <p>"निजामती सेवा दिवस २०७८-८२ को नारा : "व्यावसायिक र सिर्जनशील प्रशासन : विकास, समृद्धि र सुशासन"</p>

</div>

<div class="col-md-2">
<img src="{{ asset('/image/nepal-flag.gif')}}" alt="logo" style="width:7em; height:6em;">

</div>






      </div>

      </div>



    </div>


    <div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">About Us</a>
  <a href="#news">Acts and Regulation</a>




  
  
  <a href="#Citizen">Citizen Chatrter</a> 

  <div class="dropdown">
    <button class="dropbtn">Information
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
  <a href="#Citizen">Citizen Chatrter</a>

  <a href="#publication">Publication</a>
  <a href="#news">News and Notices</a>
  <a href="#download">Downloads</a>
  <a href="#gallery">Gallery</a>
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
        @yield('content');

    </div>
    <div class="footer">
    @include('layouts.footer')

    </div>

    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
