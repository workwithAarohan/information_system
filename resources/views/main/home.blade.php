@extends('layouts.header')


@section('title')
Home
@endsection

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

    .column
    {
        {{-- border: 1px solid lightgrey; --}}
        box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.2);
        border-radius: 8px;
    }

    .icon
    {
        color: #b1aeae;
        padding: 10px 0;
    }

    .icon:hover
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

    .body-list
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

    .tabs-header
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

    .link
    {
        text-decoration: none;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
    }
    .link:hover
    {
        color: #FFFFFF;
        border-bottom: 2px solid #fff;
    }

    .tab-pane
    {
        background-color: none;
    }
    .scroll
    {
        height: 490px;
        overflow: hidden;
    }

    .Loop::-webkit-scrollbar
    {
        display: none;
    }

    .Loop
    {
        position: relative;
        height: 100%;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
    }

    section
    {
        position: relative;
        text-align: center;
        height: 50%;
    }

    ::scrollbar {
        display: none;
    }



    .hey
    {
        position: absolute;
        width: 100%;
    }

    .popup
    {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.5);
        transition: opacity 500ms;
        visibility: visible;
        opacity: 1;
        z-index: 99;
    }

    .popup-box
    {
        height: 100px;
        margin: 100px auto;
        position: relative;
        transition: all 5s ease-in-out;
    }

    .popup-box h5
    {
        color: white;
        font-family: sans-serif;
        font-size: medium;
        font-weight: bold;
    }

    .close
    {
        color: black;
        background: white;
        padding: 0 10px;
        border-radius: 50%;
        font-size: 18px;
        font-weight: 900;
    }

    .close:hover
    {
        background: #e02020;
        color: white;
    }

@endsection

