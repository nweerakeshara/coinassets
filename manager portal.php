<?php
    session_start();
    require 'common/access.php';
    require 'common/preventBack.php';
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Manager Portal</title>
<link href="css/script-customer-ui.css" rel="stylesheet" type="text/css">
<link href="css/header.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> 
<script src="scripts/script.js"></script>

<script src="scripts/myScript.js"></script>

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
<body style="margin: 0 auto;">
	<!--header-->
<?php include 'common/header.php'; ?>

<div class="wrapper">


	<div class="page-title">
		
		
		<p>Manager Portal</p>
		
		
	</div><!--page-title-->
	
	
	<div id="chartContainer" style="height: 300px; width: 100%;"> </div>
	
	
	<div class="row1">
		
		
			<div class="pic1 clearfix">
				
								<img src="images/chart1.png" width="400px" height="296px">
				
			</div><!--pic1-->
			
			
			<div class="pic2 clearfix">
				
								<img src="images/Webp.net-resizeimage_mp.png" width="400px" height="296px">	
				
			</div><!--pic2-->
		
		
		
				
	</div><!--row1-->
	
	
			<div class="name1 clearfix">
				
				<p>Worldwide Financial</p>
				
			</div><!--name-->
			
			<div class="name2 clearfix">
				
				<p>Loan and shadows</p>
				
			</div><!--name-->

	
	<div class="row2">
		
			<div class="pic3 clearfix">
				
				
											<img src="images/Webp.net-resizeimage.jpg" width="400px" height="296px">
				
				
			</div><!--pic1-->
			
			
			<div class="pic4 clearfix">
				
											<img src="images/Webp.net-resizeimage (3)_mp.png" width="400px" height="296px">
				
			</div><!--pic2-->
		
		
		
				
	</div><!--row2-->
		
		
			<div class="name3 clearfix">
				
				<p>Forex Charts</p>
				
			</div><!--name-->
			
			<div class="name4 clearfix">
				
				<p>Currency Pairs</p>
				
			</div><!--name-->




<div class="pie_charts">
	
	
<img id="pie" src="images/pie 1.jpg">
<p id="description"></p>	
	
	<button onClick="document.getElementById('pie').src='images/pie 2.jpg'"><img src="images/button.jpg"></button>
	
	<button onClick="document.getElementById('pie').src='images/pie 3.png'"><img src="images/button.jpg"></button>
	
	<button onClick="document.getElementById('pie').src='images/pie 1.jpg'"><img src="images/button.jpg"></button>
	
	
	
	
</div><!--pie_charts-->


	
	




</div><!--wrapper-->

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php require 'common/footer.php'; ?>
	
	
</body>
</html>
