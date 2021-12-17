<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <style>
        .column
        {
            /* border: 1px solid lightgrey; */
            box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }

        .heading
        {
            width: 100%;
            color: #005FCB;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 20px;
        }

        ul li
        {
            padding: 15px;
            margin-top: 10px;
            background-color: #337FD5;
            margin-left: -25px;
            color: white;
            font-size: small;
            font-weight: bold;
            border-radius: 8px;
            display: flex;
            width: 95%;
        }

        .link
        {
            text-decoration: none;
            color: white;
            background-color: #005FCB;
            border-radius: 50%;
            top: 100px;
            right: -15px;
        }


    </style>
</head>
<body style="background-color: white">
    <div class="container mt-5">
        <div class="row" style="column-gap: 10px;">
            <div class="col-md-7 border p-4 column"  style="width: 750px;">
                <div class="row">
                    <div class="col-md-7" style="height: 200px;">
                        <h4 class="heading border">
                            Introduction
                        </h4>
                        <p style="font-size: 12px;">
                            English version coming soon. Switch Language to Nepali to view the content in Nepali Language.
                        </p>
                        <a href="#" class="btn btn-secondary">Read More</a>
                    </div>
                    <div class="col" style="height: 200px;">
                        <img src="{{ asset('image/logo.png') }}" alt="" class="img-fluid rounded">
                    </div>
                </div>

            </div>
            <div class="col-md-3 border p-4 column" style="width: 350px; background-color:#005FCB ">
                <h4 class="" style="font-weight: bold; color: white">
                    QUICK LINKS
                </h4>

                <ul style="list-style-type: none">
                    <li class="relative">
                        <p>Bids</p>
                        {{-- <a href="" class="p-3 link" >
                            <i class="fas fa-angle-right"></i>
                        </a> --}}
                    </li>
                    <li>
                        <p>Press Release</p>
                        {{-- <a href="" class="p-3 link" >
                            <i class="fas fa-angle-right"></i>
                        </a> --}}
                    </li>
                    <li>
                        <p>Feedback</p>
                        {{-- <a href="" class="p-3 link" >
                            <i class="fas fa-angle-right"></i>
                        </a> --}}
                    </li>

                </ul>


            </div>
        </div>

        <div class="mt-5 rounded p-5 mb-3" style="background-color: #EBF2FB; ">
            <h4>Events</h4>
            <div class="row bg-white p-4" style="">
                <div class="col-md-4 p-3">
                    <img src="https://nijamati.pis.gov.np/public/uploads/Publication/PIS Update Cmapaign Week 7-70132.jpg" alt="" style="width: 200px; height: 150px; object-fit: cover;" class="mx-auto d-block ">
                </div>
                <div class="col">
                    <p>
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        17 Dec, 2021
                    </p>

                    <a href="">PIS Update Campaign-Week 12</a>

                    <p>PIS Update Campaign-Week 10</p>

                </div>
            </div>
            <div class="row bg-white p-4 mt-3" style="">
                <div class="col-md-4 p-3">
                    <img src="https://nijamati.pis.gov.np/public/uploads/Publication/PIS Update Cmapaign Week 4-37432.jpg" alt="" style="width: 200px; height: 150px; object-fit: cover;" class="mx-auto d-block ">
                </div>
                <div class="col">
                    <p>
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        17 Dec, 2021
                    </p>

                    <a href="">PIS Update Campaign-Week 12</a>

                    <p>PIS Update Campaign-Week 9</p>

                </div>
            </div>
            <div class="row bg-white p-4 mt-3" style="">
                <div class="col-md-4 p-3">
                    <img src="https://nijamati.pis.gov.np/public/uploads/Publication/PIS Update Cmapaign Week 7-70132.jpg" alt="" style="width: 200px; height: 150px; object-fit: cover;" class="mx-auto d-block ">
                </div>
                <div class="col">
                    <p>
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        17 Dec, 2021
                    </p>

                    <a href="">PIS Update Campaign-Week 12</a>

                    <p>PIS Update Campaign-Week 8</p>

                </div>
            </div>
            <div class="row p-4 mt-3 justify-content-center" style="">
                <div class="col-md-2">
                    <div class="btn btn-danger">
                        View Page
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-5 rounded p-5 mb-3" style="background-color: #EBF2FB; ">
            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-2">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="rounded mt-5" style="background-color: #EBF2FB">
            <div class="row mt-5">
                <div class="col-md-3 p-3">
                    <img src="https://nijamati.pis.gov.np/public/uploads/Publication/PIS Update Cmapaign Week 7-70132.jpg" alt="" style="width: 100px;" >
                </div>
                <div class="col">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
            </div>
        </div> --}}
    </div>
</body>
</html>
