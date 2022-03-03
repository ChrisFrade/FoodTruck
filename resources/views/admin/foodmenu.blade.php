<!DOCTYPE html>
<html>
<head>
    @include('admin.admincss')
</head>
<body>
        
    <div class="container-scroller">
        @include('admin.sidebar')

        <h1>Food menu</h1>

        <div style="position: relative; top: 60px; right: -150px;">
        
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">


                @csrf

                <div>
                    <label>Title</label>
                    <input style="color:blue;" type="text" name="title" placeholder="
                    Write a title" required>
                </div>

                <div>
                    <label>Price</label>
                    <input style="color:blue;" type="num" name="price" placeholder="
                    price" required>
                </div>

                <div>
                    <label>Image</label>
                    <input type="file" name="image" required>
                </div>

                <div>
                    <label>Description</label>
                    <input style="color:blue;" type="text" name="description" placeholder="Description" required>
                </div>

                <div>
                    
                    <input style="color: black"type="submit" value="Save">
                </div>
            </form>

            <div>
                <table bgcolor='black'>
                    <tr>
                        <th style="padding: 30px">Food Name</th>
                        <th style="padding: 30px">Price</th>
                        <th style="padding: 30px">Description</th>
                        <th style="padding: 30px">Image</th>
                        <th style="padding: 30px">Delete</th>
                        <th style="padding: 30px">Update</th>
                    </tr>


                    @foreach($data as $data)
                        
                    
                    <tr align='center'>
                        <td style="padding: 30px">{{$data->title}}</td>
                        <td style="padding: 30px">{{$data->price}}</td>
                        <td style="padding: 30px">{{$data->description}}</td>
                        <td><img height="50px" width="70px" src="/foodimage/{{$data->image}}"></td>
                        <td><button><a href="{{url('/deletemenu', $data->id)}}">Delete</a></button></td>
                        <td><button><a href="{{url('/updatemenu', $data->id)}}">Update</a></button></td>
                    </tr>

                    
                   
                    @endforeach

                </table>

            </div>


        </div>

    </div>

    @include('admin.adminjs')
</body>
</html>