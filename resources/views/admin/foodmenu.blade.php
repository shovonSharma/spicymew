<x-app-layout> 
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 10px;
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
      form input[type="number"],
      form input[type="file"],
      form input[type="submit"] {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
      }

      table {
        width: 100%;
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
        max-width: 200px;
        max-height: 200px;
      }

      a {
        color: green;
        text-decoration: none;
      }

      div.overflow-scroll {
        overflow: scroll;
      }
    </style>
    @include("admin.admincss")
  </head>

  <body>
    <div class="container-scroller">
      @include("admin.navbar")

      <div style="position:relative; top:28px; right: -30px;">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div>
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="Write a Title" required>
          </div>
          <div>
            <label for="price">Price</label>
            <input type="number" name="price" placeholder="Price" required>
          </div>
          <div>
            <label for="image">Image</label>
            <input type="file" name="image" required>
          </div>
          <div>
            <label for="description">Description</label>
            <input type="text" name="description" placeholder="Description" required>
          </div>
          <div>
            <input type="submit" value="Save">
          </div>
        </form>

        <div class="overflow-scroll">
          <table>
            <tr>
              <th>Food Name</th>
              <th>Price</th>
              <th>Description</th>
              <th>Image</th>
              <th>Action1</th>
              <th>Action2</th>
            </tr>

            @foreach($data as $data)
            <tr align="center">
              <td>{{$data->title}}</td>
              <td>{{$data->price}}</td>
              <td>{{$data->description}}</td>
              <td><img src="/foodimage/{{$data->image}}" alt="Food Image"></td>
              <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
              <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
    @include("admin.adminscript")
  </body>
</html>
