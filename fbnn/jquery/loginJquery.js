$(document).ready(function () {


    $("#signUpButton").click(function () {

        $("#emailValidator").text("");
         $(".nameValidator2").text("");
        $("#ReemailValidator").text("");
        $("#genderError").text("").show();
	$(".DOBValidator").text("");	
	$(".passwordValidator1").text("");
	$(".nameValidator0").text("");
	$(".nameValidator1").text("");
	
        var emaill = $("#email").val();
	var Reemail = $("#reemail").val();

        var regexp1 = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
	var fname=$("#fname").val();
	var lname=$("#lname").val();
	var pass=$("#password").val();
	var month=$("#month").val();
	var day=$("#day").val();
	var year=$("#year").val();
	var count=0;
	var gender=$("#gender").val();

       var regExpName = /^[a-zA-Z]* {0,1}[a-zA-Z]*$/;
	if(month=="0")
	{
		
		$(".DOBValidator").text("Required").show();
		count=1;
	}
	if(day=="0")
	{
		
		$(".DOBValidator").text("Required").show();
		count=1;
	}
	if(year=="0")
	{
		
		$(".DOBValidator").text("Required").show();

		count=1;
	}
	if(pass=="EnterPassword")
	{
		
		$(".passwordValidator1").text("Password Required").show();
		count=1;
	}
	if(fname=="First Name")
	{
		
		$(".nameValidator0").text("*").show();
		count=1;
	}
	if(lname=="Last Name")
	{
		
		$(".nameValidator1").text("*").show();
	}

        if (emaill == "Enter Email") {
            $("#emailValidator").text("*").show();
		count=1;

        }


       if(!lname.match(regExpName) || !fname.match(regExpName)){
              $(".nameValidator2").text("Name can contain letters only");
		count=1;
        }
 
        if (!emaill.match(regexp1)) {

            $("#emailValidator").text("Invalid Email").show();
		count=1;
        }
        

        if (Reemail == "Re Enter Email") {
            $("#ReemailValidator").text("*").show();
		count=1;
        }

        if (emaill != Reemail && emaill != "Enter Email") {
            $("#ReemailValidator").text("Email don't match").show();
		count=1;
        }


        if (gender== 0) {
            $("#genderError").text("Select a Gender").show();
		count=1;

        }

        var checkk = /^[a-zA-Z0-9!@#$%&;:.,><?+=)\(*^%_-]{8,30}$/;

        if (!(pass.match(checkk) && pass.match(/\d/) && pass.match(/\W/)) && pass!="EnterPassword") {

            $(".passwordValidator1").text("Password must contain 8 characters including digit and special character").show();
		count=1;

        }

	if(count==1)
		return false;


    });




    $("#LoginButtn").click(function () {
   
        var emaill = $("#userName").val();

        var regexp1 = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

        if (emaill == "") {
            
             $(location).attr('href', 'againLogin.html');
        }

        else if (!emaill.match(regexp1)) {

           
             $(location).attr('href', 'againLogin.html');
        }

        var pass = $("#password").val();
        var checkk = /^[a-zA-Z0-9!@#$%&;:.,><?+=)\(*^%_-]{8,30}$/;
        if (pass == "") {
             $(location).attr('href', 'againLogin.html');
        }
        else if (!(pass.match(checkk) && pass.match(/\d/) && pass.match(/\W/))) {

           
             $(location).attr('href', 'againLogin.html');
        }
        if (emaill.match(regexp1) && pass.match(checkk) && pass.match(/\d/) && pass.match(/\W/)) {
            $(location).attr('href', 'home.html');
        }
    });




});