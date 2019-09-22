<?php
    session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
<title>About Us</title>
<link rel="stylesheet" type="text/css" href="css/Aboutus.css"> <!--Linking css!-->
<link rel="stylesheet" text="test/css" href="css/header.css">
  <link rel="stylesheet" text="test/css" href="css/footer.css">

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  <!-- Bootstrap related !-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body id="body" style="margin: 0 auto;">



<!-- Start of header -->
<?php require 'common/header.php'; ?>
 
 <!-- Search box -->   
<div class="site-search clearfix">

	<form method="get" action="https://www.google.com/search?g=">
	<input type="search" name="search-box" value="search"  >
	<button type="submit" ></button>
	</form>
</div>

<br><br>

<!--Text!-->
<h2>About Us</h2>
<div class="aboutusout" > 
	<pre> <h3 id="aboutush3" >   
   Vision                                                         Mission
   To inspire and empower people to do                            We look at the market with fresh eyes to  
   things differently and shape their                             find new opportunities, and seek new ways  
   own path in life and business.                                 of enabling our customers to succeed and  
	                                                          advance the world of finance.
	  
   
   Services
   Coin Assets Bank of Sri lanka has been ranked as one of the best banks in the country. Perfect services 
   provided to banks's customers is the main reason for keeping Coin Assets Bank in the highest place.
   Main services provided by our bank are Business loans, Checking accounts, Savings accounts, Debit and 
   credit cards, Merchant services (credit card processing, reconciliation and reporting, check collection),
   Cash management (payroll services, deposit services, etc.)</h3>
	</pre>
	<br><br>
	  
	<pre><h3>     
                                                 Achievements </h3></pre>
<!--Bootstrap slideshow!-->
<div class="container">
 
<div id="myCarousel" class="carousel slide" data-ride="carousel">
   
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="ImagesNW/award1.jpg" style="width:100%;">
      </div>

      <div class="item">
        <img src="ImagesNW/award2.jpg" style="width:100%;">
      </div>                                          <!--IMAGES!-->
    
      <div class="item">
        <img src="ImagesNW/award3.jpg"  style="width:100%;">
      </div>
	  
	   <div class="item">
        <img src="ImagesNW/award4.jpg"  style="width:100%;">
      </div>
    </div>

    </div>

<br>
<div class="container">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <h4>Best Commercial Bank and Retail Bank 2018 by World Money Banking Awards</h4>
      </div>

      <div class="item">
        <h4>Best Bank of Sri lanka in 2017</h4>
      </div>                                     <!--TEXT!-->
    
      <div class="item">
      <h4>Bank of the Year - 2017</h4>
      </div>
	  
	   <div class="item">
        <h4>Best E-Commerce Banker - 2018</h4>
      </div>
    </div>

    </div>
</div>
<table ="100%"></table></div>
<br>
</div>
<!--End of bootstrap!-->

<br>


<!-- Footer -->
<?php require 'common/footer.php'; ?>

</body>
</html>
