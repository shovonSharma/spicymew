<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>

<x-app-layout>
   
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss")
    

  </head>
  <body>

    <div class="container-scroller">

    @include("admin.navbar")

    <!-- <h1>HAR HAR MAHADEV</h1> -->
      <div style="position:relative; top: 88px; right:-120px">
        <table border="3px">
          <tr>
            <th style="padding: 30px">NAME</th>
            <th style="padding: 30px">EMAIL</th>
            <th style="padding: 30px">Action</th>
          </tr>



          @foreach($data as $data)
          <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>

            @if($data->usertype=="0")
            <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
            @else
            <td><a>Not Allowed</a></td>
            @endif

          </tr>
          @endforeach

        </table>


      </div>

    </div>


    @include("admin.adminscript")
  </body>
</html>
  
</body>
</html>