<?php 
 
session_start();
	include("dbconnection.php");
	
?>

<?php 

	$id=$_GET['id'];
 	$qry="SELECT * FROM members where member_id=$id";
	$result=mysqli_query($con,$qry);

	  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  	{

	$nn=$row["Url"];
	$fn=$row["FirstName"];
	$ln=$row["LastName"];
	$dp=$row["profImage"];

 	header("location: addFrnd.php?frndname=$nn &fname=$fn&lname=$ln&dp=$dp ") ;

}


?>