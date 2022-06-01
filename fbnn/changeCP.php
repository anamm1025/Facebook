<?php 
 
session_start();
	include("dbconnection.php");
	
?>

<?php 
 
	  
$id= $_SESSION['SESS_MEMBER_ID'];
$user= $_SESSION['SESS_FIRST_NAME'];
if((isset($_FILES["imagee"]["size"]) && ($_FILES["imagee"]["size"] > 0)) )
{

	if ( empty($_FILES['imagee']))
	{
		//echo "select an image";
		header("location: timeline.php");
	}

	else if (!isset($_FILES['imagee']['tmp_name'])) {
	header("location: timeline.php");
	
	}else{
	$file=$_FILES['imagee']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['imagee']['tmp_name']));
	$image_name= addslashes($_FILES['imagee']['name']);
	$image_size= getimagesize($_FILES['imagee']['tmp_name']);
		
	
		if ($image_size==FALSE) {
		
			//echo "That's not an image!";
			//return false;
			
		}else{
			
			move_uploaded_file($_FILES["imagee"]["tmp_name"],"uploadedimage/" . $_FILES["imagee"]["name"]);
			
			$location="uploadedimage/" . $_FILES["imagee"]["name"];
			$con=mysqli_connect("localhost","root","","asn");
			
			
			if(!$update=mysqli_query($con,"UPDATE members SET coverImage = '$location' WHERE member_id='$id'")) {
			
				//echo mysqli_error();
				
				
				
			}
			else{
			
			header("location: timeline.php");
				
				
			exit();
			}
			}
	}
	
}
else
{

header("location: timeline.php");
}
?>