<?php 
 
session_start();
	include("dbconnection.php");
	
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <link rel="shortcut icon" href="images/title.jpg">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/style1.css" />

	<link rel="stylesheet" type="text/css" media="all" href="css/Groupstyle.css" />
	<script src="jquery/jquery-1.11.1.js" type="text/javascript"></script>
    <script src="jquery/timeline.js" type="text/javascript"></script>

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
    <div class="timelineall">
        <div class="profileBar">
            <img class="pos_fixed1" src="images/fblogo.png" alt="not found">&nbsp; &nbsp; &nbsp;
            &nbsp;
           <div class="search">
<input type="text" class="search" id="searchbox" style="width:600px;position:fixed;top:10px;left:140px;" />
<div id="display" >
</div>
	
  </div>
            &nbsp &nbsp &nbsp &nbsp<a href="timeline.php"><span class="fixuser"> 
<?php 
  echo $_SESSION['SESS_FIRST_NAME'];?></span></a>
            &nbsp &nbsp <a href="home.php"><span class="fixhome">Home</span></a> <a href="FriendRequests.php">
                <img class="pos_fixed2" src="images/friend.png" alt="not found" /></a> <a href="messages.php">
		<?php
		$email=$_SESSION['email'];
		$qry="SELECT * from friendrequest where RecievedBy='$email'";

		if ($result=mysqli_query($con,$qry))
  		{
  	// Return the number of rows in result set

		
  		$rowcount=mysqli_num_rows($result);
		
		if($rowcount>0)
			{
			echo "<div style='background-color:red;color:white;width:15px;height:15px;position:fixed;top:5px;left:950px;text-align:center;font-size:11px;'>";
			echo $rowcount;	
			echo "</div>";	
			}
		}
		?>
		
                <img class="pos_fixed3" src="images/msg.png" alt="not found" /></a>
		
		
		<?php
		$email=$_SESSION['email'];
		$qry="SELECT * from messages where receiver='$email' AND status='unread'";

		if ($result=mysqli_query($con,$qry))
  		{
  	// Return the number of rows in result set
  		$rowcount=mysqli_num_rows($result);
		
		if($rowcount>0)
			{
			echo "<div style='z-index:100;background-color:red;color:white;width:15px;height:15px;position:fixed;top:5px;left:985px;text-align:center;font-size:11px;'>";		

			echo $rowcount;	
			echo "</div>";	

			}
		}
		?>                   

	 <a href="notifications.php">
                        <img class="pos_fixed4" src="images/notification.png" alt="not found"></a>
            <img class="pos_fixed5" src="images/line.png" alt="not found">
            <a href="settings.php">
                <img class="pos_fixed6" src="images/setting.png" alt="not found"></a>
            <br />
            <div class="dropdown" id="dropdown">
                <input type="checkbox" id="drop1" />
                <label for="drop1" class="dropdown_button">
                    <img class="pos_fixed7" src="images/others.png" alt="not found">
                </label>
                <ul class="dropdown_content">
                    <li><a href="CreatePage.php">Create Page</a></li>
                    <li><a href="settings.php">Settings</a></li>
                    <li><a href="login.php">Log Out</a></li>
                </ul>
            </div>
        </div>
        <div class="box">
        </div>

	<img src="homead2.png" alt="Ad pic not found" style="position:fixed;top:680px;left:1170px;"/>

<img src="homeAd.PNG" alt="Ad pic not found" style="position:fixed;top:60px;left:1170px;"/>

<img src="homead2.png" alt="Ad pic not found" style="position:fixed;top:1100px;left:1170px;"/>

<img src="homeAd.PNG" alt="Ad pic not found" style="position:fixed;top:1600px;left:1170px;"/>

	<div style="color:white;font-weight:bold;font-size:22px; position:absolute; top:320px;left:420px;">
<?php
echo $_SESSION['SESS_FIRST_NAME'] . " " . $_SESSION['LastName'];

?>
</div>	
        <div id="container">
            <div id='cover_container' >
		
		<?php 
$result = mysqli_query($con,"SELECT * FROM members WHERE Url='".$_SESSION['email'] ."'");

echo "<br />";
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {

  echo "<text style='padding-left:0px;'><img alt='&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp   NO COVER PHOTO' style='font-size:40px;' width=850 height=400 src='" . $row["coverImage"] . "'>";
  
  }

?>
		
		
            </div>
</div>


<div class="disabledBackground" id="coverDiv1">

</div>
<img src="images/cross.png" id="exitt" style="display:none;position:fixed;top:75px;left:990px;z-index:1100;">

<div id="coverDiv2" class="profLargeimg"><div class="uploadPanel"><span style="color:black;font-size:18px;font-weight:bold;">
Update Cover Picture</span></div>

				
				<form action="changeCP.php" method="post" enctype="multipart/form-data">
				
				<br/><span style="font-size:20px;padding:50px; text-align:center;">+ Upload Cover Pic	</span><br/><br/><br/><br/>
				
  					<div style="float:right;">
  					<input type="file" id="imagee" name="imagee" style="width:80px;background-color:white;"> 
  
  						
    						<input type="submit" value="Upload" name="submitt" style="width:80px;background-color:white;">
        			</div>
					
				</form>

