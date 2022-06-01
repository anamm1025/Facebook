<?php 
 
session_start();
include("dbconnection.php");
 
 function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return  mysqli_real_escape_string($con,$str);
	}

$messages = $_GET['textfield'];
$user =$_GET['useid'];
$PIC =$_GET['textfield1'];
$name=$_SESSION['SESS_FIRST_NAME'];

$sql="INSERT INTO photoscomment (comment, commentby, PIC,name)
VALUES
('$messages','$user','$PIC','$name')";
if (! mysqli_query($con,$sql))
  {
  die('Error: ' .  mysqli_error());
  }
header("location: fphotocomment.php" ."?id=" . "$user");

 mysqli_close($con)

?>