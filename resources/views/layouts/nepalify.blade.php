<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script src="{{ asset('js/nepalify.js') }}">
    </script>
<script>
    var text = "kiMkr/tv/ybimuX/";
console.log(nepalify.format(text));
// किंकर्तव्यबिमुढ्

// Further options can be provided as a second argument
var text = "asdfghjkl";
const options = {
  layout: "traditional",
};
console.log(nepalify.format(text, options));
// बकमानजवपि

// When the options are not provided, the following defaults are used
const defaultOptions = {
  layout: "romanized",
};
</script>
</body>


</html>