</div>




       
        <div id="profile_img">
	<div class="disabledBackground" id="popDivv1">
	
    				</div>
<img src="images/cross.png" id="exit" style="display:none;position:fixed;top:80px;left:990px;z-index:1100;">
				<div id="popDivv2" class="profLargeimg1">
				
				<?php 
$result = mysqli_query($con,"SELECT * FROM members WHERE Url='".$_SESSION['email'] ."'");

echo "<br />";
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {

  echo "<img alt='Unable to View' style='width:600px;height:600px;' src='" . $row["profImage"] . "'>";
  
  }

?>
				</div>
	<?php 
$result = mysqli_query($con,"SELECT * FROM members WHERE Url='".$_SESSION['email'] ."'");

echo "<br />";
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {

  echo "<img alt='Unable to View' class='avatar_img' width=180 height=150 src='" . $row["profImage"] . "'>";
  
  }

?></div>
        <div class="box">
        </div>
        <div id='info_box'>
            <a href="timeline.php">
                <text class="k">Timeline</text>
            </a>&nbsp &nbsp &nbsp <a href="about.php" class="hoverr">About</a> &nbsp &nbsp
            &nbsp <a href="photos.php" class="hoverr">Photos</a> &nbsp &nbsp &nbsp <a href="friends.php"
                class="hoverr">Friends</a> &nbsp &nbsp &nbsp <a href="timeline.php" class="hoverr">
                    More<img src="timeline_images/more.png"></a> <a href="#">
                        <img class="cover_camera" id="covercamera" src="timeline_images/camera.png"></a> <a href="#">
                            <img class="profile_camera" src="timeline_images/camera.png" id="pcamera">
				<div class="disabledBackground" id="popDiv1">
	
    				</div>
				<img src="images/cross.png" id="exit2" style="display:none;position:fixed;top:75px;left:990px;z-index:1100;">

				<div id="popDiv2" class="profLargeimg"><div class="uploadPanel"><span style="color:black;font-size:18px;font-weight:bold;">
				Update Profile Picture</span></div>

		
				<form action="changeDP.php" method="post" enctype="multipart/form-data">
				<div class="uploadPhotoButton">
				<br/>+ Upload Profile Pic	<br/>
				
  					
  					<input type="file" id="image" name="image" style="width:80px;background-color:white;"> 
  
  						
    						<input type="submit" value="Upload" name="submit" style="width:80px;background-color:white;">
        
					</form>

		



					</div></div>

				</a>

				
            <a href="#">
                <button class="updateInfo" type="button">
                    Update Info</button></a> <a href="#">
                        <button class="Activity_Log" type="button">
                            Activity Log</button></a> <a href="#">
                                <button class="dot" type="button">
                                    ...</button></a>
        </div>
    
    <div class="aboutPanel">
        <img src="images/photo.png">&nbsp<a href="friends.php" class="k"> Friends</a>
        <a href="findFriends.php">
	<button class="rightSide" type="button">
            + Find Friends</button></a>
        	<form name="form4" action="findRequests.php" method="post">
	<input type="submit" class="rightSide" value="Friend Requests" name="requests">
         </form>
    </div>
    <div class="photoswhitePanel" style="height:auto;">
        
	
	<?php 
$email=$_SESSION['email'];
$result = mysqli_query($con,"SELECT * FROM frnds WHERE email1='$email'");

echo "<br />";


echo "<div style='margin-left:300px;'>";
 
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
$nn=$row["email2"];
$fn=$row["email2fname"];
$ln=$row["email2lname"];
$dp=$row["email2dp"];




 echo  "<a href='addFrnd.php?frndname=$nn &fname=$fn&lname=$ln&dp=$dp'" . " style='padding-top:0px;padding-right:10px;float:left'>" . $row["email2fname"] ." " .$row["email2lname"] . ": " . "</a>" ;
  echo "</br><img  alt='Unable to View' class='avatar_img' width=180 height=150 src='" . $row["email2dp"] . "'>" ;
echo "</br></br></br>";
  }



$result2 = mysqli_query($con,"SELECT * FROM frnds WHERE email2='$email'");

echo "<br />";
 
while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC))
  {
$nn=$row2["email1"];
$fn=$row2["email1fname"];
$ln=$row2["email1lname"];
$dp=$row2["email1dp"];



 echo  "<a href='addFrnd.php?frndname=$nn &fname=$fn&lname=$ln&dp=$dp'" . " style='padding-top:0px;padding-right:10px;'>" . $row2["email1fname"] ." " .$row2["email1lname"] . ": " . "</a>" ;
  echo "</br><img  alt='Unable to View' class='avatar_img' width=180 height=150 src='" . $row2["email1dp"] . "'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp" ;
echo "</br></br></br>";
  }

echo"</div>";

?>



    </div>
    <div class="activity_panel">
    </div>
    
</body>
</html>
