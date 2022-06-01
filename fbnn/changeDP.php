<?php 
 
session_start();
	include("dbconnection.php");
	
?>

<?php 
 
	  
$id= $_SESSION['SESS_MEMBER_ID'];
$user= $_SESSION['email'];

if((isset($_FILES["image"]["size"]) && ($_FILES["image"]["size"] > 0)) )
{
	if ( empty($_FILES['image']))
	{
		//echo "select an image";
		header("location: timeline.php");
	}

	else if (!isset($_FILES['image']['tmp_name'])) {
	header("location: timeline.php");
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
			$con=mysqli_connect("localhost","root","","asn");
			$update2=mysqli_query($con,"UPDATE postcomment SET pic = '$location' WHERE commentedby='$user'");
			$update3=mysqli_query($con,"UPDATE message SET picture = '$location' WHERE user='$user'");


	mysqli_query($con,"UPDATE friendrequest SET senderdp = '$location' WHERE sentBy='$user'");			

	mysqli_query($con,"UPDATE friendrequest SET senderdp = '$location' WHERE sentBy='$user'");

	mysqli_query($con,"UPDATE frnds SET email1dp = '$location' WHERE email1='$user'");

	mysqli_query($con,"UPDATE frnds SET email2dp = '$location' WHERE email2='$user'");

	mysqli_query($con,"UPDATE message SET picture = '$location' WHERE email='$user'");

	mysqli_query($con,"UPDATE messages SET senderdp = '$location' WHERE sender='$user'");

	mysqli_query($con,"UPDATE messages SET recdp = '$location' WHERE receiver='$user'");

	mysqli_query($con,"UPDATE photoscomment SET PIC = '$location' WHERE email='$user'");

	mysqli_query($con,"UPDATE postcomment SET pic = '$location' WHERE email='$user'");
	
			$_SESSION['SESS_PRO_PIC']=$location;
			$_SESSION['SESS_LAST_NAME']=$location;
			//echo("Picture Changed Successfully..!!");
			//header("location: timeline.php");
			/*mysqli_query("UPDATE members SET profImage = '$location' WHERE message_id='$messageid'");

			 */
			if(!$update=mysqli_query($con,"UPDATE members SET profImage = '$location' WHERE member_id='$id'")) {
			
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