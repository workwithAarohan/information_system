@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="row">
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

                        </div>
                    </div>
                </div>

            </div>
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

        <div class="row mt-4" style="height: 300px;  column-gap: 12px;">
            <h4>Home</h4>
            <div class="col-md-9 p-2 border rounded shadow p-2">
                <div class="row p-4">
                    <div class="col-md-7">
                        <h4>Introduction</h4>
                        <p style="font-size: 12px;">
                            English version coming soon. Switch Language to Nepali to view the content in Nepali Language.
                        </p>
                        <a href="#" class="btn btn-secondary">Read More</a>
                    </div>
                    <div class="col">
                        <img src="{{ asset('image/logo.png') }}" alt="" style="width: 210px;">
                    </div>
                </div>



            </div>
            <div class="col border shadow p-3">
                <h5>Quick Links</h5>

                <ul>
                    <li>Bids</li>
                    <li>Press Release</li>
                    <li>Feedback</li>
                </ul>
            </div>

        </div>


    </div>
@endsection
