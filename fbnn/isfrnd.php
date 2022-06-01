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
    <script src="jquery/isfrnd.js" type="text/javascript"></script>

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

	</div>

<img src="homead2.png" alt="Ad pic not found" style="position:fixed;top:680px;left:1170px;"/>

<img src="homeAd.PNG" alt="Ad pic not found" style="position:fixed;top:60px;left:1170px;"/>

<img src="homead2.png" alt="Ad pic not found" style="position:fixed;top:1100px;left:1170px;"/>

<img src="homeAd.PNG" alt="Ad pic not found" style="position:fixed;top:1600px;left:1170px;"/>

	<img src="homead2.png" alt="Ad pic not found" style="position:fixed;top:680px;left:1170px;"/>

<img src="homeAd.PNG" alt="Ad pic not found" style="position:fixed;top:60px;left:1170px;"/>

<img src="homead2.png" alt="Ad pic not found" style="position:fixed;top:1100px;left:1170px;"/>

<img src="homeAd.PNG" alt="Ad pic not found" style="position:fixed;top:1600px;left:1170px;"/>

	<img src="homead2.png" alt="Ad pic not found" style="position:fixed;top:680px;left:1170px;"/>

<img src="homeAd.PNG" alt="Ad pic not found" style="position:fixed;top:60px;left:1170px;"/>

<img src="homead2.png" alt="Ad pic not found" style="position:fixed;top:1100px;left:1170px;"/>

<img src="homeAd.PNG" alt="Ad pic not found" style="position:fixed;top:1600px;left:1170px;"/>


<div style="color:white;font-weight:bold;font-size:22px; position:absolute; top:320px;left:420px;">
<?php
echo $_SESSION['friendfname'] . " " . $_SESSION['friendlastname'];

?>
</div>	
	
        <div id="container">
            <div id='cover_container' >
		
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
	<div class="disabledBackground" id="popDivv1">
	
    				</div>
<img src="images/cross.png" id="exit" style="display:none;position:fixed;top:80px;left:990px;z-index:1100;">
				<div id="popDivv2" class="profLargeimg1">
				
				<?php 
$result = mysqli_query($con,"SELECT * FROM members WHERE Url='".$_SESSION['friend'] ."'");

echo "<br />";
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {

  echo "<img alt='Unable to View' style='width:600px;height:600px;' src='" . $row["profImage"] . "'>";
  
  }

?>
				</div>
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
            <a href="isfrnd.php">
                <text class="k">Timeline</text>
            </a>&nbsp &nbsp &nbsp <a href="fabout.php" class="hoverr">About</a> &nbsp &nbsp
            &nbsp <a href="fphotos.php" class="hoverr">Photos</a> &nbsp &nbsp &nbsp <a href="ffriends.php"
                class="hoverr">Friends</a> &nbsp &nbsp &nbsp <a href="isfrnd.php" class="hoverr">
                    More<img src="timeline_images/more.png"></a> <a href="#">
                 

					</div></div>


				</a>
        <a href="fabout.php">
            <div class="common_panel">
                ABOUT</div>
        </a>
        <div class="about_panel">
        </div>
        <a href="fphotos.php">
            <div class="common_panel">
                PHOTOS </div>
        </a>
        <div class="photos_panel">
        </div>
        <a href="ffriends.php">
            <div class="common_panel">
                FRIENDS</div>
        </a>
        <div class="photos_panel">
        </div>





        
        <div class="statusBar" style="margin-top:135px;">
            <a href="#">
                <img src="images/status.png"  class="image" id="statusx"></a> <a href="#">
                    <img src="images/video.png" id="video" class="image" ></a>

		<div id="photoDiv1" style="background-color:white;width:495px;height:140px;display:none;z-index:1;padding-left:20px;">

		
				<form action="fuploadStatusPic.php" method="post" enctype="multipart/form-data">
				 <textarea  name="messagee" cols="55" rows="2" id="messagee" onclick="this.value='';">Say something about this photo</textarea>
         
  					

			<br/>+ Upload Pic	<br/>
				
  					<input type="file" id="image" name="image" style="width:80px;background-color:white;"> 
  
  						
    						<input type="submit" value="Upload" name="submit" style="width:80px;background-color:white;">
        
					</form>

		



		</div>

	
        </div>
        <form  name="form1" method="post" action="fsave3.php">
         <textarea class="onurmindProfile"  style="margin-top:135px;height:130px;" name="message" cols="45" rows="4" id="message" onclick="this.value='';">What's on your mind.................</textarea>
         
		 <input name="name" type="hidden" id="name" value="<?php 
  		 echo $_SESSION['SESS_FIRST_NAME'];?>"/>
		 <input name="poster" type="hidden" id="name" value="<?php 
  		 echo $_SESSION['email'];?>"/>
		 <input name="name1" type="hidden" id="name" value="<?php 
   		echo $_SESSION['SESS_LAST_NAME'];?>"/>
	 
            <input id="postx" type="submit" name="btnlog" style="padding-top:0px;z-index:1000;color:white;background-color:darkblue;position:absolute;top:613px;left:1010px;"  value="Post" />
     
        </div>    

	</form>

        <div class="ProfileActivityPanel" style="margin-top:100px;">	
