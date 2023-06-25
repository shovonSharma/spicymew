<x-app-layout>
   
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss")  
    
    <style>
    table {
        margin: 0 auto;
        background-color: #87CEEB;
        
    }
    
    th, td {
        padding: 20px;
    }
    
    th {
        background-color: #f2f2f2;
    }
    </style>
    

  </head>
  <body>

    <div class="container-scroller">

    @include("admin.navbar")

    <!-- <h1>HAR HAR MAHADEV</h1> -->
      <div style="position:relative; top: 88px; right:-120px">
        <table >

          <tr>
            <th style="color: lightcoral ;padding: 30px">NAME</th>
            <th style="color: lightcoral ;padding: 30px">EMAIL</th>
            <th style="color: lightcoral ;padding: 30px">Action</th>
          </tr>

          @foreach($data as $data)
          <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>

            @if($data->usertype=="0")
            <td ><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
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