@extends('admin.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 bg-white shadow p-0" style="height: auto;">
                <h4 class="bg-success p-2 w-100 text-white" style="text-align: center;">Contact Details</h4>
                <div class="mt-3 p-4">

                    <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-4">
                            <div class="col-md-4 mt-2 mx-auto border firstfooter">

                                <div class="mb-3">
                                    <label for="location" class="form-label">Location: </label>
                                    <input type="text" class="form-control" id="location" name="location">
                                </div>

                                <div class="mb-3">
                                    <label for="contact_no" class="form-label">Contact Number: </label>
                                    <input type="text" class="form-control" id="contact_no" name="contact_no">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="helpline_no" class="form-label">Helpline Number: </label>
                                    <input type="text" class="form-control" id="helpline_no" name="helpline_no">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email: </label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>

                                <div class="mb-3">
                                    <label for="mapper" class="form-label">Mapper: </label>
                                    <input type="text" class="form-control" id="mapper" name="mapper">
                                </div>

                                <div class="mb-3">
                                    <label for="working_time" class="form-label">Working Time: </label>
                                    <input type="text" class="form-control" id="working_time" name="working_time">
                                </div>
                               
                    
                    
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


  
@endsection
