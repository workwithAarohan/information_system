<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
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
</body>
</html>