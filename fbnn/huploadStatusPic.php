<?php 
 
session_start();
	include("dbconnection.php");
	
?>

<?php 
 
	  
$id= $_SESSION['SESS_MEMBER_ID'];
$user= $_SESSION['email'];
$msg=$_POST['messagee'];

$fname=$_SESSION['SESS_FIRST_NAME'];
$dp=$_SESSION['SESS_PRO_PIC'];

if((isset($_FILES["image"]["size"]) && ($_FILES["image"]["size"] > 0)) )
{
	if ( empty($_FILES['image']))
	{
		header("location: home.php");
	}

	else if (!isset($_FILES['image']['tmp_name'])) {
	header("location: home.php");
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
			


			$qry="INSERT INTO message (messages,user,picture,date_created,poster,postedpic,email)
			VALUES('$msg','$fname','$dp','".strtotime(date("Y-m-d H:i:s"))."','$user','$location','$user') ";


	
			 
			if(!$update=mysqli_query($con,$qry)) 
			{
			
				//echo mysqli_error();
				
				
				
			}
			else{
			
			header("location: home.php");
				
				
			exit();
			}
			}
	}
}

else
{
header("location: home.php");
}
?>