<?php 
 
	//Start session
	session_start();
	

	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysqli server
		
	include("dbconnection.php");
	
	
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($con,$str);
	}
	
	//Sanitize the GET values
	$femail = $_GET['frndname'];
	$ffname = $_GET['fname'];
	$flname = $_GET['lname'];
	$dp=$_GET['dp'];
	
	$email=$_SESSION['email'];	
	$lname=$_SESSION['LastName'];
	$fname=$_SESSION['SESS_FIRST_NAME'];
	$dpc=$_SESSION['SESS_LAST_NAME'];
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: FriendRequests.php");
		exit();
	}
	
	//Create query
	$qry="INSERT INTO frnds (email1,email2,status,email1fname,email1lname,email1dp,email2fname,email2lname,email2dp)
	 VALUES ('$email','$femail','accepted','$fname','$lname','$dpc','$ffname','$flname','$dp')";

	$result=mysqli_query($con,$qry);

	mysqli_query($con,"DELETE FROM friendrequest where sentBy='$femail' AND RecievedBy='$email' ");
	

	header("location: FriendRequests.php");
?>