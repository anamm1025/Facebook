<?php 

include("dbconnection.php");
 
 function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($con,$str);
	}

$messages = $_POST['postcomment'];
$user =$_POST['user'];
$pic =$_POST['pic'];
$postid =$_POST['postid'];
$email = $_POST['email'];
$time=strtotime(date("Y-m-d H:i:s"));
$sql="INSERT INTO postcomment (email,content, commentedby, pic, id, date_created)
VALUES
('$email','$messages','$user','$pic','$postid','".$time."')";
mysqli_query($con,$sql);
$res =mysqli_query($con,"select comment_id FROM postcomment WHERE date_created='".$time."'"); 
$row = mysqli_fetch_assoc($res);
$comID=$row['comment_id'];

?>
		<div id="<?php echo $comID; ?>" style="background-color: #eceff6;width:500px;height:auto;">
		<div><img width=30 height=30 alt="Unable to View" src="<?php echo $pic; ?>">

&nbsp;&nbsp;&nbsp;<span class="commentby">
<span style="color:navy;font-size:large;">
<?php
echo $user; ?>
</span>
&nbsp;&nbsp;
<?php echo $messages; 
 ?>




<span class="yeah" style="float:right;right-margin:200px;font-size:small;color:navy;" >DELETE</span>
<input type="hidden" value="<?php echo $comID;?>"/>
</div>		
	<br>
	<div style="float:left;font-size:10px;">few seconds ago
											
		</div>				
	</span>
<br>
<hr>
<br>
		            
</div>	
	