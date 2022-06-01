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

$fname = $_POST['firstnam'];
$mname = $_POST['middlename'];
$lname = $_POST['lastname'];
$aname = $_POST['alterName'];
$member=$_SESSION['SESS_MEMBER_ID'];
$check=$_POST['drop1'];


$_SESSION['LastName']=$lname;

if(isset($_POST['drop1']))
{
	 $_SESSION['SESS_FIRST_NAME'] = $fname ." " . $aname;
	$_SESSION['LastName']=$lname;

}

else
	 {
	$_SESSION['SESS_FIRST_NAME'] = $fname;
	$_SESSION['LastName']=$lname;
	}



$con=mysqli_connect("localhost","root","","asn");
$sql="UPDATE members SET UserName='$fname',FirstName='$fname', LastName='$lname', optionalName='$aname', middleName='$mname' WHERE member_id=$member; " ;


mysqli_query($con,$sql);
if (! mysqli_query($con,$sql))
  {
  die('Error: ' .  mysqli_error($con));
  }

$em= $_SESSION['email'];


mysqli_query($con,"UPDATE postcomment set commentedby='".$fname."' WHERE email='".$em."';");

mysqli_query($con,"UPDATE message set user='".$fname."' WHERE email='".$em."';");

mysqli_query($con,"UPDATE friendrequest set senderfname='".$fname."', senderlname='$lname' WHERE sentBy='".$em."';");

mysqli_query($con,"UPDATE frnds set email1fname='".$fname."', email1lname='$lname' WHERE email1='".$em."';");


mysqli_query($con,"UPDATE frnds set email2fname='".$fname."', email2lname='$lname' WHERE email2='".$em."';");

mysqli_query($con,"UPDATE message set posterName='".$fname."' WHERE poster='".$em."';");

mysqli_query($con,"UPDATE messages set senderfname='".$fname."', senderlname='$lname' WHERE sender='".$em."';");

mysqli_query($con,"UPDATE messages set recfname='".$fname."', reclname='$lname' WHERE receiver='".$em."';");

mysqli_query($con,"UPDATE photoscomment set name='".$fname."' WHERE sender='".$em."';");


header("location: settings.php");
exit();

?>
