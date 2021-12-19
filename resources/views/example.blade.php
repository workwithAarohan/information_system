<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="{{ asset('css/example.css') }}">
<style>

</style>
</head>
<body>

<h2>Automatic Slideshow</h2>
<p>Change image every 2 seconds:</p>

<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
            <img src="{{ asset('image/Emblem_of_Nepal_(2020).png') }}" style="width:100%">
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
            <img src="{{ asset('image/logo.png') }}" style="width:100%; height: 500px;">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="{{ asset('image/nepal-flag.gif') }}" style="width:100%">
    <div class="text">Caption Three</div>
    </div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
