<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>

    <x-app-layout>

    </x-app-layout>
    
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        
        @include('admin.admincss')

      </head>
      <body>

        <div class="container-scroller">

            @include("admin.sidebar")

            <h1>Admin users</h1>

        <div style="position: relative; top: 60px; right: -150px;">

            <table bgcolor="grey"; border="3px;" >
                <tr>
                    <th>Name</th>   
                    <th>Email</th> 
                    <th>Action</th> 
                </tr>

                @foreach($data as $data)
                    
                
                <tr align="center">
                    <td>{{$data->name}}</td>   
                    <td>{{$data->email}}</td> 

                @if($data->usertype=="0")
                    <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td> 
                @else
                    <td>Not Allowed</td>
                @endif
                </tr>
                
                @endforeach
            </table>
           
        </div>

        </div>
    
        @include('admin.sidebar')
    
        @include('admin.adminjs')
    
        
      </body>
    </html>

</body>
</html>