<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/example.css') }}">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<style>
    button i
    {
        color: #b1aeae;
        padding: 10px 0;
    }

    button i:hover
    {
        color: #005FCB;
    }

    .sticky
    {
        position: fixed;
        top: 150px;
        left: 10px;
        background: white;
        border: 1px solid #b1aeae;
        border-radius: 8px;
        width: 40px;
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
</style>
</head>
<body>
    <div class="container">

        <div class="btn-group-vertical sticky">
            <button type="button" class="btn" title="View Location" style="border-bottom: 1px solid #b1aeae;">
                <i class="fas fa-map-marker-alt"></i>
            </button>
            <button type="button" class="btn" title="Check Email" style="border-bottom: 1px solid #b1aeae;">
                <i class="fas fa-envelope"></i>
            </button>
            <button type="button" class="btn" title="Archive" style="border-bottom: 1px solid #b1aeae;">
                <i class="fas fa-archive"></i>
            </button>
            <button type="button" class="btn" title="Links" style="border-bottom: 1px solid #b1aeae;">
                <i class="fas fa-link"></i>
            </button>
            <button type="button" class="btn">
                <i ><img src="{{ asset('image/nepal-flag.gif') }}" title="Change Language" style="width: 15px;"></i>
            </button>

        </div>
        <div class="row mt-5" style="column-gap: 10px;">
            <div class="col-md-7">
                <div class="slideshow-container mt-3">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                            <img src="https://nijamati.pis.gov.np/public/uploads/Slider/nijamati-66501.png" style="width:100%; height: 300px;">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                            <img src="{{ asset('image/logo.png') }}" style="width:100%; height: 300px;object-fit: none;">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="{{ asset('image/nepal-flag.gif') }}" style="width:100%; height: 300px; object-fit: none;">
                    <div class="text">Caption Three</div>
                    </div>

                </div>
                <br>

                <div style="text-align:center">
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot"></span>
                </div>
            </div>

            <div class="col-md-4 border" style="background-color: #F5F5F5;">
                <div class="p-2">
                    <div class="row bg-white p-2 mb-2">
                        <div class="col-md-3">
                            <img src="https://nijamati.pis.gov.np/public/uploads/post/pages_1615885039-69047.jpg" alt=""
                        class="rounded-circle mt-2" style="width: 80px; height: 60px;">
                        </div>
                        <div class="col">
                            <h6 class="mt-3"><strong>Netra Prasad Subedi</strong></h6>
                            <p class="" style="font-size: 13px;">Director General</p>
                        </div>
                    </div>
                    <div class="row bg-white p-2 mb-2">
                        <div class="col-md-3">
                            <img src="https://nijamati.pis.gov.np/public/uploads/post/20210321_205736-84373.jpg" alt=""
                        class="rounded-circle mt-2" style="width: 80px; height: 60px;">
                        </div>
                        <div class="col">
                            <h6 class="mt-3"><strong>Baburaja Shrestha</strong></h6>
                            <p class="" style="font-size: 13px;">Deputy General Director</p>
                        </div>
                    </div>
                    <div class="row bg-white p-2" >
                        <div class="col-md-3" >
                            <img src="https://nijamati.pis.gov.np/public/uploads/post/prakashjung-22214.jpg" alt=""
                        class="rounded-circle mt-2" style="width: 80px; height: 60px;">
                        </div>
                        <div class="col-md-7">
                            <h6 class="mt-3"><strong>Prakashjung Karki</strong></h6>
                            <p class="" style="font-size: 13px;">Director / Information Officer</p>
                            <p style="font-size: 13px;">+977 01 5010138</p>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="row mt-5 mb-3" style="column-gap: 15px;">
            <h4 style="color: #9e0d05; font-family: sans-serif; font-size: 16px; font-weight: bold;">
                Rastriya Kitabkhana (Nijamati)
            </h4>
            <hr style="border: 2px solid #005FCB; border-radius: 2px; opacity: 1; margin-top: -2px; width: 80px; ">

            <div class="col-md-3 offset-md-4 border mt-4 p-3 rounded">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="div">
                        <h5 style="color: #005FCB; font-family: sans-serif; font-size: 14px; font-weight: bold;">
                            Pictures
                        </h5>
                        <hr style="border: 2px solid #005FCB; border-radius: 2px; opacity: 1; margin-top: -2px; width: 35px; ">
                    </div>

                    <div class="div">
                        <h5 style="color: #005FCB; font-family: sans-serif; font-size: 11px; font-weight: bold;">
                            View all Photos
                        </h5>
                        <hr style="border: 2px solid #005FCB; border-radius: 2px; opacity: 1; margin-top: -2px; width: 35px; ">
                    </div>
                </div>

                <img src="https://nijamati.pis.gov.np/public/uploads/Imagefile/3-58914.jpg" style="object-fit: cover; width: 250px; height: 216px;">

                <p class="mt-2" style="font-family: sans-serif;">Sanitation Program</p>

            </div>

            <div class="col-md-3 border mt-4 p-3 rounded">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="div">
                        <h5 style="color: #005FCB; font-family: sans-serif; font-size: 14px; font-weight: bold;">
                            Video Gallery
                        </h5>
                        <hr style="border: 2px solid #005FCB; border-radius: 2px; opacity: 1; margin-top: -2px; width: 35px; ">
                    </div>

                    <div class="div">
                        <h5 style="color: #005FCB; font-family: sans-serif; font-size: 11px; font-weight: bold;">
                            View all Videos
                        </h5>
                        <hr style="border: 2px solid #005FCB; border-radius: 2px; opacity: 1; margin-top: -2px; width: 35px; ">
                    </div>
                </div>

                <iframe width="250" height="216" src="https://www.youtube.com/embed/0Oe2P6DElk8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                {{-- <iframe src="https://youtu.be/embed/apKMWyDhvBE" style="width: 250px;"></iframe> --}}

                <p class="mt-2" style="font-family: sans-serif;">उपमहानिर्देशकको सन्देश</p>

            </div>


        </div>

        <div class="row mb-4" style="column-gap: 10px;">
            <h4 style="color: #005FCB; font-family: sans-serif; font-size: 16px; font-weight: bold;">
                Home
            </h4>
            <hr style="border: 2px solid #005FCB; border-radius: 2px; opacity: 1; margin-top: -2px; width: 40px; ">
            <div class="col-md-7 border p-4 column mt-3"  style="width: 750px; margin-left: -50px;">
                <div class="row">
                    <h5 style="color: #005FCB; font-family: sans-serif; font-size: 15px; font-weight: bold;">
                        Introduction
                    </h5>
                    <hr style="border: 2px solid #005FCB; border-radius: 2px; opacity: 1; margin-top: -2px; width: 40px; ">
                    <div class="col-md-7 mt-3" style="height: 200px; margin-left: -40px;">
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
            <div class="col-md-3 border p-4 column mt-3" style="width: 350px; background-color:#005FCB ">
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


        <div class="row">
            <div class="justify-content-center">
                <h4 style="color: #005FCB; font-family: sans-serif; font-size: 16px; font-weight: bold;">
                    Explore Information
                </h4>
                <hr style="border: 2px solid #005FCB; border-radius: 2px; opacity: 1; margin-top: -2px; width: 40px; margin-left: 20px;">
            </div>
            <div class="mt-3 rounded p-5 mb-3" style="background-color: #EBF2FB; ">
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

            <div class="mt-3 rounded p-4 mb-3" style="background-color: #EBF2FB; ">
                <h4>Recent Posts</h4>
                <div class="d-flex justify-content-center mt-4" style="column-gap: 50px;">
                    <div class="bg-white" style="width: 50%;">
                        <div class="row">
                            <div class="col-md-5 mt-3">
                                <img src="https://nijamati.pis.gov.np/public/uploads/document-icon-36553-68664.png" alt="" style="width: 150px; height: 150px; object-fit: cover;" class="mx-auto d-block ">
                            </div>
                            <div class="col mt-3">
                                <p>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    17 Dec, 2021
                                </p>

                                <a href="">PIS Update Campaign-Week 12</a>

                                <p>PIS Update Campaign-Week 10</p>

                            </div>
                        </div>
                    </div>

                    <div class=" bg-white" style="width: 50%;">
                        <div class="row">
                            <div class="col-md-5 p-3">
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
        </div>
    </div>



    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
