<?php 
 
session_start();
include("dbconnection.php");

 /*function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		$con=mysqli_connect("localhost","root","","asn");
		return  mysqli_real_escape_string($con,$str);
	}*/


$work = $_POST['work'];
$city = $_POST['city'];
$homeTown=$_POST['hometown'];
$college=$_POST['college'];
$highSchool=$_POST['highschool'];
$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['year'];
$interested=$_POST['interested'];
$language=$_POST['language'];
$arts=$_POST['arts'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$aboutme=$_POST['aboutme'];
$religion=$_POST['religion'];
$relViews=$_POST['relViews'];
$relationship=$_POST['relationship'];
$favQuote=$_POST['favQuote'];
$country=$_POST['country'];
$nickname=$_POST['nickname'];
$program=$_POST['program'];






$con=mysqli_connect("localhost","root","","asn");
$sql="UPDATE members SET experiences='".$work."', curcity='".$city."',college='". $college."',hometown='".$homeTown."',highschool='".$highSchool."',month='".$month."',day='".$day."',year='".$year."',Interested='".$interested."',language='".$language."',arts='".$arts."',ContactNo='".$contact."',Gender='".$gender."',Address='".$address."',aboutme='".$aboutme."',religion='".$religion."',relationsip='".$relationship."',religiousViews='".$relViews."',favQuote='".$favQuote."',country='".$country."',nickName='".$nickname."',degreeProgram='".$program."' where Url='".$_SESSION['email']."';";

$con=mysqli_connect("localhost","root","","asn");
 mysqli_query($con,$sql);
if (! mysqli_query($con,$sql))
  {
  die('Error: ' .  mysqli_error($con));
  }
header("location: About.php");
exit();

?>
<?php 
 

 
?> 
