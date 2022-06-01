<?php 
 
session_start();
	include("dbconnection.php");
	
?>

<?php 
 
	  
$id= $_SESSION['pageName'];
$user= $_SESSION['email'];
$msg=$_POST['messagee'];

$fname=$_SESSION['SESS_FIRST_NAME'];
$dp=$_SESSION['pageDP'];

if((isset($_FILES["image"]["size"]) && ($_FILES["image"]["size"] > 0)) )
{

	if ( empty($_FILES['image']))
	{
		//echo "select an image";
		header("location: pageTimeline.php");
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
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"uploadedimage/" . $_FILES["image"]["name"]);
			
			$location="uploadedimage/" . $_FILES["image"]["name"];
			


			$qry="INSERT INTO message (messages,pageName,picture,date_created,poster,postedpic,email,user)
			VALUES('$msg','$id','$dp','".strtotime(date("Y-m-d H:i:s"))."','$user','$location','$user','$id') ";


	
			 
			if(!$update=mysqli_query($con,$qry)) 
			{
			
				//echo mysqli_error();
				
				
				
			}
			else{
			
			header("location: pageTimeline.php");
				
				
			exit();
			}
			}
	}
}

else
{
header("location: pageTimeline.php");
}
?>