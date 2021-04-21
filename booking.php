<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/booking.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="keywords" content="media production,event organization,media solution,social media,corporate identity,documentary,top advertising agencies,advertising agencies in egypt,advertising agencies in heliopolis,list of advertising agencies,list od advertising agencies in egypt,full service agencies,media agency,digital markting agency,e-markting services,startup consultation agency,markting and sales,markting jobs,marketing strategy,marketing advertising,pr and marketing,marketing plan,marketing communication,marketing and sales jobs,newbies marketing guide,event planning,photography,photography sessions,photography package,pre-wedding sessions,branding">
<meta name="author" content="">
<link rel="shortcut icon" href="uploads/LOGO.PNG" type="image/jpg">
<title>Why Not Academy</title>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.php" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<!--webfonts-->
 <link href='//fonts.googleapis.com/css?family=Poiret+One|Lily+Script+One|Raleway:400,300,500,600,200,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>
<script type="text/javascript" src="js/registerar.js"></script>
<style>
@import url("http://fonts.googleapis.com/earlyaccess/droidarabickufi.css");
html,body,p,h1,h2,h3,h4,h5,h6 { font-family: 'Droid Arabic Kufi', sans-serif; }
</style>
<?php } else { ?>
<script type="text/javascript" src="js/registeren.js"></script>
<style>
html,body,p,h1,h3,h4,h5,h6 { font-family: 'Righteous', cursive; }
</style>
<?php } ?>
<!-- <script>
	$('document').ready(function () {
		$("#contact").mouseenter(function() {
			var audio = $('#zigzagSoundClip')[0];
			audio.play();
		});
		
		$("#contact").mouseleave(function() {
			var audio = $('#zigzagSoundClip')[0];
			audio.pause();
			audio.currentTime = 0;
		});
	});
</script> -->
</head>
<body style="min-height: 979px;">
	<audio id="zigzagSoundClip">
		<source src="uploads/zigzag.mp3"></source>
		Your browser isn't invited for super fun audio time.
	</audio>

<!--start-home-->
		<div class="head" id="home">
		    <!-- <div class="header-top">
			    <div class="container">
				<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>
					<?php if(isset($contact['address'])) { ?><p class="col-md-6 location"><?php echo $contact['address']; } ?><i class="glyphicon glyphicon-map-marker"></i></p>
					<?php if(isset($contact['mobile'])) { ?><p class="col-md-6 phone"><?php language('mobile'); ?>:<span class="seprat"><?php echo $contact['mobile']; } ?><i class="glyphicon glyphicon-earphone"></i></p>
				<?php } else { ?>
					<?php if(isset($contact['address'])) { ?><p class="col-md-6 location"><i class="glyphicon glyphicon-map-marker"></i><?php echo $contact['address']; } ?></p>
					<?php if(isset($contact['mobile'])) { ?><p class="col-md-6 phone"><i class="glyphicon glyphicon-earphone"></i><?php language('mobile'); ?>:<span class="seprat"><?php echo $contact['mobile']; } ?></p>
				<?php } ?>
				  <div class="clearfix"> </div>				  
				 </div>
			</div> -->
			  <div class="container" style="padding-top: 14%;">  
			     <div class="main">	
				   <div class="wht-head">	
					 <div class="logo">
						<a href="index.php"><img src="uploads/LOGO.PNG" width="35px"></a>
					 </div>
					<!--top-nav-->
					 <span class="menu"> </span>
					  <div class="top-menu">
					  <nav>
						<ul class="cl-effect-16">
						<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>
							<li><a href="lang.php?lang=en&booking.php?id=<?php echo $_GET['id']; ?>&coursetype=<?php echo $_GET['coursetype']; ?>" data-hover="English">English</a></li>
							<li><a class="" href="index.php#contact" data-hover="<?php language('contact'); ?>"><?php language('contact'); ?></a></li>
							<li><a class="" href="index.php#othercourses" data-hover="<?php language('othercourses'); ?>"><?php language('othercourses'); ?></a></li>							
							<li><a class="" href="index.php#universitycourses" data-hover="<?php language('universitycourses'); ?>"><?php language('universitycourses'); ?></a></li>
							<li><a class="" href="index.php#aboutme" data-hover="<?php language('about'); ?>"><?php language('about'); ?></a></li>
							<li><a class="" href="index.php#home" data-hover="<?php language('home'); ?>"><?php language('home'); ?></a></li>
							<div class="clearfix"></div>
						<?php } else { ?>
							<li><a class="" href="index.php#home" data-hover="<?php language('home'); ?>"><?php language('home'); ?></a></li>
							<li><a class="" href="index.php#aboutme" data-hover="<?php language('about'); ?>"><?php language('about'); ?></a></li>
							<li><a class="" href="index.php#universitycourses" data-hover="<?php language('universitycourses'); ?>"><?php language('universitycourses'); ?></a></li>
							<li><a class="" href="index.php#othercourses" data-hover="<?php language('othercourses'); ?>"><?php language('othercourses'); ?></a></li>							
							<li><a class="" href="index.php#contact" data-hover="<?php language('contact'); ?>"><?php language('contact'); ?></a></li>
							<li><a href="lang.php?lang=ar&booking.php?id=<?php echo $_GET['id']; ?>&coursetype=<?php echo $_GET['coursetype']; ?>" data-hover="عربي">عربي</a></li>
							<div class="clearfix"></div>
						<?php } ?>
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
			<div id="booking">
			<center><div id="circlebig"><div id="circle"></div></div></center>
			<div class="contact" id="contact" style="border-radius: 55%;">
					<h3 class="tittle two"><strong><?php language('registration'); ?></strong></h3>
						<div class="contact-top">
							<div class="col-md-4 col-md-offset-3 col-xs-4 col-xs-offset-3 contact-top-right" style="float: none; width: 50%;">
								<form action="" method="POST">
									<input type="text" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo ' dir="rtl" '; } ?> class="text" name="name" id="name" placeholder="<?php language('name'); ?>" value="<?php if(isset($_POST['name'])) echo $_POST['name']; else language('name'); ?>" autocomplete="off" required><input type="hidden" name="name-hidden" id="name-hidden" value="0" /><div id="name-validation"></div>
									<input type="email" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo ' dir="rtl" '; } ?> class="text" name="email" id="email" placeholder="<?php language('email'); ?>" value="<?php if(isset($_POST['email'])) echo $_POST['email']; else language('email'); ?>" autocomplete="off" required><input type="hidden" name="email-hidden" id="email-hidden" value="0" /><div id="email-validation"></div>
									<input type="text" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo ' dir="rtl" '; } ?> class="text" name="mobile" id="mobile" placeholder="<?php language('mobile'); ?>" value="<?php if(isset($_POST['mobile'])) echo $_POST['mobile']; else language('mobile'); ?>" autocomplete="off" required><input type="hidden" name="mobile-hidden" id="mobile-hidden" value="0" /><div id="mobile-validation"></div>
									<div class="sub-button col-md-12 col-xs-12">
										<center><input type="submit" value="<?php language('register'); ?>" name="registersubmit" id="registersubmit" disabled>
									</div>
								</form>
							</div>
							<div class="col-md-4 col-xs-4">
							</div>
						<div class="clearfix"> </div>
					</div>
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