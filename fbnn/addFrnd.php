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
	
	//Sanitize the POST values
	$email1 = $_GET['frndname'];
	$email2=$_SESSION['email'];
	
	
	echo($email1);
	echo($email2);


	$_SESSION['friend'] = $email1;
	$_SESSION['friendfname']=$_GET['fname'];
	$_SESSION['friendlastname']=$_GET['lname'];
	
	$_SESSION['frienddp']=$_GET['dp'];

	//Create query
	//$qry="SELECT * FROM friendrequest WHERE (sentBy='$email1' AND RecievedBy='$email2') OR (sentBy='$email2' AND RecievedBy='$email1')";
$qry="SELECT * FROM frnds WHERE (email1='$email1' AND email2='$email2') OR (email1='$email2' AND email2='$email1')";

	$result=mysqli_query($con,$qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//already a frnd
			header("location: isfrnd.php");
			exit();
		}else {
			
			
			//check if the frnd request is pending
			
			$qry1="SELECT * FROM friendrequest WHERE (sentBy='$email1' AND RecievedBy='$email2') OR (sentBy='$email2' AND RecievedBy='$email1')";
			$result1=mysqli_query($con,$qry1);
			if(mysqli_num_rows($result1) > 0) 
			{
			//already a frnd
			header("location: RequestSentt.php");
			exit();
			}
			header("location: notFrnd.php");
			exit();
		}
	}else {
		die("Query failed");
	}


?>