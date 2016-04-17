<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jquery</title>
<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<button id="move_up">Move up</button>
<button id="move_down">Move Down</button>
<button id="color">Change Color</button> 
<button id="disappear">Disappear/Re-appear</button>

<div id="change_me">Let me do staff</div>
<script>
new WOW().init();
</script>
<script>
$(document).ready(function() {
	$("#move_up").click(function() {
		$("#change_me").animate({top:30},200);
	});//end move_up
$("#move_down").click( function() {
$("#change_me").animate({top:500},2000);
});//end move_down
$("#color").click( function() {
$("#change_me").css("color", "purple");
});//end color
$("#disappear").click( function() {
$("#change_me").toggle("slow");
});//end disappear



$("#img img").on("mouseover", function(){
	$("#text").animate({opacity:"0.8", border:"1px solid black"},400, "linear"
 );
 	
	});
	
	
$("#img img").on("mouseout", function(){
	$("#text").delay("1000").animate({opacity:"0", border:"none"},200);
	});
});//end doc ready
</script>

<div id="container">
<div id="title"><span class="animated flash">Anton Samosvat</span></div>
<div id="img"><img src="img/anton_samosvat.jpg" class="animated fadeInLeftBig" /></div>
<div id="text">General Manger</div>
</div>

<div style="top:1000px; right:300px; position:absolute;"><div class="wow fadeInLeftBig flash" data-wow-offset="10"  data-wow-delay="0.5s"> <img src="img/P1010300.JPG" width="114" height="114" /></div ></div>

<body>
</body>
</html>