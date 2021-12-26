<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recent Posts</title>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th 
        {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

    </style>


</head>

<body>

    <table style=" width: 50%;">
        <tr>
            <th> Date </th>
            <th> Title </th>
{{--             <th> Photo </th>
            <th> Description </th> --}}
            <th> Action </th>
        </tr>
        @foreach ($recentposts as $recentpost)
            <tr>
                <td>
                        {{ $recentpost->date }}
                    
                </td>

                <td>
                        {{ $recentpost->title }}
                    
                </td>


               {{--  <td>
                        {{ $recentpost->photo }}
                    
                </td>

                <td>
                        {{ $recentpost->description }}
                
                </td> --}}

            
                <td style="display: flex; align: center;">

                    <a href="{{ route('recposts.edit', $recentpost->id)}}"> Edit </a>
               

                    &emsp;
                    <a href="{{ route('recposts.show', $recentpost->id)}}"> 
                        Show
                    </a>
               

                    &emsp;
                    <form action="{{ route('recposts.destroy', $recentpost->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        
                        <button type="submit"> Delete </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <br><br>
    <a href="{{ route('recposts.create') }}">Add New Member</a>

</body>
</html>