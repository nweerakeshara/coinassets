<?php
    session_start();
    require 'common/access.php';
    require 'common/preventBack.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Risk Officer</title>
<link rel="stylesheet" type="text/css" href="css/Table.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/Aboutus.css">
<link rel="stylesheet" type="text/css" href="css/navi_riskofficer.css">

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

<!-- Start of header -->
<?php include 'common/header.php'; ?>
 <!-- End of header -->

<br/>
<br/>
<br/>
<br/>


<table id="riskDetails">
  <tr>
    <th>Officer Details</th>
  </tr>
  <tr>
    <td>Name: K.P.D Amarasingha.<br/><br/>
      Post: Risk Officer<br/><br/>
      Service ID: 120.2364.321<br/><br/>
      status: Online<br/><br/>
      <a href="logout.php"><button id="but">Logout</button></a>  
    </td>
  </tr>

<!-- table -->

<table id="risk">
  <br/>
  <tr>
    <th>Branch Island wide</th>
    <th>Transaction(Last 3 month)</th>
    <th>view Details of previous Transactions</th>
  </tr>
  <tr>
    <td>Colombo </td>
    <td>LKR 586,456,345.00</td>
    <td><input type="button" id="but" value="This Year"><input type="button" id ="but" value="Last Year"></td>
  </tr>
  <tr>
    <td>Gampha</td>
    <td>LKR 345,786,543.00</td>
    <td><input type="button" id="but" value="This Year"><input type="button" id ="but" value="Last Year"</td>
  </tr>
  <tr>
    <td>Kandy</td>
    <td>LKR 456,876,098.00</td>
    <td><input type="button" id="but" value="This Year"><input type="button" id ="but" value="Last Year"</td>
  </tr>
  <tr>
    <td>Gall</td>
    <td>LKR 234,876,568.00</td>
    <td><input type="button" id="but" value="This Year"><input type="button" id ="but" value="Last Year"</td>
  </tr>
  <tr>
    <td>Jaffna</td>
    <td>LKr 067,876,142.00</td>
    <td><input type="button" id="but" value="This Year"><input type="button" id ="but" value="Last Year"</td>
  </tr>
  <tr>
    <td>Mirigama</td>
    <td>LKR 354,872,592.00</td>
    <td><input type="button" id="but" value="This Year"><input type="button" id ="but" value="Last Year"</td>
  </tr>
  <tr>
    <td>Kagalla</td>
    <td>LKR 234,653,235.00</td>
    <td><input type="button" id="but" value="This Year"><input type="button" id ="but" value="Last Year"</td>
  </tr>
 
 </table>
 <br/>
 <br/>
  <br/>
 <br/>
 <div>
  <img src="images/chart.png" id = "chart" alt = "a chart">
<div>


<br/>
 <br/>
  <br/>
 <br/>

  <!-- Footer -->
<?php require 'common/footer.php'; ?>

</body>
</html>