<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row mt-5" style="justify-content: center;">
        <div class="col-md-5 border p-4">
    <form action="{{ route('header.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Image</label>
          <input type="file" class="form-control" id="exampleInputEmail1" name="image">
        </div>                                                         
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Title</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="title_en">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Title in nepali</label>
            <input type="text" class="form-control" id="title1" name="title_np">
          </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Department in english</label>
            <input type="text" class="form-control" id="title" name="department_en">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Department in nepali</label>
            <input type="text" class="form-control" id="department" name="department_np">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Topic in english</label>
            <input type="text" class="form-control" id="topic" name="topic_en">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Topic in nepali</label>
            <input type="text" class="form-control" id="topic1" name="topic_np">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Slogan</label>
            <input type="text" class="form-control" id="slogan" name="slogan">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Flag</label>
            <input type="file" class="form-control" id="flag" name="flag">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Background</label>
            <input type="file" class="form-control" id="background" name="background">
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

            nepalify.interceptElementById("title1");
            nepalify.interceptElementById("department");
            nepalify.interceptElementById("topic1");

        });
    </script>
</div>
</div>
</body>
</html>