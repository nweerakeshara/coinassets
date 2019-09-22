<?php
    session_start();

 ?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
     
    <title>login page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" text="test/css" href="css/header.css">
    <link rel="stylesheet" text="test/css" href="css/footer.css">
    <link rel="stylesheet" text="test/css" href="css/login.css">
</head>

<body style="margin: 0 auto;" >
   
 <?php include 'common/header.php'; ?>

 <!-- Search box -->   
<div class="site-search clearfix">

	<form method="get" action="https://www.google.com/search?g=">
	<input type="search" name="search-box" value="search"  >
	<button type="submit" ></button>
	</form>
</div>

    <br /><br /><br /><br /><br /><br />

    <!--login form-->
    <center>
<div class="login_form">
    <form action="" target="_self" method="POST">

            <br><br>

            <div  class="b">
                <label style="font-size: 35px;"><b>LOGIN AS </b></label>
                <br><br>
               
                <input type="radio" name="loginType" value="employer" id="radio"><label style="font-size: 25px; margin-left: 5px; cursor: pointer;">Employer</label>
                <input type="radio" name="loginType" value="member" id="radio" ><label style="font-size: 25px; margin-left: 5px; cursor: pointer;">Member</label>              

                <br><br><br>

                <input id="a" type="text" name="contact" size="30" placeholder="Phone,email or username" title="enter a valid Phone,email or username"  required/>
                <br />
                <br />
                <input id="a" type="password" name="password" size="30" maxlength="10" placeholder="Password" title="enter the password for your account"  required/>
            
                <br />
                <br />
            
                <input type="checkbox" name="rem" class="rem"><label style="font-size: 20px; color: #177dff;cursor: pointer;">Remember me</label>
                <br>
                 

                 
                 
                <br><br>
                <input type="submit" name="login_btn" value="Login" class="c_form" style="margin-right: 5px;">
                <input type="reset" name="reset_btn" value="Reset" class="c_form" style="margin-left: 5px;">
                </div>

            
            
            <br />
            <div style="text-align: center;"> 
                <a href="SignUp.php" id="last" ><b> Sign up </b></a> 
                <a href="url2" style="padding-left: 30px;" id="last"><b> Forgot password</b> </a>
            </div>

            <br>

            <!--php for check login -->
            <?php
                require 'common/config.php';

                if(isset($_POST['login_btn'])){

                $loginType = $_POST['loginType'];
                $contact = $_POST['contact'];
                $password = $_POST['password'];

                if($loginType == "employer"){

                    $user_name = "SELECT * FROM `employee` WHERE userName ='$contact' OR phone ='$contact' OR email ='$contact'";
                    $pwd = "SELECT `password` FROM `employee` WHERE password='$password'";
                    
                    $result1 = $con->query($user_name);
                    $result2 = $con->query($pwd);

                    $num1 = mysqli_num_rows($result1);
                    $num2 = mysqli_num_rows($result2);


                    if( $num1 > 0 && $num2 > 0){    //username and password correct
                        $_SESSION["login"] = $contact;
                        $_SESSION["timeStrat"] = time();
                        $_SESSION["timeExpire"] = $_SESSION['timeStart'] + (1 * 60);
                        echo '
                            <script>
                                window.location = "customer.php"
                            </script>
                        ';

                    }            
                    else{
                        ?>
                        <div>
                            <h4 style="color: red; text-align: center;"><b>Invalid details</b></h4>
                        </div>
                        <?php
                    }

                }

                if($loginType == "member"){

                    $user_name = "SELECT * FROM `member` WHERE name='$contact' OR phone ='$contact' OR email ='$contact'";
                    $pwd = "SELECT `password` FROM `member` WHERE password='$password'";
                    
                    $result1 = $con->query($user_name);
                    $result2 = $con->query($pwd);

                    $num1 = mysqli_num_rows($result1);
                    $num2 = mysqli_num_rows($result2);

                    if( $num1 > 0 && $num2 > 0){    //username and password correct
                        $_SESSION["loginemp"] = $contact;
                        $_SESSION["timeStrat"] = time();
                        $_SESSION["timeExpire"] = $_SESSION['timeStart'] + (1 * 60);
                        echo '
                            <script>
                                window.location = "customer.php"
                            </script>
                        ';
                    }
                    else{
                         ?>
                        <div>
                            <h4 style="color: red; text-align: center;"><b>Invalid details</b></h4>
                        </div>
                        <?php
                    }                
                    
                }

            }
                mysqli_close($con);
            ?>


            <br /><br /><br />

        

    </form>
</div>
</center>

     <br /><br /><br />
    

    <!--footer-->

 <?php require 'common/footer.php'; ?>

</body>

</html>