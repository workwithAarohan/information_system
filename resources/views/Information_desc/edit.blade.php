<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/app.css')}}" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="/css/informationdesc.css">

  

    <title>informationdescs</title>
</head>
<body>

    <h3 style="text-align: center; font-weight: bold; margin-top: 5px;">Add New Information</h3>

    <div class="row" style="justify-content: center"> 
        <div class="col-md-6 border p-5">

            <form action="{{ route('infodesc.update', $informationdesc->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <label for="date" class="form-label">Date: </label>
                <input type="date" class="form-control"  value="{{ $informationdesc->date }}" name="date"><br>
                

                
                <label for="title" class="form-label">Title in English: </label>
                <input type="text" class="form-control" value="{{ $informationdesc->title_en }}" name="title_en" id="title_en"><br>
                
                <label for="title" class="form-label">Title in Nepali: </label>
                <input type="text" class="form-control" value="{{ $informationdesc->title_np }}" name="title_np" id="title_np"><br>
                    
                
                <label for="image">Image file input: </label>
                <input type="file" class="form-control-file" value="{{ $informationdesc->file }}" name="file"><br><br>

                <input type="hidden" name="information_id" value="{{ $informationdesc->information_id }}">
                

                
                <label for="description" class="form-label">Description in English: </label>
                <input type="text" class="form-control"  value="{{ $informationdesc->desc_en }}" name="desc_en" id="description_en"><br>
                
                <label for="description" class="form-label">Description in Nepali: </label>
                <input type="text" class="form-control"  value="{{ $informationdesc->desc_np}}" name="desc_np" id="description_np"><br>
            
            {{--   <button type="Submit">Edit</button> --}}
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>

</body>

<script src="{{ asset('js/nepalify.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>
   

    $(document).ready(function(){
     nepalify.interceptElementById("title_np");
     nepalify.interceptElementById("description_np");


    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
    $('.summernote').summernote();
    });
</script>

</html>