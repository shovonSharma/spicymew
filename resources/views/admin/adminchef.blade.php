<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

      .container-scroller {
        padding: 20px;
      }

      form {
        margin-bottom: 20px;
      }

      form div {
        margin-bottom: 10px;
      }

      form label {
        display: block;
        margin-bottom: 5px;
      }

      form input[type="text"],
      form input[type="file"],
      form input[type="submit"] {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
      }

      table {
        width: 67%;
        border-collapse: collapse;
      }

      table th,
      table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ccc;
      }

      table th {
        background-color: #f2f2f2;
      }

      table td img {
        max-width: 100px;
        max-height: 100px;
      }

      a {
        color: blue;
        text-decoration: none;
      }
    </style>
    @include("admin.admincss")
  </head>
  <body>

    <div class="container-scroller">
    
      @include("admin.navbar")

      <form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data">
        @csrf

        <div>
          <label for="name">Name</label>
          <input type="text" name="name" required="" placeholder="Enter name">
        </div>

        <div>
          <label for="speciality">Speciality</label>
          <input type="text" name="speciality" required="" placeholder="Enter Speciality">
        </div>

        <div>
          <input type="file" name="image" required="">
        </div>

        <div>
          <input type="submit" value="Save">
        </div>
      </form>

      <table>
        <tr>
          <th>Chef Name</th>
          <th>Speciality</th>
          <th>Image</th>
          <th>Action</th>
          <th>Action2</th>
        </tr>

        @foreach($data as $data)
        <tr align="center">
          <td>{{$data->name}}</td>
          <td>{{$data->speciality}}</td>
          <td><img src="/chefimage/{{$data->image}}" alt="Chef Image"></td>
          <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
          <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
        </tr>
        @endforeach
      </table>

    </div>
    @include("admin.adminscript")
  </body>
</html>
