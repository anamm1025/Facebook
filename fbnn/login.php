<?php 
 
	session_start();
	include("dbconnection.php");
	?>
<script type="application/javascript">
function validateform()
{
		if(document.form1.password.value  != document.form1.cpassword.value)
	{
		alert("Password and confirm password not match...");
			return false;
	}
	//alert(document.form1.login.value.length);
	if(document.form1.password.value.length  <8 )
	{
		alert("Password Length should be greater than 8 .");
		return false;
	}	
	if(document.form1.password.value.length > 15)
	{
		alert("Password Length should be less than 15.");
		return false;
	}
	if(document.form1.fname.value == "")
	{
		alert("First name should not be empty.");
		return false;
	}
		if(document.form1.lname.value == "")
	{
		alert("Last name should not be empty.");
		return false;
	}
		if(document.form1.login.value == "")
	{
		alert("Please enter user name.");
		return false;
	}

	if(document.form1.password.value=="")
	{
		alert("Password should not be empty...");
		return false;
	}
			if(document.form1.login.value.length < 6 || document.form1.login.value.length > 12)
	{
		alert("Length should be greater than 6 and less than 12.");
		return false;
	}


	if(document.form1.address.value == "")
	{
		alert("Address should not be empty.");
		return false;
	}
	if(document.form1.cnumber.value == "")
	{
		alert("please enter a valid contact number....");
		return false;
	}
	if(document.form1.cnumber.value.length  <10 )
	{
		alert("please enter a valid contact number....");
		return false;
	}	
	if(document.form1.cnumber.value.length > 15)
	{
		alert("please enter a valid contact number.....");
		return false;
	}
	if(document.form1.email.value == "")
	{
		alert("email_id should not be empty.");
		return false;
	}
	if(document.form1.gender.value == "")
	{
		alert("please select one option for gender.....");
		return false;
	}
	if(document.form1.month.value == "")
	{
		alert("please select the month.....");
		return false;
	}
	if(document.form1.day.value == "")
	{
		alert("please select the day.....");
		return false;
	}
	if(document.form1.year.value == "")
	{
		alert("please select the year.....");
		return false;
	}
}

</script>    
    <?php 
 
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="loginImg/title.jpg" />
    <title>Welcome to Facebook-Login</title>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Alvas social networking</title>
<link href="format1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/master.css" type="text/css" />

<script type="text/javascript" src="contact1.js"></script>
<script type="text/javascript" src="contact.js"></script>
<script type="text/javascript" src="contact3.js"></script>
<script src="jquery/jquery-1.11.1.js" type="text/javascript"></script>
<script src="jquery/loginJquery.js" type="text/javascript"></script>
<link rel="shortcut icon" href="loginImg/title.jpg" />
    <title>Welcome to Facebook-Login</title>
    <link type="text/css" href="css/login.css" rel="stylesheet" />
   
<style type="text/css">
<!--
body {
	background-image: url(img/bg2.jpg);
	background-repeat:repeat-x;
	background-color:#d9deeb;

}
-->
</style>
<script type="text/javascript" src="jquery.watermarkinput.js"></script>
<script type="text/javascript">
jQuery(function($){
   $("#login").Watermark("username");
   
   });
</script>



</head>
<SCRIPT LANGUAGE="JavaScript">
function CountLeft(field, count, max) {
if (field.value.length > max)
field.value = field.value.substring(0, max);
else
count.value = max - field.value.length;
}
</script>
<body>


    <div id="header">

<div id="facebook"> 

<a id="facebook" href="login.php">facebook</a>

</div>

<div class="login">
<span class="loginText">Email or Phone &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Password</span>
<br/>

<form action="login-exec.php" method="post" name="form2" id="form2" onSubmit="return logvalidate()">
    <input type="text" ID="login" name="login" class="textBox" style="height:30px;">
&nbsp &nbsp
    <input type="password" name="password1"  TextMode="Password" class="textBox" style="height:30px;">
   <input type="submit" class="greenButton" value="Login" /></div>
	</form>	
      <br/>
    <br/>
