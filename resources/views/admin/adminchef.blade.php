<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    

    @include('admin.admincss')
  </head>
  <body>

    <div class="container-scroller">

    @include('admin.sidebar')

    <h1>Admin Chefs</h1>

    <form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data">

      @csrf

      <div>
        <label>Name</label>
        <input style="color:blue" type="text" name="name" required="" placeholder="Enter Name">
      </div>
      <div>
        <label>Speciality</label>
        <input style="color:blue" type="text" name="speciality" required="" placeholder="Enter the speciality">
      </div>
      <div>
        <label>Image</label>
        <input type="file" name="image" required="">
      </div>
      <input type="submit" value="Save">


    </form>

    <table bgcolor="black">
      <tr>
        <th style="padding:30px;">Chef Name</th>
        <th style="padding:30px;">Speciality</th>
        <th style="padding:30px;">Image</th>
        <th style="padding:30px;">Action</th>
      </tr>

@foreach ($data as $data)

      <tr align="center">
        <td>{{$data->name}}</td>
        <td>{{$data->speciality}}</td>
        <td><img height="100" width="100" src="/chefimage/{{$data->image}}"></td>
        <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
        <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
      </tr>

@endforeach

    </table>

    </div>

    @include('admin.adminjs')

    
  </body>
</html>