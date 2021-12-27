<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom checkbox</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body
        {
            background: #585c68;
        }

        .box-wrapper
        {
            width: 780px;
            margin: 100px auto 0;

        }

        .box-wrapper .box-title
        {
            font-size: 24px;
            color: #fff;
            font-weight: 700;
            text-align: center;
            margin-bottom: 50px;
        }

        .box-container
        {
            display: flex;
            flex-wrap: wrap;
        }

        .box-container .option_item
        {
            display: block;
            position: relative;
            width: 175px;
            height: 175px;
            margin: 10px;
        }

        .option_item .option_inner
        {
            cursor: pointer;
            display: block;
            border: 5px solid transparent;
            position: relative;
        }

        .option_item .checkbox
        {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 1;
            opacity: 0;
        }


        .option_item .checkbox:checked ~ .option_inner
        {
            border-color: #129b46;
        }

        .option_item .checkbox:checked ~ .option_inner .tickmark
        {
            position: absolute;
            top: -1px;
            left: -1px;
            border: 20px solid;
            border-color: #129b46 transparent transparent #129b46;
        }

        .option_item .checkbox:checked ~ .option_inner .tickmark:before
        {
            content: "";
            position: absolute;
            top: -10px;
            left: -15px;
            width: 15px;
            height: 5px;
            border: 3px solid;
            border-color: transparent transparent #fff #fff;
            transform: rotate(-45deg);
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row"  style="column-gap: 20px;">
            <div class="col-md-8 bg-white p-4 shadow h-100">
                <h4 class="mb-4">Photo Gallery</h4>
                <div class="row" style="column-gap: 10px;">
                    <form action="" class="d-flex justify-content-between">
                        <div class="col-md-3"  style="width: 270px;">
                            <label for="facebook1" class="option_item">
                                <input type="checkbox" name="" id="facebook1" class="checkbox facebook">
                                <div class="option_inner">
                                    <div class="tickmark"></div>
                                    <div class="p-1">
                                        <img src="{{ asset('image/photoGallery/sanitation.jpg') }}" class="card-img-top" style="height: 280px; object-fit: cover; padding: 0 0 0 0; ">
                                        <div class="card-body">
                                            <h5 class="card-title">Sanitation</h5>
                                        </div>
                                    </div>


                                </div>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="box-wrapper">
        <div class="box-container">
            <label for="facebook1" class="option_item">
                <input type="checkbox" name="" id="facebook1" class="checkbox facebook">
                <div class="option_inner card">
                    <div class="tickmark"></div>
                    <img src="{{ asset('image/photoGallery/sanitation.jpg') }}" class="card-img-top" style="height: 280px; object-fit: cover; object-position: 50 % 50 % ;">
                        <div class="card-body">
                            <h5 class="card-title">Sanitation</h5>
                        </div>
                </div>
            </label>
            <label for="facebook2" class="option_item">
                <input type="checkbox" name="" id="facebook2" class="checkbox facebook">
                <div class="option_inner card">
                    <div class="tickmark"></div>
                    <img src="{{ asset('image/photoGallery/sanitation.jpg') }}" class="card-img-top" style="height: 280px; object-fit: cover; object-position: 50 % 50 % ;">
                        <div class="card-body">
                            <h5 class="card-title">Sanitation</h5>
                        </div>
                </div>
            </label>
            <label for="facebook3" class="option_item">
                <input type="checkbox" name="" id="facebook3" class="checkbox facebook">
                <div class="option_inner card">
                    <div class="tickmark"></div>
                    <img src="{{ asset('image/photoGallery/sanitation.jpg') }}" class="card-img-top" style="height: 280px; object-fit: cover; object-position: 50 % 50 % ;">
                        <div class="card-body">
                            <h5 class="card-title">Sanitation</h5>
                        </div>
                </div>
            </label>
        </div>
    </div> --}}
</body>
</html>