<br/>
<span class="smallerText" style="float:right;margin-right:90px;">
<input type="checkbox" ID="CheckBox1"  />
Keep me logged in &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<a href="forgotPassword.html">Forgot your password?</a>
</span>

</div> 
  </div>
  
  
  <div class="mobile">
  <img src="loginImg/mobile.png"  alt="Facebook Mobile"/>
  </div>
  <div class="mobileText">
  <b><em>Heading out? Stay connected</em></b>
  <br/>
  Visit facebook.com on your mobile
  
  </div>
  
  
  <div class="register" >
 <span style="font-size:30px;"><b>Sign Up</b></span>
  <br/>
 <span style="font-size:20px"> It's free and always will be </span>
  <br/><br />
    <form action="login.php" method="post" onSubmit="return validateform()" name="form1" id="form1">
      
	<input type="text" ID="fname" name="fname" value="First Name" class="textBox1" onfocus="if(this.value=='First Name'){this.value = '';}" onblur="if (this.value == '') {this.value = 'First Name';}">&nbsp; &nbsp
	<input readonly type="hidden" name="left" size=3 maxlength=3 value="30" disabled="disabled" class="textfield2">	      
	<input type="text" ID="lname" name="lname" value="Last Name" class="textBox1" onfocus="if(this.value=='Last Name'){this.value = '';}" onblur="if (this.value == '') {this.value = 'Last Name';}">
 	<input readonly type="hidden" name="last" size=3 maxlength=3 value="30" disabled="disabled" class="textfield2">
	<br/><br />

      <input type="text" ID="email" name="email" value="Enter Email" class="textBox2" onfocus="if(this.value=='Enter Email'){this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter Email';}">
	<input readonly type="hidden" name="em" size=3 maxlength=3 value="50" disabled="disabled" class="textfield2">
	  
	  <br/><br />
       <input type="text" ID="reemail" name="reemail" value="Re Enter Email" class="textBox2" onfocus="if(this.value=='Re Enter Email'){this.value = '';}" onblur="if (this.value == '') {this.value = 'Re Enter Email';}">
       <input readonly type="hidden" name="reem" size=3 maxlength=3 value="50" disabled="disabled" class="textfield2">
	 
	    <br/><br />
      <input type="password" ID="password" name="password" value="EnterPassword" class="textBox2" onfocus="if(this.value=='EnterPassword'){this.value = '';}" onblur="if (this.value == '') {this.value = 'EnterPassword';}">
       <input readonly type="hidden" name="pas" size=3 maxlength=3 value="30" disabled="disabled" class="textfield2">
		  <br />
		  <br/>
		  <span style="font-size:20px">Birthday</span>
		  <input name="propic" id="dadded" type="hidden" value="uploadedimage/defoult.jpg" /></div>
		  <br/>
		  

  <select ID="month" name="month" class="dropDownStyle1">
   <option value="0">Month</option>
  <option value="1">jan</option>
  <option value="2">feb</option>
  <option value="3">mar</option>
  <option value="4">apr</option>
  <option value="5">may</option>
  <option value="6">june</option>
  <option value="7">july</option>
  <option value="8">aug</option>
  <option value="9">sep</option>
  <option value="10">oct</option>
  <option value="11">nov</option>
  <option value="12">dec</option>
  
</select>
        
    
<select ID="day" name="day" class="dropDownStyle2">
  <option value="0">Day</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option  value="31">31</option>
  
</select>
         
   
         <select ID="year" name="year" class="dropDownStyle3">
		  
  <option value="0">Year</option>
  <option value="2014">2014</option>
  <option value="2013">2013</option>
  <option value="2012">2012</option>
  <option value="2011">2011</option>
  <option value="2010">2010</option>
  <option value="2009">2009</option>
  <option value="2008">2008</option>
  <option value="2007">2007</option>
  <option value="2006">2006</option>
  <option value="2005">2005</option>
  <option value="2004">2004</option>
  <option value="2003">2003</option>
  <option value="2002">2002</option>
  <option value="2001">2001</option>
  <option value="2000">2000</option>
  <option value="1999">1999</option>
  <option value="1998">1998</option>
  <option value="1997">1997</option>
  <option value="1996">1996</option>
  <option value="1995">1995</option>
  <option value="1994">1994</option>
  <option value="1993">1993</option>
  <option value="1992">1992</option>
  <option value="1991">1991</option>
  <option value="1990">1990</option>
  <option value="1989">1989</option>
  <option value="1988">1988</option>
  <option value="1987">1987</option>
  <option value="1986">1986</option>
  <option value="1985">1985</option>
  <option value="1984">1984</option>
  <option value="1983">1983</option>
  <option  value="1982">1982</option>
