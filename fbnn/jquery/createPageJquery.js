$(document).ready(function () {
    $("#bus1").click(function () {
        $("#bus2").show();
        $("#bus1").slideUp("slow");

        $("#comm1").slideDown("slow");
        $("#art1").slideDown("slow");
        $("#enter1").slideDown("slow");
        $("#bran1").slideDown("slow");
        $("#comp1").slideDown("slow");

    });


    $("#art1").click(function () {
        $("#art2").show();
        $("#art1").slideUp("slow");

        $("#comm1").slideDown("slow");
        $("#bus1").slideDown("slow");
        $("#enter1").slideDown("slow");
        $("#bran1").slideDown("slow");
        $("#comp1").slideDown("slow");

    });

    $("#bran1").click(function () {
        $("#bran2").show();
        $("#bran1").slideUp("slow");

        $("#comm1").slideDown("slow");
        $("#art1").slideDown("slow");
        $("#enter1").slideDown("slow");
        $("#bus1").slideDown("slow");
        $("#comp1").slideDown("slow");

    });


    $("#comp1").click(function () {
        $("#comp2").show();
        $("#comp1").slideUp("slow");

        $("#comm1").slideDown("slow");
        $("#art1").slideDown("slow");
        $("#enter1").slideDown("slow");
        $("#bran1").slideDown("slow");
        $("#bus1").slideDown("slow");

    });



    $("#enter1").click(function () {
        $("#enter2").show();
        $("#enter1").slideUp("slow");

        $("#comm1").slideDown("slow");
        $("#art1").slideDown("slow");
        $("#bus1").slideDown("slow");
        $("#bran1").slideDown("slow");
        $("#comp1").slideDown("slow");


    });


    $("#comm1").click(function () {
        $("#comm2").show();
        $("#comm1").slideUp("slow");

        $("#bus1").slideDown("slow");
        $("#art1").slideDown("slow");
        $("#enter1").slideDown("slow");
        $("#bran1").slideDown("slow");
        $("#comp1").slideDown("slow");

    });





    $("#submit1").click(function () {

        $("#errorMsg").hide();
	$("#er1").text("");
	$("#er2").text("");
	$("#er3").text("");
	$("#er4").text("");
	$("#er5").text("");
	$("#er6").text("");
	
	var phone = $("#Phone").val();
	var cat=$("#businessCategory").val();
	var name=$("#businessName").val();
	var street=$("#streetAddress").val();
	var city = $("#CityState").val();
	var zip=$("#ZipCode").val();
flag=0;



	if(street=="Street Address")
	{	
		$("#er3").text("*");
return false;
	}
	if(name=="Name")
	{	
		$("#er2").text("*");
return false;
	}
	if(cat==0)
	{
		$("#er1").text("*");
return false;
	}
        if(city=="City or State")
	{
		$("#er4").text("*");
return false;
	}
	if(zip=="Zip Code")
	{
		$("#er5").text("*");
return false;
	}
	if(phone=="Phone")
	{
		$("#er6").text("*");
return false;
	}
        var regexp1 = /^([a-zA-Z]{3,25}( {0,1}[a-zA-Z]{3,25})*)$/;

        
        var regexp2 = /^(03[0-4][0-4][0-9]{7,14})$/;

        var pageName = $("#businessName").val();
        var regexp3 = /^([A-Z][a-zA-Z0-9]{2,25}([a-zA-Z0-9]* {0,1}[a-zA-Z0-9]*)*)$/;

        if (!pageName.match(regexp3) && pageName != "Name") {
            $("#errorMsg").text("Page Name must start with a capital letter, should be atleast of length 3 and shouldn't contain special charcters!").show();
return false;
        }

        else if (!city.match(regexp1) && city != "City or State") {
            $("#errorMsg").text("Invalid City or State Name!").show();
return false;

        }
        else if (!phone.match(regexp2) && phone != "Phone") {
            $("#errorMsg").text("Invalid Phone Number!").show();
return false;

        }
	else
		
		{$("#errorMsg").hide();}


if(flag==1)
return false;

    });


    $("#submit2").click(function () {


var flag=0;
        $("#errorMsg").hide();
	$("#er7").text("");
	$("#er8").text("");
        var pageName = $("#companyName").val();
	var cat=$("#companyCategory").val();
	if(cat=="0")
	{
		$("#er7").text("*");

return false;
	}
	if(pageName=="Company Name")
	{
		$("#er8").text("*");

return false;
	}
        var regexp3 = /^([A-Z][a-zA-Z0-9]{2,25}([a-zA-Z0-9]* {0,1}[a-zA-Z0-9]*)*)$/;

        if (!pageName.match(regexp3) && pageName != "Company Name") {
            $("#errorMsg").text("Page Name must start with a capital letter, should be atleast of length 3 and shouldn't contain special charcters!").show();
return false;
}

if(flag==1)
return false;
    });

    $("#submit3").click(function () {
var flag=0;
	$("#er9").text("");
	$("#er10").text("");
        $("#errorMsg").hide();

	var pageName = $("#BrandName").val();
	var cat=$("#brandCategory").val();
	if(cat=="0")
	{
		$("#er9").text("*");
return false;
	}
	if(pageName=="Brand or Product Name")
	{
		$("#er10").text("*");
return false;
	}
        var regexp3 = /^([A-Z][a-zA-Z0-9]{2,25}([a-zA-Z0-9]* {0,1}[a-zA-Z0-9]*)*)$/;

        if (!pageName.match(regexp3) && pageName != "Brand or Product Name") {
            $("#errorMsg").text("Page Name must start with a capital letter, should be atleast of length 3 and shouldn't contain special charcters!").show();
return false;
        }

if(flag==1)
return false;
    });


    $("#submit4").click(function () {
	
var flag=0;
	$("#er11").text("");
	$("#er12").text("");
        $("#errorMsg").hide();
        var pageName = $("#Name").val();
	var cat=$("#artistCategory").val();
	if(cat=="0")
	{
		$("#er11").text("*");
return false;
	}
	if(pageName=="Name")
	{
		$("#er12").text("*");
return false;
	}
        var regexp3 = /^([A-Z][a-zA-Z0-9]{2,25}([a-zA-Z0-9]* {0,1}[a-zA-Z0-9]*)*)$/;

        if (!pageName.match(regexp3) && pageName != "Name") {
            $("#errorMsg").text("Page Name must start with a capital letter, should be atleast of length 3 and shouldn't contain special charcters!").show();
return false;
        }

if(flag==1)
return false;
    });


    $("#submit5").click(function () {

var flag =0;
	$("#er13").text("");
	$("#er14").text("");
        $("#errorMsg").hide();
        var pageName = $("#entertainmentName").val();
	var cat=$("#entertainmentCategory").val();
	if(cat=="0")
	{
		$("#er13").text("*");
return false;
	}
	if(pageName=="Name")
	{
		$("#er14").text("*");
return false;
	}
        var regexp3 = /^([A-Z][a-zA-Z0-9]{2,25}([a-zA-Z0-9]* {0,1}[a-zA-Z0-9]*)*)$/;

        if (!pageName.match(regexp3) && pageName != "Name") {
            $("#errorMsg").text("Page Name must start with a capital letter, should be atleast of length 3 and shouldn't contain special charcters!").show();
return false;
        }

if(flag==1)
return false;
    });


    $("#submit6").click(function () {
var flag =0;
	$("#er15").text("");
        $("#errorMsg").hide();
        var pageName = $("#communityName").val();
	if(pageName=="Name")
	{
		$("#er15").text("*");
return false;
	}
        var regexp3 = /^([A-Z][a-zA-Z0-9]{2,25}([a-zA-Z0-9]* {0,1}[a-zA-Z0-9]*)*)$/;

        if (!pageName.match(regexp3) && pageName != "Name") {
            $("#errorMsg").text("Page Name must start with a capital letter, should be atleast of length 3 and shouldn't contain special charcters!").show();
return false;
        }

if(flag==1)
return false;
    });



});


