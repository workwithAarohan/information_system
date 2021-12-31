@extends('admin.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 bg-white shadow p-0" style="height: 480px;">
                <h4 class="bg-success p-2 w-100 text-white" style="text-align: center;">Edit {{ $gallery->type->title }}</h4>
                <div class="mt-3 p-4">
                    <form action="{{ route('gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3" style="height: 80px;">
                            <label for="title_en" class="form-label">Title_en</label>
                            <input type="text" class="form-control  @error('title_en') is-invalid @enderror" name="title_en" value="{{ $gallery->title_en }}">
                            @error('title_en')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3" style="height: 80px;">
                            <label for="title_np" class="form-label">Title_np</label>
                            <input type="text" class="form-control @error('title_np') is-invalid @enderror" id="title_np" name="title_np" value="{{ $gallery->title_np }}">
                            @error('title_np')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3" style="height: 80px;">
                            <label for="title_np" class="form-label">Photo</label>
                            <input type="file" class="form-control @error('file') is-invalid @enderror" value="{{ $gallery->file }}" name="file">
                            @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <input type="hidden" name="type_id" value="{{ $gallery->id }}">

                        <div class="form-check mb-3">
                            @if ($gallery->is_active)
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="is_active" value="{{ $gallery->is_active }}" checked>
                            @else
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="is_active" value="{{ $gallery->is_active }}" >
                            @endif

                            <label class="form-check-label @error('is_active') is-invalid @enderror" for="flexCheckDefault">
                              is_active
                            </label>
                            @error('is_active')
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
