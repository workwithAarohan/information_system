@extends('layouts.header')

@section('style')
    .title
    {
        padding: 8px;
        display: block;
    }
    .heading
    {
        color: #005FCB;
        font-weight: bold;
        font-family: system-ui;
        font-size: 18px;
    }

    hr.line
    {
        border: 2px solid #005FCB;
        opacity: 1;
        border-radius: 2px;
        margin-top: -2px;
        width: 50%;
    }

    .column
    {
        {{-- border: 1px solid lightgrey; --}}
        box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.2);
        border-radius: 8px;
    }

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
@endsection

@section('content')
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
        {{-- <div class="row">
            <div class="col-md-7 border p-2" style="margin-right: 12px;">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://nijamati.pis.gov.np/public/uploads/Slider/nijamati-66501.png" class="d-block" alt="..." style="width: 100%; height: 100%;">
                      </div>
                      <div class="carousel-item">
                        <img src="https://nijamati.pis.gov.np/public/uploads/Slider/nijamati-66501.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://nijamati.pis.gov.np/public/uploads/Slider/nijamati-66501.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
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

        <div class="row mt-4" style="height: 300px; column-gap: 12px;">
            <div class="col-md-5 p-2">
                <img src="{{ asset('image/screen.png') }}" alt="" style="width: 100%;">
            </div>

            <div class="col-md-3 shadow border p-2" >
                <h4>Photos</h4>
            </div>
            <div class="col-md-3 shadow border p-2">
                <h4>Videos</h4>
            </div>
        </div>

        <div class="row mt-4 mb-5" style="height: 300px;  column-gap: 12px;">
            <div class="title border">
                <h4 class="heading">Home</h4>
                <hr class="line">
            </div>



            <div class="col-md-9 column">
                <div class="row p-4">
                    <div class="col-md-7">
                        <h4 class="heading">Introduction</h4>
                        <hr class="line">
                        <div class="title border">
                            <h4 class="heading">
                                Home
                            </h4>
                            <hr class="line">
                            <br>

                        </div>
                        <p style="font-size: 12px;">
                            English version coming soon. Switch Language to Nepali to view the content in Nepali Language.
                        </p>
                        <a href="#" class="btn btn-secondary">Read More</a>
                    </div>
                    <div class="col border" style="float: right">
                        <img src="{{ asset('image/logo.png') }}"
                        class="" style="width: 210px;">
                        <div style="clear:both"></div>
                    </div>

                </div>



            </div>
            <div class="col column">
                <h5>Quick Links</h5>

                <ul>
                    <li>Bids</li>
                    <li>Press Release</li>
                    <li>Feedback</li>
                </ul>
            </div>

        </div> --}}

        {{-- <div class="row mt-4 mb-5">
            <h4>Explore Information</h4>

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
              </div>

        </div> --}}




        {{-- <div class="row mt-5">
            <div class="col-md-8 border">
                <div class="slideshow-container">

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


                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                        <img src="{{ asset('image/img1.png') }}" style="width:100%">
                    <div class="text">Caption Text</div>


                </div>
                <br>


                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                        <img src="{{ asset('image/img2.png') }}" style="width:100%; height: 500px;">
                    <div class="text">Caption Two</div>

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
                            <p class="text" style="font-size: 13px;">Director General</p>
                        </div>
                    </div>
                    <div class="row bg-white p-2 mb-2">
                        <div class="col-md-3">
                            <img src="https://nijamati.pis.gov.np/public/uploads/post/20210321_205736-84373.jpg" alt=""
                        class="rounded-circle mt-2" style="width: 80px; height: 60px;">
                        </div>
                        <div class="col">
                            <h6 class="mt-3"><strong>Baburaja Shrestha</strong></h6>
                            <p class="text" style="font-size: 13px;">Deputy General Director</p>
                        </div>
                    </div>
                    <div class="row bg-white p-2" >
                        <div class="col-md-3" >
                            <img src="https://nijamati.pis.gov.np/public/uploads/post/prakashjung-22214.jpg" alt=""
                        class="rounded-circle mt-2" style="width: 80px; height: 60px;">
                        </div>
                        <div class="col-md-7">
                            <h6 class="mt-3"><strong>Prakashjung Karki</strong></h6>
                            <p class="text" style="font-size: 13px;">Director / Information Officer</p>
                            <p style="font-size: 13px;">+977 01 5010138</p>
                        </div>
                        <div class="col-md-2">


                <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="{{ asset('image/img3.png') }}" style="width:100%">
                <div class="text">Caption Three</div>

                        </div>
                    </div>

                </div>

            </div>

        </div> --}}




    </div>


    <script src="{{ asset('js/script.js') }}"></script>
@endsection
