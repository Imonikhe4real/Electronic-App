<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>www.eapp.com</title>  
        <link rel="stylesheet"  href="/css/w3.css"> 
        <link rel="stylesheet"  href="/css/slide.css">     
    </head>
    <body>
<div class="w3-top">
<div id="header" class="w3-orange" style="height:100px;width:auto;border:double-ridge;color:white;font-weight:bolder;font-size:20px;"></div>
<div class="w3-bar w3-black">
<a href="/" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Home</a>
@if (Route::has('login'))            
@auth                      
@else
<a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Login</a>
@if (Route::has('register'))
<a href="{{ route('register') }}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Register</a>
@endif
@endauth
@endif
<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>
<div id="demo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
<a href="/" class="w3-bar-item w3-button" style="font-weight:bolder;">Home</a>
@if (Route::has('login'))            
@auth                      
@else
<a href="{{route('login')}}" class="w3-bar-item w3-button" style="font-weight:bolder;">Login</a>
@if (Route::has('register'))
<a href="{{route('register')}}" class="w3-bar-item w3-button" style="font-weight:bolder;">Register</a>
@endif
@endauth
@endif
</div>
<script>
   function myFunction() {
  var x = document.getElementById("demo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
</div>
<div class="w3-border-0 w3-light-grey" style="height:138px;width:100%;">
	
</div>
<div class="w3-border-0" style="height:300px;width:100%;">
  <img class="mySlides" src="/images/Acer_Laptop.png" style="height:300px;width:100%">
  <img class="mySlides" src="/images/dell_laptop.png" style="height:300px;width:100%">
  <img class="mySlides" src="/images/Hp_Laptop.jpg" style="height:300px;width:100%">
  <img class="mySlides" src="/images/Itel.png" style="height:300px;width:100%">
  <img class="mySlides" src="/images/Lenovo_Laptop.png" style="height:300px;width:100%">
  <img class="mySlides" src="/images/LG.png" style="height:300px;width:100%">
  <img class="mySlides" src="/images/LGtv.png" style="height:300px;width:100%">
  <img class="mySlides" src="/images/Panasonic.jpg" style="height:300px;width:100%">
  <img class="mySlides" src="/images/Plasmatv.jpg" style="height:300px;width:100%">
  <img class="mySlides" src="/images/Samsung.png" style="height:300px;width:100%">
  <img class="mySlides" src="/images/Samsungtv.jpg" style="height:300px;width:100%">
</div>
<script>
var myIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 6000);
}
</script>
<div class="w3-border-0" style="height:50px;width:100%;">
 <marquee direction="left"><div id="welcome"></div></marquee>
</div>

<div class="w3-row">
   <div class="w3-half" style="height:400px;background-image:url('/images/LoginImg.jpg');">
   </div>
   <div class="w3-half w3-orange" style="height:400px;">
   <center>
     <div class="w3-border-0 w3-white" style="height:300px;width:300px;margin:0;margin-top:50px;"> 
                <div class="w3-black w3-text-white" style="font-weight:bolder;">Login</div>
                <div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                          <br>
                            <label for="email" style="font-weight:bolder;">Email</label>
                            <div>
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password" style="font-weight:bolder;">Password</label>

                            <div>
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div>


                                </div>
                            </div>
                        </div>
                        <br><br>
                             <div>
                            <div>
                                <button type="submit" class="w3-orange" style="font-weight:bolder;">
                                    Login
                                </button><br><br>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                </center>
   </div>
</div>

</div>
</div>


<div class="w3-border-0 w3-white" style="height:100px;width:100%;">

</div>
<footer>
<div class="w3-row">
  <div class="w3-col s4 w3-orange w3-center" style="height: 150px;">
    <br><br><br>
    <a href="/" style="text-decoration:none;font-weight:bolder;">Home</a>
  </div>
  <div class="w3-col s4 w3-orange w3-center" style="height: 150px;">
  <br><br><br>
    <a href="#" style="text-decoration:none;font-weight:bolder;">Instagram</a>
  </div>
  <div class="w3-col s4 w3-orange w3-center" style="height: 150px;">
  <br><br><br>
    <a href="#" style="text-decoration:none;font-weight:bolder;">Contact</p>
  </div>
</div>
<div class="w3-row">
  <div class="w3-col s4 w3-orange w3-center" style="height: 150px;">
  <br><br><br>
    <a href="{{route('login')}}" style="text-decoration:none;font-weight:bolder;">Login</a>
  </div>
  <div class="w3-col s4 w3-orange w3-center" style="height: 150px;">
  <br><br><br>
    <a href="#" style="text-decoration:none;font-weight:bolder;">Facebook</a>
  </div>
  <div class="w3-col s4 w3-orange w3-center" style="height: 150px;">
  <br><br><br>
    <a href="#" style="text-decoration:none;font-weight:bolder;">Enquiries</a>
  </div>
</div>
<div class="w3-row">
  <div class="w3-col s4 w3-orange w3-center" style="height: 150px;">
  <br><br><br>
    <a href="{{ route('register')}}" style="text-decoration:none;font-weight:bolder;">Register</p>
  </div>
  <div class="w3-col s4 w3-orange w3-center" style="height: 150px;">
  <br><br><br>
    <a href="#" style="text-decoration:none;font-weight:bolder;">Linkedin</a>
  </div>
  <div class="w3-col s4 w3-orange w3-center" style="height: 150px;">
  <br><br><br>
    <a href="#" style="text-decoration:none;font-weight:bolder;">Our Company</a>
  </div>
</div>
<div class="w3-row">
  <div class="w3-col s4 w3-black w3-center" style="height: 100px;">
  </div>
  <div class="w3-col s4 w3-black w3-center" style="height:100px;">
  <br>
     <center><b><font>All right reserved. &copy 2023 - 2025</font></b></center>
  </div>
  <div class="w3-col s4 w3-black w3-center" style="height:100px;">
</div>


</footer>


<script>
document.getElementById('header').innerHTML = '<br><center>Electronic App</center>';
document.getElementById('welcome').innerHTML = "<b>Feel free to click on register to register and login.</b>";
</script>
</body>
</html>