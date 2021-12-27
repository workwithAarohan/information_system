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

       
  
            <form action="{{ route('information.update',$information->id) }}" method="post" >
                @csrf
                @method('put')
        
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Category</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="category" id="desc1" value="{{ $information->category}}">
          </div>
       
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
    </div>
</div>

     


</body>
</html>