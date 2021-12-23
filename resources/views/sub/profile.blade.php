<!DOCTYPE html>
<html lang="ne">
  <head>
    <meta charset="utf-8" />
    <title>English to Nepali</title>
    <style>

    </style>
  </head>

  <body>
    <h1>English to Nepali</h1>
    <form method="GET" action="" >
        <label for="">English Name</label>
        <input type="text" class="english">

        <label for="">Auto Nepali Name</label>
        <input id="autonepali" name="text" disabled/> <br><br>
        <label for="">Nepali Name</label>
        <input id="nepali" name="text"/> <br><br>
      <input type="submit" value="Submit" />
    </form>

    <script src="{{ asset('js/nepalify.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // nepalify.interceptElementById("nepali");
        // // console.log(nepalify.format('ArohN nkr/mI'));

        // var nameInput = document.getElementById('nepali');

        // document.querySelector('form').addEventListener('submit', function (e) {
        //     e.preventDefault();
        //     console.log(nameInput.value);
        // });

        $(document).ready(function(){
            $('.english').keyup(function(){
                var nepaliText = $(this).val();
                nepaliText = nepalify.format(nepaliText);
                $('#autonepali').val(nepaliText);
            });

            nepalify.interceptElementById("nepali");

        });
    </script>
  </body>
</html>
