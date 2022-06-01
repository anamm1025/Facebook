<?php 
 
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
	$email1 = $_GET['frndname'];
	
	$_SESSION['msgfrnd'] = $email1;
	$_SESSION['msgfname']=$_GET['fname'];
	$_SESSION['msglastname']=$_GET['lname'];
	$_SESSION['msgdp']=$_GET['dp'];	

	$email=$_SESSION['email'];	

	$qry="UPDATE messages set status='read' where receiver='$email' AND sender='$email1'";
	
	mysqli_query($con,$qry);

	header("location: displaymsg.php");
	//echo $_SESSION['msgfrnd'];

?>



