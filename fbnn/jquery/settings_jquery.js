$(document).ready(function () {
    $("#name").click(function () {
        $("#username").show();
        $("#email").show();
        $("#password").show();
        $("#networks").show();
        $("#language").show();
        $("#temperature").show();

        $(".commonbox").hide();
        $("#namebox").slideDown("slow");
        $("#name").hide();
    });


    $("#username").click(function () {
        $("#name").show();
        $("#email").show();
        $("#password").show();
        $("#networks").show();
        $("#language").show();
        $("#temperature").show();


        $(".commonbox").hide();
        $("#usernamebox").slideDown("slow");
        $("#username").hide();
    });

    $("#email").click(function () {
        $("#name").show();
        $("#username").show();
        $("#password").show();
        $("#networks").show();
        $("#language").show();
        $("#temperature").show();


        $(".commonbox").hide();
        $("#emailbox").slideDown("slow");
        $("#email").hide();
    });

    $("#password").click(function () {
        $("#name").show();
        $("#username").show();
        $("#email").show();
        $("#networks").show();
        $("#language").show();
        $("#temperature").show();


        $(".commonbox").hide();
        $("#passwordbox").slideDown("slow");
        $("#passwordbox").show();
        $("#password").hide();
    });

    $("#networks").click(function () {
        $("#name").show();
        $("#username").show();
        $("#email").show();
        $("#password").show();
        $("#language").show();
        $("#temperature").show();


        $(".commonbox").hide();
        $("#networksbox").slideDown("slow");
        $("#networks").hide();
    });


    $("#language").click(function () {
        $("#name").show();
        $("#username").show();
        $("#email").show();
        $("#password").show();
        $("#networks").show();
        $("#temperature").show();


        $(".commonbox").hide();
        $("#languagebox").slideDown("slow");
        $("#language").hide();
    });


    $("#temperature").click(function () {
        $("#name").show();
        $("#username").show();
        $("#email").show();
        $("#password").show();
        $("#networks").show();
        $("#language").show();


        $(".commonbox").hide();
        $("#temperaturebox").slideDown("slow");
        $("#temperature").hide();
    });


    $(".cancel").click(function () {
        $("#namebox").hide();
        $("#usernamebox").hide();
        $("#emailbox").hide();
        $("#passwordbox").hide();
        $("#networksbox").hide();
        $("#languagebox").hide();
        $("#temperaturebox").hide();



        $("#name").show();
        $("#username").show();
        $("#email").show();
        $("#password").show();
        $("#networks").show();
        $("#language").show();
        $("#temperature").show();
	return false;

    });


    $("#ReviewButton").click(function () {

        $("#fnameError").hide();
        $("#lnameError").hide();
        $("#mnameError").hide();
        $("#anameError").hide();

        var fname = $("#firstnam").val();
        var lname = $("#lastname").val();
        var mname = $("#middlename").val();
        var aname = $("#alterName").val();
        var regExp = /^[a-zA-Z]{2,15}$/;

	var count=0;


        if (fname == "") {
            $("#fnameError").text("Required").show();
		count=1;

        }
        else if (!fname.match(regExp)) {
            $("#fnameError").text("Invalid Name").show();
		count=1;

        }

        if (lname == "") {
            $("#lnameError").text("Required").show();
		count=1;

        }

        else if (!lname.match(regExp)) {
            $("#lnameError").text("Invalid Name").show();

		count=1;

        }

        if (!mname.match(regExp)) {
            $("#mnameError").text("Invalid Name").show();
		count=1;

        }

        if (!aname.match(regExp)) {
            $("#anameError").text("Invalid Name").show();
		count=1;

        }

	if(count==1)
		return false;



    });


    $("#saveChange").click(function () {

        $("#emailError").hide();


        var email = $("#newEmail").val();

        var regexp = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

        if (!email.match(regexp) && email !== "") {

            $("#emailError").text("Invalid Email").show();
        }

    });



    $("#saveChanges2").click(function () {

       
        var pw1 = $("#newPassword").val();
        var pw2 = $("#reEnterPassword").val();
        var CurrPw = $("#currentPasword").val();

        var regexp = /^[a-zA-Z0-9!@#$%&;:.,><?+=)\(*^%_-]{8,30}$/;
	var count=0;


       if(CurrPw=="")
	{
      $("#currPwError").text("Required").show();
	count=1;
	}
        if (pw1 == "") {

            $("#pw1Error").text("Required").show();
		count=1;
        }
        else if (!(pw1.match(regexp) && pw1.match(/\d/) && pw1.match(/\W/))) {

            $("#pw1Error").html("Password must be atleast 8 charcters<br>including a digit and special character!").show();
		count=1;
        }

        if (pw2 == "") {

            $("#pw2Error").text("Required").show();
		count=1;
        }

        else if (pw1 != pw2 && pw1 != "") {
            $("#pw2Error").text("Passwords don't match").show();
		count=1;

        }
	
	if(count==1)
		return false;

	else
	{
	
	}

		

    });
});
