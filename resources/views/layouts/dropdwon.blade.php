<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/drop.css') }}">




</head>
<body>
<ul class="nav">
  <li>
    <a href="#">
      No dropdown
    </a>
  </li>
  <li class="button-dropdown">
    <a href="javascript:void(0)" class="dropdown-toggle">
      Dropdown 1 <span>▼</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="#">
          Drop Item 1
        </a>
      </li>
      <li>
        <a href="#">
          Drop Item 2
        </a>
      </li>
      <li>
        <a href="#">
          Drop Item 3
        </a>
      </li>
    </ul>
  </li>
  <li>
    <a href="#">
      No dropdown
    </a>
  </li>
  <li class="button-dropdown">
    <a href="javascript:void(0)" class="dropdown-toggle">
      Dropdown 2 <span>▼</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="#">
          asdf
        </a>
      </li>
    </ul>
  </li>
</ul>


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</body>
</html>
