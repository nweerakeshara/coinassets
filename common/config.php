<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$db = "onlinebanking";

	$con = mysqli_connect($server, $username, $password, $db);

	if($con->connect_error){
		die ("Connection failed : " . $con->connect_error);
	}
?>