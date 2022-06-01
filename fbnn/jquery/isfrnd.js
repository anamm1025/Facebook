$(document).ready(function () {


	$("#popDivv1").hide();
	$("#popDivv2").hide();
	$("#popDiv1").hide();
	$("#popDiv2").hide();
	$("#coverDiv1").hide();
	$("#exit").hide();
    $("#showCommentBox1").click(function () {
        $("#commentPanel1").show();
	//return false;
      
    });

    $("#showCommentBox2").click(function () {
        $("#commentPanel2").show();
	
      
    });

    $("#showCommentBox3").click(function () {
        $("#commentPanel3").show();
	//return false;
      
    });


    $("#pcamera").click(function () {
         $("#popDiv1").show();
	$("#popDiv2").show();
	$("#exit2").show();
	
      
    });
$("#exit").click(function () {
         //$("#popDivv1").hide();
	//$("#popDivv2").hide();
	//alert("ssss");
	window.location.href = "isfrnd.php";
	
      
    });

$("#exit2").click(function () {
         //$("#popDivv1").hide();
	//$("#popDivv2").hide();
	//alert("ssss");
	window.location.href = "isfrnd.php";
	
      
    });

$("#profile_img").click(function () {
         $("#popDivv1").show();
	$("#popDivv2").show();
	$("#exit").show();
	
      
    });

$("#covercamera").click(function () {
         $("#coverDiv1").show();
	$("#coverDiv2").show();
	$("#exitt").show();
	
      
    });

$("#exitt").click(function () {
         //$("#popDivv1").hide();
	//$("#popDivv2").hide();
	//alert("ssss");
	window.location.href = "isfrnd.php";
	
      
    });
$("#video").click(function () {
	
	$("#photoDiv1").show();
	$("#message").hide();
	$("#postx").hide();
      
    });



$("#statusx").click(function () {
	
	$("#photoDiv1").hide();
	$("#message").show();
	$("#postx").show();
      
    });




});


