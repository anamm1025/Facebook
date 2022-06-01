<?php 
session_start();
include("dbconnection.php");

			$messages = $_POST['com'];
			$remarksby = $_POST['cam'];


		
			


$result = mysqli_query($con,"SELECT * FROM bleh WHERE remarks='". $messages ."' and remarksby='".$remarksby."';");

	
if(mysqli_num_rows($result)==0) {
			
			$sql="INSERT INTO bleh (remarks, remarksby) VALUES ('".$messages."','".$remarksby."')";

}

else
{

$sql="DELETE FROM bleh WHERE remarks='". $messages ."' and remarksby='".$remarksby."';";

}
$con=mysqli_connect("localhost","root","","asn");

if (! mysqli_query($con,$sql))
  {
  die('Error: ' .  mysqli_error($con));
  }

			header("location: pageTimeline.php");
			exit();
			
			 
			
			?>