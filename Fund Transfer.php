<?php
    session_start();
    require 'common/access.php';
    require 'common/preventBack.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Fund Transfer</title>
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

	<form class="myform" align="center" name="myform" method="POST" action="" onsubmit="return formvalidation()">
	<p id="head"></p>
		
	<div class="pre-form">		
	<p align="center">Fund Transfer</p>
	<br>
		<label>Name of Holder</label>
			<input type="text"  minlength="3" maxlength="12" name="accnofold" id="accnofold" placeholder="enter number of the account folder"required><br>
		<label>Account number</label>
			<input type="text" minlength="3" maxlength="12" name="accno" id="accno" placeholder="Enter account number"required><br>
		<label>Invoice number</label>
			<input type="text" name="invoiceno" id="invoiceno" placeholder="Enter invoice number"required><br>
		<label>Security code</label>
			<input type="text" name="seccode" placeholder="Enter security code" id="seccode"/><br><br>
		<label>Date</label>	
			<input type="date" name="date" id="date" value="Enter date"/><br>
		<label>Total amount</label>
			<input type="text" name="totamount" placeholder="Enter total amount"id="totamount"/><br>
		<label>password</label>
			<input type="password" placeholder="Enter password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"  pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"
title="Please include at least 1 uppercase character, 1 lowercase character, and
1 number."  name="password" id="password" required><br><br>
			
			<input type="submit" name="submit" id="submit" value="Send the payment"><br>
			
			</div>
			
			<br><br>
			
	</form>		
			
	</div>
	



<!-- Footer -->
<?php require 'common/footer.php'; ?>

</body>
</html>
