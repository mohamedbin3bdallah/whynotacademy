<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include('develops/index.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Why Not Academy</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Educator Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<!--webfonts-->
 <link href='//fonts.googleapis.com/css?family=Poiret+One|Lily+Script+One|Raleway:400,300,500,600,200,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<!--start-home-->
		<div class="head" id="home">
		    <div class="header-top">
			    <div class="container">  
					 <?php if(isset($contact['address'])) { ?><p class="col-md-6 location"><i class="glyphicon glyphicon-map-marker"></i><?php echo $contact['address']; } ?></p>
					 <?php if(isset($contact['mobile'])) { ?><p class="col-md-6 phone"><i class="glyphicon glyphicon-earphone"></i><?php language('mobile'); ?>:<span class="seprat"><?php echo $contact['mobile']; } ?></p>
				  <div class="clearfix"> </div>
				 </div>
			</div>
			  <div class="container">  
			     <div class="main">	
				   <div class="wht-head">	
					 <div class="logo">
						<a href="index.php" ><h1><i class="glyphicon glyphicon-education"></i>Why Not</h1></a>
					 </div>
					<!--top-nav-->
					 <span class="menu"> </span>
					  <div class="top-menu">
					  <nav>
						<ul class="cl-effect-16">
							<li><a class="active scroll" href="#home" data-hover="<?php language('home'); ?>"><?php language('home'); ?></a></li>
							<!-- <li><a class="scroll" href="#service" data-hover="Services">Services</a></li> -->
							<li><a class="scroll" href="#about" data-hover="<?php language('about'); ?>"><?php language('about'); ?></a></li>
							<!-- <li><a class="scroll" href="#teach" data-hover="Teachers">Teachers</a></li> -->
							<li><a class="scroll" href="#universitycourses" data-hover="<?php language('universitycourses'); ?>"><?php language('universitycourses'); ?></a></li>
							<li><a class="scroll" href="#othercourses" data-hover="<?php language('othercourses'); ?>"><?php language('othercourses'); ?></a></li>							
							<li><a class="scroll" href="#contact" data-hover="<?php language('contact'); ?>"><?php language('contact'); ?></a></li>
							<!--<li><a class="" href="login.php" data-hover="<?php //language('login'); ?>"><?php //language('login'); ?></a></li>-->
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
			 <div class="banner">
					<?php if(!empty($carouseldata)) { ?>
					<div class="banner-slider">
						<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">						
						<?php for($i=0;$i<count($carouseldata);$i++) { ?>
						<li>
						  <div class="banner-info">
						     <h3><?php echo $carouseldata[$i]['title']; ?></h3>
						    <p><?php echo $carouseldata[$i]['description']; ?></p>
						  </div>
						</li>						
						<?php } ?>
					</ul>
			     </div>
			   </div>
					<?php } ?>
			 </div>
			 <!--banner-slide-->
					<script src="js/responsiveslides.min.js"></script>
				<script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager:true,
				        nav:false,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>

			 <!--//banner-slide-->
			  <div class="clearfix"></div>
			 <!--end-banner-->
			 
			 <!--start-universitycourses-->
		<div id="universitycourses">
		<div class="gallery" id="gallery">
			<h3 class="tittle"><?php language('universitycourses'); ?></h3>
			<?php if(!empty($universitycourses)) { ?>
			<div class="gallery-bottom">
			 <?php for($i=0;$i<count($universitycourses);$i++) { ?>
			 <div class="view view-fifth">
                    <a href="uploads/universitycourses/thumbnail/<?php echo $universitycourses[$i]['image']; ?>" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="uploads/universitycourses/thumbnail/<?php echo $universitycourses[$i]['image']; ?>" alt="<?php echo $universitycourses[$i]['title']; ?>" class="img-responsive">
						<div class="mask">
							<h2><?php echo $universitycourses[$i]['title']; ?></h2>
							<p><?php echo substr($universitycourses[$i]['description'], 0, strpos($universitycourses[$i]['description'], ' ', 150)); //echo substr($universitycourses[$i]['description'], 0, 150);?></p>
							<a href="#" class="info" data-toggle="modal" data-target="#universitycourse<?php echo $i; ?>"><?php language('more'); ?></a>
							<a href="booking.php?id=<?php echo $universitycourses[$i]['id']; ?>&coursetype=universitycourses" class="info"><?php language('book'); ?></a>
						</div>
					</a>
                </div>
				
		<div id="universitycourse<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<?php echo $universitycourses[$i]['title']; ?>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<br>
					</div>
					<div class="modal-body" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>dir="rtl"<?php } ?>>
						<center><img src="uploads/universitycourses/thumbnail/<?php echo $universitycourses[$i]['image']; ?>" alt="<?php echo $universitycourses[$i]['title']; ?>" /></center><br>						
						<p><?php echo $universitycourses[$i]['description']; ?></p>
					</div>
				</div>
			</div>
		</div>
                
                <!-- <div class="view view-fifth">
                    <a href="images/g6.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g6.jpg" alt="" class="img-responsive">
						<div class="mask">
							<h2>Educator</h2>
							<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
							<a href="#" class="info">More</a>
						</div>
					</a> 
                </div> -->
				<?php } ?>
                <div class="clearfix"> </div>
            </div>
			<?php } ?>
		</div>
		</div>
			 
			 	<!--start-services-->
					<!-- <div class="services" id="service">
					 <h3 class="tittle two">Services</h3>
						<div class="serve-grids">
							<div class="col-md-3 service-grid">
								<div class="icon">
								 <i class="glyphicon glyphicon-time"></i>
								</div>
								<h5>Amet Dolor</h5>
								<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
							</div>
							<div class="col-md-3 service-grid">
								<div class="icon">
								 <i class="glyphicon glyphicon-book"></i>
								</div>
								<h5>Amet Dolor</h5>
								<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
							</div>
							<div class="col-md-3 service-grid">
								<div class="icon">
								 <i class="glyphicon glyphicon-send"></i>
								</div>
								<h5>Amet Dolor</h5>
								<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
							</div>
							<div class="col-md-3 service-grid">
								<div class="icon">
								 <i class="glyphicon glyphicon-gift"></i>
								</div>
								<h5>Amet Dolor</h5>
								<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
							</div>
						
						<div class="clearfix"></div>

					</div>
				</div> -->
			<!--//end-services-->
	<!--start-teachers-->
			<!-- <div class="teachers" id="teach">
				  <h3 class="tittle">Teachers</h3>
					<div class="teachers-grids">
					<ul class="ch-grid">
					<li>
						<div class="ch-item ch-img-1">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
										<h3>Educator</h3>
										<p>by Ana Villa-Zamora <a href="#">View on Dribbble</a></p>
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-2">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-2"></div>
									<div class="ch-info-back">
										<h3>Educator</h3>
										<p>by Arnel Baluyot <a href="#">View on Dribbble</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-3">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-3"></div>
									<div class="ch-info-back">
										<h3>Educator</h3>
										<p>by Jamal Charanek <a href="#">View on Dribbble</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
	</div> -->
   <!--//end-teachers-->
   <!--start-about-->
				<div class="about" id="about">
				  <h3 class="tittle two">About US</h3>
				   <div class="ab-top">
					<div class="col-md-7 ab-left">
					<?php if(!empty($about)) { ?>
					<h3 class="sub-text"><?php language('mission'); ?></h3>
					 <p style="text-align: justify;"><?php echo $about['mission']; ?></p>
					 <h3 class="sub-text"><?php language('vision'); ?></h3>
					 <p style="text-align: justify;"><?php echo $about['vision']; ?></p>
					<?php } ?>
					</div>
					<div class="col-md-5 ab-img">
						<?php if(!empty($aboutimages)) { ?>
						<div  id="top" class="callbacks_container">
							<ul class="rslides" id="slider4">
								<?php for($i=0;$i<count($aboutimages);$i++) { ?>
									<li><img src="uploads/about/thumbnail/<?php echo $aboutimages[$i]['image']; ?>" alt=" why not about" title="ab" /></li>
								<?php } ?>
						  </ul>
						</div>
						<script src="js/responsiveslides.min.js"></script>
				   <script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 4
					  $("#slider4").responsiveSlides({
						auto: true,
						pager:false,
						nav: true,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
					  });
				
					});
				  </script>
				  <?php } ?>
					</div>
					  <div class="clearfix"></div>
				   </div>
				</div>
			<!--start-othercourses-->
		<div id="othercourses">
		<div class="gallery" id="gallery">
			<h3 class="tittle"><?php language('othercourses'); ?></h3>
			<?php if(!empty($othercourses)) { ?>
			<div class="gallery-bottom">
			 <?php for($i=0;$i<count($othercourses);$i++) { ?>
			 <div class="view view-fifth">
                    <a href="uploads/othercourses/thumbnail/<?php echo $othercourses[$i]['image']; ?>" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="uploads/othercourses/thumbnail/<?php echo $othercourses[$i]['image']; ?>" alt="<?php echo $othercourses[$i]['title']; ?>" class="img-responsive">
						<div class="mask">
							<h2><?php echo $othercourses[$i]['title']; ?></h2>
							<p><?php echo substr($othercourses[$i]['description'], 0, strpos($othercourses[$i]['description'], ' ', 150)); //echo substr($othercourses[$i]['description'], 0, 150);?></p>
							<a href="#" class="info" data-toggle="modal" data-target="#othercourse<?php echo $i; ?>"><?php language('more'); ?></a>
							<a href="booking.php?id=<?php echo $othercourses[$i]['id']; ?>&coursetype=othercourses" class="info"><?php language('book'); ?></a>
						</div>
					</a>
                </div>
				
				<div id="othercourse<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<?php echo $othercourses[$i]['title']; ?>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<br>
					</div>
					<div class="modal-body" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>dir="rtl"<?php } ?>>
						<center><img src="uploads/othercourses/thumbnail/<?php echo $othercourses[$i]['image']; ?>" alt="<?php echo $othercourses[$i]['title']; ?>" /></center><br>						
						<p><?php echo $othercourses[$i]['description']; ?></p>
					</div>
				</div>
			</div>
		</div>
                
                <!-- <div class="view view-fifth">
                    <a href="images/g6.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g6.jpg" alt="" class="img-responsive">
						<div class="mask">
							<h2>Educator</h2>
							<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
							<a href="#" class="info">More</a>
						</div>
					</a> 
                </div> -->
				<?php } ?>
                <div class="clearfix"> </div>
            </div>
			<?php } ?>
		</div>
		</div>
		<!--contact-->
			<div class="contact" id="contact">
					<h3 class="tittle two">Contact</h3>
						<div class="contact-top">
							<div class="col-md-8 contact-top-right">
								<form action="message.php" method="POST">
									<input type="text" class="text" name="name" placeholder="<?php language('name'); ?>">
									 <input type="email" class="text" name="email" placeholder="<?php language('email'); ?>">
									<textarea name="message" placeholder="<?php language('message'); ?>"></textarea>
									<div class="sub-button">
										<input type="submit" name="sendmessage" value="<?php language('send'); ?>">
									</div>
								</form>
							</div>
							<div class="col-md-4 contact-top-left">
							<?php if(!empty($contact)) { ?>
							<?php if($contact['address'] != '') { ?>
							<div class="contact-top-one">
								<h4><?php language('address'); ?>:</h4>
									<p><?php echo $contact['address']; ?></p>
							</div>
							<?php } if($contact['mobile'] != '' || $contact['phone'] != '') { ?>
							<div class="contact-top-one">
								<h4><?php language('phone'); ?>:</h4>
									<p>
									<?php if($contact['phone'] != '') { language('phone'); ?>: +20 <?php echo $contact['phone'];  } ?>
									<span><?php if($contact['mobile'] != '') { language('mobile'); ?>: +20 <?php echo $contact['mobile'];  } ?></span>
									</p>
							</div>
							<?php } if($contact['email'] != '') { ?>
							<div class="contact-top-one">
								<h4><?php language('email'); ?>:</h4>
								<p><a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></p>
							</div>
							<?php } } ?>
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
<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
</script>
	<!--//gallery-->

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