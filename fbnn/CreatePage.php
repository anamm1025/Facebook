<?php 
 
session_start();
	include("dbconnection.php");
	
?>
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link rel="shortcut icon" href="images/title.jpg" />
    <title>Facebook</title>
    <script type="text/javascript" src="jquery/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="jquery/createPageJquery.js"></script>
    
    <script src="jquery/createGroup.js" type="text/javascript"></script>
    <script src="jquery/GroupJquery.js" type="text/javascript"></script>
        
     <link rel="stylesheet" type="text/css" media="all" href="css/Groupstyle.css" />
    <link rel="stylesheet" type="text/css" media="all" href="css/anamStyle.css" />
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
$("#display").php(html).show();
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
    <div class="flag">
        <img src="pageImages/flag.png" alt="Not Found" />
        Create a Page
    </div>
    <div class="greyFont">
        <br />
        Create a Facebook Page to build a closer relationship with your audience and customers
    </div>
    <div id="errorMsg"></div>
    <div class="business2" id="bus2">
<form id="form1" name="form1" action="pageRequest6.php" method="post">

        <span class="fontStyle1">Local Business or Place</span>
        <br/>
        <span class="greyFont2">Join your supporters on Facebook.</span>


	
	<select ID="businessCategory" name="businessCategory" class="dropDownStyle">
  	<option selected value="0">Select a category</option>
  	<option value="Aerospace/Defence">Aerospace/Defence</option>
  	<option value="Bank">Bank</option>
  	<option value="Chemicals">Chemicals</option>
	</select> <text class="red" id="er1"></text>

        <br/>
        <input type="text" id="businessName" name="businessName" value="Name" class="textBoxStyle" onfocus="if(this.value=='Name'){this.value = '';}" onblur="if (this.value == '') {this.value = 'Name';}">
        <text class="red" id="er2"></text>
	<br/>
        <input type="text" ID="streetAddress" value="Street Address" class="textBoxStyle" onfocus="if(this.value=='Street Address'){this.value = '';}" onblur="if (this.value == '') {this.value = 'Street Address';}">
        <text class="red" id="er3"></text>
	<br/>

        <input type="text" ID="CityState" value="City or State" class="textBoxStyle" onfocus="if(this.value=='City or State'){this.value = '';}" onblur="if (this.value == '') {this.value = 'City or State';}">
         <text class="red" id="er4"></text>
	 <br/>
        <input type="text" ID="ZipCode" value="Zip Code" class="textBoxStyle" onfocus="if(this.value=='Zip Code'){this.value = '';}" onblur="if (this.value == '') {this.value = 'Zip Code';}">
	<text class="red" id="er5"></text>
        <br/>
        <input type="text" id="Phone" value="Phone" class="textBoxStyle" onfocus="if(this.value=='Phone'){this.value = '';}" onblur="if (this.value == '') {this.value = 'Phone';}">
        <text class="red" id="er6"></text><br/>
        <span class="greyFont2">By clicking Get Started, you agree to the Facebook Pages Terms.</span>
        <br/>
       
        <input type="submit" class="getStartedButton" ID="submit1" value="Get Started" />
</form>
    </div>
    <div class="business1" id="bus1">
        <a href="#">
            <img src="pageImages/business.png" alt="Not Found" /></a>
    </div>
    <div class="company2" id="comp2">
        <span class="fontStyle1">Company, Organization or Institution</span>
        <br/>
        <br/>
        <span class="greyFont2">Join your supporters on Facebook.</span>

<form id="form2" name="form2" action="pageRequest.php" method="post">

	<select name="companyCategory" id="companyCategory" class="dropDownStyle">
  	<option value="0">Select a category</option>
  	<option value="AerospaceOrDefence">Aerospace/Defence</option>
  	<option value="Bank">Bank</option>
  	<option value="Chemicals">Chemicals</option>
	</select><text class="red" id="er7">
