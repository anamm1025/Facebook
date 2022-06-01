<?php 

include("dbconnection.php");
				  if (isset($_POST['id']))
	{
			 
			$messages_id = $_POST['id'];
			//$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
			mysqli_query($con,"DELETE FROM message WHERE messages_id='$messages_id'");
			header("location: home.php");
			exit();

	}
			?>