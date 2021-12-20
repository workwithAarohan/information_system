<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Creating Dynamic Tabs in Bootstrap via jQuery</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function(){
    $("#myTab a").click(function(e){
        e.preventDefault();
        $(this).tab("show");
    });


});
</script>

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

    .menu
    {
        display: none;
    }

    button i
    {
        color: rgb(156, 156, 156);
    }

    button:hover
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
<div class="m-4">
    <div class="row justify-content-center tab">
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
    <div class="mt-3 rounded p-5 mb-3" style="background-color: #EBF2FB; ">
        <div class="tab-content">
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
            <div class="tab-pane" id="posts">
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
            <div class="tab-pane fade" id="notices">
                <h4 class="mt-2">Messages tab content</h4>
                <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
            </div>
            <div class="tab-pane fade" id="download">
                <h4 class="mt-2">Messages tab content</h4>
                <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
