@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row" style="column-gap: 20px;">
            <div class="col-md-8 bg-white p-4 shadow h-100">
                <h4 class="mb-4">Information Description</h4>
                <div class="row" style="column-gap: 10px;">

                   {{--  @foreach ($information->descriptions as $value)
                        <div class="col-md-3 mb-3" style="width: 270px;">
                            <div class="card">
                                <img src="{{ asset('image/posts/'. $value->file) }}" class="card-img-top" style="height: 280px; object-fit: cover; object-position: 50 % 50 % ;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $value->title_en }}</h5>
                                    {{-- @if ($value->is_active)
                                        <input type="checkbox" name="" id="" checked>
                                    @else
                                        <input type="checkbox" name="" id="">
                                    @endif --}}
                            {{--     </div>
                            </div>
                        </div>
                     @endforeach  --}}


                     <table>
                        <tr>
                            <th> Date </th>
                            <th> Title </th>

                        {{--             
                            <th> Photo </th>
                            <th> Description </th> 
                        --}}

                            <th> Action </th>
                        </tr>

                        @foreach ($information->descriptions as $value)
                            <tr>
                                <td>
                                        {{ $value->date }}
                                    
                                </td>
                
                                <td>
                                        {{ $value->title_en }}
                                    
                                </td>
                
                            
                                <td style="display: flex; align: center;">
                
                                    <a class="button" href="{{ route('infodesc.edit', $value->id)}}"> Edit </a>
                                    
                
                                    &emsp;
                                    <a class="button" href="{{ route('infodesc.show', $value->id)}}"> 
                                        Show
                                    </a>
                               
                
                                    &emsp;
                                    <form action="{{ route('infodesc.destroy', $value->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        
                                        <button class="button"> Delete </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                {{-- 
                    <br><br>
                    <a class = "button" href="{{ route('infodesc.create') }}">Add New Member</a> --}}
                
                
                </div>
            </div>


            <div class="col bg-white shadow p-0" style="height: auto;">
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
                    <input type="file" class="form-control" name="file"><br><br>
                    

                    
                    <label for="description" class="form-label">Description in English: </label>
                    <input type="text" class="form-control" name="desc_en" id="description_en"><br>
                    
                    
                    <label for="description" class="form-label">Description in Nepali: </label>
                    <input type="text" class="form-control" name="desc_np" id="description_np"><br>
                

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

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            
        }

        td, th 
        {
            border: 2px solid #dddddd;
            text-align: left;
            padding: 8px;
            
        }

    </style>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/nepalify.js') }}"></script>
    <link rel="stylesheet" href="/css/recentpost.css">

    <script>

        $(document).ready(function(){

            nepalify.interceptElementById("title_np");
            nepalify.interceptElementById("description_np");

        });
    </script>
@endsection
