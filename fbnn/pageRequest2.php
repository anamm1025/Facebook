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
	$cat= $_POST['brandCategory'];
	$name = $_POST['BrandName'];
	$email = $_SESSION['email'];
		
	
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		//header("location: againLogin.php");
		exit();
	}
	
$qry="INSERT INTO page(url, name,category) VALUES ('$email', '$name', '$cat')";

	$result=mysqli_query($con,$qry);
	

	//Create query
	$qry="SELECT * FROM page WHERE url='".$_SESSION['email'] ."' and name='".$name."'";

	$result=mysqli_query($con,$qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
		
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['pageName'] = $member['name'];
			$_SESSION['pageCategory'] = $member['category'];
			$_SESSION['pageDP'] = $member['profImage'];
			session_write_close();
			header("location: pageTimeline.php");
			exit();
		}else {
			
			exit();
		}
	}else {
		die("Query failed");
	}
?>