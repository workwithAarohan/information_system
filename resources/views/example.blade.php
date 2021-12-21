<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutoScroll</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    <style>
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


    </style>
</head>
<body>

    <div class="container">



    <div class="mt-3 rounded p-5 mb-3 h-75" style="background-color: #EBF2FB;">


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


        </div>

    </div>



    
</body>
</html>
