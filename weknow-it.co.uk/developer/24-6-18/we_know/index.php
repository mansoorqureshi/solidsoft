<?php include('header.php')?>

<section class="show">

    <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="./images/banner1.jpg" style="width:100%" height="400">
      <div class="text">Top Developers</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="./images/banner2.jpg" style="width:100%"height="400">
      <div class="text">Top App Devceloers</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="./images/banner3.jpg" style="width:100%" height="400">
      <div class="text">Unique and Remarkable</div>
    </div>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>

    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
           slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
    </script>

  </div>
</section>
<section class="box">
  <div class="container"class="h1">
<h1>We use our best teams to <br>
 help  agencies to grow their businesses through<br> development, design,
 and digital marketing capabilities</h1>
<p>Need rising talent,Job Success, Skilled Perons and teams, Quality work, Unqiue to others,
Hire Us we have the Best teams that will make you help.  </div>
</section>
<section class="box3">
    <div class="container">
      <h1>Services</h1>
      <div class="box1">
        <h2>Web Applications</h2>
        <img src="./images/front.png" itemprop="logo" width="200" height="225" style="padding-top:5px;" >
        <p>We build stunning web applications to <br>fulfill your business requirements</p>
      </div>
       <div class="box1">
      <h2 >Front End Design </h2>
            <img src="./images/webapp.png" itemprop="logo" width="200" height="225"style="padding-top:5px" >
            <p>Hire us for personolization of your website using CSS and HTML</p>
          </div>
          <div class="box1" >
            <h2>iOS development</h2>
          <img src="./images/ios.png" itemprop="logo" width="200" height="225"style="padding-top:5px;">

            <p>Let we create an app for your iPhone<br> that will solve your problems</p>
          </div>


  </div>
</section>
<section>
<div class="container">
  <div class="float"><button class="c-btn1"><a href"#"> More Services ></a></button>
</div>
</div>
</section>
<hr size="5" color="white ">
<section class="tech">
  <br>
  <div class="in"><h1 style="text-align:center">Technologies</h1></div>
  <div class="container">
<br>
    <div class="tech1">
<br>
      <img src="./images/set.png" width="60" height="70" class="tech_pad" >

      <h1 >CMS</h1>
      <div class="in1"><img src="./images/wp.png" width="30" height="30" class="tech_pad1">&nbsp&nbsp&nbsp <span>Wordpress</span></div>

      <div><span></span>&nbsp&nbsp&nbsp</div>
      <div><span></span>&nbsp&nbsp&nbsp</div>

    </div>
    <div class="tech1">
      <br>
      <img src="./images/fend.png" width="60" height="70" class="tech_pad" >

      <h1>Front-end</h1>
    </div>
    <div class="tech1">
      <br>
      <img src="./images/mob.png" width="50" height="70" class="tech_pad" >
            <h1>Mobile</h1>
    </div>
    <div class="tech1">
<br>
<img src="./images/ser.png" width="60" height="70" class="tech_pad" >

            <h1>Server Side</h1>

    </div>

  </div>
<br><br>
</section>
<!--
<footer class="footer-distributed">

			<div class="footer-left">
				<h3>We Know<span>  IT   Pvt  Limited</span></h3>
				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Services</a>
					·
					<a href="#">Skills</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>
				<p class="footer-company-name">We Know IT &copy; 2018</p>
			</div>





			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Carey Street SW1</span> London, England</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+44 (0) 7482223117</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:info@weknow-it.co.uk">info@weknow-it.co.uk</a></p>
				</div>

			</div>




			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the company</span>
					asdfasdffpicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>
				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>
				</div>
			</div>

		</footer>
-->

</body>
</html>
