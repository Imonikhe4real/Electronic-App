<html>
    <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet"  href="/css/bootstrap.css">
      <link rel="stylesheet"  href="/css/index.css">
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
      <a href="{{ route('admin.users.index')}}">
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
      <a href="{{ route('logout') }}" method="POST" onclick="event.preventDefault();
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
<div class="content-container">
	<div class="container-fluid">

<center>
<div class="jumbotron" style="height:600px;width:50%;background-color:white;" align="center">
<a href="{{route('admin.goods.index')}}" class="btn btn-default">Back to Main Page</a>
<h3 align="center" style="color:green;">Edit Good Products Here</h3><br>
<p><span style="color:red;font-weight:bolder">*</span> means required</p>

@include('layouts.flash-message')

<form action="{{ route('admin.goods.update',$data->id) }}" method="POST">  
@csrf
{{ method_field('POST') }}
<div class="form-group row">
<label for="electronics" class="col-md-3 col-form-label text-md-right"><span style="color:red;font-weight:bolder">*</span>Electronics</label>
<div class="col-md-6">
<select name="electronics"  id="electronics" class="form-control @error('electronics') is-invalid @enderror" style="width:100%;"  required autofocus>
     <option value="{{$data->electronics}}">{{$data->electronics}}</option>  
     <option value="Hp Laptop">HP Laptop</option>  
     <option value="Lenovo Laptop">Lenovo Laptop</option>  
     <option value="Dell Laptop">Dell Laptop</option>  
     <option value="Acer Laptop">Acer Laptop</option>  
     <option value="LG Tv">LG Tv</option>  
     <option value="Panasonic Tv">Panasonic Tv</option>  
     <option value="Samsung Tv">Samsung Tv</option>  
     <option value="Plasma Tv">Plasma Tv</option>  
     <option value="Itel Phone">Itel Phone</option>  
     <option value="LG Phone">LG Phone</option>  
     <option value="Samsung Phone">Samsung Phone</option>  
     <option value="Panasonic Phone">Panasonic Phone</option>   
</select>
@error('electronics')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="form-group row">
<label for="price" class="col-md-3 col-form-label text-md-right"><span style="color:red;font-weight:bolder">*</span>Price</label>
<div class="col-md-6">
<select name="price" id="price" class="form-control @error('price') is-invalid @enderror" style="width:100%;" value="{{ old('price') }}" required autofocus>
     <option value="{{$data->price}}">{{$data->price}}</option>  
     <option value="$20000 - Hp Laptop">$20000 - HP Laptop</option>  
     <option value="$30000 - Lenovo Laptop">$30000 - Lenovo Laptop</option>  
     <option value="$40000 - Dell Laptop">$40000 - Dell Laptop</option>  
     <option value="$60000 - Acer Laptop">$60000 - Acer Laptop</option>  
     <option value="$10000 - LG Tv">$10000 - LG Tv</option>  
     <option value="$11000 - Panasonic Tv">$11000 - Panasonic Tv</option>  
     <option value="$12000 - Samsung Tv">$12000 - Samsung Tv</option>  
     <option value="$13000 - Plasma Tv">$13000 - Plasma Tv</option>  
     <option value="$3000 - Itel Phone">$3000 - Itel Phone</option>  
     <option value="$4000 - LG Phone">$4000 - LG Phone</option>  
     <option value="$5000 - Samsung Phone">$5000 - Samsung Phone</option>  
     <option value="$6000 - Panasonic Phone">$6000 - Panasonic Phone</option>   
</select>
@error('price')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="form-group row">
<label for="status" class="col-md-3 col-form-label text-md-right"><span style="color:red;font-weight:bolder">*</span>Status</label>
<div class="col-md-6">
<select name="status" id="status" type="status" class="form-control @error('status') is-invalid @enderror" style="width:100%;"  value="{{ old('status') }}" required autofocus>
     <option value="{{$data->status}}">{{$data->status}}</option>  
     <option value="Good">Good</option>     
</select>
@error('status')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="form-group row">
<label for="email" class="col-md-3 col-form-label text-md-right"><span style="color:red;font-weight:bolder">*</span>Email</label>
<div class="col-md-6">
<input name="email"  id="email" type="email" class="form-control @error('email') is-invalid @enderror" style="width:100%;" name="email" value="{{$data->email}}" required autofocus>

@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="form-group">
<center>
<button type="submit" class="btn btn-primary" style="font-weight:bolder;">
Save Chnages
</button>
</center>
</div>

</form>




</center>
</div>
</div>
</div>
</div>