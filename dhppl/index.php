<!DOCTYPE html>
<html lang = "en-US">
 <head>
 <meta charset = "UTF-8">
 <title>Home Page</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
 <link rel = "stylesheet" type = "text/css" href = "style.css" />
 <link rel = "stylesheet" type = "text/css" href = "styles.css" />
 <script src="bootstrap/jquery-3.1.1.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
    <style type="text/css">
 </style>
 </head>
 <body style="background-color:#FEF9E7;">
 <?php  
require_once('header.php'); 
?> 

    <div class="container">

        <div class="row">

                <div class="col-md-3">
          <!-- serach start-->
         <br>
         <b>Search Properties</b>
       <form>
            <input type="text" placeholder="Search..." required>
            <input type="button" value="Search">
        </form>
        <br>
         <!-- serach end-->
                    <p class="lead">House Categories</p>
                    <div class="list-group">
                        <a href="single-flat.php" class="list-group-item">Single Flat</a>
                        <a href="duplex.php" class="list-group-item">Duplex Home</a>
                        <a href="single-room.php" class="list-group-item">Single Room</a>
                        <a href="no-property-found.php" class="list-group-item">Holiday Cottage</a>
                        <a href="no-property-found.php" class="list-group-item">Bunglow</a>
                    </div>

      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Property Search by Area
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="dhanmondi.php">Dhanmondi</a></li>
          <li><a href="mirpur.php">Mirpur</a></li>
          <li><a href="banani.php">Banani</a></li>
          <li><a href="uttara.php">Uttara</a></li>
          <li><a href="gulshan.php">Gulshan</a></li>
          <li><a href="motijheel.php">Motijheel</a></li>
        </ul>
      </div>
        </div>
             
             <div class="col-md-9">
<br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/img1.jpg" alt="Chania" style="width:900px; height:550px;">
        <div class="carousel-caption">
          <h3 style="color:yellow;">Babui Nir</h3>
          <p style="color:yellow;">Our recently comleted project</p>
        </div>
      </div>

      <div class="item">
        <img src="images/img2.jpg" alt="Chania" style="width:900px; height:550px;">
        <div class="carousel-caption">
          <h3 style="color:yellow;">Bashati Camelia</h3>
          <p style="color:yellow;">Our very first project</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/img3.jpg" alt="Flower" style="width:900px; height:550px;">
        <div class="carousel-caption">
          <h3 style="color:yellow;">Dhaka Villa</h3>
          <p style="color:yellow;">A multi-national financial project</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
</div> 
<br>
<br>
<br>
<br>            
<?php
require_once('about.php');
require_once('terms.php');
require_once('footer.php');   
 ?>
 </body>
 </html>
