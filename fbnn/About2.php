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
    <script src="jquery/createGroup.js" type="text/javascript"></script>
    <script src="jquery/GroupJquery.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function(){
$("#ab1").show();
$("#ab2").hide();
$("#ab3").hide();
$("#ab4").hide();
$("#ab5").hide();
$("#ab6").hide();
$("#ab7").hide();

$("#overview").click(function(){
$("#ab1").show();
$("#ab2").hide();
$("#ab3").hide();
$("#ab4").hide();
$("#ab5").hide();
$("#ab6").hide();
$("#ab7").hide();
});

$("#work").click(function(){
$("#ab1").hide();
$("#ab2").show();
$("#ab3").hide();
$("#ab4").hide();
$("#ab5").hide();
$("#ab6").hide();
$("#ab7").hide();
});


$("#places").click(function(){
$("#ab1").hide();
$("#ab2").hide();
$("#ab3").show();
$("#ab4").hide();
$("#ab5").hide();
$("#ab6").hide();
$("#ab7").hide();
});



$("#contact").click(function(){
$("#ab1").hide();
$("#ab2").hide();
$("#ab3").hide();
$("#ab4").show();
$("#ab5").hide();
$("#ab6").hide();
$("#ab7").hide();
});


$("#family").click(function(){
$("#ab1").hide();
$("#ab2").hide();
$("#ab3").hide();
$("#ab4").hide();
$("#ab5").show();
$("#ab6").hide();
$("#ab7").hide();
});


$("#details").click(function(){
$("#ab1").hide();
$("#ab2").hide();
$("#ab3").hide();
$("#ab4").hide();
$("#ab5").hide();
$("#ab6").show();
$("#ab7").hide();
});



});

</script>

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
	
	 <a href="notifications.php"> <img class="pos_fixed4" src="images/notification.png" alt="not found"></a>
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
echo $_SESSION['SESS_FIRST_NAME'] . " " . $_SESSION['LastName'];

?>
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
            <img src="images/about.png">&nbsp<a href="about.php" class="k"> About</a></div>
        <div id="here" class="aboutwhitePanelLeft">
            <a href="#here" class="black" id="overview">Overview</a> </br> </br> <a href="#here" class="grey" id="work">Work and
                Education</a> </br> </br> <a href="#here" class="grey" id="places">Places You've Lived</a> </br>
            </br> <a href="#here" class="grey" id="contact">Contact and Basic Info</a> </br> </br> <a href="#here"
                class="grey" id="family">Family and Relationships</a> </br> </br> <a href="#here" class="grey" id="details">Details
                    About You</a>
        </div>


<?php
echo        '<div id="ab1" class="aboutwhitePanelRight">';


$em = $_SESSION['email'];

$qry="SELECT * FROM members WHERE Url='$em'";
	$result=mysqli_query($con,$qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {

$member = mysqli_fetch_assoc($result);

}}

$work = $member['experiences'];
$city = $member['curcity'];
$homeTown=$member['hometown'];
$college=$member['college'];
$highSchool=$member['highschool'];
$month=$member['month'];
$day=$member['day'];
$year=$member['year'];
$interested=$member['Interested'];
$language=$member['language'];
$arts=$member['arts'];
$contact=$member['ContactNo'];
$gender=$member['Gender'];
$address=$member['Address'];
$aboutme=$member['aboutme'];
$religion=$member['religion'];
$relViews=$member['religiousViews'];
$relationship=$member['relationsip'];
$favQuote=$member['favQuote'];
$country=$member['country'];
$nickname=$member['nickName'];
$program=$member['degreeProgram'];
$email=$member['Url'];


echo '<form action="saveChanges.php" id="form5" method="post">';

echo 	'<div style="text-align:center" class="editProfile">'. 'Gender: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ;
echo '<input type="text" name="gender" value="'.$gender. '"/></div>';


echo 	'<div style="text-align:center" class="editProfile">'. 'Work as:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="text" name="work" value="'.$work. '"/></div>';

echo 	'<div style="text-align:center" class="editProfile">'. 'Home Town:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="text" name="hometown" value="'.$homeTown. '"/></div>';

echo 	'<div style="text-align:center" class="editProfile">'. 'Email Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$email.'</div>';	

 echo       '</div>';


 echo '<div id="ab2" class="aboutwhitePanelRight">';

echo 	'<div style="text-align:center" class="editProfile">'. 'Work as:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="text" name="work2" value="'.$work. '"/></div>';	


echo 	'<div style="text-align:center" class="editProfile">'. 'Studies at:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="text" name="program" value="'.$program. '"/></div>';	


echo 	'<div style="text-align:center" class="editProfile">'. 'College:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ;
echo '<input type="text" name="college" value="'.$college. '"/></div>';	


echo 	'<div style="text-align:center" class="editProfile">'.'High School:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="text" name="highschool" value="'.$highSchool. '"/></div>';	

	
echo       '</div>';

 echo '<div id="ab3" class="aboutwhitePanelRight">';

echo 'Home Town:';
echo 	'<div style="text-align:center" class="editProfile">';
echo '<input type="text" name="city" value="'.$city. '"/>';	
echo '<input type="text" name="country2" value="'.$country .'"/></div>';	

echo 'Current Place: ';
echo 	'<div style="text-align:center" class="editProfile">';
echo '<input type="text" id="city2" value="'.$city. '"/>';	
echo '<input type="text" name="country" value="'.$country .'"/></div>';	

echo 'Address:';
echo 	'<div style="text-align:center" class="editProfile">'.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="text" name="address" value="'.$address. '"/></div>';	

//echo 	'<div style="text-align:center" class="editProfile">'. 'Work as:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $work .'</div>';
	
echo       '</div>';

 echo '<div id="ab4" class="aboutwhitePanelRight">';

echo 	'<div style="text-align:center" class="editProfile">'. 'Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="text" id="gender2" value="'.$gender. '"/><br>';
echo 'Religion: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="text" name="religion" value="'.$religion. '"/></div>';	


echo 	'<div style="text-align:center" class="editProfile">'. 'Contact Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="text" name="contact" value="'.$contact . '"/></div>';	


echo 	'<div style="text-align:center" class="editProfile">'. 'Date of Birth: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ;
echo '<input type="text" name="day" value="'.$day. '"/>';
echo '<input type="text" name="month" value="'.$month. '"/>';
echo '<input type="text" name="year" value="'.$year. '"/></div>';	


echo 	'<div style="text-align:center" class="editProfile">'. 'About Me:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="text" name="aboutme" value="'.$aboutme. '"/></div>';	

	
echo       '</div>';



echo '<div id="ab5" class="aboutwhitePanelRight">';

echo 	'<div style="text-align:center" class="editProfile">'.'Relationship Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="text" name="relationship" value="'.$relationship. '"/></div>';	



echo 	'<div style="text-align:center" class="editProfile">'.'Interested In:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="text" name="interested" value="'.$interested. '"/></div>';	


	
echo       '</div>';


echo '<div id="ab6" class="aboutwhitePanelRight">';

echo 	'<div style="text-align:center" class="editProfile">'. 'Nick Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="text"name="nickname" value="'.$nickname. '"/><br><br>';	
echo 'Language:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"name="language" value="'.$language. '"/></div>';	


echo 	'<div style="text-align:center" class="editProfile">'. 'Arts: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ;
echo '<input type="text" name="arts" value="'.$arts . '"/></div>';	


echo 	'<div style="text-align:center" class="editProfile">'. 'Favourite Quotation: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="text" name="favQuote" value="'.$favQuote. '"/></div>';	


echo 	'<div style="text-align:center" class="editProfile">'. 'Religious Views: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ;
echo '<input type="text" name="relViews" value="'.$relViews . '"/></div>';	

	
echo       '</div>'; 

echo '<button type="submit" style="color:grey;background-color:inherit;position:absolute;top:450px;left:900px;width:120px;height:30px;" id="editButton1">Save Changes</button>';
echo '</form>';





?>
        <div class="activity_panel">
        </div>

</body>
</html>
