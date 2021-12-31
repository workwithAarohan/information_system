
@extends('admin.dashboard')

@section('content')
    

  
    <div class="row mt-5" style="justify-content: center;">
        <div class="col-md-5 border p-4">

       
  
            <form action="{{ route('information.update',$information->id) }}" method="post" >
                @csrf
                @method('put')
        
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Category</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="category" id="desc1" value="{{ $information->category}}">
          </div>
       
        <button type="submit" class="btn btn-danger">Edit</button>
      </form>
    </div>
</div>

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
     
@endsection