@section('content')
    <div class="container">

        {{-- Modal --}}
        <div class="popup">
            <div class="popup-box" style="width: 600px;">

                <div class="d-flex mb-1" style="">
                    <button class="close btn" style="">&times;</button>
                </div>


                <div id="carouselModal" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselModal" data-bs-slide-to="0" class="active bg-dark" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselModal" data-bs-slide-to="1" aria-label="Slide 2" class="bg-dark"></button>
                      </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row p-2" style="background: #005FCB;">
                            <h5 class="m-auto">Online PIS Login Procedure</h5>
                        </div>
                        <div class="row bg-secondary">

                            <img src="https://nijamati.pis.gov.np/public/uploads/file/popup notice-97155.png" class="p-0" style="height:450px; object-fit: fill; ">
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row p-2" style="background: #005FCB;">
                            <h5 class="m-auto">Changes regarding the website of Rastriya Kitabkhana (Nijamati)</h5>
                        </div>
                        <div class="row bg-secondary">

                            <img src="https://nijamati.pis.gov.np/public/uploads/file/popup-33242.jpg" class="p-0" style="height:450px; object-fit: fill;">
                        </div>
                      </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- Sticky Menu --}}
        <div class="btn-group-vertical sticky">
            <button type="button" class="btn" title="View Location" style="border-bottom: 1px solid #b1aeae;">
                <i class="fas fa-map-marker-alt icon"></i>
            </button>
            <button type="button" class="btn" title="Check Email" style="border-bottom: 1px solid #b1aeae;">
                <i class="fas fa-envelope icon"></i>
            </button>
            <button type="button" class="btn" title="Archive" style="border-bottom: 1px solid #b1aeae;">
                <i class="fas fa-archive icon"></i>
            </button>
            <button type="button" class="btn" title="Links" style="border-bottom: 1px solid #b1aeae;">
                <i class="fas fa-link icon"></i>
            </button>
            <button type="button" class="btn">
                <i class="icon"><img src="{{ asset('image/nepal-flag.gif') }}" title="Change Language" style="width: 15px;"></i>
            </button>

        </div>

        {{-- SlideShow --}}
        <div class="row mt-5" style="column-gap: 30px;">
            <div class="col-md-7 border">
                <div id="carouselCaption" class="carousel slide mt-3"  data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselCaption" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselCaption" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://nijamati.pis.gov.np/public/uploads/Slider/nijamati-66501.png" class="d-block w-100" style="height: 320px; object-fit: cover; object-position: 50 % 50 % ;">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('image/images.jfif') }}" class="d-block w-100" style="height: 320px; ">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaption" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCaption" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
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


        {{-- Picture and Video Slideshow --}}
        <div class="row mt-5 mb-3" style="column-gap: 10px;">
            <h4 style="color: #9e0d05; font-family: sans-serif; font-size: 16px; font-weight: bold;">
                Rastriya Kitabkhana (Nijamati)
            </h4>
            <hr style="background-color:#005FCB; height:5px; border-radius: 2px;  opacity: 1; margin-top: -2px; width: 80px; margin-left: 20px;">

            <div class="col-md-3 offset-md-4 border mt-4 p-3 rounded" style="width: 320px;">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="div">
                        <h5 style="color: #005FCB; font-family: sans-serif; font-size: 14px; font-weight: bold;">
                            Photo Gallery
                        </h5>
                        <hr style="background-color:#005FCB; height:5px; border-radius: 2px; opacity: 1; margin-top: -2px; width: 35px;margin-left: 20px; ">
                    </div>

                    <div class="div">
                        <h5 style="color: #005FCB; font-family: sans-serif; font-size: 11px; font-weight: bold;">
                            View all Photos
                        </h5>
                        <hr style="background-color:#005FCB; height:5px; border-radius: 2px; opacity: 1; margin-top: -2px; width: 35px; margin-left: 20px;">
                    </div>
                </div>

                <div id="carouselCaptions" class="carousel slide"  data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php $i=0;  ?>
                        @foreach ($photos as $photo)
                            @if ($i==0)
                                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="{{ $i }}" class="active" aria-label="Slide {{ $i+1 }}"></button>
                            @else
                                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="{{ $i }}" aria-label="Slide {{ $i+1 }}"></button>

                            @endif

                            <?php $i++; ?>
                        @endforeach
                      {{-- <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
                    </div>
                    <div class="carousel-inner">
                        <?php $i=0;  ?>
                        @foreach ($photos as $photo)
                            @if ($i==0)
                                <div class="carousel-item active">
                                    <img src="{{ asset('image/'.$photo->file) }}" class="d-block w-100" style="height: 280px; object-fit: cover; object-position: 50 % 50 % ;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h6>{{ $photo->english_title }}</h6>
                                    </div>
                                </div>
                            @else
                                <div class="carousel-item">
                                    <img src="/image/photoGallery/{{ $photo->photo }}" class="d-block w-100" style="height: 280px; object-fit: cover; object-position: 50 % 50 % ;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h6>{{ $photo->english_title }}</h6>
                                    </div>
                                </div>
                            @endif
                            <?php $i++; ?>
                        @endforeach
                      {{-- <div class="carousel-item active">
                        <img src="https://nijamati.pis.gov.np/public/uploads/Imagefile/3-58914.jpg" class="d-block w-100" style="height: 280px; object-fit: cover; object-position: 50 % 50 % ;">
                        <div class="carousel-caption d-none d-md-block">
                          <h6>Sanitation</h6>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="https://nijamati.pis.gov.np/public/uploads/Imagefile/240603745_2913323288933132_5877172252914171574_n-46369.jpg" class="d-block w-100" style="height: 280px; object-fit: cover; object-position: 50 % 50 % ;">
                        <div class="carousel-caption d-none d-md-block">
                          <h6>Quiz Contest Program</h6>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="https://nijamati.pis.gov.np/public/uploads/Imagefile/3-58914.jpg" class="d-block w-100" style="height: 280px; object-fit: cover; object-position: 50 % 50 % ;">
                        <div class="carousel-caption d-none d-md-block">
                          <h6>Sanitation Progam</h6>
                        </div>
                      </div> --}}
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

                {{-- <img src="https://nijamati.pis.gov.np/public/uploads/Imagefile/3-58914.jpg" style="object-fit: cover; width: 90%; height: 216px;">

                <p class="mt-2" style="font-family: sans-serif;">Sanitation Program</p> --}}

            </div>
            <div class="col-md-3 border mt-4 p-3 rounded" style="width: 320px;">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="div">
                        <h5 style="color: #005FCB; font-family: sans-serif; font-size: 14px; font-weight: bold;">
                            Video Gallery
                        </h5>
                        <hr style="background-color:#005FCB; height:5px; border-radius: 2px; opacity: 1; margin-top: -2px; width: 35px;margin-left: 20px; ">
                    </div>

                    <div class="div">
                        <h5 style="color: #005FCB; font-family: sans-serif; font-size: 11px; font-weight: bold;">
                            View all Videos
                        </h5>
                        <hr style="background-color:#005FCB; height:5px; border-radius: 2px; opacity: 1; margin-top: -2px; width: 35px; margin-left: 20px;">
                    </div>
                </div>

                <div id="carouselExampleCaptions" class="carousel slide"  data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <iframe  height="280" class="w-100" src="https://www.youtube.com/embed/0Oe2P6DElk8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="carousel-caption d-none d-md-block">
                          <h6>उपमहानिर्देशकको सन्देश</h6>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <iframe class="w-100" height="280" src="https://www.youtube.com/embed/apKMWyDhvBE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="carousel-caption d-none d-md-block">
                          <h6>Message from DG on PIS Update Campaign 2078-06-13</h6>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

                {{-- <img src="https://nijamati.pis.gov.np/public/uploads/Imagefile/3-58914.jpg" style="object-fit: cover; width: 90%; height: 216px;">

                <p class="mt-2" style="font-family: sans-serif;">Sanitation Program</p> --}}

            </div>
        </div>

        {{-- Quick Links --}}
        <div class="row mb-4" style="column-gap: 10px;">
            <h4 style="color: #005FCB; font-family: sans-serif; font-size: 16px; font-weight: bold;">
                Home
            </h4>
            <hr style="background-color:#005FCB; height:5px; border-radius: 2px; opacity: 1; margin-top: -2px; width: 1px; margin-left: 20px;">
            <div class="col-md-7 border p-4 column mt-3"  style="width: 750px; margin-left: -50px;">
                <div class="row">
                    <h5 style="color: #005FCB; font-family: sans-serif; font-size: 15px; font-weight: bold;">
                        Introduction
                    </h5>
                    <hr style="background-color:#005FCB; height:5px; border-radius: 2px; opacity: 1; margin-top: -2px; width: 40px; margin-left: 20px;">
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
                    <li class="body-list">
                        <p>Bids</p>
                        {{-- <a href="" class="p-3 link" >
                            <i class="fas fa-angle-right"></i>
                        </a> --}}
                    </li>
                    <li class="body-list">
                        <p>Press Release</p>
                        {{-- <a href="" class="p-3 link" >
                            <i class="fas fa-angle-right"></i>
                        </a> --}}
                    </li>
                    <li class="body-list">
                        <p>Feedback</p>
                        {{-- <a href="" class="p-3 link" >
                            <i class="fas fa-angle-right"></i>
                        </a> --}}
                    </li>

                </ul>


            </div>
        </div>

        {{-- Tab Menu --}}
        <div class="row mt-5">
            <div class="d-flex justify-content-center">
                <div>
                    <h4 style="color: #005FCB; font-family: sans-serif; font-size: 18px; font-weight: bold;">
                        Explore Information
                    </h4>
                    <hr style="background-color:#005FCB; height:5px; border-radius: 2px; opacity: 1; margin-top: -2px; width: 60px; margin-left: 40px; ">
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <div class="row justify-content-center tabs-header w-75">
                    <div class="col-md-4">
                        <ul class="nav nav-pills" id="myTab">
                            <li class="">
                                <a href="#events" class="link active">Events</a>
                            </li>
                            <li class="">
                                <a href="#posts" class="link">Recent Posts</a>
                            </li>
                            <li class="">
                                <a href="#notices" class="link">Notices</a>
                            </li>
                            <li class="">
                                <a href="#download" class="link">Download</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-3 rounded p-5 mb-3" style="background-color: #EBF2FB; ">

                {{-- <div class="tab-content">
                    <div class="tab-pane show active" id="events">
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
                </div>
                <div class="tab-pane fade" id="posts">
                    <h4 class="mt-2">Messages tab content</h4>
                    <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
                </div>
                <div class="tab-pane fade" id="notices">
                    <h4 class="mt-2">Messages tab content</h4>
                    <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
                </div>
                <div class="tab-pane fade" id="download">
                    <h4 class="mt-2">Messages tab content</h4>
                    <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
                </div> --}}

                <div class="tab-content">
                    <div class="tab-pane show active" id="events" style="background-color: #EBF2FB;">

                        <h4>Events</h4>
                        <div class="scroll">

                            <main class="Loop js-loop">
                                <section class="">
                                    <div class="row bg-white p-4 hey" style="">
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
                                </section>
                                <section >
                                    <div class="row bg-white p-4 mt-3 hey" style="">
                                        <div class="col-md-4 p-3">
                                            <img src="https://nijamati.pis.gov.np/public/uploads/Publication/PIS Update Cmapaign Week 4-37432.jpg" alt="" style="width: 200px; height: 150px; object-fit: cover;" class="mx-auto d-block ">
                                        </div>
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                16 Dec, 2021
                                            </p>

                                            <a href="">PIS Update Campaign-Week 11</a>

                                            <p>PIS Update Campaign-Week 9</p>

                                        </div>
                                    </div>
                                </section>
                                <section class="three">
                                    <div class="row bg-white p-4 mt-3 hey" style="">
                                        <div class="col-md-4 p-3">
                                            <img src="https://nijamati.pis.gov.np/public/uploads/Publication/PIS Update Cmapaign Week 4-37432.jpg" alt="" style="width: 200px; height: 150px; object-fit: cover;" class="mx-auto d-block ">
                                        </div>
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                15 Dec, 2021
                                            </p>

                                            <a href="">PIS Update Campaign-Week 10</a>

                                            <p>PIS Update Campaign-Week 9</p>

                                        </div>
                                    </div>
                                </section>
                                <section class="four mb-3">
                                    <div class="row bg-white p-4 mt-3 hey" style="">
                                        <div class="col-md-4 p-3">
                                            <img src="https://nijamati.pis.gov.np/public/uploads/Publication/PIS Update Cmapaign Week 4-37432.jpg" alt="" style="width: 200px; height: 150px; object-fit: cover;" class="mx-auto d-block ">
                                        </div>
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                14 Dec, 2021
                                            </p>

                                            <a href="">PIS Update Campaign-Week 9</a>

                                            <p>PIS Update Campaign-Week 9</p>

                                        </div>
                                    </div>
                                </section>

                                <section class="one is-clone">
                                    <div class="row bg-white p-4 hey" style="">
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
                                </section>
                                <section class="two is-clone">
                                    <div class="row bg-white p-4 mt-3 hey" style="">
                                        <div class="col-md-4 p-3">
                                            <img src="https://nijamati.pis.gov.np/public/uploads/Publication/PIS Update Cmapaign Week 4-37432.jpg" alt="" style="width: 200px; height: 150px; object-fit: cover;" class="mx-auto d-block ">
                                        </div>
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                16 Dec, 2021
                                            </p>

                                            <a href="">PIS Update Campaign-Week 11</a>

                                            <p>PIS Update Campaign-Week 9</p>

                                        </div>
                                    </div>
                                </section>
                            </main>

                        </div>
                        <div class="row p-4 mt-3 justify-content-center mb-0" style="">
                            <div class="col-md-2">
                                <div class="btn btn-danger">
                                    View Page
                                </div>
                            </div>
                        </div>


                </div>
                    <div class="tab-pane" id="posts" style="background-color: #EBF2FB;">

                            <h4>Recent Posts</h4>
                            <div class="d-flex justify-content-center mt-4" style="column-gap: 50px;">
                                @foreach ($events as $event)
                                <div class="bg-white" style="width: 50%;">
                                    <div class="row">
                                        <div class="col-md-5 mt-3">
                                            <img src="https://nijamati.pis.gov.np/public/uploads/document-icon-36553-68664.png" alt="" style="width: 150px; height: 150px; object-fit: cover;" class="mx-auto d-block ">
                                        </div>
                                        <div class="col mt-3">
                                            <p>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                {{ $event->date }}
                                            </p>

                                            <a href="">{{ $event->title }}</a>

                                            <p>PIS Update Campaign-Week 10</p>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                {{-- <div class="bg-white" style="width: 50%;">
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
                                </div> --}}
                            </div>


                            <div class="row p-4 mt-3 justify-content-center" style="">
                                <div class="col-md-2">
                                    <div class="btn btn-danger">
                                        View Page
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="tab-pane" id="notices" style="background-color: #EBF2FB;">
                        <h4>News and Notices</h4>
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
                    <div class="tab-pane" id="download" style="background-color: #EBF2FB;">
                        <h4 class="mt-2">Messages tab content</h4>
                        <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
                    </div>

            </div>


        </div>





    </div>

    <script>
        $(document).ready(function(){
            $("#myTab a").click(function(e){
                e.preventDefault();
                $(this).tab("show");
            });

            $(".close").on("click", function() {
                $(".popup").hide();
            });
        });
    </script>


    <script src="{{ asset('js/script.js') }}"></script>
@endsection
