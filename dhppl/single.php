<!DOCTYPE html>
<html>
<title>Single flat</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
 <link rel = "stylesheet" type = "text/css" href = "style.css" />
<link rel="stylesheet" href="w3.css">
<body>
<?php  
require_once('header.php'); 
?> 
 <div class="container-fluid">
 <br>
<div class="w3-content w3-display-container">

<a class="w3-btn-floating w3-hover-dark-grey w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
<a class="w3-btn-floating w3-hover-dark-grey w3-display-right" onclick="plusDivs(1)">&#10095;</a>

<div class="w3-display-container mySlides">
  <img src="images/img6.jpg" style="width:100%">
  <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
   Contact:019XXXXXXXX(Mr.ABC) 
 
  </div>
 
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Location:Mirpur-1,Dhaka.
  </div>
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
    Description:1bed+1dinning+Drawing+1Kitchen+1Bathroom+1veranda
  </div>
<div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    Rate:10000tk/month
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="images/img7.jpg" style="width:100%">
   <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
   Contact:019XXXXXXXX(Mr.KMC) 
 
  </div>
 
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Location:Dhanmondi-15,Dhaka.
  </div>
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
    Description:2bed+1dinning+1Drawing+1Kitchen+2Bathroom+1veranda
  </div>
<div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    Rent rate:20000tk/month
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="images/img8.jpg" style="width:100%">
  <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
   Contact:015XXXXXXXX(Mr.THR) 
 
  </div>
 
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Location:Motijheel,Dhaka.
  </div>
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
    Description:2bed+1dinning+Drawing+1Kitchen+2Bathroom+1veranda
  </div>
<div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    Rent rate:15000tk/month
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="images/img9.jpg" style="width:100%">
  <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
   Contact:017XXXXXXXX(Mr.PNZ) 
 
  </div>
 
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Location:Banani,Dhaka.
  </div>
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
    Description:3bed+1dinning+1Drawing+1Kitchen+2Bathroom+2veranda
  </div>
<div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    Rate:35000tk/month
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="images/img10.jpg" style="width:100%">
  <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
   Contact:018XXXXXXXX(Mr.MNM) 
 
  </div>
 
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Location:Gulshan-2,Dhaka.
  </div>
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
    Description:3bed+1dinning+1Drawing+1Kitchen+2Bathroom+2veranda
  </div>
<div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    Rate:35000tk/month
  </div>
</div>
<div class="w3-display-container mySlides">
  <img src="images/img11.jpg" style="width:100%">
  <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
   Contact:016XXXXXXXX(Mr.RND) 
 
  </div>
 
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Location:Uttara sector-3,road-2,Dhaka.
  </div>
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
    Description:2bed+1dinning+1Drawing+1Kitchen+2Bathroom+2veranda
  </div>
<div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    Rate:15000tk/month
  </div>
</div>
</div>
<h1><center>SINGLE FLAT DESCRIPTION</center></h1>
</div>
<br>
<?php
require_once('footer.php');   
 ?>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>
