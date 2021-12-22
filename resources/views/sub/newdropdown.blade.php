<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/newdrop.css') }}">
<script src="{{ asset('js/newdrop.js') }}"></script>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#home" class="">Home</a>
  
  
  <div class="dropdown">
    <button class="dropbtn">About us 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Introduction</a>
      <a href="#">Aims and Scope</a>
      <a href="#">Message from DG</a>
      <a href="#">Organizations and Chart</a>
      <a href="#">Staffs</a>
    </div>
  </div> 
  <a href="#news">Acts and Regulation</a>
  <a href="#contact">Citizen charter</a>
  <a href="#contact">Publication</a>
  <a href="#contact">News and Notices</a>
  
  
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
  
  <a href="#contact">Downloads</a>
  
  
  <div class="dropdown">
    <button class="dropbtn"> Gallery
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 

  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</body>
</html>
