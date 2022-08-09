<html>
<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="Mobile Apps,Web Design,Point of sale,Software Development">
  <meta name="author" content="Mansoor Qureshi">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="./css/slide.css" />
  <link rel="stylesheet" type="text/css" href="./css/main.css" />
<title>Welcome | We know IT</title>
  <link rel="stylesheet" type="text/css" href="./css/footer-distributed-with-address-and-phones.css" />
  <link rel="stylesheet" type="text/css" href="./fonts/font-awesome.css"/>
  <script src="./jquery/jquery-3.3.1.js"> </script>
  <script type="text/javascript" src="./javascript/text.js"> </script>

</head>

<script>
	$(function(){
		//configuration
		var width=1000;
		var animationSpeed=2000;
		var pause=1000;
		var currentSlide=1;
		//cache DOM
		var $slider=$('.slider');
		var $slideContainer=$slider.find('.slides')
		var $slides=$slideContainer.find('.slide')
		var interval;
		function startSlider(){
		interval=setInterval(function(){
			$slideContainer.animate({'margin-left':'-='+width}, animationSpeed,function(){
			currentSlide++;
		if(currentSlide === $slides.length){
			currentSlide=1;
			$slideContainer.css('margin-left', 0);
		}
		});
			}), pause;
		}
		function stopSlider(){
			clearInterval(interval);
			}
			   $slider.on('mouseenter',stopSlider).on('mouseleave',startSlider);
			//setInterval
	//animate margin-left
	//if it's last slide, go to position 1(0px);
	//listen for mouse enter and pause
	//resume on mouse leave
	});
    </script>

<body>

<header>
<div class="container"><!--Div Header Start-->
<div class="logo">
<a href="index.php"><img itemprop="logo/png" src="./images/web.png" width="150" height="70"/></a>
</div>
<nav class="menu">

      <!--<a href="#" class="menu">
        <div class="a"></div>
        <div class="b"></div>
        <div class="c"></div>
      </a>
-->
   <ul>
      <li><a href="#" >SERVICES</a></li>

<!--
    <li class="hidden"><a href="#">Web Application Development</a></li>
   <li ><a href="#">E-commerce</a></li>
<li ><a href="#">Content Management</a></li>
<li ><a href="#">Front End Development</a></li>
<li ><a href="#">Mobile App Development</a></li>
<li ><a href="#">Product Development</a></li>
<li ><a href="#">AI & Chatbots</a></li>
<li ><a href="#">Digital Marketing</a></li>
<li ><a href="#">Creative & Animations</a></li>
<li ><a href="#">Beta Testing</a></li>
<li ><a href="#">Full Stack Development</a></li>
<li ><a href="#">Back-End Development</a></li>

</ul>
  !-->
      <li><a href="#">SKILLS</a></li>
      <li><a href="#">BROWSE BY ROLES</a></li>
      <li><a href="#">CASE STUDIES</a></li>
      <li><a href="#">BLOG</a></li>
      <li><a href="#">ABOUT</a></li>
      <li><a href="#"><button  class="c-btn" >Start a Project > </button></a></li>
  </ul>
  </nav>
</nav>

</div>
</header>
