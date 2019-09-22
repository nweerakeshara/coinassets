<?php
    session_start();

 ?>
<!DOCTYPE html>
<html>


<head>
<title>Contact Us</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/contactUs.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/Aboutus.css">

<script src="scripts/myscripts.js"></script> 
 </head>


<body style="margin: 0 auto;">
<!-- Start of header -->
<?php require 'common/header.php'; ?>
 <!-- End of header -->

<br/><br/><br/>


<div>
	<img src="images/cust.jpg" id ="cust">
<h1 id ="head">Contact our 24 hour custermer service </h1>
<h3 id="cus">Dial 1414 to customer service...</h3>

</div>
<fieldset id = "cont">
<legend id = "con">Contact Us</legend>
<div class ="contd">


		<div class = "emailC">
		
	 	<fieldset id ="emailF">
	  	<legend id = "emailL">Email:</legend>
		 <p>Bank.ex@example.com<p>
		<p>branch.ex@example.com</p>
		<img src="images/gmail.png" id = "gmail">
		 </fieldset>
		
		</div>
<br/>
<br/>

		<div class = "phone">
		
	 	<fieldset id = "phoneH">
	  	<legend id ="phoneL">Phone:</legend>
		 <p>Colomo :+94 564 737 73<p>
		<p>Branch manager: +94 708 933 73</p>
		<img src="images/phone.png" id = "phoneI">
		 </fieldset>
		
		</div>

</div>

<br><br><br>
<div class = "feedback">
<fieldset id="feldset">
<legend id="fed">Feedback</legend>
<form name ="valid" onsubmit="return emailValidate();" method="post">
		
			<div class = "email">
			<input type="text" name="email" id="email" placeholder = "Your Email...">
			</div>
<br/>
			
			<div class = "name">
			<input type = "text" id="name" name="name" placeholder = "Your name...">
			</div>


<br/>
			<div class = "content">
			<form>
			<textarea id="content" name="content" placeholder="Write something..."></textarea>
			</div>
<br/>
	
			<div class="submit">
			<input type="submit" value="Submit">
			<p id="demo"></p>
			</div>

			<img src="images/feedback.jpg " id="fedb">
</form>

</fieldset>
</div>




</fieldset>
<br/>
<br/>
<div>

	<img src="images/ecommerce.jpg" id ="addver">


</div>

<br><br>
<!-- Footer -->
<?php require 'common/footer.php'; ?>

</body>
</html>