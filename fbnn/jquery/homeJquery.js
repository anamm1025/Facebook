$(document).ready(function () {
    $("#showCommentBox1").click(function () {
        $("#commentPanel1").show();
	return false;
      
    });

    $("#showCommentBox2").click(function () {
        $("#commentPanel2").show();
	return false;
      
    });

    $("#showCommentBox3").click(function () {
        $("#commentPanel3").show();
	return false;
      
    });

    $("#showCommentBox4").click(function () {
        $("#commentPanel4").show();
	return false;
      
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