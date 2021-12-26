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

       
  
            <form action="{{ route('event.update',$event->id) }}" method="post">
                @csrf
                @method('put')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Image</label>
          <input type="file" class="form-control" id="exampleInputEmail1" name="image"  value="{{ $event->image }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Date</label>
          <input type="date" class="form-control" id="exampleInputPassword1" name="date" value="{{ $event->date}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Title in english</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="title_en" value="{{ $event->title_en }}">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Title in nepali</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="title_np" id= "title1" value="{{ $event->title_np }}">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description in english</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="desc_en" value="{{ $event->description_en}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description in nepali</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="desc_np" id="desc1" value="{{ $event->description_np}}">
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
  
              nepalify.interceptElementById("title1");
              nepalify.interceptElementById("desc1");
  
          });
      </script>


</body>
</html>