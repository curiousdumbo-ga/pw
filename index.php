<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta property="og:image" content="images/ogimage.png">
	<meta property="og:type" content="website">
	<meta property="og:url" content="curiousdumbo.ga">
	<meta property="og:title" content="Curious Dumbo">
	<meta property="og:description" content="A website by Gurbir Dhaliwal">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#1c1c1c">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="icons/3d-heart.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>	
	<title>Curious Dumbo</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&family=Rubik&display=swap');
		body{
			background: #1c1c1c;
		}
		*:focus{
			outline: none;
		}
		#login_main{
			position: absolute;
			top: 60%;
			left: 48%;
			transform: translate(-50%,-50%);
			height: 130px;
		}
		#btn{
			position: absolute;
			bottom: 0;
			left: 0;
			/*transform: translate(-50%,0);*/
			padding: 6px 12px;
			background: #ff4800;
			border-radius: 4px;
			border: none;
			font-size: 15px;
			color: white;
			opacity: 0.3;
			font-family: 'Montserrat', sans-serif;
		}
		#pass{
			position: absolute;
			top: 48%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		.tf{
			padding: 6px 12px;
			border: 1.5px solid #808080;
			background: transparent;
			border-radius: 4px;
			font-size: 15px;
			color: white;
			font-family: 'Rubik', sans-serif;

		}
		.tf:hover{
			border: 1.5px solid cyan;
			box-shadow: 0px 0px 15px cyan;
		}
		.tf:focus{
			border: 1.5px solid cyan;
			box-shadow: 0px 0px 15px cyan;
		}
		#htext{
			color: white;
			/*color: transparent;*/
			position: absolute;
			top: 20%;
			left: 50%;
			transform: translate(-50%,-50%);
			font-size: 35px;
			font-family: 'Montserrat', sans-serif;
			/*font-weight: 900;*/
			-webkit-text-stroke: 0.5px white;
		}
		#img{
			width: 20px;
			height: 20px;
			filter: invert(60%);
			position: absolute;
			top: 70%;
			transition-duration: 0.4s;
			position: absolute;
			top: 48%;
			left: 112%;
			transform: translate(-50%,-50%);
		}
		#img:hover{
			filter: invert(95%);			
		}
		#footer{
			color: #505050;
			position: absolute;
			top: 95%;
			left: 50%;
			transform: translate(-50%,-50%);
			font-family: 'Montserrat', sans-serif;
			font-size: 12px;
			white-space: nowrap;
			overflow: hidden;
		}
		#heart{
			color: red;
		}
		#particles-js{
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			position: fixed;
			background-color: #000;
			background-image: url('');
			background-size: cover;
			background-position: 50% 50%;
			background-repeat: no-repeat;
		}
		.body-particles{
			position: absolute;
			top: 0;
			left: 0;
			z-index: 100;
		}
	</style>
</head>
<body>
	<?php
		session_start();
		$_SESSION["login_status"] = "logged_out";
		$_SESSION["jlog"]="no";
	?>
	<div id="particles-js"></div>
	<div id="htext">
		Welcome!
	</div>
	<div id="login_main">
		<form method="post" action="validate.php">
			<input type="text" name="id" id="name" class="tf" required placeholder="Username">
			<input type="password" name="password" id="pass" class="tf" required placeholder="Password">
			<img src="icons/pass-hide.png" id="img" onclick="togglepass()">
			<input type="submit" value="Login" id="btn">
		</form>
	</div>
	<footer>
		<div id="footer">Made with <span id="heart">❤</span> by Curious Dumbo</div>
	</footer>
	<script>
		// alert("Reminder for a smile!!");
		$(document).ready(function(){
		  particlesJS.load('particles-js', 'particles2.json');
		});		
		function togglepass(){
			var x = document.getElementById("pass");
			var y = document.getElementById("img");
			if (x.type === "password"){
				x.type = "text";
				y.src="icons/pass-show.png";
			} else {
				x.type ="password";
				y.src="icons/pass-hide.png";
			}
		}
		$(".tf").keyup(function(){
			var val1 = $("#name").val();
			var val2 = $("#pass").val();
			if(val1!="" && val2!=""){
				btn(true);
			}else{
				btn(false);
			}
		});
		function btn(x){
			if(x==true){
				$("#btn").prop('disabled', false);
				$("#btn").css("opacity","1");
			}else{
				$("#btn").prop('disabled', true);
				$("#btn").css("opacity","0.3");
			}
		}
	</script>
</body>
</html>