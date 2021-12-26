<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom checkbox</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="wrapper">
        <div class="title">
            Choose your favorite sites from below options
        </div>
        <div class="container">
            <label for="" class="option_item">
                <input type="checkbox" name="" id="" class="checkbox">
                <div class="option_inner">
                    <div class="tickmark"></div>
                    <div class="icon"></div>
                    <div class="name">Facebook</div>
                </div>
            </label>
            <label for="" class="option_item">
                <input type="checkbox" name="" id="" class="checkbox">
                <div class="option_inner">
                    <div class="tickmark"></div>
                    <div class="icon"></div>
                    <div class="name">Instagram</div>
                </div>
            </label>
            <label for="" class="option_item">
                <input type="checkbox" name="" id="" class="checkbox">
                <div class="option_inner">
                    <div class="tickmark"></div>
                    <div class="icon"></div>
                    <div class="name">Twitter</div>
                </div>
            </label>
        </div>
    </div>
</body>
</html>