</text>
        
            
        <br/>
        <br/>
        <input type="text" ID="companyName"  name="companyName" value="company Name" class="textBoxStyle" onfocus="if(this.value=='Company Name'){this.value = '';}" onblur="if (this.value == '') {this.value = 'Company Name';}">
        <text class="red" id="er8"></text><br/>
        <br/>
        <span class="greyFont2">By clicking Get Started, you agree to the Facebook Pages Terms.</span>
        <br/>
        <input type="submit" ID="submit2" class="getStartedButton" value="Get Started" />

</form>
        
    </div>
    <div class="company1" id="comp1">
        <a href="#">
            <img src="pageImages/company.png" alt="Not Found" /></a>
    </div>
    <div class="brand2" id="bran2">

<form id="form3" name="form3" action="pageRequest2.php" method="post">

        <span class="fontStyle1">Brand or Product</span>
        <br/>
        <br/>


	<select id="brandCategory"  name="brandCategory" class="dropDownStyle">
  	<option selected value="0">Select a category</option>
  	<option value="Cars">Cars</option>
  	<option value="Clothing">Clothing</option>
  	<option value="Application">Application</option>
	</select><text class="red" id="er9"></text>
        
        <br/>
        <br/>
        <input ID="BrandName" name="BrandName" value="Brand or Product Name" class="textBoxStyle" onfocus="if(this.value=='Brand or Product Name'){this.value = '';}" onblur="if (this.value == '') {this.value = 'Brand or Product Name';}">
        <text class="red" id="er10"></text>
        <br/>
        <br/>
        <span class="greyFont2">By clicking Get Started, you agree to the Facebook Pages Terms.</span>
        <br/>
        <input type="submit" ID="submit3" class="getStartedButton" value="Get Started" />
</form>
    </div>
    <div class="brand1" id="bran1">
        <a href="#">
            <img src="pageImages/brand.png" alt="Not Found" /></a>
    </div>
    <div class="artistBand2" id="art2">

<form id="form4" name="form4" action="pageRequest3.php" method="post">

        <span class="fontStyle1">Artist, Band or Public Figure</span>
        <br/>
        <span class="greyFont2">Have a profile? Learn more about letting people follow your public updates</span>
        <br/>
        <br/>

	<select id="artistCategory" name="artistCategory" class="dropDownStyle">
  	<option selected value="0">Select a category</option>
  	<option value="Artist">Artist</option>
  	<option value="Athlete">Athlete</option>
  	<option value="Author">Author</option>
	</select><text class="red" id="er11"></text>

       
        <br/>
        <br/>

        <input type="text" ID="Name" name="Name" value="Name" class="textBoxStyle" onfocus="if(this.value=='Name'){this.value = '';}" onblur="if (this.value == '') {this.value = 'Name';}">
        <text class="red" id="er12"></text>

	<br/>
        <br/>
        <span class="greyFont2">By clicking Get Started, you agree to the Facebook Pages Terms.</span>
        <br/>
        <input type="submit" ID="submit4" class="getStartedButton" value="Get Started" />
</from>
           </div>
    <div class="artistBand1" id="art1">
        <a href="#">
            <img src="pageImages/artistBand.png" alt="Not Found" /></a>
    </div>
    <div class="entertainment2" id="enter2">

<form id="form5" name="form5" action="pageRequest4.php" method="post">

        <span class="fontStyle1">Entertainment</span>
        <br/>
        <span class="greyFont2">Join your community on Facebook</span>
        <br/>
        <br/>
	
	<select id="entertainmentCategory"  name="entertainmentCategory" class="dropDownStyle">
  	<option selected value="0">Select a category</option>
  	<option value="Artist">Artist</option>
  	<option value="Athlete">Athlete</option>
  	<option value="Author">Author</option>
	</select><text class="red" id="er13"></text>


        <br/>
        <br/>
          <input type="text" ID="entertainmentName"  name="entertainmentName" value="Name" class="textBoxStyle" onfocus="if(this.value=='Name'){this.value = '';}" onblur="if (this.value == '') {this.value = 'Name';}">
	<text class="red" id="er14"></text>
        <br/>
        <br/>
        <span class="greyFont2">By clicking Get Started, you agree to the Facebook Pages Terms.</span>
        <br/>
        <input type="submit" ID="submit5" class="getStartedButton" value="Get Started" />
</form>
    </div>
    <div class="entertainment1" id="enter1">
        <a href="#">
            <img src="pageImages/entertainment.png" alt="Not Found" /></a>
    </div>
    <div class="community2" id="comm2">

<form id="form6" name="form6" action="pageRequest5.php" method="post">

        <span class="fontStyle1">Cause or Community</span>
        <br/>
        <span class="greyFont2">Join your supporters on Facebook</span>
        <br/>
        <br/>
         <input type="text" ID="communityName" name="communityName" value="Name" class="textBoxStyle"  onfocus="if(this.value=='Name'){this.value = '';}" onblur="if (this.value == '') {this.value = 'Name';}">
         <text class="red" id="er15"></text>
         <br/>
        <br/>
        <span class="greyFont2">By clicking Get Started, you agree to the Facebook Pages Terms.</span>
        <br/>
         <input type="submit" ID="submit6" class="getStartedButton" value="Get Started" />
         </br>
         </br>
</form>
         <span class="fontStyle1">Create a group instead?</span>
         </br>
         <span class="greyFont2">Groups are for members to discuss and share with each other.</span>
         </br>
         <input type="submit" ID="group" value="Create Group"/>
            </div>
    <div class="community1" id="comm1">
        <a href="#">
            <img src="pageImages/community.png" alt="Not Found" /></a>
    </div>
    <div id="footer">
        <hr id="lineStyle">
        								

        <a href="#">About</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Create Ad</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#">Create Page</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Developers</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#">Careers</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#">Privacy</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#">Terms</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#">Cookies</a>&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="#">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;
    </div>


    <div class="disabledBackground" id="popDiv1">
    </div>
    <div id="popDiv2" class="ontop">
        <div class="groupPanel">
            Create New Group</div>
        <br/>
        <div class="padding">
            <span class="greyfont">Group Name
<input type="text" ID="groupname" class="textBoxStyle">
<text class="red" id="er16"></text><br/>
<br/>
Members &nbsp &nbsp &nbsp
<input type="text" ID="members" value="Who do you want to add to the group" class="textBoxStyle" onfocus="if(this.value=='Who do you want to add to the group'){this.value = '';}" onblur="if (this.value == '') {this.value = 'Who do you want to add to the group';}">
<text class="red" id="er17"></text>
<br/>
                

<hr class="smallLine">
<span id="Span1"></span>
<br/>

<div class="">
<div id="privacyError" style="color:red;"></div>
Privacy

<input type="radio" ID="public" name="privacyOption" /> <img src="images/public.png" alt="Not Found" />    Public

<br/>
<div class="smallgreytext">Anyone can see the group,its members and their <br/>posts.

<hr>
</div>

<div class="paddingn">
<input type="radio" ID="Closed" name="privacyOption" /><img src="images/close.png" alt="Not Found" /> Closed</div>

<div class="smallgreytext">Anyone can find the group and see who's in it.Only <br/>members can see posts.

<hr>
</div>


<div class="paddingn">
<input type="radio" ID="Secret" name="privacyOption" /><img src="images/secret.png" alt="Not Found" />Secret</div>

<div class="smallgreytext">Only members can find the group and see posts.

<br/>
<br/>
<a href="#" class="bluesmall">Learn more about groups privacy</a>

</div>
<hr>
<input type="submit" ID="createButton" class="bluebuttonRight" value="Create">
<input type="submit" ID="cancelButton" OnClientClick="hide('popDiv1')" class="right" value="Cancel"/>


    

</body>
</html>