<?php 


$query  = "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM message WHERE 
 poster='".$_SESSION['friend'] ."' ORDER BY messages_id DESC";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result))
{
	?>
	<?php 
	echo"<div class='statusDiv' >";
    echo "<img class='imgclass' width=50 height=50 alt='Unable to View' src='" . $row["picture"] . "'>";
	echo "<span class='blueName'>" . "{$row['user']}</span>";

echo '<span class="delete">';
	echo '<font color="White">';
	echo '<a style="float:right;" class="commentDescription"  href=deletepostfrnd.php?id=' . $row["messages_id"] . '>' . "Delete" . '</a>';
	echo '</font>';	
	echo '&nbsp;';
	echo'</span>';


echo '<br>';
echo '<span style="color:navy;font-size:small;padding:8px;">';
	$days = floor($row['TimeSpent'] / (60 * 60 * 24));
			$remainder = $row['TimeSpent'] % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
	if($days > 0)
			echo date('F d Y', $row['date_created']);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
			echo "few seconds ago";		
			elseif($days == 0 && $hours == 0)
			echo $minutes.' minutes ago';
		
			echo '</span>';	
$dd=$row['postedpic'];
if($row['postedpic']!="")
{
	echo "<br/><br/><br/><div class='statusText'>";
	echo $row['messages'];
	echo "<br/><br/><img src='$dd' alt='uygyugyu' width=510 height=450>";
}	

else
	{echo "<br/><br/><br/><b><div class='statusText'>{$row['messages']}</b><br/><br/><br/>";}
	echo'</div>';
	echo '<div class="message">';
	echo '<form action="flike.php" method="post">'; 
	echo '<input type="hidden" name="com" value="'. $row['messages_id'] .'">';
	echo '<input type="hidden" name="cam" value="'. $_SESSION['email'] .'">';


$ses = $_SESSION['email'];
$resulttt = mysqli_query($con,"SELECT * FROM bleh WHERE remarks='". $row['messages_id'] ."' and  remarksby='".$ses."';");

$varr=0;
$val='like';
if(mysqli_num_rows($resulttt)>0) {
$varr =1;
$val='Unlike';
}



	echo '<input type="submit" Value="'.$val. '"'.' style="background-color:transparent;color:navy;font-weight:bold;" >';

echo '&nbsp;&nbsp;<input type="button" style="background-color:transparent;color:navy;font-weight:bold" value="Comment" >';	echo '</form>';

	echo '</form>';
	$result1 = mysqli_query($con,"SELECT * FROM bleh WHERE remarks='". $row['messages_id'] ."'");





if($row2 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
  {
 $numberOfRows = MYSQLI_NUM_ROWS($result1);	
  $numberoflikes=$numberOfRows;
  $numberoflikes1=$numberOfRows-1;




  if  ($varr==1 && $numberoflikes > 1)
  {
  echo '<span style="color:navy;font-size:small;"><img alt="not found" src="likeimg.PNG">' . 'You ' . '&' . ' ' . $numberoflikes1 . ' people like this.</span>' ;
  }
  else if ($varr==1 && ($numberoflikes == 1))
  {
  echo '<span style="color:navy;font-size:small;"><img alt="not found" src="likeimg.PNG">' . 'You like this</span>';
  }
  elseif ($numberoflikes > 0)
  {
  echo '<span style="color:navy;font-size:small;"><img alt="not found" src="likeimg.PNG">' . $numberoflikes .' people like this</span>';
  }
  
  }
	echo '<br>';
	/*echo '<font color="navy">';
	$days = floor($row['TimeSpent'] / (60 * 60 * 24));
			$remainder = $row['TimeSpent'] % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
	if($days > 0)
			echo date('F d Y', $row['date_created']);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
			echo "few seconds ago";		
			elseif($days == 0 && $hours == 0)
			echo $minutes.' minutes ago';
		
			echo '</font>';	*/
			//echo '<form action="like.php" method="post">';
			//echo'<input type="submit" name="addfriend" value="Like">';
			
			//echo '</form';
	?>
	</div>
	<?php 
	
	
	
	echo '';
	
	$query1  = "SELECT *,
		UNIX_TIMESTAMP() - date_created AS CommentTimeSpent FROM postcomment WHERE id=" . $row['messages_id'] . " ORDER BY comment_id ASC";
	$result1 = mysqli_query($con,$query1);
	while($row1 = mysqli_fetch_assoc($result1))
	{
		echo '<div style="background-color: #eceff6;width:500px;height:auto;">';
		echo "<div><img width=30 height=30 alt='Unable to View' src='" . $row1['pic'] . "'>";

echo '&nbsp;&nbsp;&nbsp;<span class="commentby">';
echo '<span style="color:navy;font-size:large;">';
echo $row1['commentedby'];
echo '</span>';
echo '&nbsp;&nbsp;';
echo $row1['content'];
//echo "</br>";



echo '<a style="float:right;right-margin:200px;font-size:small;color:navy;" href=deletepostcommentfrnd.php?id=' . $row1["comment_id"] . '>' . "DELETE" . '</a>';

echo '</div>';		
	
		




		
		
	
		
		echo '<br>';
		echo '<div style="float:left;font-size:10px;" >';
						$days2 = floor($row1['CommentTimeSpent'] / (60 * 60 * 24));
						$remainder = $row1['CommentTimeSpent'] % (60 * 60 * 24);
						$hours = floor($remainder / (60 * 60));
						$remainder = $remainder % (60 * 60);
						$minutes = floor($remainder / 60);
						$seconds = $remainder % 60;	
						if($days2 > 0)
							echo date('F d Y', $row1['date_created']);
						elseif($days2 == 0 && $hours == 0 && $minutes == 0)
							echo "few seconds ago";		
						elseif($days2 == 0 && $hours == 0)
							echo $minutes.' minutes ago';
											
		echo '</div>';				
	echo '</span>';
echo '<hr></br>';
		echo '</div>';
                                 
			

	}
	
	echo '<div class="fieldcomment" style="background-color: #eceff6; width:500px;height:80px;">';
	echo '<form action="fcommentpost.php" method="post">'; 
	echo'<input type="hidden" name="postid" value="'. $row['messages_id'] .'">';
	echo'<input type="hidden" name="user" value="'. $_SESSION['SESS_FIRST_NAME'] .'">';
echo'<input type="hidden" name="email" value="'. $_SESSION['email'] .'">';
	echo'<input type="hidden" name="pic" value="'. $_SESSION['SESS_LAST_NAME'] .'">';
	echo'<input type="text"  class="commentBox" style="background-color: white; width:470px;height:30px;" value="Write a comment" name="postcomment" onfocus={this.value=""} >';
	echo '</form>';
	echo '</div>';
              echo '</br><hr>';
                    echo '</div>';

echo '<br><br>';
} 

if (!mysqli_query($con,$query))
  {
  die('Error: ' . mysqli_error());
  }


?>


        <div class="activity_panel">
       
</body>
</html>