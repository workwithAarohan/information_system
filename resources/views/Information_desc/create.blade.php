@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 bg-white shadow p-0" style="height: auto;">
                <h4 class="bg-success p-2 w-100 text-white" style="text-align: center;">Add New Information</h4>
                <div class="mt-3 p-4">
        
                    <form action="{{ route('infodesc.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
        
                    <label for="date" class="form-label">Date: </label>
                    <input type="date" class="form-control" name="date"><br>
                    
        
                    
                    <label for="title" class="form-label">Title in English: </label>
                    <input type="text" class="form-control" name="title_en" id="title_en"><br>
                    
                    <label for="title" class="form-label">Title in Nepali: </label>
                    <input type="text" class="form-control" name="title_np" id="title_np"><br>
                        
                    
                    <label for="image">Image file input: </label>
                    <input type="file" class="form-control" name="file"><br>
                    
        
                    
                    <label for="description_en" class="form-label">Description in English: </label> <br>
                    {{-- <input type="text" class="form-control" name="desc_en" id="description_en"><br> --}}
                    <textarea name="desc_en" id="description_en" cols="50" rows="8"></textarea><br><br>
                    
                    <label for="description_np" class="form-label">Description in Nepali: </label> <br>
                    {{-- <input type="text" class="form-control" name="desc_np" id="description_np"><br> --}}
                    <textarea name="desc_np" id="description_np" cols="50" rows="8"></textarea><br><br>
                
        
                        <input type="hidden" name="information_id" value="{{ $information->id }}">
        
                        {{-- <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="is_active">
                            <label class="form-check-label @error('is_active') is-invalid @enderror" for="flexCheckDefault">
                            is_active
                            </label>
                            @error('is_active')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}
        
                        <div class="mb-3">
                            <input type="submit" value="Add" class="btn btn-success form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   	
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/nepalify.js') }}"></script>
    <link rel="stylesheet" href="/css/recentpost.css">

    <script>

ClassicEditor
                .create( document.querySelector( '#description_en' ))
                    .catch( error => {
                        console.error( error );
                    });
                .create( document.querySelector( '#description_np' ) )
                    .catch( error => {
                        console.error( error );
                    });

        $(document).ready(function(){

            nepalify.interceptElementById("title_np");
            nepalify.interceptElementById("description_np");

            ClassicEditor
                .create( document.querySelector( '#description_en' ))
                    .catch( error => {
                        console.error( error );
                    });
                .create( document.querySelector( '#description_np' ) )
                    .catch( error => {
                        console.error( error );
                    });
            });
    </script>
    




@endsection
