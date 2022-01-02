@extends('admin.nav')

@section('content')
    
<link rel="stylesheet" href="/css/recentpost.css">

    <p class="fw-bold text-uppercase mt-3 mb-4 underline"><u>Contact Details</u></p>
   
        <table class="table border">
            <tr>
                <th>
                    Location in English
                </th>
                {{-- <th>
                    Location in Nepali
                </th> --}}
                <th>
                    Contact No. in English
                </th>
                {{-- <th>
                    Contact No. in Nepali
                </th> --}}
                <th>
                    Helpline No. in English
                </th>
                {{-- <th>
                    Helpline No. in Nepali
                </th> --}}
                <th>
                    Email in English
                </th>
                <th>
                    Mapper in English
                </th>
                <th>
                    Working Hours in English
                </th>
                {{-- <th>
                    Working Hours in English
                </th> --}}
                <th>
                    Action
                </th>
            </tr>

            
            @foreach ($contacts as $contact)
                <tr>
            
                
                    <td >
                        {{ $contact->location_en}}
                    </td>
                

                
             
                    {{-- <td >
                        {{ $contact->location_np }}
                    </td> --}}
                

                
             
                    <td >
                        {{ $contact->contact_en }}
                    </td>
                

            
                    {{-- <td >
                        {{ $contact->contact_np }}
                    </td> --}}
                

                
               
                    <td >
                        {{ $contact->helpline_en }}
                    </td>
                

                
                    
                    {{-- <td >
                        {{ $contact->helpline_np }}
                    </td> --}}
                

        
                    <td >
                        {{ $contact->email }}
                    </td>
                


                    <td >
                        {{ $contact->mapper }} 
                    </td>
                

                    <td >
                        {{ $contact->working_en }} 
                    </td>
                


                    {{-- <td >
                        {{ $contact->working_np }} 
                    </td> --}}


                    <td style="display: flex; align: center;">
                
                        <a class="button" href="{{ route('contact.edit', $contact->id)}}"> Edit </a>
    
                        &emsp;
                        <form action="{{ route('contact.destroy', $contact->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            
                            <button class="button"> Delete </button>
                        </form>
                    </td>




                </tr>
            @endforeach
            

        </table>

@endsection