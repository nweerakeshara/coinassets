<?php
    session_start();
    require 'common/access.php';
    require 'common/preventBack.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Bank Accountant</title>
<link rel="stylesheet" type="text/css" href="css/fundtransfer.css"> <!--Linking css!-->

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  <!--Common to all Headers of the pages!-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="scripts/formvalidate.js"></script>

  <script type="text/javascript">
	 
	function prevent_back(){
		window.history.forward();
	}
	setTimeout("prevent_back()", 0);
	window.onunload = function(){
		null
	};
  </script>
  
</head>
<body id="body" style="margin: 0 auto;">



<!-- Start of header -->
<?php include 'common/header.php'; ?>
 <!-- End of header -->
 
 <!-- Search box -->   
<div class="site-search clearfix">

	<form method="get" action="https://www.google.com/search?g=">
	<input type="search" name="search-box" value="search"  >
	<button type="submit" ></button>
	</form>
</div>






<div class="wrapper">

	<div class="page-title">
		
		
		<p>Accountant Portal</p>
		
		
	</div><!--page-title-->
	
	
	
	
	<div class="row1">
		
		
			<div class="pic1 clearfix">
				
								<img src="images/bank.png" width="400px" height="296px">
				
			</div><!--pic1-->
			
			
			<div class="pic2 clearfix">
				
								<img src="images/pie1.jpg" width="400px" height="296px">	
				
			</div><!--pic2-->
		
		
		
				
	</div><!--row1-->
	
	
			<div class="name1 clearfix">
				
				<p>Financial Inclusion</p>
				
			</div><!--name-->
			
			<div class="name2 clearfix">
				
				<p>Banks and Corporation</p>
				
			</div><!--name-->

	
	<div class="row2">
		
			<div class="pic3 clearfix">
				
				
											<img src="images/pro.png" width="400px" height="296px">
				
				
			</div><!--pic1-->
			
			
			<div class="pic4 clearfix">
				
											<img src="images/123.png" width="400px" height="296px">
				
			</div><!--pic2-->
		
		
		
				
	</div><!--row2-->
		
		
			<div class="name3 clearfix">
				
				<p>Linear Charts</p>
				
			</div><!--name-->
			
			<div class="name4 clearfix">
				
				<p>Currency Pairs</p>
				
			</div><!--name-->

</div>
	

<!-- Footer -->
<?php require 'common/footer.php'; ?>

</body>
</html>
