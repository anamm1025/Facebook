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
$sender =$_SESSION['email'];
$sfname=$_SESSION['SESS_FIRST_NAME'];
$slname =$_SESSION['LastName'];
$sdp=$_SESSION['SESS_PRO_PIC'];

$reciever =$_SESSION['msgfrnd'];
$rfname=$_SESSION['msgfname'];
$rlname=$_SESSION['msglastname'];
$rdp=$_SESSION['msgdp'];



$sql="INSERT INTO messages (status,content,sender,receiver,senderfname,senderlname,senderdp,recfname,reclname,recdp,date)
VALUES('unread','$messages','$sender','$reciever','$sfname','$slname','$sdp','$rfname','$rlname', '$rdp','".strtotime(date("Y-m-d H:i:s"))."' ) ";




if (! mysqli_query($con,$sql))
  {
  die('Error: ' .  mysqli_error($con));
  }
header("location: displaymsg.php");
exit();

?>
