
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link rel="shortcut icon" href="loginImg/title.jpg" />
    <title>Welcome to Facebook-Login</title>
    <link type="text/css" href="css/login.css" rel="stylesheet"></link>
    <link type="text/css" href="css/forgotPassword.css" rel="stylesheet"></link>
    <script type="text/javascript" src="jquery/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="jquery/forgotPassword.js"></script>
</head>
<body>
    <div id="header">
        <div id="facebook">
            <a href="login.php">facebook</a>
        </div>
        <div class="login">
            <span class="loginText">Email or Phone &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Password</span>
            <br />
            <input type="text" ID="userName" class="textBox">
            &nbsp &nbsp
            <input type="password" ID="password" class="textBox">
           <input type="button" class="loginButton" value="Log In">
            
            <br />
            <span class="smallerText">
                <input type="checkbox" ID="CheckBox1"/>
                Keep me logged in &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; <a href="forgotPassword.php">Forgot your password?</a> </span>
        </div>
    </div>
    <div class="findYourAccountPanel">
        <span class="textBold">Find Your Account</span> </br>
        <hr class="greyline">
        <div class="fberrorbox " id="error">
        </div>
        </br>
        <div class="centerAlign">
            Email, Phone, username or Full Name </br>
            <img src="images/accountt.png" alt="Not found" class="accountimg"/>
            <input id="name" type="text" name="username" class="textBoxx">
        </div>
        <div class="bottomPanel">
            <a href="#" class="smallText">I can't identify my account</a>
            <button type="button" class="right" id="cancel">
                Cancel</button>
            <button type="button" class="bluebuttonRight" id="search">
                Search</button>
        </div>
    </div>
    <div class="linee">
        <hr>
    </div>
    <div class="footer">
        <br />
        </br><span class="graysmall">Facebook &copy 2014 </span></br><span class="bluesmall">English
            (US)</span></div>
   
</body>
</html>
