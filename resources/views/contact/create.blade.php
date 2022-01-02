
@extends('admin.nav')


@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-7 bg-white shadow p-0" style="height: auto;">
                <h4 class="bg-success p-2 w-100 text-white" style="text-align: center;">Contact Details</h4>
                <div class="mt-3 p-4">

                    <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="d-flex justify-content-between">
                                <div class="mb-3" style="width: 45%">
                                    <label for="location_en" class="form-label">Location in English: </label>
                                    <input type="text" class="form-control" id="location_en" name="location_en">
                                </div>

                                <div class="mb-3" style="width: 45%">
                                    <label for="location_np" class="form-label">Location in Nepali: </label>
                                    <input type="text" class="form-control" id="location_np" name="location_np">
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-between">
                                <div class="mb-3" style="width: 45%">
                                    <label for="contact_en" class="form-label">Contact in English: </label>
                                    <input type="text" class="form-control" id="contact_en" name="contact_en">
                                </div>

                                <div class="mb-3" style="width: 45%">
                                    <label for="contact_np" class="form-label">Contact in Nepali: </label>
                                    <input type="text" class="form-control" id="contact_np" name="contact_np">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">

                                <div class="mb-3" style="width: 45%">
                                    <label for="helpline_en" class="form-label">Helpline Number in English: </label>
                                    <input type="text" class="form-control" id="helpline_en" name="helpline_en">
                                </div>
                                
                                <div class="mb-3" style="width: 45%">
                                    <label for="helpline_np" class="form-label">Helpline Number in Nepali: </label>
                                    <input type="text" class="form-control" id="helpline_np" name="helpline_np">
                                </div>
                            </div>

                                <div class="mb-3 w-50">
                                    <label for="email" class="form-label">Email: </label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>

                                <div class="mb-3 w-50">
                                    <label for="mapper" class="form-label">Mapper: </label>
                                    <input type="text" class="form-control" id="mapper" name="mapper">
                                </div>
                            
                            <div class="d-flex justify-content-between">
                            
                                <div class="mb-3" style="width: 45%">
                                    <label for="working_en" class="form-label">Working Time in English: </label>
                                    <input type="text" class="form-control" id="working_en" name="working_en">
                                </div>

                                <div class="mb-3" style="width: 45%">
                                    <label for="working_np" class="form-label">Working Time in Nepali: </label>
                                    <input type="text" class="form-control" id="working_np" name="working_np">
                                </div>
                            
                            </div>
                               
                    
                    
                      
                        <div class="mb-3">
                            <input type="submit" id="submit" value="Add" class="btn btn-success form-control">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @section('script')
    $(document).ready(function(){

        nepalify.interceptElementById("location_np");
        nepalify.interceptElementById("contact_np");
        nepalify.interceptElementById("helpline_np");
        nepalify.interceptElementById("working_np");
        });
    @endsection

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/nepalify.js') }}"></script>

  

@endsection
