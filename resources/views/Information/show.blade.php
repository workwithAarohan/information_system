@extends('admin.dashboard')

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
                
                    <br><br>
                    <a class = "button" href="{{ route('infodesc.create', $information->id) }}">Add New Member</a>
                    
                   
                
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
