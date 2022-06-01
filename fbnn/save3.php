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

$messages = $_POST['message'];
$user =$_POST['name'];
$pic =$_POST['name1'];
$poster =$_POST['poster'];
$email=$_SESSION['email'];

$con=mysqli_connect("localhost","root","","asn");
$sql="INSERT INTO message (messages, user, picture, date_created, poster,email)
VALUES
('$messages','$user','$pic','".strtotime(date("Y-m-d H:i:s"))."','$poster','$email')";
$con=mysqli_connect("localhost","root","","asn");
 mysqli_query($con,"UPDATE messages SET picture = '$pic' WHERE FirstName='$user'");
if (! mysqli_query($con,$sql))
  {
  die('Error: ' .  mysqli_error($con));
  }
header("location: timeline.php");
exit();

?>
<?php 
 


$name=$_POST['name'];
$pic=$_POST['name1'];

$con=mysqli_connect("localhost","root","","asn");
 mysqli_query($con,"UPDATE messages SET picture = '$pic' WHERE FirstName='$name'");

 
?> 
