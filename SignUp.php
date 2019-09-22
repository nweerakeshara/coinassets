<?php
    session_start();

 ?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sign up form</title>
    <link rel="stylesheet" text="test/css" href="css/header.css">
    <link rel="stylesheet" text="test/css" href="css/footer.css">
    <link rel="stylesheet" text="test/css" href="css/signup.css">
	
	<script type="text/javascript">
     
        function signupvalidation(){
            var a = document.getElementById('password').value;
            var b = document.getElementById('confirmPassword').value;

            if (a != b) {
                alert("password does not match");
                return false;
            }
        } 

    </script>
    
</head>

<body style="background-color:; margin: 0 auto;">

    <!--header-->

   <?php include 'common/header.php'; ?>

    <br /><br /><br /><br /><br /><br /><br />

    <!--sign up form-->
    <center>
    <div class="signup_form">
        <form onsubmit="return signupvalidation()" action="" target="_self" method="POST">
            
				<p id="errormsg"></p><br><br>
                <label style="font-size: 35px;font-family:Trebuchet MS,Palatino;color: #2929ad;"><b>SIGN UP </b></label>
                <br><br>

                <div class="signup_a">

                    <input type="email" size="35" id="b" class="a" name="email" placeholder="Email" title="Enter your email" required />
                    <p id="p.1"></p>
					<br />
                    <input type="text" size="35" name="phone" id="b"class="a" placeholder="Phone number" title="Enter your phone number" required>
                    <br><br>
                    <input type="text" size="35" id="b" class="a" name="username" placeholder="Username" title="Enter a user name for your account" required/>
                    <br /><br />
                    <input type="text" size="35" id="b" class="a" name="accountnumber" placeholder="Account Number" title="Enter Account Number" required/>
                    <p id="p.2"></p>
					<br />
                    <input type="password" size="35" class="a" maxlength="5" name="accountsecurityCode" id="b" placeholder="Your Account Security Code" title="Enter Security Code" required />
                    <br /><br />
                    <input type="password" size="35" maxlength="10" id="password" class="a" name="password" placeholder="Password" title="Enter Password" required/>
                    <br /><br />
                    <input type="password" size="35" maxlength="10" id="confirmPassword" class="a" placeholder="Confirm Password" title="Re-enter the password" required />
                    <br />
                    <br />
                    <br />
                </div>

                <div class="signup_a">
                    <p id="c"> Date of birth</p>
                    <input type="date" name="date" id="date"/>
                    
                    <br />
                    <br />

                    <lable id="c">Gender</lable>
                    <br>
                    <input type="radio" name="gender" value="male" id="radio" /> <label style="font-size: 20px;font-family:Trebuchet MS,Palatino;color: #2929ad;font-weight: none;margin-right: 10px;cursor: pointer;">Male</label> 
                    <input type="radio" name="gender" value="female" id="radio" style="margin-left: 10px;" /><label style="font-size: 19px;font-family:Trebuchet MS,Palatino;color: #2929ad;font-weight: none;cursor: pointer;">Female</label>
                    
                </div>

                <div>
                    <br />
                    <input type="checkbox" name="terms" id="check" /> <label style="font-size: 18px; color: #177dff;cursor: pointer;">you agree to Bank's Terms and conditions Use.</label>
                    <br />

                    <input type="checkbox" name="remember_user" id="check" /> <label style="font-size: 18px; color: #177dff;cursor: pointer;">Remember me</label>

                    <br><br>

                        <input type="submit" name="submit_btn" class="form_c"> 
                        <input type="reset"  name="reset_btn" class="form_c" value="Reset">                        
                    
                </div>

                    <!--insert values to member table-->
                <?php
                require 'common/config.php';

                if(isset($_POST['submit_btn'])){

                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $username = $_POST['username'];
                $accnumber = $_POST['accountnumber'];
                $accCode = $_POST['accountsecurityCode'];
                $password = $_POST['password'];
                $dob= $_POST['date'];
                $gender = $_POST['gender'];

                $sql = "INSERT INTO `member` (`email`, `phone`, `name`, `accNum`, `accSecurityCode`, `password`, `dateOfBirth`, `gender`) VALUES ('$email', '$phone',  '$username', '$accnumber', '$accCode' , '$password', '$dob', '$gender') ";

        
                $result = $con->query($sql);

                if(mysqli_query($con, $sql)){
                    ?>
                    <div style="text-align:center; color:green;"> 
                        <h3>Thank you <?php echo "$username!!!<br>"?> You have registrated successfully</h3><br>
                        
                    </div>
                    <?php
                }
                else{
                    ?>
                    <div style="text-align:center; color:red;"> 
                        <h3>Registrating error</h3>
                    </div>
                    <?php
                }

                }

                mysqli_close($con);

                ?>

				<script src="scripts/signup.js"></script>
                <br /><br /><br /><br />

            
        </form>
    </div>
</center>

    <br /><br /><br /><br /><br /><br /><br /><br />

    <!--footer-->
 
<?php require 'common/footer.php'; ?>

</body>


</html>