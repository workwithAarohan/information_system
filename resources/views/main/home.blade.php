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
                    </div>
                    <div class="carousel-inner">
                        <?php $i=0;  ?>
                        @foreach ($photos as $photo)
                            @if ($i==0)
                                <div class="carousel-item active">
                                    <img src="{{ asset('image/photoGallery/'.$photo->file) }}" class="d-block w-100" style="height: 280px; object-fit: cover; object-position: 50 % 50 % ;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h6>{{ $photo->english_title }}</h6>
                                    </div>
                                </div>
                            @else
                                <div class="carousel-item">
                                    <img src="{{ asset('image/photoGallery/'.$photo->file) }}" class="d-block w-100" style="height: 280px; object-fit: cover; object-position: 50 % 50 % ;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h6>{{ $photo->english_title }}</h6>
                                    </div>
                                </div>
                            @endif
                            <?php $i++; ?>
                        @endforeach
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
                    </li>
                    <li class="body-list">
                        <p>Press Release</p>
                    </li>
                    <li class="body-list">
                        <p>Feedback</p>
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
                <div class="tab-content">
                    <div class="tab-pane show active" id="events" style="background-color: #EBF2FB;">
                        <h4>Events</h4>
                        <div class="scroll">
                            <main class="Loop js-loop">
                                @foreach ($events as $event)
                                    <section class="">
                                        <div class="row bg-white p-4 hey" style="">
                                            <div class="col-md-4 p-3">

                                                <img src="{{ asset('image/information/'.$event->file) }}" alt="" style="width: 200px; height: 150px; object-fit: cover;" class="mx-auto d-block ">

                                            </div>
                                            <div class="col">
                                                <p>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    {{ $event->date }}
                                                </p>

                                                <a href=""> {{ $event->title_en }}</a>

                                                <p> {{ $event->description_en }}</p>

                                            </div>
                                        </div>
                                    </section>
                                @endforeach
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
                            <div class="row" style="column-gap: 20px; justify-content:center">

                                @foreach ($recentposts as $recentpost)

                                    <div class="col-md-5" style="background: white; margin-bottom:20px; width:600px; padding:15px">
                                        <div class="d-flex" >
                                            <img src="{{  asset('/image/information/'.$recentpost->file) }}" alt="" style="width: 150px; height: 150px; object-fit: cover; margin-right: 20px" class=" d-block ">

                                            <div>
                                                <p>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    {{ $recentpost->date }}
                                                </p>

                                                <a href={{ route('infodesc.show', $recentpost->id) }}>{{ $recentpost->title_en }}</a>

                                                {{-- <p>{{ $recentpost->desc_en }}</p> --}}
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
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
                    <div class="tab-pane" id="notices" style="background-color: #EBF2FB;">
                        <h4>News and Notices</h4>
                        <div class="d-flex justify-content-center mt-4" style="column-gap: 50px;">
                            <div class="row" style="column-gap: 20px;justify-content:center;">
                                @foreach ($news as $new)
                                    <div class="col-md-5" style="background: white; margin-bottom:20px; padding:15px;width:600px">
                                        <div class="d-flex">
                                            <img src="{{ asset('image/information/'.$new->file) }}" alt="img" style="width:150px;height:150px;margin-right:20px;">
                                        <div >
                                            <h4>{{ $new->date }}</h4>
                                            <p>{{ $new->title_en }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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
