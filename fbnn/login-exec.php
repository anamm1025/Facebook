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
	$login = $_POST['login'];
	$password =$_POST['password1'];
	
	echo($login);
	echo($password);

	//Input Validations
	if($login == "" || $password == "") {
		header("location: againLogin.php");
	}
	
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: againLogin.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM members WHERE Url='$login' AND Password='$password'";

	$result=mysqli_query($con,$qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['member_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['FirstName'];
			$_SESSION['SESS_LAST_NAME'] = $member['profImage'];
			$_SESSION['SESS_PRO_PIC'] = $member['profImage'];
			$_SESSION['email'] = $member['Url'];
			$_SESSION['LastName'] = $member['LastName'];
			session_write_close();
			header("location: home.php");
			exit();
		}else {
			//Login failed
			header("location: againLogin.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>