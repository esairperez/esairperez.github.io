<!DOCTYPE html>
<html lang="en">
	 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">
    <title>UP N GO</title>
  </head>


<body>
  <?php
  require_once("nav.php");
  
  ?>
<!--NavBar for html
<div class="nav">
       <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" class="active" href="index.html">UP N GO</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          
           <li class="active"><a href="index.html">Home</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="products.html">Destination</a></li> 
            <li><a href="about.html">About</a></li>   
          </ul>
        </div>
      </div>
    </nav>
  </div>-->
      <br>
      <br>
      <br>

<div id="head">
   <div>
    <h1><img src="assets/img/logo.png" width="200">
      <!--<u><strong>Up N Go</u>--></h1>
  </div>
</div>

<header class="main-header" role="banner">
  <img src="assets/img/banner.jpg" alt="Banner" width="1300" height="300">
  </header>

<div class="row">
  <div class="list"> 
    <div class="col-lg-3 col-lg-push-0">
      <h2>Top Five Countries</h2>
        <li>France</li>
        <li>Spain</li>
        <li>Italy</li>
        <li>Germany</li>
        <li>U.S.A</li>
    </div>
  </div>
      
  <div class="list">
    <div class="col-lg-6 col-lg-push-5">
        <h2>Favorite Attractions</h2>
        <li>Abendstimmung</li> 
        <li>Eiffel Tower</li> 
        <li>Pisa Tower</li> 
        <li>Disney Land</li> 
        <li>Berlin Wall</li> 
    </div>
  </div>

    <div class="col-lg-3 col-lg-pull-5">
        <p id="p">Our Company helps you see the top vacations spots in the world. We also tell you what places you can go to while you are there and the most popular visited attractions. We help you have the best expreience of your lifetime and try to keep you up-to-date on the most visited countries.</p>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
      <img src="assets/img/france.png"/>
      <img src="assets/img/spain.png"/>
      <img src="assets/img/italy.png"/>
      <img src="assets/img/germany.png"/>
      <img src="assets/img/pisa.jpg"/>
      <img src="assets/img/disneyland.jpg"/>
      <img src="assets/img/eiffel-tower.jpg"/>
    </div>
</div>
<br>
<br>

<div class="pic">
  <div class="row">
    <div class="col-lg-10">
      <img src="assets/img/usa.jpg"/>
      <img src="assets/img/berlin_wall.jpg"/>
      <img src="assets/img/abendstimmung.jpg"/>
    </div>
  </div>
</div>

<?php
require_once("footer.php");

?>

<!-- footer for html
<footer>
  <a href="sitemap.html"><p><u>SiteMap</a></u></p>
</footer>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>