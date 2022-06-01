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
$poster =$_POST['poster'];


$email=$_SESSION['email'];
$user =$_SESSION['pageName'];
$pic =$_SESSION['pageDP'];

$con=mysqli_connect("localhost","root","","asn");
$sql="INSERT INTO message (messages,picture,user, date_created, poster,email, pageName)
VALUES
('$messages','$pic','$user','".strtotime(date("Y-m-d H:i:s"))."','$poster','$email','$user')";
$con=mysqli_connect("localhost","root","","asn");
 mysqli_query($con,"UPDATE messages SET picture = '$pic' WHERE FirstName='$user'");
if (! mysqli_query($con,$sql))
  {
  die('Error: ' .  mysqli_error($con));
  }
header("location: pageTimeline.php");
exit();

?>
<?php 
 


$name=$_POST['name'];
$pic=$_POST['name1'];

$con=mysqli_connect("localhost","root","","asn");
 mysqli_query($con,"UPDATE messages SET picture = '$pic' WHERE FirstName='$name'");

 
?> 
