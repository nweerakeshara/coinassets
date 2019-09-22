 <?php
 	session_start();

 	require 'common/access.php';

 	require 'common/preventBack.php';
 ?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Customer Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/customer_page.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" text="test/css" href="css/header.css">
<script src="js/customer_script.js"></script>

<!--..........................prevent go back to logged in page.......................-->




</head>
<body style="margin: 0 auto;">

	<?php require 'common/header.php'; ?>

	<!-- Search box -->   
<div class="site-search clearfix">

	<form method="get" action="https://www.google.com/search?g=">
	<input type="search" name="search-box" value="search"  >
	<button type="submit" ></button>
	</form>
</div>

<div class="box">	
	
	
	<div class="info-box">
		
		<div class="image">
			
			<img src="images/avatarRe.png">
			
		</div><!--image-->
		
			<div class="info">
			
										<div class="role help">
					
										<h3>Role</h3>
										
										<p>Customer</p>
					
										</div><!--role-->
			
			</div><!--info-->
			
			
				<div class="info">
			
										<div class="value help">
					
										<h3>Account Balance</h3>
										
										<p>8673.29 LKR</p>
					
										</div><!--role-->
			
				</div><!--info-->
			
			
					<div class="info">
									
									
										<div class="contact help">
					
										<h3>Contact Info</h3>
										
										<p>+94112589674<br>adamwarlock@bankcc.com</p>
					
										</div><!--role-->			
			
			
			
					</div><!--info-->
		
		
		
		
		
	</div><!--info-box-->
	
	
	
	<div class="sum-box clearfix">
		
		<div class="title">
		
					<h1>Recent Activities</h1>	
			
				
					<img src="images/Webp.net-resizeimage.png" alt="More" >
			
					
					
		</div><!--title-->
		
		
		
	<div class="summery-box clearfix pointer">
		
			<p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less </p>	
			
			<p id="date1">2016.06.02</p>
			
			<button type="button" >Remove</button>
		
	</div><!--summery-box-->
	
	
	
	<div class="summery-box clearfix pointer">
		
			<p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less </p>	
			
			<p id="date2">2016.05.24</p>
			
			<button type="button" >Remove</button>
		
	</div><!--summery-box-->	
	
	
	
	<div class="summery-box clearfix pointer">
		
			<p> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even</p>	
			
			<p id="date3">2016.05.21</p>
			
			<button type="button" >Remove</button>
		
		
	</div><!--summery-box-->		
			
				
	<div class="drop-down pointer">
		
		<img src="images/Webp.net-resizeimage (3).png" >
		
	</div><!--drop-down-->					
						
								
	</div><!--sum-box-->
	
	
								<div>	
								<a href="Fund Transfer.php" class="button">Fund Transfer</a>
								</div><!--button-->
	

	
	<div class="ad-box ">
		
		
		<video width="640" height="360" controls >
  		<source  src="videos/Banking explained.MP4" type="video/mp4">
 

		</video>
		
	</div><!--ad-box-->			
				
						
		
</div> <!--box-->

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />   
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<?php require 'common/footer.php'; ?>
	
</body>
</html>
