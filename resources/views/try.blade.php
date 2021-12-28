<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body style="background-color: black">
  <div class="container" style="margin:100px;">
    <div class="row" style="column-gap: 20px;justify-content:center;background-color:aqua;padding:20px;">
      <div class="col-md-5" style="background: white; margin-bottom:20px; padding:15px;width:600px">
        <div class="d-flex">
          <img src="{{ asset('image/img1.png') }}" alt="img" style="width:150px;height:150px;margin-right:20px;">
         <div class="para">
          <h4>date</h4>
          <p>sujan</p>
        </div>
        </div>
      </div>
      <div class="col-md-5"style="background: white; margin-bottom:20px; padding:15px; width:600px">
        <div class="d-flex">
          <img src="{{ asset('image/img1.png') }}" alt="img" style="width:150px;height:150px;margin-right:20px;">
          <h4>date</h4>
        </div>
      </div>
      <div class="col-md-5"style="background: white;margin-bottom:20px; padding:15px;width:600px">
        <div class="d-flex">
          <img src="{{ asset('image/img1.png') }}" alt="img" style="width:150px;height:150px;margin-right:20px;">
          <h4>date</h4>
        
        </div>
      </div>
      <div class="col-md-5"style="background: white; margin-bottom:20px; padding:15px;width:600px">
        <div class="d-flex">
          <img src="{{ asset('image/img1.png') }}" alt="img" style="width:150px;height:150px;margin-right:20px;">
          <h4>date</h4>
        </div>
      </div>
    </div>
  </div>
</body>
</html>