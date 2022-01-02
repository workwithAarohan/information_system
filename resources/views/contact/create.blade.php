@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="text-center mb-4">Create Contact</h2>
            <div class="col-md-4 bg-white shadow p-0" style="">
                <h4 class="bg-success p-2 w-100 text-white" style="text-align: center;">Add New Photo</h4>
                <div class="mt-3 p-4">
                    <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3" style="height: 80px;">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control  @error('location') is-invalid @enderror" name="location">
                            @error('location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3" style="height: 80px;">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="submit" value="Add" class="btn btn-success form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
