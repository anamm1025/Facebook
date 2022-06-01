<?php 
 
session_start();
	include("dbconnection.php");
	
?>

<?php 
 
	  
$id= $_POST['pname'];
$user= $_POST['pposter'];

if((isset($_FILES["image"]["size"]) && ($_FILES["image"]["size"] > 0)) )
{
	if ( empty($_FILES['image']))
	{
	              echo "select an image";
		header("location: pageTimelinee.php");
	}

	else if (!isset($_FILES['image']['tmp_name'])) {
	header("location: pageTimeline.php");
	//echo "image not selected";
	//return false;
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);
		
	
		if ($image_size==FALSE) {
		
			//echo "That's not an image!";
			//return false;
			
		}
else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"uploadedimage/" . $_FILES["image"]["name"]);
			
			$location="uploadedimage/" . $_FILES["image"]["name"];
			$con=mysqli_connect("localhost","root","","asn");
			
	
			if($update=mysqli_query($con,"UPDATE page SET profImage = '$location' WHERE url='$user' and name='$id'")) {
			
			$update3=mysqli_query($con,"UPDATE message SET picture='$location' WHERE pageName='$id'");

				$_SESSION['pageDP']=$location;	
			header("location: pageTimelinee.php");
			
			}
			else{
			
				
				
			exit();
			}
			}
	}
	}

else
{

header("location: pageTimelinee.php");
}
?>