<?php 
 
session_start();
include("dbconnection.php");
?>		

<?php 
 
	  
$id= $_SESSION['SESS_MEMBER_ID'];
$user= $_SESSION['SESS_FIRST_NAME'];

if((isset($_FILES["image1"]["size"]) && ($_FILES["image1"]["size"] > 0)) )
{
	if ( empty($_FILES['image1']))
	{
		echo "select an image";
	}

	else if (!isset($_FILES['image1']['tmp_name'])) {
	echo "image not selected";
	}else{
	$file=$_FILES['image1']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image1']['tmp_name']));
	$image_name= addslashes($_FILES['image1']['name']);
	$image_size= getimagesize($_FILES['image1']['tmp_name']);
		
	
		if ($image_size==FALSE) {
		
			header("location: photos.php");
			
		}else{
			
			move_uploaded_file($_FILES["image1"]["tmp_name"],"uploadedimage/" . $_FILES["image1"]["name"]);
			
			$by=$_SESSION['SESS_MEMBER_ID'];
			

			$location="uploadedimage/" . $_FILES["image1"]["name"];
			$sql="INSERT INTO photos (term, location, uploadedby, caption)
			VALUES
			('$term','$location','$by','$caption')";
			
			if(!$update=mysqli_query($con,$sql)) {
			
				echo mysqli_error();
				header("location: photos.php");
				
				
				
			}
			else{
			
			header("location: photos.php");
				//echo("Picture Changed Successfully..!!");
				//return false;
				
			//exit();
			}
			}
	}
}

else
	header("location: photos.php");
?>