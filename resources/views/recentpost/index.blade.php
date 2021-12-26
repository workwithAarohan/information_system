<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/recentpost.css">
    <title>Recent Posts</title>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th 
        {
            border: 2px solid #dddddd;
            text-align: left;
            padding: 8px;
            
        }

    </style>


</head>

<body>
    <h3 class="try">Recent Posts CRUD</h3>
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
                        {{ $recentpost->title_en }}
                    
                </td>


               {{--  <td>
                        {{ $recentpost->photo }}
                    
                </td>

                <td>
                        {{ $recentpost->description }}
                
                </td> --}}

            
                <td style="display: flex; align: center;">

                    <a class="button" href="{{ route('recposts.edit', $recentpost->id)}}"> Edit </a>
                    

                    &emsp;
                    <a class="button" href="{{ route('recposts.show', $recentpost->id)}}"> 
                        Show
                    </a>
               

                    &emsp;
                    <form action="{{ route('recposts.destroy', $recentpost->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        
                        <button class="button"> Delete </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <br><br>
    <a class = "button" href="{{ route('recposts.create') }}">Add New Member</a>

</body>
</html>