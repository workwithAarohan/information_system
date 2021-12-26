@extends('layouts.app')

@section('content')
    <div class="container">

        <div id="success_message"></div>

        <div class="row p-4" style="column-gap: 25px;">
            <div class="col-md-8 bg-white p-4 rounded shadow">
                <h5>Gallery Type</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Gallery Type</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galleries as $gallery)
                        <tr>
                            <td>{{ $gallery->id }}</td>
                            <td>{{ $gallery->title }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-secondary me-2">Update</a>
                                    <a href="{{ route('gallery.show', $gallery->id) }}" class="btn btn-info me-2">Read</a>

                                    <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <div class="col bg-white p-4 rounded shadow">
                <h5 class="bg-success p-3 text-white mb-4">Create Gallery Type</h5>
                <form action="{{ route('gallery.store') }}" method="POST">

                    <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}">

                    <div class="mb-3">
                        <label for="title" class="form-label">Title: </label>
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <input type="submit" value="Create" id="submit" class="btn btn-primary">
                </form>
            </div>
        </div>

    </div>

    <script>
        // $(document).ready(function(){
        //     $("#submit").on('click', function(){

        //         e.preventDefault();

        //         var title = $("#title").val();

        //         if(title!="")
        //         {
        //             $.ajaxSetup({
        //                 headers: {
        //                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //                 }
        //             });

        //             $.ajax({
        //                 url: {{ route('gallery.index') }},
        //                 type: "POST",
        //                 data: {
        //                     _token: $('#csrf').val(),
        //                     title: title,

        //                 },
        //                 processData:false,
        //                 contentType:false,
        //                 dataType: 'json',
        //                 success: function(response)
        //                 {
        //                     if(response.statusCode==200){
        //                         window.location = "/gallery";
        //                     }
        //                     else if(response.statusCode==201){
        //                         alert("Error occured !");
        //                     }
        //                 }
        //             });
        //         }
        //         else
        //         {
        //             alert('Invalid');
        //         }
        //     });
        // });
    </script>
@endsection
