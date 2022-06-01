<?php 

session_start();

include("dbconnection.php");
 
 function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($con,$str);
	}

$messages = $_POST['postcomment'];
$user =$_POST['user'];
$pic =$_SESSION['pageDP'];
$postid =$_POST['postid'];
$email=$_SESSION['email'];


$sql="INSERT INTO postcomment (email,content, commentedby, pic, id, date_created)
VALUES
('$email','$messages','$user','$pic','$postid','".strtotime(date("Y-m-d H:i:s"))."')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
header("location: pageTimeline.php");
exit();



?>

