<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        body
        {
            background: #ddd;
            font-family: "Raleway";
        }

        .tabs
        {
            position: absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%, -50%);
            width: 500px;
            height: 250px;
            background: #f5f5f5;
            padding: 20px 30px;
            overflow: hidden;
            border-radius: 50px;
            box-shadow: 5px 10px 5px #ccc;
        }

        .tabs .tab-header
        {
            height: 60px;
            display: flex;
            align-items: center;
        }

        .tabs .tab-header > div
        {
            width: calc(100% / 5);
            text-align: center;
            color: #888;
            font-weight: 600;
            cursor: pointer;
            font-size: 14px;
            text-transform: uppercase;
            outline:none;
        }

        .tabs .tab-header > div > p
        {
            display: block;
            margin-bottom: 5px;
        }

        .tabs .tab-header > div.active
        {
            color: #00acee;
        }

        .tabs .tab-indicator
        {
            position: relative;
            width: calc(100% / 5);
            height: 5px;
            background: #00acee;
            left: 0px;
            border-radius: 5px;
            transition: all 500ms ease-in-out;
        }

        .tabs .tab-body
        {
            position: relative;
            height: calc(100% - 60px);
            padding: 10px 5px;
        }

        .tabs .tab-body > div
        {
            position: absolute;
            top: -200%;
            opacity: 0;
            margin-top: 5px;
            transform: scale(0.9);
            transition: opacity 500ms ease-in-out 0ms,
                transform 500ms ease-in-out 0ms;
        }

        .tabs .tab-body > div.active
        {
            top: 0px;
            opacity: 1;
            tranform:scale(1);
            margin-top: 0px;
        }
    </style>
</head>
<body>

    <div class="tabs">
        <div class="tab-header">
            <div class="active">
                <p>Events</p>
            </div>
            <div>
                <p>Recent Posts</p>

            </div>
            <div>
                <p>News and Events</p>

            </div>
            <div>
                <p>Notices</p>

            </div>
            <div>
                <p>Downloads</p>

            </div>
        </div>
        <div class="tab-indicator"></div>
        <div class="tab-body">
            <div class="active">
                <h2>This is event section</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ipsum, suscipit similique est quis obcaecati ea sapiente odio dolorem reiciendis distinctio ab quisquam laboriosam magnam non minus harum, odit voluptas!</p>
            </div>
            <div>
                <h2>This is recent posts section</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, natus nesciunt. Pariatur iusto nesciunt laborum, sint animi ducimus error id dolor corporis magni blanditiis eveniet autem amet officiis doloremque quo.</p>
            </div>
            <div>
                <h2>This is recent posts section</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, natus nesciunt. Pariatur iusto nesciunt laborum, sint animi ducimus error id dolor corporis magni blanditiis eveniet autem amet officiis doloremque quo.</p>
            </div>
            <div>
                <h2>This is recent posts section</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, natus nesciunt. Pariatur iusto nesciunt laborum, sint animi ducimus error id dolor corporis magni blanditiis eveniet autem amet officiis doloremque quo.</p>
            </div>
            <div>
                <h2>This is recent posts section</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, natus nesciunt. Pariatur iusto nesciunt laborum, sint animi ducimus error id dolor corporis magni blanditiis eveniet autem amet officiis doloremque quo.</p>
            </div>
        </div>
    </div>


    <script>
        let tabHeader = document.getElementsByClassName("tab-header")[0];

        let tabIndicator = document.getElementsByClassName("tab-indicator")[0];
        let tabBody = document.getElementsByClassName("tab-body")[0];

        let tabsPane = tabHeader.getElementsByTagName("div");

        for(let i=0; i<tabsPane.length; i++)
        {
            tabsPane[i].addEventListener("click", function()
            {
                tabHeader.getElementsByClassName("active")[0].classList.remove("active");
                tabsPane[i].classList.add('active');
                tabBody.getElementsByClassName("active")[0].classList.remove("active");
                tabsBody.getElementsByTagName("div")[i].classList.add("active");

                tabIndicator.style.left = 'calc(calc(100% / 5) * ${i})';
            });
        }
    </script>

</body>
</html>
