@extends('admin.dashboard')
@section('content')
    <div class="container">

        {{ $informationdesc->info->category }}
        <div class="row  mt-2 bg-white p-4">
            <div class="col-md-12">

                <div class="containers mb-2 p-2" style="background: gray;">

                    {{ $informationdesc->title_en }} <br>
                    {{ $informationdesc->date }} <br> 
                    <img src="{{ asset('image/information/'. $informationdesc->file) }}" class="card-img-top" style="height: 280px; width:280px; padding: 0 0 0 0; "> <br> 
                                               
                    
                    {{ $informationdesc->desc_en }} <br>

                </div>

                <div class="containers" style="background: rgb(231, 216, 216)">
                    
               
                    <div class="py-2 px-2 light-grey-bg rounded" data-music="0">
                        <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="">
                            <div>
                                पोस्ट सेयर गर्नुहोस्

                               
                            </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 text-right">
                            <div class="">
                            <div>

                                <a href="" class="btn white-bg secondary-text fw-800 ml-1 px-2 relative">
                                <div class="relative pl-3">                                    
                                    <p class="mb-0" ><small > {{ $informationdesc->date }}</small>
                                    </p>
                                </div>

                                </a>

                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection