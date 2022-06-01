<?php 
 
session_start();
	include("dbconnection.php");
	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <link rel="shortcut icon" href="images/title.jpg">
    <title>General Account Settings</title>
    <script type="text/javascript" src="jquery/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="jquery/settings_jquery.js"></script>
       <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="all" href="css/settings_style1.css" />
</head>
<body>
    <div class="profileBar">
        <img class="pos_fixed1" src="images/fblogo.png" alt="not found" />&nbsp &nbsp &nbsp
        &nbsp
        <input type="text" value="Search for people,places and things" name="firstname" class="searchbox">
        <img class="search_pos" src="images/search.png" alt="not found" />
        &nbsp &nbsp &nbsp &nbsp<a href="timeline.php"><span class="fixuser"> <?php 
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
    <div id="leftPanel">
        <br/><br/></div>
    <a class="general" href="settings.php">
        <img src="images/general.png"></a>
    <div id="middlePanel">
        <text class="textbold"><br/><br/><br/>&nbsp &nbsp General Account Settings</text>
        <br/> <br/>
        <table class="newbox" cellpadding="3" cellspacing="1" rules="ROWS" frame="HSIDES">
            <tr id="name">
                <th>
                    Name
                </th>
                <th>
                    User Name
                </th>
                <th>
                    Edit
                </th>
            </tr>
            <tr id="namebox" class="commonbox">
                <th colspan="3">
                   	<form  name="form1" method="post" action="changeName.php">
		<span class="blackNormalFont">Name</span><br/> <br/> &nbsp &nbsp &nbspFirst &nbsp
                    &nbsp <input type="text" ID="firstnam" name="firstnam" >
                    &nbsp &nbsp
                    <span id="fnameError"></span>

                    <br/><br/> Middle &nbsp &nbsp
                    <input type="text" ID="middlename" name="middlename" value="optional" onfocus="if(this.value=='optional'){this.value = '';}" onblur="if (this.value == '') {this.value = 'optional';}">
                     &nbsp &nbsp
                    <span id="mnameError"></span>
                        <br/><br/> &nbsp &nbsp Last &nbsp &nbsp
                         <input type="text" ID="lastname" name="lastname">
                          &nbsp &nbsp
                    <span id="lnameError"></span>

                           <br/><br/> Please note: You won't be able to
                    change your name within the next 60<br/> days. Make sure not to add any unusual
                    capitalization, punctuation,<br/> characters or random words.
                    <hr class="smallLine">
                    Alternate Name &nbsp &nbsp
                    <input type="text" ID="alterName" name="alterName" value="optional"onfocus="if(this.value=='optional'){this.value = '';}" onblur="if (this.value == '') {this.value = 'optional';}">
                     
                    &nbsp
                    [?] 
                    &nbsp &nbsp
                    <span id="anameError"></span>

                    <br/><input type="checkbox" id="drop1" name="drop1" />Include this on my timeline
                    <hr class="smallLine">
                    <br/>
                    <input type="submit" ID="ReviewButton" name="ReviewButton" class="bluebutton" value="Review Change" />
               
                        <input type="button" ID="CancelButton" class="cancel"  value="Cancel" />
                   
			</form>
                   
                </th>
            </tr>
            <tr id="username">
                <th>
                    Username
                </th>
                <th>
                    www.facebook.com/username
                </th>
                <th>
                    Edit
                </th>
            </tr>
            <tr id="usernamebox" class="commonbox">
                <th colspan="3">
                    <span class="blackNormalFont">Username</span><br/> <br/> Your username is 
			<?php 
  echo $_SESSION['SESS_FIRST_NAME'];?>
			 <br/>
                    <br/> Friends can view your profile using the link: <br/> <br/> http://www.facebook.com/abc
                    <br/>
                    <hr class="smallLine">
                    <br/>
                    <button class="cancel" type="button">
                        Close</button>
                </th>
            </tr>
            <tr id="email">
                <th>
                    Email
                </th>
                <th>
                    Primary: <?php echo $_SESSION['email']; ?>
                </th>
                <th>
                    Edit
                </th>
            </tr>
            <tr id="emailbox" class="commonbox">
                <th colspan="3">
                    <span class="blackNormalFont">Email</span> <br/> Primary Contact
                    <input type="radio" name="email"><?php echo $_SESSION['email']; ?><br/>
                    <hr class="smallLine">
                    <div class="bluesmall">
                        Add another email</div>
                    New Email<input type="text" ID="newEmail" >
                    <span id="emailError"></span>
                    <hr class="smallLine">
                    <br/> <br/><input type="checkbox" id="fbemail" />Use your Facebook email: abc@facebook.com
                    <br/>Your Facebook email is based on your public username.<br/> Emails sent to this
                    address are forwarded to your primary email. <br/>
                    <hr class="smallLine">
                    <br/>
                    <input type="checkbox" id="allowFrnds" />Allow friends to include my email address
                    <br/>
                    <hr class="smallLine">
                    <input type="button" ID="saveChange" class="bluebutton" value="Save Change" />
                    
                    <button class="cancel" type="button">
                        Cancel</button>
                </th>
            </tr>
            <form  name="form2" method="post" action="settings.php">
            <tr id="password">
                <th>
                    Password
                </th>
                <th>
                    Updated some time ago
                </th>
                <th>
                    Edit
                </th>
            </tr>
            <tr id="passwordbox" class="commonbox">
                <th colspan="3">
                    <span class="blackNormalFont">Password</span><br/>
                    <div class="aligncenter">
                        &nbsp &nbsp &nbsp &nbsp &nbsp Current &nbsp &nbsp<input type="password" ID="currentPasword" name="currentPasword">&nbsp;&nbsp;<span id="currPwError" style="color:red;"></span>
                      <br/><br/><br/> &nbsp &nbsp  &nbsp &nbsp  New &nbsp
                        
                        &nbsp  &nbsp &nbsp &nbsp<input type="password" ID="newPassword" name="newPassword" ><br/><br/><br/> Re-type new &nbsp &nbsp
                        <input type="password" ID="reEnterPassword" name="reEnterPassword">

                  <span id="pw1Error"></span>
                   <span id="pw2Error"></span>
                        <br/> <br/>
                        <hr class="smallLine">
                    </div>
                    <br/>
                    <input type="submit" ID="saveChanges2" name="saveChanges2" class="bluebutton" value="Save Changes" />

                   
                    <button class="cancel" type="button">
                        Cancel</button>
                </th>
            </tr>
		</form>
            <tr id="networks">
                <th>
                    Networks
                </th>
                <th>
                    No Networks
                </th>
                <th>
                    Edit
                </th>
            </tr>
            <tr id="networksbox" class="commonbox">
                <th colspan="3">
                    <span class="blackNormalFont">Language</span><br/>
                    <div class="aligncenter">
                        Your primary network will appear next to your name. <br/>
                        <hr class="smallLine">
                        <button type="button" class="bluebutton">
                            Save Changes</button>
                        <button class="cancel" type="button">
                            Cancel</button>
                </th>
    </div>
    </tr>
    <tr id="language">
        <th>
            Language
        </th>
        <th>
            English (US)
        </th>
        <th>
            Edit
        </th>
    </tr>
    <tr id="languagebox" class="commonbox">
        <th colspan="3">
            <span class="blackNormalFont">Language</span><br/>
            <div class="aligncenter">
                Choose Primary
                <select name="language" class="dropDownStyle">
                    <option value="1">Urdu</option>
                    <option value="2">French</option>
                    <option value="3">English (UK)</option>
                    <option value="4">English (US)</option>
                    <option value="4">Espanol</option>
                </select>
                <br/>
                <hr class="smallLine">
                <br/>
                <button type="button" class="bluebutton">
                    Save Changes</button>
                <button class="cancel" type="button">
                    Cancel</button>
        </th>
        </div>
    </tr>
    <tr id="temperature">
        <th>
            Temperature
        </th>
        <th>
            Fahrenheit
        </th>
        <th>
            Edit
        </th>
    </tr>
    <tr id="temperaturebox" class="commonbox">
        <th colspan="3">
            <span class="blackNormalFont">Temperature</span><br/>
            <div class="aligncenter">
                Choose scale
                <select name="temperature" class="dropDownStyle">
                    <option value="1">Fahrenheit</option>
                    <option value="2">Celsius</option>
                </select>
                <br/>
                <hr class="smallLine">
                <br/>
                <button type="button" class="bluebutton">
                    Save Changes</button>
                <button class="cancel" type="button">
                    Cancel</button>
        </th>
        </div>
    </tr>
    </table>
    <text class="smaller"><a href="#" class="decor">&nbsp Download a copy</a><span class="graysmall">&nbspof your Facebook data</span></text>
    </div>
    <div class="footer">
        <br />
        <br/><span class="graysmall">Facebook &copy 2014 </span><br/><span class="bluesmall">English
            (US)</span></div>
   <div style="position:fixed;top:430px;left:320px;color:red;2:08 PM 12/14/2014">

<?php 
 
if(isset($_POST['currentPasword']) )
{

 function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		$con=mysqli_connect("localhost","root","","asn");
		return  mysqli_real_escape_string($con,$str);
	}

$password = $_POST['currentPasword'];
$newpass = $_POST['newPassword'];
$member=$_SESSION['SESS_MEMBER_ID'];

$qry="SELECT* FROM members where member_id=$member AND password='$password'";
$result=mysqli_query($con,$qry);
$count=mysqli_num_rows($result);
if($count==0)
{
echo"ERROR... Incorrect password...";
return false;
}



$sql="UPDATE members SET Password='$newpass' WHERE member_id=$member AND password='$password'  " ;



mysqli_query($con,$sql);
if (mysqli_query($con,$sql))
  {
  //die('Error: ' .  mysqli_error($con));
	echo("Password changed..");
	return false;
  }
echo("ERROR..Password not changed");
//exit();

}

else
{
	echo(" ");
}

?>
</div>
</body>
</html>