</select>
  
<div style="float:right;margin-right:220px;padding-left:10px; ">
    <a href="#" class="bday">Why do i need to provide my </br><span class="bday">birthday?</span></a>
 
  <br/>
  <br/>
  
 
			  <select name="gender" id="gender" class="textfield1">
                <option value="" >Select Gender:</option>
                <option value="Female" >Female</option>
                <option  value="Male">Male</option>
              </select><br />
			
        <span id="genderError"></span>
  <br/>

 <span class="smallerText1">By clicking Sign Up, you agree to our  <a href="rights.php" style="color:navy">Terms</a> and that you have<br/> read our <a href="dataPolicy.php" style="color:navy">Data Use Policy</a>, including our <a href="#" style="color:navy">Cookie Use</a>.</span>
  <br/><br/>
	<input type="submit" name="submit" id="signUpButton" value="Sign Up" class="greenButton1" />
      <br/>
      <br />
      <hr />

      <a href="CreatePage.html" class="blbold" id="createPageLink">Create a Page </a> <span class="grbold">for a celebrity,band or business</span>
  
   </div>
  
	<div class="nameValidator0"></div>
	<div class="nameValidator1"></div>
	<div class="passwordValidator1"></div>
	<div class="DOBValidator"></div>	




  <!-- Validators -->
  <div id="anam" class="nameValidator2"></div>


 <div id="emailValidator"></div>
  <div id="ReemailValidator"></div>

  <div id="loginUsername"></div>

  <div id="loginPassword"></div>

   <div id="loginUsernamett"></div>

  <div id="loginPasswordtt"></div>
 
    </form>

<div style="position:fixed; top:730px; left:960px;color:red;font-weight:bold;font-size:20px;">
<?php
	
	if(isset($_POST['fname']) )
{
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($con,$str);
	}
	
	//Sanitize the POST values
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$reemail = $_POST['reemail'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	//$bdate = $_POST['bdate'];
	
	$propic = $_POST['propic'];
	$bday=$_POST['month'] . "/" . $_POST['day'] . "/" . $_POST['year'];
  	$month=$_POST['month'];
	$day=$_POST['day'];
	$year=$_POST['year'];
	if($email=="enter Email")
	{
		echo " ";
		return false;
	}
	
	//Check for duplicate login ID
	if($email != "") {
		$qry = "SELECT * FROM members WHERE Url='$email' ";

		
	$result=mysqli_query($con,$qry);
		
			if(mysqli_num_rows($result) > 0) {
				$errmsg_arr[] = 'Email already in use';
				echo 'Email already in use';
				$errflag = true;
				return false;
				
			}
			@mysqli_free_result($result);
		
		
	}
	

	//Create INSERT query
	$qry = "INSERT INTO members(UserName, Password, FirstName, LastName, Url, Birthdate, Gender, profImage, month, day, year) 
	VALUES('$fname','$password','$fname','$lname','$email','$bday','$gender','$propic','$month','$day','$year')";
	$con=mysqli_connect("localhost","root","","asn");
	$result = @mysqli_query($con,$qry);
	
	//Check whether the query was successful or not
	if($result) {
	echo 'Sign Up successful';
	$errmsg_arr[] = 'Success You can now log-in to facebook';
		$errflag = true;
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		exit();
	}
		$errmsg_arr[] = 'Sign Up successful';
		echo 'Sign Up successful';
		return false;	
	}else {
		die("Query failed");
	}
}
else
	echo '';
?>
</div>
</body>
</html>
