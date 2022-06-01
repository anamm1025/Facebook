<?php 
 
session_start();
	include("dbconnection.php");
	
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
    <link rel="shortcut icon" href="images/title.jpg" />
    <title>Facebook</title>
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="all" href="css/Groupstyle.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/style1.css" />
    <script src="jquery/jquery-1.11.1.js" type="text/javascript"></script>
    <script src="jquery/createGroup.js" type="text/javascript"></script>
    <script src="jquery/GroupJquery.js" type="text/javascript"></script>
	<script src="jquery/homeJquery.js" type="text/javascript"></script>


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


$(".searchh").keyup(function() 
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
$("#displayy").html(html).show();
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

#displayy
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
z-index:10000;
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

    <div class="profileBar">
        <img class="pos_fixed1" src="images/fblogo.png" alt="not found" />&nbsp &nbsp &nbsp
        &nbsp




	<div class="search">
<input type="text" class="search" id="searchbox" style="width:600px;position:fixed;top:10px;left:140px;" />
<div id="display" >
</div>
	
  </div>
	
	
        &nbsp &nbsp &nbsp &nbsp<a href="timeline.php"><span class="fixuser"> <?php 
  echo $_SESSION['SESS_FIRST_NAME'];?></span></a>
            &nbsp &nbsp <a href="home.php"></span></a>
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
                    <img class="pos_fixed4" src="images/notification.png" alt="not found" /></a>
        <img class="pos_fixed5" src="images/line.png" alt="not found" />
        <a href="settings.php">
            <img class="pos_fixed6" src="images/setting.png" alt="not found" /></a>
        <img class="pos_fixed7" src="images/others.png" alt="not found" />
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
<img src="apps.png" alt="Ad pic not found" style="position:fixed;top:240px;left:90px;"/>
 <img src="homead2.png" alt="Ad pic not found" style="position:fixed;top:700px;left:880px;"/>

   <img src="homeAd.PNG" alt="Ad pic not found" style="position:fixed;top:70px;left:880px;"/>
<img src="chat.png" alt="Ad pic not found" style="position:fixed;top:50px;left:1370px;"/>

    <div class="ProfileActivityPanel" style="position:absolute;top:250px;left:300px;background-color:white;">



<?php 


$query  = "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM message ORDER BY messages_id DESC";
$result = mysqli_query($con,$query);

while($row = mysqli_fetch_assoc($result))
{
	?>
	<?php 
	echo"<div class='statusDiv'>";
    echo "<img class='imgclass' width=50 height=50 alt='Unable to View' src='" . $row["picture"] . "'>";
	echo "<span class='blueName'>" . "{$row['user']}</span>";

echo '<span class="delete">';
	echo '<font color="White">';
	echo '<a style="float:right;" class="commentDescription"  href=deleteposthome.php?id=' . $row["messages_id"] . '>' . "Delete" . '</a>';
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
	echo '<form action="hlike.php" method="post">'; 
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

echo '&nbsp;&nbsp;<input type="button" style="background-color:transparent;color:navy;font-weight:bold" value="Comment" >';
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
			//echo '<form action="hlike.php" method="post">';
			//echo'<input type="submit" name="addfriend" value="Like">';
			
			//echo '</form';
	?>
</div>	
	<?php 
	
	
	

	
	$query1  = "SELECT *,
		UNIX_TIMESTAMP() - date_created AS CommentTimeSpent FROM postcomment WHERE id=" . $row['messages_id'] . " ORDER BY comment_id ASC ";
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




echo '<a style="float:right;right-margin:200px;font-size:small;color:navy;" href=deletepostcommenthome.php?id=' . $row1["comment_id"] . '>' . "DELETE" . '</a>';

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
echo '<br>';
echo '<hr>';
echo '<br>';
		echo '</div>';
                                 
			

	}
	
	echo '<div class="fieldcomment" style="background-color: #eceff6; width:500px;height:80px;">';
	echo '<form action="hcommentpost.php" method="post">'; 
	echo'<input type="hidden" name="postid" value="'. $row['messages_id'] .'">';
	echo'<input type="hidden" name="user" value="'. $_SESSION['SESS_FIRST_NAME'] .'">';
	echo'<input type="hidden" name="email" value="'. $_SESSION['email'] .'">';

	echo'<input type="hidden" name="pic" value="'. $_SESSION['SESS_LAST_NAME'] .'">';
	echo'<input type="text"  class="commentBox" style="background-color: white; width:470px;height:30px;" value="Write a comment" name="postcomment" onfocus={this.value=""} >';
	echo '</form>';
	echo '</div>';
              echo '<br><hr>';
                    echo '</div>';

echo '<br><br>';
} 

if (!mysqli_query($con,$query))
  {
  die('Error: ' . mysqli_error());
  }

?>
</div>






	


    
    <div class="activity_panel" style="width:175px;">
        <br/>
    </div>

    <div class="box" style="height:100%;">
    </div>
    <a href="home.php">
        <img class="fixNewsfeed" style="position:fixed;" src="images/newsfeed.png"></a> <a href="messages.php">
            <img class="fixMessages" style="position:fixed;" src="images/messages.png"></a> <a href="CreatePage.php">
                <img class="fixpage" style="position:fixed;" src="images/createPage.png"/></a> <a href="#">
                    <img class="fixGroup" style="position:fixed;" src="images/creategroup.png" onclick="pop('popDiv1')"/></a>
    


<div id="pages" style="position:fixed;top:100px;left:1200px;font-size=50px;font-weight:bold;color:black;">
Your Pages<br><br>
<?php 
	$email=$_SESSION['email'];
	$result = mysqli_query($con,"SELECT * FROM page WHERE url='$email'");

	
	
 
	while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  	{

	
	$pn=$row["name"];
	$cat=$row["category"];
	$dp=$row["profImage"];
	
	
	
	 echo  "<a style='color:navy;font-size=40px;font-weight:bold;'  href='pageTimeline2.php?pagename=$pn&category=$cat&dp=$dp'" . " >" . $pn. "</a>" ;
  
	echo "</br><br>";
	
	}


