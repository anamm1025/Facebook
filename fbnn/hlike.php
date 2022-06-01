<?php 
session_start();
include("dbconnection.php");
if($_POST){

			$messages = $_POST['com'];
			$remarksby = $_POST['cam'];


		
			


$result = mysqli_query($con,"SELECT * FROM bleh WHERE remarks='". $messages ."' and remarksby='".$remarksby."';");

	$varr=0;
if(mysqli_num_rows($result)==0) {
			
 mysqli_query($con,"INSERT INTO bleh (remarks, remarksby) VALUES ('".$messages."','".$remarksby."');");
$varr=1;
}

else
{

$sql="DELETE FROM bleh WHERE remarks='". $messages ."' AND remarksby='".$remarksby."';";
mysqli_query($con,$sql);

}

	$result1 = mysqli_query($con,"SELECT * FROM bleh WHERE remarks='". $messages ."'");






 $numberOfRows = MYSQLI_NUM_ROWS($result1);
if($numberOfRows==1 && $varr==1)
{
?>
<div><img alt="not found" src="likeimg.PNG">You like this</div>

<?php
}

else if($numberOfRows>1 && $varr==1){

$is=$numberOfRows-1;
?>
<div><img alt="not found" src="likeimg.PNG">You & <?php echo $is; ?> people like this</div>

<?php
}
elseif($numberOfRows==0){
?>

<div></div>

<?php
}
else{
?>
<div><img alt="not found" src="likeimg.PNG"><?php echo  $numberOfRows; ?> people like this</div>
<?php
}

}
else
{

}



?>


