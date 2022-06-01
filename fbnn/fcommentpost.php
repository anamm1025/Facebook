<?php 

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
$pic =$_POST['pic'];
$postid =$_POST['postid'];

$sql="INSERT INTO postcomment (content, commentedby, pic, id, date_created)
VALUES
('$messages','$user','$pic','$postid','".strtotime(date("Y-m-d H:i:s"))."')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
header("location: isfrnd.php");
exit();



?>

