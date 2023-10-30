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
<div class="w3-quarter">
    <div class="w3-border-0 w3-light-grey" style="background-color:blue;height:400px;">
    <br><br>
    <center>
    <img src="/images/Acer_Laptop.png" style="height:200px;border-radius:50px;">
     <br><br>
     <p align="center" style="font-weight:bolder">Acer Laptop</p>
     </center> 
    </div>
</div>
<div class="w3-quarter">
<div class="w3-border-0 w3-light-grey" style="background-color:red;height:400px;">
<br><br>
    <center>
    <img src="/images/Lenovo_Laptop.png" style="height:200px;border-radius:50px;">
     <br><br>
     <p align="center" style="font-weight:bolder">Lenovo Laptop</p>
     </center> 
    </div>
</div>
<div class="w3-quarter">
<div class="w3-border-0 w3-light-grey" style="background-color:green;height:400px;">
<br><br>
    <center>
    <img src="/images/Hp_Laptop.jpg" style="height:200px;width:60%;border-radius:50px;">
     <br><br>
     <p align="center" style="font-weight:bolder">Hp Laptop</p>
     </center>     
</div>
</div>
<div class="w3-quarter">
<div class="w3-border-0 w3-light-grey" style="background-color:orange;height:400px;">
<br><br>
    <center>
    <img src="/images/dell_laptop.png" style="height:200px;border-radius:50px;">
     <br><br>
     <p align="center" style="font-weight:bolder">Dell Laptop</p>
     </center>  
    </div>
</div>
</div>
<div class="w3-border-0" style="height:200px;width:100%;">
<div class="mySlides2 w3-container w3-grey" style="height:200px;">
    <br>
    <center><b><font size="+5" style="color:white">Laptops</font></b></center><br>
    <p align="center" style="font-weight: bolder;">We have great and affordable Laptops with different versions and different prices.</p>  
</div>
<div class="mySlides2 w3-container w3-grey" style="height:200px;">
<br>
<center><b><font size="+5" style="color:white"> Phones </font></b></center><br>
    <p align="center" style="font-weight: bolder;">Our phones are top notch with lovely features included in it and with different prices.</p>  
</div>
<div class="mySlides2 w3-container w3-grey" style="height:200px;">
<br>
<center><b><font size="+5" style="color:white"> TV's</font></b></center><br>
    <p align="center" style="font-weight: bolder;">We have TV's of different sizes and of different prices.</p>  
</div>
</div>
<div class="w3-row">
<div class="w3-quarter">
    <div class="w3-border-0 w3-light-grey" style="background-color:blue;height:400px;">
    <br><br>
    <center>
    <img src="/images/Itel.png" style="height:200px;border-radius:50px;">
     <br><br>
     <p align="center" style="font-weight:bolder">Itel Phone</p>
     </center> 
    </div>
</div>
<div class="w3-quarter">
<div class="w3-border-0 w3-light-grey" style="background-color:red;height:400px;">
<br><br>
    <center>
    <img src="/images/LG.png" style="height:200px;border-radius:50px;">
     <br><br>
     <p align="center" style="font-weight:bolder">LG Phone</p>
     </center> 
    </div>
</div>
<div class="w3-quarter">
<div class="w3-border-0 w3-light-grey" style="background-color:green;height:400px;">
<br><br>
    <center>
    <img src="/images/Panasonic.jpg" style="height:200px;border-radius:50px;">
     <br><br>
     <p align="center" style="font-weight:bolder">Panasonic Phone</p>
     </center>     
</div>
</div>
<div class="w3-quarter">
<div class="w3-border-0 w3-light-grey" style="background-color:orange;height:400px;">
<br><br>
    <center>
    <img src="/images/Samsung.png" style="height:200px;border-radius:50px;">
     <br><br>
     <p align="center" style="font-weight:bolder">Samsung Phone</p>
     </center>  
    </div>
</div>
</div>

<div class="w3-border-0" style="height:200px;width:100%;background-color:lightgrey">
          
          <br><br>
          <div id="aboutHeader"></div><br>
          <div id="aboutWriteup"></div>
</div>

<div class="w3-row">
<div class="w3-third">
    <div class="w3-border-0 w3-light-grey" style="background-color:blue;height:400px;">
    <br><br>
    <center>
    <img src="/images/Samsungtv.jpg" style="height:200px;border-radius:50px;">
     <br><br>
     <p align="center" style="font-weight:bolder">Samsung TV</p>
     </center> 
    </div>
</div>
<div class="w3-third">
<div class="w3-border-0 w3-light-grey" style="background-color:red;height:400px;">
<br><br>
    <center>
    <img src="/images/LGtv.png" style="height:200px;border-radius:50px;">
     <br><br>
     <p align="center" style="font-weight:bolder">LG TV</p>
     </center> 
    </div>
</div>
<div class="w3-third">
<div class="w3-border-0 w3-light-grey" style="background-color:green;height:400px;">
<br><br>
    <center>
    <img src="/images/Plasmatv.jpg" style="height:200px;border-radius:50px;">
     <br><br>
     <p align="center" style="font-weight:bolder">Plasma TV</p>
     </center>     
</div>
</div>
</div>
<div class="w3-border-0" style="height:150px;width:100%;">

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










</div>

<script>
var slideIndex1 = 0;
carousel1();

function carousel1() {
  var i;
  var x = document.getElementsByClassName("mySlides2");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex1++;
  if (slideIndex1 > x.length) {slideIndex1 = 1} 
  x[slideIndex1-1].style.display = "block"; 
  setTimeout(carousel1, 3000); 
}
</script>
<script>
 document.getElementById('header').innerHTML = '<br><center>Electronic App</center>';
 document.getElementById('welcome').innerHTML = "<b>Feel free to click on register to register and login</b>";
 document.getElementById('aboutHeader').innerHTML = '<center><b><u><font size="+2">About US</font></b></u></center>';
 document.getElementById('aboutWriteup').innerHTML = '<center>Electronic App was  developed for the purpose of Good or Bad electronic items which is used for taking records and acting towards the records of the affected items.</center>';
</script>
</body>



</html>
