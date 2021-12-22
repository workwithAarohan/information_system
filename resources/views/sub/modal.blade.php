<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Modal</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>

        <style>
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
                padding: 0 8px;
                border-radius: 50%;
                font-size: 18px;
                font-weight: 900;
            }

            .close:hover
            {
                background: #e02020;
                color: white;
            }

        </style>
    </head>

    <body>

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
                      <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
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
                      </div>
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



        <script>
            $(document).ready(function(){
                $(".close").on("click", function() {
                    $(".popup").hide();
                });
            });
        </script>


    </body>
</html>



