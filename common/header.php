
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  <!-- Bootstrap related !-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="scripts/home.js"></script> 

  <style type="text/css">
    .navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
    border-radius: 0;
}

.navbar a {
    float: right;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: right;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #daa520;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: rgb(108, 122, 137);
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
  </style>
</head>


<body id="body">

<!-- Start of header -->
<header>  
  
<div>
        <!--...........................php for login and log off options.............................................-->

<?php
    require 'config.php';    

     $sql = "SELECT * FROM member WHERE email = '".@$_SESSION["login"]."' OR phone = '".@$_SESSION["login"]."' OR name = '".@$_SESSION["login"]."' ";
    $qry=mysqli_query($con,$sql);
      // $row = mysqli_fetch_array($qry);

      $sqlemp = "SELECT * FROM employee WHERE email = '".@$_SESSION["loginemp"]."' OR phone = '".@$_SESSION["loginemp"]."' OR name = '".@$_SESSION["loginemp"]."' ";
      $qryemp =mysqli_query($con,$sqlemp);      
      // $rowemp = mysqli_fetch_array($qryemp);

    if((@$_SESSION["login"] == NULL) && (@$_SESSION["loginemp"] == NULL)){

      ?>
      <nav class="navbar">
          <a href="login.php">Login</a>
          <a href="SignUp.php">Sign up</a>
          <a href="Aboutus.php">About us</a>
          <a href="Contactus.php">Contact us</a>
          <a href="#">Policies</a>
        </nav>
      <?php

    }
    elseif(!(@$_SESSION["login"] == NULL) && (@$_SESSION["loginemp"] == NULL)){

        //$row = mysqli_fetch_array($qry);
        //$rowemp = mysqli_fetch_array($qrystaff);
        ?>
      <nav class="navbar">
          <a href="logout.php">Logout</a>
          <a href="Aboutus.php">About us</a>
          <a href="Contactus.php">Contact us</a>
          <a href="#">Policies</a>
        </nav>
      <?php
        
      }
      elseif(!(@$_SESSION["loginemp"] == NULL) && (@$_SESSION["login"] == NULL)){
       
        //$row = mysqli_fetch_array($qryemp);
        //$rowemp = mysqli_fetch_array($qrystaff);

        ?>
      <nav class="navbar">
          <a href="logout.php">Logout</a>
          <a href="Aboutus.php">About us</a>
          <a href="Contactus.php">Contact us</a>
          <a href="#">Policies</a>
        </nav>
      <?php
      }

?>

<br>

<table id="tabletop" width="100%"><tr><td><table id="tablein" width="100%" cellspacing="10" >
  <tr>
      <th rowspan="2">
           <img src="images/bank logo.png">   
      </th>
        <th colspan="1"><h1 id="bankname">COIN ASSETS BANK</h1></th>
        <th rowspan="2" style="padding:20px"><img src="images/homeavatar.jpg" width="100%" ></th>
    </tr>
    <tr>
      <td><ul id="navibar2">
    <li class="li2"><a href="index.php">| Home |</a></li>
      <li class="li2"><a href="#news">| Exclusive |</a></li>
      <li class="li2"><a href="#contact">| Savings |</a></li>
      <li class="li2"><a href="#Policies">| Home Loans |</a></li>
    <li class="li2"><a href="#Policies">| Events |</a></li>
  </ul></td>
        
    </tr>
 </table></td></tr></table>
 </header>
 <!-- End of header -->

<?php mysqli_close($con); ?>
</body>

</html>