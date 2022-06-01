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
</head>
<body>
    <div class="timelineall">
        <div class="profileBar">
            <img class="pos_fixed1" src="images/fblogo.png" alt="not found">&nbsp; &nbsp; &nbsp;
            &nbsp;
            <input value="Search for people,places and things" name="firstname" class="searchbox"
                type="text">
            <img class="search_pos" src="images/search.png" alt="not found" />
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
        <div id="container">
            <div id='cover_container' >

	<div style="color:white;font-weight:bold;font-size:22px; position:absolute; top:320px;left:420px;">
	<?php
	echo $_SESSION['friendfname'] . " " . $_SESSION['friendlastname'];

	?>
	</div>	
		
		<?php 
$result = mysqli_query($con,"SELECT * FROM members WHERE Url='".$_SESSION['friend'] ."'");

echo "<br />";
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {

  echo "<text style='padding-left:0px;'><img alt='&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp   NO COVER PHOTO' style='font-size:40px;' width=850 height=400 src='" . $row["coverImage"] . "'>";
  
  }

?>
		
		
            </div>
</div>

       
        <div id="profile_img">
	<?php 
$result = mysqli_query($con,"SELECT * FROM members WHERE Url='".$_SESSION['friend'] ."'");

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
					</div></div>

				</a>

				
            		
			
                        <input type="submit" name="AddFriend" value="Friend Request Sent" class="Activity_Log">
                         




        </div>
        <a href="about.php">
            <div class="common_panel">
                ABOUT</div>
        </a>
        <div class="about_panel">
        </div>
        <a href="photos.php">
            <div class="common_panel">
                PHOTOS- 0</div>
        </a>
        <div class="photos_panel">
        </div>
        <a href="friends.php">
            <div class="common_panel">
                FRIENDS- 0</div>
        </a>
        <div class="photos_panel">
        </div>



	


        
        <div class="ProfileActivityPanel">
	

	<text style="color:darkblue;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp NO POSTS FOR YOU</text>
	</div>
        <div class="activity_panel">
       </div>
</body>
</html>