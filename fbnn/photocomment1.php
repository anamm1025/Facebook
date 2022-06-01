<?php 
 
session_start();
include("dbconnection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="img/Untitled-1.png" type="image" />
<link rel="shortcut icon" href="img/Untitled-1.png" type="image" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="">
	<meta name="description" content="">
<title>Untitled Document</title>
<link href="format.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.watermarkinput.js"></script>

	<script type="text/javascript">
$(document).ready(function(){

$(".search").keyup(function() 
{
var searchbox = $(this).val();
var dataString = 'searchword='+ searchbox;

if(searchbox=='')
{
}
else
{

$.ajax({
type: "POST",
url: "search.php",
data: dataString,
cache: false,
success: function(html)
{
$("#display").html(html).show();
	}
});
}return false;    


});
});

jQuery(function($){
   $("#searchbox").Watermark("Search");
   });
</script>
<style type="text/css">
body
{
font-family:"Lucida Sans";

}
*
{
margin:0px
}
#searchbox
{
border:solid 1px #000;
padding:3px;
margin-right: 437px;
background-image:url(images/search.jpg);
background-position:right;
background-repeat:no-repeat;
}
#display
{
display:none;
background-color:white;
border-left:solid 1px #dedede;
border-right:solid 1px #dedede;
border-bottom:solid 1px #dedede;
overflow:hidden;
display: block;
margin-right: 438px; width: 600px;
margin-left:70px;
}
.display_box
{
padding:4px;
border-top:solid 1px #dedede;
font-size:12px;
height:30px;
color:black;
font-weight:bold;
}
.display_box:hover
{
background:darkblue;
font-color:white;
}


</style>




</head>

<body>


  <div class="right">
    <div class="rightleft">
	  <div class="name"><strong><?php 
 

$result =  mysqli_query($con,"SELECT * FROM members WHERE member_id='".$_SESSION['SESS_MEMBER_ID'] ."'");

while($row =  mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
  
  echo "<h3>".$row['FirstName']." ".$row['LastName'].">Photos"."</h3>";
  

  		//echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
  		//echo '<a href=http://localhost/PHP-Login/member-index.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a><br />';
		
  }

 
?></strong></div>

<form action="savecomment.php" method="get">

      <div class="photocommentlist">
	  
	  <?php 
 
	if (isset($_GET['id']))
	{


$member_id = $_GET['id'];

//echo "SELECT * FROM members WHERE member_id = $member_id";
$result =  mysqli_query($con,"SELECT * FROM photos WHERE photo_id = $member_id");

$row =  mysqli_fetch_array($result,MYSQLI_ASSOC);
if (!$result) 
						{
						echo "wala";
						}
						else{
echo "<br />";
echo "<img width=500 height=300 alt='Unable to View' src='" . $row["location"] . "'> <br />";
  echo'<input type="hidden" name="useid" value="'. $row["photo_id"] .'"."<br>';

 
}
}
?>
	  
	  </div>
	  
	  
	  
      <div class="commentphoto">
	  
	    <div class="commentphoto2">
		
		<?php 
 
		if (isset($_GET['id']))
	{

$member_id = $_GET['id'];

$query  = "SELECT * FROM photoscomment WHERE commentby='$member_id' ORDER BY comment_id DESC";
$result =  mysqli_query($con,$query);

while($row =  mysqli_fetch_assoc($result))
{
echo '<div class="white">';
   echo '<font color="Blue">';
   echo '<b>';
   echo '<div class="style1">';
   echo $_SESSION['SESS_FIRST_NAME'];
   
   echo '</b>';
   echo '</font>';
   echo '&nbsp;&nbsp;';
	//echo'<input type="text" name="firstname" value="'. $row['messages_id'] .'">'; 
	echo '<font size="1px">';
	echo "<b>{$row['comment']}</b><br>";
	echo '</font>';
	
echo '</div>';
echo '</div>';
} 

if (! mysqli_query($con,$query))
  {
  die('Error: ' .  mysqli_error());
  }

}
 mysqli_close($con)

?>
		
		
		</div>
		
	  </div>
	  <div class="commentphoto1">
	    <input type="text" name="textfield" value="-Leave comment Here-" onclick="this.value='';" />
	    <input type="hidden" name="textfield1" value="<?php 
  echo $_SESSION['SESS_LAST_NAME'];?>" />
	    <input type="submit" name="Submit" value="Submit" />
       
	  </div></form>
    </div>
    </div>
	
</div>
</body>
</html>
