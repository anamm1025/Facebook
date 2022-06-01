<?php 
 
session_start();
include("dbconnection.php");

 function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		$con=mysqli_connect("localhost","root","","asn");
		return  mysqli_real_escape_string($con,$str);
	}

$password = $_POST['currentPasword'];
$newpass = $_POST['newPassword'];
$member=$_SESSION['SESS_MEMBER_ID'];




$con=mysqli_connect("localhost","root","","asn");
$sql="UPDATE members SET Password='$newpass' WHERE member_id=$member AND password='$password'  " ;



mysqli_query($con,$sql);
if (! mysqli_query($con,$sql))
  {
  die('Error: ' .  mysqli_error($con));
	echo("ERROR...");
  }
//echo("Password Changed Successfully...");
header("location: settings.php");
exit();

?>
