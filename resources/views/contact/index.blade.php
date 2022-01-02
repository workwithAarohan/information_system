@extends('admin.dashboard')

@section('content')
    
<div class="col-md-4 mt-2 mx-auto border firstfooter">

    <p class="font-weight-bold text-uppercase mt-3 mb-4 underline">Contact Details</p>

    @foreach ($contacts as $contact)
        

   
        <table>
            <tr>
                <td  style="align:center">
                    <span class="fas fa-building fa-2x"></span>
                </td>
                <td >
                    {{ $contact->location }}
                </td>
            </tr>

            <tr>
            <td  style="align:center; width: 40px;">
                    <span class="fas fa-phone-square-alt fa-2x"></span>
                </td>
                <td >
                    {{ $contact->contact_no }}
                </td>
            </tr>

            <tr>
            <td  style="align:center; width: 40px;">
                    <span class="fas fa-print fa-2x"></span>
                </td>
                <td >
                    {{ $contact->helpline_no }}
                </td>
            </tr>

            <tr>
            <td>
                    <span class="fas fa-envelope fa-2x"></span>
                </td>
                <td >
                    {{ $contact->email }}
                </td>
            </tr>

            <tr>
            <td  style="align:center; width: 40px;">
                    <span class="fas fa-calendar-day fa-2x"></span>
                </td>
                <td >
                    {{ $contact->mapper }} 
                </td>
            </tr>

            <tr>
                <td  style="align:center; width: 40px;">
                        <span class="fas fa-calendar-day fa-2x"></span>
                    </td>
                    <td >
                        {{ $contact->working_time }} 
                    </td>
                </tr>


        </table>

    @endforeach

</div>


@endsection