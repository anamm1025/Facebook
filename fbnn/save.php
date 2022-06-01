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
	
$messages = $_POST['message'];
$user =$_POST['name'];
$pic =$_POST['pict'];
$poster =$_POST['poster'];

echo $messages;
echo $user;
echo $pic;
echo $poster;

$sql="INSERT INTO message (messages, user, picture, date_created, poster)
VALUES
('$messages','$user','$pic','".strtotime(date("Y-m-d H:i:s"))."','$poster')";

$con=mysqli_connect("localhost","root","","asn");
mysqli_query($con,"UPDATE messages SET picture = '$pic' WHERE FirstName='$user'");
if (!mysqli_query($con,$sql))
  {
  //die('Error: ' . mysqli_error());
  }
//header("location: timeline.php");
exit();

$name=$_POST['name'];
$pic=$_POST['pict'];

$con=mysqli_connect("localhost","root","","asn");
mysqli_query($con,"UPDATE messages SET picture = '$pic' WHERE FirstName='$name'");
?> 
