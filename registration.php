<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include('develops/registration.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Educator a Educational Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Educator Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<!--webfonts-->
 <link href='//fonts.googleapis.com/css?family=Poiret+One|Lily+Script+One|Raleway:400,300,500,600,200,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?><script type="text/javascript" src="js/registerar.js"></script>
<?php } else { ?><script type="text/javascript" src="js/registeren.js"></script> <?php } ?>
</head>
<body style="min-height: 979px;">
<!--start-home-->
		<div class="head" id="home">
		    <div class="header-top">
			    <div class="container">  
					   <p class="col-md-6 location"><i class="glyphicon glyphicon-map-marker"></i>16A, Honey Street</p>
					 <p class="col-md-6 phone"><i class="glyphicon glyphicon-earphone"></i>Phone:<span class="seprat">+128-546-6853</p>
				  <div class="clearfix"> </div>
				 </div>
			</div>
			  <div class="container">  
			     <div class="main">	
				   <div class="wht-head">	
					 <div class="logo">
						<a href="index.php" ><h1><i class="glyphicon glyphicon-education"></i>Educator</h1></a>
					 </div>
					<!--top-nav-->
					 <span class="menu"> </span>
					  <div class="top-menu">
					  <nav>
						<ul class="cl-effect-16">
							<li><a class="" href="index.php#home" data-hover="<?php language('home'); ?>"><?php language('home'); ?></a></li>
							<!-- <li><a class="" href="index.php#service" data-hover="Services">Services</a></li> -->
							<li><a class="" href="index.php#about" data-hover="<?php language('about'); ?>"><?php language('about'); ?></a></li>
							<li><a class="" href="index.php#universitycourses" data-hover="<?php language('universitycourses'); ?>"><?php language('universitycourses'); ?></a></li>
							<li><a class="" href="index.php#othercourses" data-hover="<?php language('othercourses'); ?>"><?php language('othercourses'); ?></a></li>							
							<li><a class="" href="index.php#contact" data-hover="<?php language('contact'); ?>"><?php language('contact'); ?></a></li>
							<li><a class="" href="login.php" data-hover="<?php language('login'); ?>"><?php language('login'); ?></a></li>
							<div class="clearfix"></div>
						</ul>
					</nav>		
					</div>
					<!-- script-for-menu -->
					<script>
					$( "span.menu" ).click(function() {
					  $( ".top-menu" ).slideToggle( "slow", function() {
						// Animation complete.
					  });
					});
				</script>
				<!-- script-for-menu -->
				<div class="clearfix"></div>
			</div>
			 
			
	
		
		<!--contact-->
			<div class="contact" id="contact">
					<h3 class="tittle two"><?php language('registration'); ?></h3>
						<div class="contact-top">
							<div class="col-md-8 clo-md-offset-2 col-xs-8 clo-xs-offset-2 contact-top-right">
								<form action="" method="POST">
									<input type="text" class="text" name="username" id="username" placeholder="<?php language('username'); ?>" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>" autocomplete="off" required><input type="hidden" name="username-hidden" id="username-hidden" value="0" /><div id="username-validation"></div>
									<input type="email" class="text" name="email" id="email" placeholder="<?php language('email'); ?>" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" autocomplete="off" required><input type="hidden" name="email-hidden" id="email-hidden" value="0" /><div id="email-validation"></div>
									<input type="password" class="text" name="password" id="password" placeholder="<?php language('password'); ?>" autocomplete="off" required><input type="hidden" name="password-hidden" id="password-hidden" value="0" /><div id="password-validation"></div>
									<input type="password" class="text" name="cmfpassword" id="cmfpassword" placeholder="<?php language('cmfpassword'); ?>" autocomplete="off" required><input type="hidden" name="cmfpassword-hidden" id="cmfpassword-hidden" value="0" /><div id="cmfpassword-validation"></div>
									<div class="sub-button">
										<input type="submit" value="<?php language('register'); ?>" name="registersubmit" id="registersubmit" disabled>
									</div>
								</form>
							</div>							
						<div class="clearfix"> </div>
					</div>
				</div>
				<!--contact-->
			<div class="copy">
		              <p>&copy; 2015 WhyNotAcademy. All Rights Reserved | Developed by <a href="http://www.arise-mpe.com/" target="_blanck">Arise-MPE</a> </p>
		            </div>
					<!--footer-->


	</div>


	</div>
</div>	

	<!--start-smoth-scrolling-->
			<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(".scroll").click(function(event){		
										event.preventDefault();
										$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
									});
								});
								</script>
							<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>