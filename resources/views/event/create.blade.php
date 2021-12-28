<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="row mt-5" style="justify-content: center;">
        <div class="col-md-5 border p-4">

       
   {{--  <form action="{{ route('event.store') }}" method="post" >
        @csrf
        <label for="Image">Image</label><br>
        <input type="file" name ="image" ><br><br>
        <label for="Date">Date</label><br>
        <input type="text" name="date"><br><br>
        <label for="Title">Title</label><br>
        <input type="text" name="title"><br><br>
        <label for="Desc">Description</label><br>
        <input type="text" name="desc"><br><br>

        <input type="submit" value="Submit">
    </form> --}}

    <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Image</label>
          <input type="file" class="form-control" id="exampleInputEmail1" name="image">
        </div>                                                         
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Date</label>
          <input type="date" class="form-control" id="exampleInputPassword1" name="date">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Title in english</label>
            <input type="text" class="form-control" id="title1" name="title_en">
          </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Title in nepali</label>
            <input type="text" class="form-control" id="title" name="title_np">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description in nepali</label>
            <input type="text" class="form-control" id="description" name="desc_np">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description in english</label>
            <input type="text" class="form-control" id="description1" name="desc_en">
          </div>
       
        <button type="submit" class="btn btn-primary">Create</button>
      </form>


       <script src="{{ asset('js/nepalify.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
   

        $(document).ready(function(){
         /*    $('.english').keyup(function(){
                var nepaliText = $(this).val();
                nepaliText = nepalify.format(nepaliText);
                $('#autonepali').val(nepaliText);
            }); */

            nepalify.interceptElementById("title");
            nepalify.interceptElementById("description");

        });
    </script>
</div>
</div>
</body>
</html>