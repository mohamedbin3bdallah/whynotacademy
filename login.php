<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
if(!isset($_COOKIE['user']))
{
	include('libs/lang.php');
	function login($myusername,$passw0rd,$rem)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$passw0rd = hash('sha256', $passw0rd, FALSE);
	$query1 = $dbh->query("select id from  users where username = '$myusername' and password = '$passw0rd' and active = 1");
	$row = $query1->fetch();
	if(!empty($row))
	{
		if($rem)
		{
			setcookie('user', $row['id'], time()+60*60*24*100, "");
		}
		else
		{
			setcookie('user', $row['id']);
		}
		return 1;
    }
	else return 0;
}

if(isset($_POST['loginsubmit'])) 
{
	unset($_POST['loginsubmit']);
	if($_POST['myusername'] != '' && $_POST['passw0rd'] != '')
	{
		if(isset($_POST['remember'])) { $rem = 1; unset($_POST['remember']); }
		else $rem = 0;
		$loginOp = login($_POST['myusername'],$_POST['passw0rd'],$rem);		
		if($loginOp == 1) echo header('location: pages/homepage.php');
		elseif($loginOp == 0) echo '<div id="wrongaccount"></div>';
	}
}
?>
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
					<h3 class="tittle two"><?php language('login'); ?></h3>
						<div class="contact-top">
							<div class="col-md-8 clo-md-offset-2 col-xs-8 clo-xs-offset-2 contact-top-right">
								<form action="" method="POST">
									<input type="text" class="text" name="myusername" id="myusername" placeholder="<?php language('username'); ?>" value="<?php if(isset($_POST['myusername'])) echo $_POST['myusername']; ?>" autocomplete="off" required><input type="hidden" name="myusername-hidden" id="myusername-hidden" value="0" /><div id="myusername-validation"></div>
									<input type="password" class="text" name="passw0rd" id="passw0rd" placeholder="<?php language('password'); ?>" autocomplete="off" required><input type="hidden" name="passw0rd-hidden" id="passw0rd-hidden" value="0" /><div id="passw0rd-validation"></div>							
									<label><a href="registration.php"><?php language('createnewaccount'); ?></a></label>
									<div class="sub-button">
										<input type="submit" value="<?php language('login'); ?>" name="loginsubmit" id="loginsubmit" disabled>
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
<?php } else header('location: index.php');?>