?>


</div>

<div class="statusBar" style="position:absolute;top:-35px;left:200px;">
            <a href="#">
                <img src="images/status.png" class="image" id="statusx"></a> 
		<a href="#">
                    <img src="images/video.png" id="video" class="image" ></a>

		<div id="photoDiv1" style="background-color:white;width:495px;height:140px;display:none;z-index:1;padding-left:20px;">

		
				<form action="huploadStatusPic.php" method="post" enctype="multipart/form-data">
				 <textarea  name="messagee" cols="55" rows="2" id="messagee" onclick="this.value='';">Say something about this photo</textarea>
         
  					

			<br/>+ Upload Pic	<br/>
				
  					<input type="file" id="image" name="image" style="width:80px;background-color:white;"> 
  
  						
    						<input type="submit" value="Upload" name="submit" style="width:80px;background-color:white;">
        
					</form>

		



		</div>

	
        </div>

    

	<form  name="form7" method="post" action="savehome.php"  >
         <textarea class="onurmindProfile"  style="position:absolute;top:0px;left:200px;width:510px;" name="message" cols="50" rows="3" id="message" onclick="this.value='';">What's on your mind.................</textarea>
         
		 <input name="name" type="hidden" id="name" value="<?php 
   echo $_SESSION['SESS_FIRST_NAME'];?>"/>
		 <input name="poster" type="hidden" id="name" value="<?php 
   echo $_SESSION['email'];?>"/>
		 <input name="name1" type="hidden" id="name" value="<?php 
   echo $_SESSION['SESS_LAST_NAME'];?>"/>
	 
            <input type="submit" id="postx" name="btnlog" class="fixpost" style="background-color:darkblue;color:white;position:absolute;left:750px;top:170px;width:70px;height:28px;font-weight:bold;font-size:16px;" value="Post" />
     
           

	</form>


        <br />
    </div>
    
           
<div class="disabledBackground" style="display:block;" id="popDiv1">
    </div>
    <div id="popDiv2" class="ontop" style="display:block;">
        

	<form action="group.php" method="post" name="grp">
	<div class="groupPanel" style="display:block;">
            Create New Group</div>
        <br/>
        <div class="padding">
            <span class="greyfont">Group Name
<input type="text" ID="groupname" name="groupname" class="textBoxStyle">
<text class="red" id="er16"></text><br/>
<br/>
Members &nbsp &nbsp &nbsp

<input type="text" ID="members" name="members" value="Who do you want to add to the group" class="textBoxStyle" onfocus="if(this.value=='Who do you want to add to the group'){this.value = '';}" onblur="if (this.value == '') {this.value = 'Who do you want to add to the group';}">
<text class="red" id="er17"></text>
<br/>

<text class="red" id="er17"></text>
<br/>
                

<hr class="smallLine">
<span id="Span1"></span>
<br/>

<div class="">
<div id="privacyError" style="color:red;"></div>
Privacy

<input type="radio" ID="public" name="public" /> <img src="images/public.png" alt="Not Found" />    Public

<br/>
<div class="smallgreytext">Anyone can see the group,its members and their <br/>posts.

<hr>
</div>

<div class="paddingn">
<input type="radio" ID="Closed" name="closed" /><img src="images/close.png" alt="Not Found" /> Closed</div>

<div class="smallgreytext">Anyone can find the group and see who's in it.Only <br/>members can see posts.

<hr>
</div>


<div class="paddingn">
<input type="radio" ID="Secret" name="secret" /><img src="images/secret.png" alt="Not Found" />Secret</div>

<div class="smallgreytext">Only members can find the group and see posts.

<br/>
<br/>
<a href="#" class="bluesmall">Learn more about groups privacy</a>

</div>
<hr>
<input type="submit" ID="createButton" name="createButton" class="bluebuttonRight" value="Create">
<a href="home.php"><input type="button" ID="cancelButton" class="right" value="Cancel"/></a>

</div>
</form>


<?php

if(isset($_POST['groupname']) && isset($_POST['members']) && $_POST['members']!="Who do you want to add to the group")
{
	
	$gname=$_POST['groupname'];
	$member=$_POST['members'];
	$email=$_SESSION['email'];	

	 if(isset($_POST['secret']))
	{
		$option="secret";		
	} 
	if(isset($_POST['public']))
	{
		$option="public";		
	} 

	if(isset($_POST['closed']))
	{
		$option="closed";		
	} 
	

	$qry="SELECT * from members where Url='$member' ";

	$result=mysqli_query($con,$qry);

	 $rowcount=mysqli_num_rows($result);

	if($rowcount==0)
	{
		echo"No member with this username exists...";
		return false;
	}

	else
	{
		$sql="INSERT into groups (groupName,admin_email,privacyOption,noOfmembers)
		VALUES('$gname','$email','$option',2)";
		

		$result1=mysqli_query($con,$sql);

		

		$sql1="SELECT * from groups where groupName='$gname' AND admin_email='$email'";
		$result2=mysqli_query($con,$sql1);
		 

		if($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC))
  		{
		
			$id=$row2['group_id'];
			echo"<a href='gotoGroup.php?id=$id&gname=$gname'>Group Created. Goto " . $gname ."Group</a>";
			$sq="INSERT INTO groupmembers (member_email,groupId) VALUES ('$member',$id)";
			$result3=mysqli_query($con,$sq);
		}
	}
}

else
	echo" ";


?>


</span>
        </div>
    </div>

</body>
</html>
