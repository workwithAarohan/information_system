<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('/css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/app.js')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/header.css">

    <style>
        @yield('style')
    </style>
</head>
<body >

    <div class="container mb-5" >
        <div class="row">
            <div class="col-md-2">

      <img src="{{ asset('/image/logo.png')}}" alt="logo" style="width:6em; height:6em;">
</div>





            <div class="col-md-3">

                  <p>Government of Nepal</p>
      <p>Ministry of Federal Affairs and General<br>Administration<br>  Rastriya Kitabkhana (Nijamati)</p>

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

    <div class="main">
        @yield('content')

    </div>
    <div class="footer">
    @include('layouts.footer')

    </div>
</body>
</html>
