@extends('layouts.app')

@section('style')
    body
    {
        background: white;
    }
@endsection

@section('content')
    <div class="container">
        <div class="row bg-light justify-content-center" style="column-gap: 20px; padding-top: 50px; padding-bottom: 60px;">
            <div class="col-md-5 bg-white p-4 mb-3" style="width: 600px;">
                <div class="d-flex">
                    <img src="{{ asset('image/event/messi.jfif') }}" class="d-block w-50 me-5" style="height: 180px; object-fit: fill; object-position: 50 % 50 % ;">

                    <h5>Date</h5>

                </div>
            </div>

            <div class="col-md-5 bg-white p-4 mb-3" style="width: 600px;">
                <div class="d-flex">
                    <img src="{{ asset('image/event/messi.jfif') }}" class="d-block w-50 me-5" style="height: 180px; object-fit: fill; object-position: 50 % 50 % ;">

                    <h5>Date</h5>

                </div>
            </div>

            <div class="col-md-5 bg-white p-4 mb-3" style="width: 600px;">
                <div class="d-flex ">
                    <img src="{{ asset('image/event/messi.jfif') }}" class="d-block w-50 me-5" style="height: 180px; object-fit: fill; object-position: 50 % 50 % ;">

                    <h5>Date</h5>

                </div>
            </div>

            <div class="col-md-5 bg-white p-4 mb-3" style="width: 600px;">
                <div class="d-flex">
                    <img src="{{ asset('image/event/messi.jfif') }}" class="d-block w-50 me-5" style="height: 180px; object-fit: fill; object-position: 50 % 50 % ;">

                    <h5>Date</h5>

                </div>
            </div>
        </div>
    </div>
@endsection
