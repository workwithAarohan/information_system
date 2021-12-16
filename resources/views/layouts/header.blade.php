<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('/css/app.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-5">
            <h4>Hello</h4>
        </div>
        <div class="col-md-5">
            Hi
        </div>
      </div>



    </div>

    <div class="main">
        @yield('content')
      
    </div>
    <div class="footer">
    @include('layouts.footer')

    </div>
</body>
</html>