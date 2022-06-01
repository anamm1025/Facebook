<?php 

	//Start session
	session_start();
	
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
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
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$reemail = $_POST['reemail'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	//$bdate = $_POST['bdate'];
	
	$propic = $_POST['propic'];
	$bday=$_POST['month'] . "/" . $_POST['day'] . "/" . $_POST['year'];
  	$month=$_POST['month'];
	$day=$_POST['day'];
	$year=$_POST['year'];
	
	//Check for duplicate login ID
	if($email != "") {
		$qry = "SELECT * FROM members WHERE Url='$email' ";

		
	$result=mysqli_query($con,$qry);
		
			if(mysqli_num_rows($result) > 0) {
				$errmsg_arr[] = 'Email already in use';
				$error='Email already in use';
				$errflag = true;
				
				
			}
			@mysqli_free_result($result);
		
		
	}
	

	//Create INSERT query
	$qry = "INSERT INTO members(UserName, Password, FirstName, LastName, Url, Birthdate, Gender, profImage, month, day, year) 
	VALUES('$fname','$password','$fname','$lname','$email','$bday','$gender','$propic','$month','$day','$year')";
	$con=mysqli_connect("localhost","root","","asn");
	$result = @mysqli_query($con,$qry);
	
	//Check whether the query was successful or not
	if($result) {
	$errmsg_arr[] = 'Success You can now log-in to facebook';
		$errflag = true;
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login.php");
		exit();
	}
		$errmsg_arr[] = 'Sign Up successful';
		
		session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['member_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['FirstName'];
			$_SESSION['SESS_LAST_NAME'] = $member['profImage'];
			//$_SESSION['SESS_PRO_PIC'] = $member['profImage'];
			session_write_close();
			
			
		header("location: login.php");
		exit();
	}else {
		die("Query failed");
	}
?>