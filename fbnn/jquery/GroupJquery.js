$(document).ready(function () {
$("#errorMsg").hide();

$("#group").click(function () {
        $("#popDiv1").show();
	$("#popDiv2").show();

    });

$("#cancelButton").click(function () {
        document.getElementById("popDiv1").style.display = 'none';
	document.getElementById("popDiv2").style.display = 'none';

    });

    $("#createButton").click(function () {
        $("#privacyError").hide();
	$("#er16").text("");
	$("#er17").text("");
	var groupname=$("#groupname").val();
	var members=$("#members").val();

	var count=0;
	if(groupname=="")
	{
		$("#er16").text("*");
		count=1;
		
	}
	if(members=="Who do you want to add to the group")
	{
		$("#er17").text("*");
		count=1;
	}
	var reg=/^([a-zA-Z]* {0,1}[a-zA-Z]* {0,1}[a-zA-Z]*)*$/;	
	
        var op1 = $("#public").is(":checked");
        var op2 = $("#Closed").is(":checked");
        var op3 = $("#Secret").is(":checked");
        if (op1 == 0 && op2 == 0 && op3 == 0) {
            $("#privacyError").text("Select a privacy option").show();
		count=1;
        }

	if(count==1)
		return false;

    });
});