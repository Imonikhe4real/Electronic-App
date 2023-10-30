<html>
   <head>
      <meta charset="utf-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet"  href="/css/bootstrap.css">
      <link rel="stylesheet"  href="/css/index.css">
      <link rel="stylesheet"  href="/css/ring.css">
      <link rel="stylesheet" href="/css/jquery.dataTables.min.css">

      <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>  
   <body>
   <div class="sidebar-container">
  <div class="sidebar-logo">
    E-App
  </div>
  <ul class="sidebar-navigation">
  <li class="header" style="background-color:grey;font-weight:bolder">Welcome {{ Auth()->user()->firstname }}</li>
  <li class="header" style="background-color:black;font-weight:bolder">Email : {{ Auth()->user()->email }}</li>
    <li class="header">Menu</li>
    <li>
      <a href="{{ route('admin.users.index') }}">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg>
        <i class="bi bi-person" aria-hidden="true"></i>Users
      </a>
    </li>
    <li>
      <a href="{{ route('admin.goods.index') }}">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
  <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
  <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
</svg>
<i class="bi bi-check2-circle"  aria-hidden="true"></i>Good Product
      </a>
    </li>
    <li>
      <a href="{{ route('admin.bads.index')}}">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-radioactive" viewBox="0 0 16 16">
  <path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1ZM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8Z"/>
  <path d="M9.653 5.496A2.986 2.986 0 0 0 8 5c-.61 0-1.179.183-1.653.496L4.694 2.992A5.972 5.972 0 0 1 8 2c1.222 0 2.358.365 3.306.992L9.653 5.496Zm1.342 2.324a2.986 2.986 0 0 1-.884 2.312 3.01 3.01 0 0 1-.769.552l1.342 2.683c.57-.286 1.09-.66 1.538-1.103a5.986 5.986 0 0 0 1.767-4.624l-2.994.18Zm-5.679 5.548 1.342-2.684A3 3 0 0 1 5.005 7.82l-2.994-.18a6 6 0 0 0 3.306 5.728ZM10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
</svg>
        <i class="bi bi-radioactive" aria-hidden="true"></i>Bad Product
      </a>
    </li>
    <li>
      <a href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>
        <i class="bi bi-box-arrow-right" aria-hidden="true"></i>Logout
      </a>
    </li>

  </ul>
</div>

<div class="p-3 bg-info" style="background-repeat:repeat;">
<div class="content-container text-bg-light">
	<div class="container-fluid">

  <div class="row">

<div class="border col-sm-3" style="height:200px;background-color:orange">
    <div class="center">
         <div class="ring" style="margin:0px;margin-top:-450px;"></div>
         <span style="font-weight:bolder;margin:0px;margin-top:-450px;">Admin :</span><br>
         <br><span style="font-weight:bolder;color:white;margin:0px;margin-top:-450px;">{{ Auth()->user()->firstname}}</span>
    </div>
</div>
	<div class="border col-sm-3" style="height:200px;background-color:blue">
    <div class="center">
         <div class="ring" style="margin:0px;margin-top:-450px;"></div>
         <span style="font-weight:bolder;margin:0px;margin-top:-450px;">Users :</span><br>
         <br><span style="font-weight:bolder;color:white;margin:0px;margin-top:-450px;">{{$users}}</span>
    </div>
</div>
	<div class="border col-sm-3" style="height:200px;background-color:green">
    <div class="center">
         <div class="ring" style="margin:0px;margin-top:-450px;"></div>
         <span style="font-weight:bolder;margin:0px;margin-top:-450px;">Good <br>Products :</span><br>
         <br><span style="font-weight:bolder;color:white;margin:0px;margin-top:-450px;"><br>{{$goods}}</span>
    </div>
</div>
	<div class="border col-sm-3" style="height:200px;background-color:red">
    <div class="center" >
         <div class="ring" style="margin:0px;margin-top:-450px;"></div>
         <span style="font-weight:bolder;margin:0px;margin-top:-450px;">Bad <br>Products :</span><br>
         <br><span style="font-weight:bolder;color:white;margin:0px;margin-top:-450px;"><br>{{$bads}}</span>
    </div>
</div>

</div>

  <br>
<br>
<br>
<br>
<br>
<br>

<div class="bg-white" style="max-height:0vh;background-color:white;">
<br>
<br>
<div style="font-weight:bolder;font-size:large;color:red"><center>Bad Products</center> </div>
@include('layouts.flash-message')
<div class="table-responsive">
                <table class="table stripe table-bordered hover display" id="bads">
                    <thead>
                       <th>Electronics</th>
                       <th>Price</th>
                       <th>Status</th>
                       <th>Email</th>
                       <th>Action</th>
                    </thead>
                   <tbody>
                   @foreach($data as $row)
                     	  <tr>
                    	<td>{{ $row->electronics }}</td>
                    	<td>{{ $row->price }}</td>
                      <td>{{ $row->status }}</td>
                      <td>{{ $row->email }}</td>
                    	<td width="6%">
<a href="{{route('admin.bads.show',$row->id)}}"><button type="button" class="btn btn-info">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg>
</button></a>
<a href="{{route('admin.bads.edit',$row->id)}}"><button type="button" class="btn btn-warning">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg>
</button></a>  
<form action="{{route('admin.bads.destroy',$row->id)}}" method="GET">
@csrf 
@method('DELETE')
<button type="submit" class="btn btn-danger">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg>
</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>

</div>
</div>



   

<script type="text/javascript" src="/js/jquery-3.7.1.js"></script>
<script type="text/javascript" src="/js/jquery.dataTables.min.js"></script>
<script>
  new DataTable('#bads');	
</script>

</div>
</div>
</div>
</div>


</body>
</html>

