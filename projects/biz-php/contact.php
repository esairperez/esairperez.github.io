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

<br>
 <h1><img src="assets/img/logo.png" width="200">
      <!--<u><strong>Up N Go</u>--></h1>

<body class="contact">

<?php

 require_once("nav.php");
 ?>
 <!-- Nav Bar for html
			 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">UP N GO</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          	
           <li><a href="index.html">Home</a></li>
            <li class="active"><a href="contact.html">Contact</a></li>
            <li><a href="products.html">Destinations</a></li> 
            <li><a href="about.html">About</a></li>
          </ul>
        </div><
      </div>
</nav>-->



<h1><u>Message Us</u></h1>
  <div id="questions">
  <p>If you have an questions or concerns, you can contact us by email, and we will get back to you as soon as we can.</p>
  </div>

<div id="email">
<img src="assets/img/email.png">
</div>





<form name="contactform" method="post" action="emailform.php">
  <Table>
    <tr>
      <td>
  <label for="first_name">First Name *</label>
</td>
  <td> 
 <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
<td>
  <label for="last_name">Last Name *</label>
  </td>
  <td>
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
  <td>
  <label for="email">Email Address *</label>
  </td>
  <td>
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
  <td>
  <label for="telephone">Telephone Number</label>
  </td>
  <td>
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
  <td>
  <label for="comments">Comments *</label>
  </td>
  <td>
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
  <tr>
  <td>
  <input type="submit" value="Submit">  
 </td>
</tr>
</Table>
</form>



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