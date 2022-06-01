$(document).ready(function()
{
	$("#error").hide();
$("#search").click(function(){
	
	if($("#name").val()=="")
	{
		$("#error").text("Please fill in atleast one field");
            	$("#error").show();
        }
	else
	{
		$("#error").hide();
		$("#error").text("No Search Results");
            	$("#error").show();
	}

});

 $(".loginButton").click(function () {
   
        var emaill = $("#userName").val();

        var regexp1 = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

        if (emaill == "") {
            
             $(location).attr('href', 'againLogin.php');
        }

        else if (!emaill.match(regexp1)) {

           
             $(location).attr('href', 'againLogin.php');
        }

        var pass = $("#password").val();
        var checkk = /^[a-zA-Z0-9!@#$%&;:.,><?+=)\(*^%_-]{8,30}$/;
        if (pass == "") {
             $(location).attr('href', 'againLogin.php');
        }
        else if (!(pass.match(checkk) && pass.match(/\d/) && pass.match(/\W/))) {

           
             $(location).attr('href', 'againLogin.php');
        }
        if (emaill.match(regexp1) && pass.match(checkk) && pass.match(/\d/) && pass.match(/\W/)) {
            
        }
    });









$("#cancel").click(function(){
	
	$("#error").hide();

});

});