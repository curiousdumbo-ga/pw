<?php
	// Validate Session
	// session_start();
	// function redirect($url){
	// 	ob_start();
	// 	header('location: '.$url);
	// 	ob_end_flush();
	// 	die();
	// }
	// if($_SESSION['login']!="kk21"){
	// 	redirect("../../index.php");
	// }
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#1c1c1c">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="../../icons/3d-heart.png">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"
		integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q=="
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
	<title>Happy Birthday</title>
	<style>
		:root{
			--grey: #808080;
			--dark-grey : rgba(28,28,28,0.7);
		}
		*:focus{
			outline: none;					
		}
		*{
			margin: 0;
			padding: 0;	
		}
		body{		
			background: #000;
			overflow: hidden;
		}
		body::before{
			content:"";
			background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),linear-gradient(rgba(0,0,0,0),black),url('pic.jpg');
			position: absolute;
			top: 0; left: 0;
			width: 100%; height: 100%;
			background-size: cover;
			background-repeat: repeat;
			overflow: hidden;
			filter: saturate(0) blur(var(--bluramt));
			animation: var(--anim) 40s ease-in-out infinite alternate;
		}
		@keyframes slideup{
			0%{
				background-position: 20% 30%;
			}
			100%{
				background-position: 50% 70%;				
			}
		}
	    input[type='range'] {
	      overflow: hidden;
	      width: 250px;
	      -webkit-appearance: none;
	      background-color: transparent;
	      border-radius: 10px;
		  cursor: pointer;
	    }
	    
	    input[type='range']::-webkit-slider-runnable-track {
	      height: 2px;
	      -webkit-appearance: none;
	      background-color: var(--grey);
	    }
	    
	    input[type='range']::-webkit-slider-thumb {
	      width: 0px;
	      -webkit-appearance: none;
	      height: 0px;
	      box-shadow: -100vw 0 0 100vw white;
	    }

		/* FF */
		input[type="range"]::-moz-range-progress {
	      -webkit-appearance: none;
		  background-color: #fff; 
		  border-radius: 3px;
		  height: 1.5px;
		}
		input[type="range"]::-moz-range-track {  
		  background-color: var(--grey);
		  height: 1.5px;
		  border-radius: 3px;
		}
		input[type=range]::-moz-range-thumb {
			border: none;
			height: 0;
			width: 0;
			border-radius: 3px;
			background: transparent;
			cursor: pointer;
		}

		/* IE */		
		input[type="range"]::-ms-fill-lower {
		  background-color: #fff; 
		}
		input[type="range"]::-ms-fill-upper {  
		  background-color: var(--grey);
		}
		
		.arrow{
			position: absolute;
			border: 1px solid var(--grey);
			border-width: 0 0 1.5px 1.5px;
			width: 20px;
			height: 20px;
			line-height: 0;
			font-size: 0;
			opacity: 0;
		}
		#left{
			left: 15px;
			top: 52%;
			-webkit-transform: rotate(45deg);
			-ms-transform: rotate(45deg);
			-o-transform: rotate(45deg);
			transform: rotate(45deg);
		}
		#right{
			right: 15px;
			top: 52%;
			-webkit-transform: rotate(-135deg);
			-ms-transform: rotate(-135deg);
			-o-transform: rotate(-135deg);
			transform: rotate(-135deg);
		}
		#sbar{
			width: 100%;
			position: absolute;
			bottom: 15px;
			left: -1px;
			opacity: 0;
		}
		#footbar{
			position: absolute;
			bottom: 7%;
			left: 50%;
			transform: translate(-50%,0);
			width: 70vw;
			height: 20px;
		}
		#text-panel{
			position: absolute;
			top: 52%;
			left: 50%;
			transform: translate(-50%,-50%);
			border: 1.5px solid red;
			background-color: red;
			/* height: 60vh; */
			/* width: 70vw; */
			background-position: center 0;	
		}

		#main-text{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			width: calc(100% - 10px);
			height: calc(100% - 10px);
			color: white;
			font-family: 'Raleway', sans-serif;
			overflow: scroll;
			font-size: 16px;
			overflow-x: hidden;
			scrollbar-width: none;
			display: none;
		}
		#reveal-title{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			color: white;
			font-family: 'Montserrat', sans-serif;
			font-size: 30px;
			height: auto;
			width: 60vw;
			overflow: auto;
			text-align: center;
			opacity: 1;
			font-weight: 600;
			text-transform: uppercase;
			cursor: pointer;
		}
		#main-text::-webkit-scrollbar{
			width: 2.5px;
		}
		#main-text::-webkit-scrollbar-track {
		  box-shadow: inset 0 0 6px rgba(0, 0, 0, 0);
		}
		 
		#main-text::-webkit-scrollbar-thumb {
		  background-color: rgba(173,173,173,0);
		  outline: none;
		  border-radius: 50px;
		}
		#text-title{
			color: #909090;
			font-family: 'Raleway', sans-serif;
			font-weight: lighter;
			position: absolute;
			transform: translate(0,-110%);
			opacity: 0;
		}
		#header{
			position: absolute;
			left: 0;
			top: 0;
			height: 20px;
			width: 100vw;
			background: rgba(0,0,0,0.4);
			backdrop-filter: blur(5px);
			display: none;
		}
		#htext{
			color: #9f9f9f;
			font-family: 'Raleway', sans-serif;
			font-weight: 800;
			font-size: 13px;
			position: absolute;
			top: 50%;
			right: 15px;
			transform: translate(0,-50%);
			white-space: nowrap;
			text-align: center;
			display: none;
		}
		#down{
			color: white;
			position: absolute;
			font-size: 15px;
			font-family: 'Raleway', sans-serif;
			font-weight: 600;
			position: absolute;
			top: -4px;
			left: 50%;
			transform: translate(-50%,0);
			color: var(--grey);
		}
		a{
			text-decoration: none;
			color: inherit;
		}
		.pbtn{
			color: #707070;
			font-size: 20px;
			position: absolute;
			top: -8px;
		}
		#rev{
			left: 0px;
			/* transform: rotate(-50deg); */
		}
		#forw{
			right: 0px;
			/* transform: rotate(50deg); */
		}
		#begin-panel{
			width: 100%;
			height: 100%;
			position: absolute;
			top: 0;
			left: 0;
			background-color: #1c1c1c;
			z-index: 3;
		}
		#begin-text{
			font-family: 'Raleway';
			font-size: 30px;
			color: var(--grey);
			position: absolute;
			top: 45%;		
			left: 50%;
			transform: translate(-50%,-50%);	
			text-align: center;
			display: none;
		}
		#begin-btn{
			padding: 5px 14px;
			font-family: 'Raleway';
			font-size: 20px;
			color: var(--grey);
			border: none;
			background-color: transparent;
			border: 2px solid var(--grey);
			position: absolute;
			bottom: 20%;
			left: 50%;
			transform: translate(-50%,0);
			border-radius: 50px;
			transition-duration: 0.4s;
			display: none;
		}
		#begin-btn:hover{
			background-color: white;
			color: #1c1c1c;
			border-color: white;
		}
		@-moz-document url-prefix(){
			#sbar{
				bottom: -15px;
			}
			.pbtn{
				font-size: 21px;
				top: -8px;
			}
			#rev{
				left: -2px;
			}
			#forw{
				right: -1px;
			}
		}
		#particles-js{
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			position: fixed;
			background-color: transparent;
			background-image: url('');
			background-size: cover;
			background-position: 50% 50%;
			background-repeat: no-repeat;
			filter: blur(1.5px);
		}
		.sbtn{
			display: none;
		}
		#info{
			position: absolute;
			bottom: 5px;
			right: 5px;
			color: var(--grey);
			font-size: 15px;
			z-index: 2;
			opacity: 0;
			cursor: pointer;
		}
		#info-circle{
			width: 0px;
			height: 0px;
			position: absolute;
			bottom: 0;
			right: 0;
			background-color: #f00;
			display: inline-block;
			border-radius: 100% 0 0 0;
		}
		#rt-label{
			width: 100%;
			position: absolute;
			top: calc(100% + 1px);
			left: -1.5px;
			background-color: #1c1c1c;
			color: white;
			opacity: 1;
			letter-spacing: 3px;
			font-size: 10px;
			text-align: center;
			font-family: 'Raleway';
			text-transform: uppercase;
			padding: 4px 0;
			border: 1.5px solid #1c1c1c;
			cursor: pointer;
		}
		.sl-btn{
			padding: 5px 13px;
			font-family: 'Raleway';
			font-size: 18px;
			color: var(--dark-grey);
			border: none;
			background-color: transparent;
			border: 2px solid var(--dark-grey);
			border-radius: 50px;
			transition-duration: 0.4s;
			font-weight: 500;
			min-width: 115px;
			cursor: pointer;
		}
		#song-link{
			position: absolute;
			bottom: 10%;
			left: 50%;
			transform: translate(-50%,0);
			width: auto;
			white-space: nowrap;
		}
		#download{
			/* margin-right: 20px; */
		} 
		#download:hover{
			background-color: white;
			color: #1c1c1c;
			border-color: white;
		}
		#spotify:hover{
			background-color:#1DB954;
			color: white;
			border-color: #1DB954;
		}
		#song-name{
			color: white;
			font-size: 20px;
			font-family: 'Raleway', sans-serif;
			text-transform: uppercase;
			font-weight: 800;
		}
		#song-label{
			position: absolute;
			top: -12px;
			left: 0;
			color: var(--dark-grey);
			font-size: 10px;
			font-family: 'Raleway', sans-serif;
			text-transform: uppercase;
			font-weight: 500;
		}
		#song-title{
			position: absolute;
			left: 50%;
			bottom: 17%;
			width: 255px;
			transform: translate(-50%,0);
		}
		.song-details{
			opacity: 0;
		}
		#jbox{
			height: 230px;
			width: 230px;
			background-color: #1c1c1c;
			position: absolute;
			top: 20%;
			left: 50%;
			transform: translate(-50%,0);
			opacity: 0;
		}
		#jtext{
			color: white;
			font-size: 100px;
			font-family: 'Montserrat';
			font-weight: bold;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		#memory-lane{
			background-color: white;
			color: #1c1c1c;
			font-size: 15px;
			font-family: 'Montserrat';
			padding: 2px 0;
			width: 100%;
			position: absolute;
			top: 100%;
			left: 0;
			height: 20px;
			cursor: pointer;
		}
		#ml-text{
			position: absolute;
			white-space: nowrap;
		}
		#begin-footer{
			position: absolute;
			bottom: 30px;
			left: 50%;
			transform: translate(-50%,0);
			font-family: 'Raleway';
			font-size: 12px;
			color: var(--grey);
			white-space: nowrap;
			text-transform: uppercase;
		}
	</style>
