<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tab Menu</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script src="{{ asset('js/script.js') }}"></script>

    <style>

        body
        {
            font-family: sans-serif;
        }

        .tab
        {
            border-radius: 6px;
            background: #005FCB;
        }
        ul
        {
            list-style: none;
            margin: auto;
            padding: 10px;

        }

        li
        {
            display: inline;
            margin-top: 10px;
            margin: 10px;
        }

        a
        {
            text-decoration: none;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
        }
        a:hover
        {
            color: #FFFFFF;
            border-bottom: 2px solid #fff;
        }

        .menu
        {
            display: none;
        }

        button i
        {
            color: rgb(156, 156, 156);
        }

        button:ho
        {
            color: red;
        }

        .sticky
        {
            position: fixed;
            top: 10px;
            left: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-4 justify-content-center">
        <div class="row justify-content-center tab">
            <div class="col-md-4">
                <ul>
                    <li><a href="#" onclick="tabMenu('Event')">Events</a></li>
                    <li><a href="#" onclick="tabMenu('Post')">Recent Posts</a></li>
                    <li><a href="#" onclick="tabMenu('Notice')">Notices</a></li>
                    <li><a href="#" onclick="tabMenu('Download')">Download</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div id="Event" class="menu" >
                <h3>This is event section.</h3>
            </div>
            <div id="Post" class="menu" >
                <h3>This is post section.</h3>
            </div>
            <div id="Notice" class="menu" >
                <h3>This is notice section.</h3>
            </div>
            <div id="Download" class="menu" >
                <h3>This is download section.</h3>
            </div>
        </div>
    </div>


    <div class="btn-group-vertical sticky">
        <button type="button" class="btn border">
            <i class="fas fa-map-marker-alt"></i>
        </button>
        <button type="button" class="btn border">
            <i class="fas fa-envelope"></i>
        </button>
        <button type="button" class="btn border">
            <i class="fas fa-envelope"></i>
        </button>
        <button type="button" class="btn border">
            <i class="fas fa-link"></i>
        </button>
        <button type="button" class="btn border">
            <i ><img src="{{ asset('image/nepal-flag.gif') }}" style="width: 20px;"></i>
        </button>

      </div>

      <div style="margin-left: 100px;">
        <button onclick="test();">Message</button>
      </div>



    <script>
        function tabMenu(Menu)
        {
            var x = document.getElementsbyClassName("menu");

            for(var i=0; i<x.length; i++)
            {
                x[i].style.display = "none";
            }

            document.getElementById(cityName).style.display = "block";

        }
    </script>
</body>
</html>
