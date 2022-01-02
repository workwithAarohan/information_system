@extends('admin.nav')

@section('content')
    


    <h3 style="text-align: center; font-weight: bold; margin-top: 5px;">Add New Contact Details</h3>

    <div class="row" style="justify-content: center"> 
        <div class="col-md-6 border p-5">

            <form action="{{ route('contact.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="d-flex justify-content-between">
                    <div class="mb-3" style="width: 45%">
                        <label for="location_en" class="form-label">Location in English: </label>
                        <input type="text" class="form-control" id="location_en" name="location_en" value="{{ $contact->location_en }}">
                    </div>

                    <div class="mb-3" style="width: 45%">
                        <label for="location_np" class="form-label">Location in Nepali: </label>
                        <input type="text" class="form-control" id="location_np" value="{{ $contact->location_np }}" name="location_np">
                    </div>
                </div>
                
                <div class="d-flex justify-content-between">
                    <div class="mb-3" style="width: 45%">
                        <label for="contact_en" class="form-label">Contact in English: </label>
                        <input type="text" class="form-control" id="contact_en" value="{{ $contact->contact_en }}" name="contact_en">
                    </div>

                    <div class="mb-3" style="width: 45%">
                        <label for="contact_np" class="form-label">Contact in Nepali: </label>
                        <input type="text" class="form-control" id="contact_np" value="{{ $contact->contact_np }}" name="contact_np">
                    </div>
                </div>

                <div class="d-flex justify-content-between">

                    <div class="mb-3" style="width: 45%">
                        <label for="helpline_en" class="form-label">Helpline Number in English: </label>
                        <input type="text" class="form-control" id="helpline_en" value="{{ $contact->helpline_en }}" name="helpline_en">
                    </div>
                    
                    <div class="mb-3" style="width: 45%">
                        <label for="helpline_np" class="form-label">Helpline Number in Nepali: </label>
                        <input type="text" class="form-control" id="helpline_np" name="helpline_np">
                    </div>
                </div>

                    <div class="mb-3 w-50">
                        <label for="email" class="form-label">Email: </label>
                        <input type="text" class="form-control" id="email" value="{{ $contact->email }}" name="email">
                    </div>

                    <div class="mb-3 w-50">
                        <label for="mapper" class="form-label">Mapper: </label>
                        <input type="text" class="form-control" id="mapper" value="{{ $contact->mapper }}" name="mapper">
                    </div>
                
                <div class="d-flex justify-content-between">
                
                    <div class="mb-3" style="width: 45%">
                        <label for="working_en" class="form-label">Working Time in English: </label>
                        <input type="text" class="form-control" id="working_en" value="{{ $contact->working_en }}" name="working_en">
                    </div>

                    <div class="mb-3" style="width: 45%">
                        <label for="working_np" class="form-label">Working Time in Nepali: </label>
                        <input type="text" class="form-control" id="working_np" value="{{ $contact->working_np }}" name="working_np">
                    </div>
                
                </div>
            
            {{--   <button type="Submit">Edit</button> --}}
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>



<script src="{{ asset('js/nepalify.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<link href="{{ asset('/css/app.css')}}" rel="stylesheet">

<script src="{{asset('js/app.js')}}"></script>
<link rel="stylesheet" href="/css/informationdesc.css">

<script>
   

    $(document).ready(function(){
        nepalify.interceptElementById("location_np");
        nepalify.interceptElementById("contact_np");
        nepalify.interceptElementById("helpline_np");
        nepalify.interceptElementById("working_np");


    });
</script>



@endsection