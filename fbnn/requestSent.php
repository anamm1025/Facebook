<?php 
 
session_start();
	include("dbconnection.php");
	
?>

		<?php
		$sentBy=$_SESSION['email'];
		$rec=$_SESSION['friend'];
		$dp=$_SESSION['SESS_LAST_NAME'];
		$fname=$_SESSION['SESS_FIRST_NAME'];
		$lname=$_SESSION['LastName'];

		$result = mysqli_query($con,"INSERT INTO friendrequest (status,SentBy,RecievedBy,senderfname,senderlname,senderdp)
	 VALUES ('pending','$sentBy','$rec','$fname','$lname','$dp');");
		$con->close();
	
		
		header("location: RequestSentt.php");
			exit();
	
	

	?>