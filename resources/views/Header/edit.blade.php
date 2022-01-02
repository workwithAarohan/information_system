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

       
  
            <form action="{{ route('header.update',$header->id) }}" method="post" enctype="multipart/form-data" >
                @csrf
                @method('put')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Image</label>
          <input type="file" class="form-control" id="exampleInputEmail1" name="image"  value="{{ $header->logo}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Title in english</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="title_en" value="{{ $header->Title_en}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Title in nepali</label>
            <input type="text" class="form-control" id="title_np" name="title_np" value="{{ $header->Title_np }}">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Department in english</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="dept_en" id= "title1" value="{{ $header->Department_np }}">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Department in nepali</label>
            <input type="text" class="form-control" id="dept_np" name="dept_np" value="{{ $header->Department_np}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Topic in english</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="topic_en" id="topic1" value="{{ $header->Topic_en}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Topic in nepali</label>
            <input type="text" class="form-control" id="topic_np" name="topic_np" id="topic2" value="{{ $header->Topic_np}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Slogan</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="slogan" id="slogan" value="{{ $header->slogan}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">flag</label>
            <input type="file" class="form-control" id="exampleInputPassword1" name="flag" id="flag" value="{{ $header->Flag}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Background</label>
            <input type="file" class="form-control" id="exampleInputPassword1" name="background" id="background" value="{{ $header->Background}}">
          </div>
       
        <button type="submit" class="btn btn-primary">Edit</button>
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
  
              nepalify.interceptElementById("title_np");
              nepalify.interceptElementById("dept_np");
              nepalify.interceptElementById("topic_np");

  
          });
      </script>
</body>
</html>