</head>
<body scroll="no">
	<div id="particles-js"></div>
	<div id="begin-panel">
		<div id="begin-text">Need to go full screeeeeeeeen</div>
		<button id="begin-btn" onclick="begin()">Continue</button>
		<div id="begin-footer">*Headphones Recommended*</div>
	</div>
	<div id="header">
		<span id="htext">WORDS THAT ARE JUST LIKE MEMORIES</span>
	</div>
	<div id="body">
		<div id="text-panel">
			<span id="text-title"></span>
			<span id="main-text"></span>
			<div id="reveal-title" class="rtl"></div>
			<div id="rt-label" class="rtl">Click to reveal</div>
		</div>
		<span id="left" class="arrow"></span>
		<span id="right" class="arrow"></span>
		<audio id="aud" onloadedmetadata="mDur()" ontimeupdate="mPlay()" loop>
			<source src="" type="audio/mpeg">
		</audio>
		<div id="footbar">
			<input type="range" id="sbar" min="0" step="0.25" value="0" onchange="mSet()" width="250">
			<!-- <span id="down" class="sbtn"><a href="" id="dlink" download>SAVE</a></span> -->
			<span id="rev" class="pbtn sbtn">&olarr;</span>
			<span id="forw" class="pbtn sbtn">&orarr;</span>			
		</div>
		<div id="info-panel">
			<span id="info">&#9432;</span>
			<div id="info-circle"></div>
			<div id="song-title" class="song-details">
				<div id="song-label">Song</div>
				<div id="song-name"></div>
			</div>
			<div id="song-link" class="song-details">
				<a href="" id="dlink" download><button id="download" class="sl-btn">Download</button></a>
				<!-- <a ><button id="spotify" class="sl-btn">Spotify</button></a> -->
			</div>
			<div id="jbox">
				<div id="jtext"></div>
				<div id="memory-lane"><div id="ml-text"></div></div>
			</div>
		</div>
	</div>
	
	<script>
		var temp_a,temp_b,temp_sw,temp_pw;
		var info_stat = false;
		var title_stat = true;
		var hcount = 0;
		var wishnum = 0;
		var block = true;
		var revealed = [false];	
		var info_panel = false;	
		var aud= document.getElementById('aud');
		var dur= document.getElementById('sbar');

		function mDur(){dur.max= aud.duration}
		function mPlay(){dur.value=aud.currentTime}
		function mSet(){aud.currentTime=dur.value}

		$(document).ready(function () {
			$('#begin-text').fadeIn(500);
			$('#begin-btn').fadeIn(600);
			// document.querySelector('#ml-text').stop();
			var symbol = '&#8901;';
			$('#ml-text').html(symbol + '&nbsp;&nbsp;&nbsp;');
			for (var i = 0; i < headers.length; i++) {
				$('#ml-text').html($('#ml-text').html() + headers[i] + '&nbsp;&nbsp;&nbsp;' + symbol + '&nbsp;&nbsp;&nbsp;');
			}
			scroll_anim();
			$('.song-details').hide();
		});
		function begin() {	
			intro_anim();		
			$('#reveal-title').html(titles[wishnum]);
			$('#text-panel').css({'height': ($('#reveal-title').height() + 4)+'px', 'width': ($('#reveal-title').width() + 12) + 'px',});
			// setWish(wishnum);
			// $('#begin-panel').fadeOut("fast");
			openFullscreen();
			// headerAnim();
			$(document).ready(function () {
				particlesJS.load('particles-js', '../particles/particlesjs-config.json');
			});
			var r = document.querySelector(':root');
			r.style.setProperty('--anim', 'slideup');
			// block_buttons(true);
			// setup();
		}

		function setup(){
			var setup_tl = anime.timeline();
			setup_tl.add({
				targets: '#forw',
				rotate: 50,
				duration: 0
			}).add({
				targets: '#rev',
				rotate: -50,
				duration: 0
			});
		}

		
		function scroll_anim(){
			temp_sw = $('#ml-text').width();
			temp_pw = $('#memory-lane').width();
			temp_a = temp_pw + 15;
			temp_b = temp_sw + (temp_pw * 2);
			$('#memory-lane').css('overflow','hidden');					
			$('#jbox').hide();
		}
		function start_scroll() {
				anime({
					targets: '#ml-text',
					translateX: [temp_a, -temp_b],
					duration: 50000,
					easing: 'linear',
					loop: true
				});
			}

		function setScaling(){
			$("#text-panel").animate({ height: $('#reveal-title').height()+4},500,"swing",function(){
				$("#text-panel").delay('fast').animate({ width: $('#reveal-title').width()+12}, 500, "swing");
			});
		}

		function title_anim(){
			var bgc = '#f00';
			aud.pause();
			block_buttons(true);
			$('#reveal-title').html(titles[wishnum]);
			$('.rtl').show();
			// var w = $('#reveal-title').width();
			anime.timeline({
				easing: 'easeInOutExpo',
				complete: function(){
					revealed[wishnum] = true;
					title_stat = true;
					// setWish(wishnum);					
				}			
			}).add({
				targets: '#text-title',
				opacity: 0,
				duration: 1000
			}).add({
				targets: '#text-panel',
				duration: 1500,
				width: 0,
				borderColor: bgc,
				backgroundColor: bgc,
				changeComplete: function () {
					// setWish(wishnum);					
					$('#main-text').hide();
					setScaling();
				}
			})
			// .add({
			// 	targets: '#text-panel',
			// 	duration: 500,
			// 	height: function(){
			// 		return $('#reveal-title').height();
			// 	}
			// }).add({
			// 	targets: '#text-panel',
			// 	duration: 500,
			// 	width: function () {
			// 		return $('#reveal-title').width();
			// 	}
			// })
			.add({
				targets: '#reveal-title',
				duration: 1000,
				opacity: 1
			},'+=1000').add({
				targets: '#rt-label',
				duration: 1000,
				opacity: 0.8
			}).add({
				targets: ['#sbar','.arrow','#info'],
				opacity: 0,
				duration: 2000
			},1000);
		}

		function reveal_anim(){
			// var c_grey = getComputedStyle(document.body).getPropertyValue('--grey');
			block_buttons(true);
			title_stat = false;
			var reveal_tl = anime.timeline({
				easing: 'easeInOutExpo',
				complete: function () {
					block_buttons(false);
					title_stat = false;
				}
			});
			
			reveal_tl.add({
				targets: '#rt-label',
				duration: 1000,
				opacity: 0
			}).add({
				targets: '#reveal-title',
				duration: 1000,
				opacity: 0
			}).add({
				targets: '#text-panel',
				duration: 500,
				width: 2,
			}).add({
				targets: '#text-panel',
				duration: 500,
				height: '60vh',
				changeComplete: function () {
					$('.rtl').hide();
					$('#main-text').show();
					setWish(wishnum);
					// $('#text-panel').animate({ 'background-color': 'rgba(0, 0, 0, 0)' }, 1000);
				}
			}).add({
				targets: '#text-panel',
				duration: 1500,
				backgroundColor: 'rgba(0,0,0,0)',
				width: '70vw',
				borderColor: '#808080'			
			}).add({
				targets: '#text-title',
				opacity: 1,
				duration: 1000
			}).add({
				targets: ['#sbar', '.arrow', '#info'],
				opacity: 1,
				duration: 2000
			},4000);
		}

		function fade_anim(){
			aud.pause();
			block_buttons(true);
			var h = $('#text-panel').height() - 10;
			var fade_tl = anime.timeline({
				easing: 'easeInOutExpo',
				complete: function () {
					block_buttons(false);
				}
			});
			fade_tl.add({
				targets: '#text-title',
				opacity: 0,
				duration: 1000,
				changeComplete: function(){
					setWish(wishnum);
				}
			}).add({
				targets: '#main-text',
				duration: 1000,
				height: 0
			},0).add({
				targets: '#text-title',
				duration: 1000,
				opacity: 1
			}).add({
				targets: '#main-text',
				duration: 1000,
				height: h
			},1000).add({
				targets: '#sbar',
				value: 0,
				duration: 1500
			}, 500);
		}

		function intro_anim(){
			$('#begin-text').html('Yayyyyyyyyyy!!');
			$('#begin-btn').html('Loading...');
			$('#begin-btn').prop('disabled',true);

			block_buttons(true);
			var intro_tl = anime.timeline({
				easing: 'easeInOutExpo',
				complete: function () {
					document.getElementById("sbar").focus();
					// setWish(wishnum);
				}
			});

			intro_tl.add({
				targets: '#begin-panel',
				translateX: '-100%',
				duration: 1500,
				delay: 2500
			});
		}

		jtexts = ["K","21"];
		jcount = 0;
		$('#jtext').html(';)');
		function jbox_anim() {
			$('#jtext').fadeIn("slow", function () {
				setTimeout(function () {
					$('#jtext').fadeOut("slow", function () {
						$('#jtext').html(jtexts[jcount]);
						jcount++;
						if (jcount > (jtexts.length - 1)) {
							jcount = 0;
						}
						jbox_anim();
					});
				}, 5000);
			});
		}
			titles = ["You","Wouldn't be, Without Ya","Over Great Kiddo","Your Day"];
			wishes = ["Spending time with someone so closely that you know them inside out and you have shared deepest moments with them, that is something we all rarely get to experience in all ongoing chaos around us, but \"you\", you are the one who made me all those moments in a way beyond I could ever imagine. And I don't think it is limited to me, every person around you, who you love or even just met, would get a dealing full of gentle love and purity. One could just be amazed how you balance everything that way, being yourself purely and affecting other's lives positively, as much as you can.<br><br>In all of this I just want to say that I am so damn lucky to have ya and more than grateful for ya and everything from your side. It is huge thing for me to get to know ya that deeply, the person who always bring a smile and satisfaction inside out without even trying. And still, everything I say seems less for the \"you\" in my life.",
					"It goes without saying that I wouldn't be here, the way I am right now without you being there and giving your best to handle me. I seriously don't remember a single time when I was in need and you weren't there trying your best to understand my situation and help me balance up. I lost count of times when I was going through and just the thought of you, knowing that you are there to hold me, to have my back balanced me more than anything. These are the things that always make me feel like home when I am with ya, as I know, this crazy kiddo knows me inside out and she's always going to make the best out of it. No clue how I got this unbelievable hooman, from whom I learnt a lot.",
					"Enough of praises and sweet talks now this is to rant about you! You are a bad kiddo, seriously, how can someone be like that all the time, overgreat, without even worrying a bit how your things go, being the one who's always ready to walk extra miles for other. And even if you say that you take care of yourself, well I don't believe ya for that, cuz you don't, you just take care of others that well, rarely yours. You seriously should be punished for that, some punches on the head and lots of tickle attacks.<br><br>You are the reason I always felt so safe everywhere, cuz you always made me feel how special I am for ya and obviously it was clear to me that this kiddo is really over great, it makes my breath heavy even feel how over great this kiddo is.",
					"Wish you a very happy birthday and a great life ahead Ishu, keep improving to be the purest version of yourself and guide yourself with lots of self love. I really wish to meet ya soon and spend a lot of quality time with ya. I can't even imagine how great it would to actually spend time with the person who have known me in ways as no one ever did.<br><br>Lot of love and tight cuddles to my sweet teacher, crazy friend, caretaker, life changer and selfless hooman. You are someone special for me and it makes me feel much better about everything."
					];
			songs = ["kabhi kabhi aditi.mp3","clouds.mp3","kho gaye hum kahan.mp3","time in a bottle.mp3"];
			var headers = ["Tum toh baat hi mat karo mujhse",
							"Zara guess karo",
							"Ghar pe koi aya hai, aur mujhe kuch sahi nahi lag raha",
							"Mehmaan aaye hain",
							"Abhi department mein hu",
							"Love ya!"
							];
			
			for(var i=1; i<titles.length; i++){
				revealed.push(false);
			}

			function info_anim(){
				if(!block){
					if(!info_panel){
						block_buttons(true);						
						$('#info').html('&#215;');
						$('#info').css({'font-size':'25px','bottom':'0px','color':'black'});
						var h = $(window).height();
						if ($(window).width() > h) {
							h = $(window).width();
						}
						h += h / 3;
						var info_tl = anime.timeline({
							easing: 'easeInOutExpo',
							complete: function () {
								// block_buttons(false);
								$('#jbox').show();
								$('.song-details').show();								
								$('#jbox').animate({ opacity: 1 }, 1000);
								if(!info_stat){
									jbox_anim();	
									start_scroll();								
									// setTimeout(function(){document.querySelector('#ml-text').start()},2000);
									info_stat = true;
								}
								$('.song-details').animate({opacity: 1},1000);
							}
						});
						info_tl.add({
							targets: '#info-circle',
							height: h,
							width: h,
							duration: 2000
						});
						info_panel = true;
						return;
					}
				}	
				if(info_panel){
					block_buttons(true);
					var info_tl = anime.timeline({
						easing: 'easeInOutExpo',
						begin: function () {
							$('#jbox').animate({ opacity: 0 }, 500);
							$('.song-details').animate({ opacity: 0 }, 700);							
						},
						complete: function () {
							block_buttons(false);
							$('#info').html('&#9432;');
							$('#info').css({ 'font-size': '15px', 'bottom': '5px', 'color': 'var(--grey)' });
							$('#jbox').hide();
							$('.song-details').hide();
						}
					});
					info_tl.add({
						targets: '#info-circle',
						height: 0,
						width: 0,
						duration: 2000
					});
					info_panel = false;
				}							
			}

			$('#info').click(function(){
				info_anim();
			});

			$('#text-panel').click(function(){
				if(title_stat){
					reveal_anim();
				}
			});

			function right(){
				if (!block) {
					if (wishnum < (wishes.length - 1)) {
						wishnum++;
						if (revealed[wishnum]) {
							fade_anim();
						} else {
							title_anim();
						}
					}
				}
			}

			function left(){
				if (!block) {
					if (wishnum > 0) {
						wishnum--;
						fade_anim();
					}
				}
			}

			$('#right').click(function(){
				right();		
			});

			$('#left').click(function(){
				left();
			});		
			
			function block_buttons(value){
				block = value;
			}

			function setWish(index){
				document.getElementById('main-text').scrollTo(0, 0);
				if(index==0){
					$('#left').hide();
				}else{
					$('#left').show();
				}
				if(index==(wishes.length-1)){
					$('#right').hide();
				}else{
					$('#right').show();
				}
				var title = titles[index];
				$('#text-title').html(title.toUpperCase());
				$('#main-text').html(wishes[index]);
				// $('body').css('background-image','linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),linear-gradient(rgba(0,0,0,0),black),url(\'Pics/image'+(index+1)+'.png\')');
				$('#aud').find('source').attr("src","../../songs/"+songs[index]);
				var sname = songs[index].split(".")[0];
				$('#song-name').html(sname);
				$('#dlink').attr("href","../../songs/"+songs[index]);
				aud.load();
				aud.play();
				audioState = true;
			}

			document.onkeydown = checkKey;
			function checkKey(e) {
				e = e || window.event;
				if (e.keyCode == '37') {
					if(!block){
						left();
					}
				} else if (e.keyCode == '39') {
					if(!block){
						right();
					}
				}else if(e.keyCode == '32'){
					if(!aud.paused){
						aud.pause();	
					}else{
						aud.play();
					}				
				}
			}

			$('#rev').click(function(){
				if(!block){
					aud.currentTime = aud.currentTime - 5;
				}
			});
			$('#forw').click(function(){
				if(!block){
					aud.currentTime = aud.currentTime + 5;
				}
			});

			var elem = document.documentElement;
			function openFullscreen() {
				if (elem.requestFullscreen) {
					elem.requestFullscreen();
				} else if (elem.webkitRequestFullscreen) { /* Safari */
					elem.webkitRequestFullscreen();
				} else if (elem.msRequestFullscreen) { /* IE11 */
					elem.msRequestFullscreen();
				}
			}

			function headerAnim(){
				$('#htext').fadeIn("slow",function(){
					setTimeout(function(){
						$('#htext').fadeOut("slow",function(){
							$('#htext').html("&ldquo;"+headers[hcount]+"&rdquo;");
							hcount++;
							if(hcount>(headers.length-1)){
								hcount=0;
							}
							headerAnim();
						});
					},9000);
				});	
			}
			

			$(window).resize(function(){
				tuneBG();
			});
			tuneBG();
			function tuneBG(){
				var bgblur = $(window).width()/110;
				// $('body:before').css('filter','saturate(0) blur('+bgblur+'px)');
				var r = document.querySelector(':root');
				r.style.setProperty('--bluramt', bgblur +'px');
				
			}

			document.addEventListener('touchstart', handleTouchStart, false);        
			document.addEventListener('touchmove', handleTouchMove, false);

			var xDown = null;                                                        
			var yDown = null;

			function getTouches(evt) {
			return evt.touches ||             // browser API
					evt.originalEvent.touches; // jQuery
			}                                                     

			function handleTouchStart(evt) {
				const firstTouch = getTouches(evt)[0];                                      
				xDown = firstTouch.clientX;                                      
				yDown = firstTouch.clientY;                                      
			};                                                

			function handleTouchMove(evt) {
				if ( ! xDown || ! yDown ) {
					return;
				}

				var xUp = evt.touches[0].clientX;                                    
				var yUp = evt.touches[0].clientY;

				var xDiff = xDown - xUp;
				var yDiff = yDown - yUp;

				if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
					if ( xDiff > 0 ) {
						right();
					} else {
						left();
					}                       
				} else {
					if ( yDiff > 0 ) {
						/* up swipe */ 
					} else { 
						/* down swipe */
					}                                                                 
				}
				/* reset values */
				xDown = null;
				yDown = null;                                             
			};
	</script>
</body>
</html>