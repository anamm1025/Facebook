<?php 

include("dbconnection.php");
				  if (isset($_GET['id']))
	{
			 
			$messages_id = $_GET['id'];
			//$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
			mysqli_query($con,"DELETE FROM postcomment WHERE comment_id='$messages_id'");
			header("location:timeline.php");
			exit();
			
			}
			?>