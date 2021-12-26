<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/app.css')}}" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="/css/recentpost.css">
    <title>Document</title>
</head>
<body>
    
    <h3 style="text-align: center; font-weight: bold; margin-top: 5px;">Recent Posts</h3>
    

{{--     <form method="POST" action="{{ route("recposts.store") }}" >
        @csrf 
        <label for="">Date: </label>
        <input type="date" name="date">

        <label for="">Title: </label>
        <input type="text" name="title">

        <label for="">Image: </label>
        <input type="text" name="photo">
        
        <label for="">Description: </label>
        <input type="text" name="description"><br><br>
      <input type="submit" value="Submit" />
    </form> --}}

    <div class="row mt-5" style="justify-content: center"> 
        <div class="col-md-6 border p-5">
    
                <form method="POST" action="{{ route("recposts.store") }}">
                @csrf
                    
                    <label for="date" class="form-label">Date: </label>
                    <input type="date" class="form-control" name="date"><br>
                    

                    
                    <label for="title" class="form-label">Title in English: </label>
                    <input type="text" class="form-control" name="title_en" id="title_en"><br>
                    
                    <label for="title" class="form-label">Title in Nepali: </label>
                    <input type="text" class="form-control" name="title_np" id="title_np"><br>
                        
                    
                    <label for="image">Image file input: </label>
                    <input type="file" class="form-control" name="photo"><br><br>
                    

                    
                    <label for="description" class="form-label">Description: </label>
                    <input type="text" class="form-control" name="description_en" id="description_np"><br>
                    
                    
                    <label for="description" class="form-label">Description: </label>
                    <input type="text" class="form-control" name="description_np" id="description_np"><br>
                

                    <button type="submit" class="btn btn-primary">Submit</button>
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

</html>