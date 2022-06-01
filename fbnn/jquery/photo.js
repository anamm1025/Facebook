$(document).ready(function () {

	$("#pictureDiv1").hide();
	$("#pictureDiv2").hide();
	$("#exit3").hide();


$("#exit3").click(function () {
         //$("#popDivv1").hide();
	//$("#popDivv2").hide();
	//alert("ssss");
	window.location.href = "photos.php";
	
      
    });

$("#up").click(function () {
         $("#pictureDiv1").show();
	$("#pictureDiv2").show();
	$("#exit3").show();
	
      
    });

});


