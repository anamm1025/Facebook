<?php 
 
session_start();
	include("dbconnection.php");
	
?>
<!DOCTYPE html>
<head>
    <link rel="shortcut icon" href="images/title.jpg" />
    <title>Facebook</title>
    <link rel="stylesheet" type="text/css" media="all" href="css/anamStyle.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/messages.css" />
	<script src="jquery/jquery-1.11.1.js" type="text/javascript"></script>
    <script src="jquery/messages.js" type="text/javascript"></script>
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


    <div class="profileBar">
        <img class="pos_fixed1" src="images/fblogo.png" alt="not found" />&nbsp &nbsp &nbsp
        &nbsp
        <div class="search">
<input type="text" class="search" id="searchbox" style="width:600px;position:fixed;top:10px;left:140px;" />
<div id="display" >
</div>
	
  </div>
        &nbsp &nbsp &nbsp &nbsp<a href="timeline.php"><span class="fixuser"> <?php 
  	echo $_SESSION['SESS_FIRST_NAME'];?>
	</span></a>
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
    <div class="msg_leftPanel">
        <pre><a href="#"><u>Inbox</u></a>    <a href="#"><u>Others</u></a></pre>
        <br>
        <hr>
        <input type="text" name="searchInbox" class="searchBoxStyle">
        <br>
        <br>
	
	

	<?php 
	$email=$_SESSION['email'];
	$result = mysqli_query($con,"SELECT * FROM members WHERE Url!='$email'");

	echo "<br />";
	
	
 
	while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  	{

	$nn=$row["Url"];
	$fn=$row["FirstName"];
	$ln=$row["LastName"];
	$dp=$row["profImage"];
	
	
	//echo $nn;
	//echo $email;
	echo "<img src='$dp' class='mspPic' alt='pic not found'/>" ."";
	 echo  "<a href='showmsgs.php?frndname=$nn &fname=$fn&lname=$ln&dp=$dp'" . " class='blackUsername' >" . $row["FirstName"] . " " . $row["LastName"]." " . "</a>" ;
	
	$qq="SELECT * from messages where sender='$nn' AND receiver='$email'";
	$resu = mysqli_query($con,$qq);
		while($r = mysqli_fetch_array($resu,MYSQLI_ASSOC))
		{
  		
			if($r['status']=='unread')
				{
					
					echo "<span style='float:right;padding-top:5px;font-size:12px;color:red;font-weight:bold;'>unread</span>";
					break;
				}

		}
		
		
	


	echo "</br><br/></br><br/>";
	
	//echo"</div><div class='msgBox'>";
	}


?>



	
	


       	

    </div>

<img src="chat.png" alt="Ad pic not found" style="position:fixed;top:50px;left:1370px;"/>
	

    <div class="msg_middlepanel" style="padding-left:20px;">
	SELECT A MESSAGE FIRST
	
	</div>

	

	
        <div class="typeMsg">
            <textarea class="msgArea">Type Your Message Here..</textarea>
        </div>
    </div>
    <div class="msg_rightpanel">
    </div>
    <div class="msg_activity_panel">
    </div>
    
</body>
</html>
