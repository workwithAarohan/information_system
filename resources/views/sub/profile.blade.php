<!DOCTYPE html>
<html>
<head>
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center"></h2>
<div class="row">
    <div class="col-md-3">

   

<div class="card">
  <img src="{{ asset('image/logo.png') }}" alt="John" style="width:100%">
  <h1>Suman Chapagain</h1>
  <p class="title">Employee code: 100000</p>
  <p class="title">position: Gazzette first</p>
 <p class="title">post:Director General</p>
 <p class="title">Phone no: 9813456789</p>
 <p class="title">Email: sumanchapagin12@gmail.com </p>
</div>
</div>
<div class="col-md-3">
<div class="card">
    <img src="{{ asset('image/logo.png') }}" alt="John" style="width:100%">
    <h1>Suman Chapagain</h1>
    <p class="title">Employee code: 100000</p>
    <p class="title">position: Gazzette first</p>
   <p class="title">post:Director General</p>
   <p class="title">Phone no: 9813456789</p>
   <p class="title">Email: sumanchapagin12@gmail.com </p>
  </div>
</div>

<div class="col-md-3">
    <div class="card">
        <img src="{{ asset('image/logo.png') }}" alt="John" style="width:100%">
        <h1>Suman Chapagain</h1>
        <p class="title">Employee code: 100000</p>
        <p class="title">position: Gazzette first</p>
       <p class="title">post:Director General</p>
       <p class="title">Phone no: 9813456789</p>
       <p class="title">Email: sumanchapagin12@gmail.com </p>
      </div>
    </div>
</div>

</body>
</html>
