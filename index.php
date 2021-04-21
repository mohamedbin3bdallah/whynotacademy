<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/index.php');
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

<script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.php" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<!--webfonts-->
 <link href='//fonts.googleapis.com/css?family=Poiret+One|Lily+Script+One|Raleway:400,300,500,600,200,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>
<style>
@import url("http://fonts.googleapis.com/earlyaccess/droidarabickufi.css");
html,body,p,h1,h2,h3,h4,h5,h6 { font-family: 'Droid Arabic Kufi', sans-serif; }
</style>
<?php } else { ?>
<style>
html,body,p,h1,h3,h4,h5,h6 { font-family: 'Righteous', cursive; }
</style>
<?php } ?>
<script>
	$('document').ready(function () {
		$("#about").mouseenter(function() {
			var audio = $('#zigzagSoundClip')[0];
			audio.play();
		});
		$("#gallery").mouseenter(function() {
			var audio = $('#zigzagSoundClip')[0];
			audio.play();
		});
		$(".gallery").mouseenter(function() {
			var audio = $('#zigzagSoundClip')[0];
			audio.play();
		});
		$("#contact").mouseenter(function() {
			var audio = $('#zigzagSoundClip')[0];
			audio.play();
		});
		$("#about").mouseleave(function() {
			var audio = $('#zigzagSoundClip')[0];
			audio.pause();
			audio.currentTime = 0;
		});
		$("#gallery").mouseleave(function() {
			var audio = $('#zigzagSoundClip')[0];
			audio.pause();
			audio.currentTime = 0;
		});
		$(".gallery").mouseleave(function() {
			var audio = $('#zigzagSoundClip')[0];
			audio.pause();
			audio.currentTime = 0;
		});
		$("#contact").mouseleave(function() {
			var audio = $('#zigzagSoundClip')[0];
			audio.pause();
			audio.currentTime = 0;
		});
	});
</script>
</head>
<body>
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
			  <div class="container">  
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
						<?php if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4))) { ?>
							<li><a class="scroll" href="index.php#home" data-hover="<?php language('home'); ?>"><?php language('home'); ?></a></li>
							<li><a class="scroll" href="index.php#aboutme" data-hover="<?php language('about'); ?>"><?php language('about'); ?></a></li>
							<li><a class="scroll" href="index.php#universitycourses" data-hover="<?php language('universitycourses'); ?>"><?php language('universitycourses'); ?></a></li>
							<li><a class="scroll" href="index.php#othercourses" data-hover="<?php language('othercourses'); ?>"><?php language('othercourses'); ?></a></li>							
							<li><a class="scroll" href="index.php#contact" data-hover="<?php language('contact'); ?>"><?php language('contact'); ?></a></li>
							<li><a href="lang.php?lang=en&index.php" data-hover="English">English</a></li>
							<div class="clearfix"></div>
						<?php } else { ?>
							<li><a href="lang.php?lang=en&index.php" data-hover="English">English</a></li>
							<li><a class="scroll" href="index.php#contact" data-hover="<?php language('contact'); ?>"><?php language('contact'); ?></a></li>
							<li><a class="scroll" href="index.php#othercourses" data-hover="<?php language('othercourses'); ?>"><?php language('othercourses'); ?></a></li>							
							<li><a class="scroll" href="index.php#universitycourses" data-hover="<?php language('universitycourses'); ?>"><?php language('universitycourses'); ?></a></li>
							<li><a class="scroll" href="index.php#aboutme" data-hover="<?php language('about'); ?>"><?php language('about'); ?></a></li>
							<li><a class="scroll" href="index.php#home" data-hover="<?php language('home'); ?>"><?php language('home'); ?></a></li>
							<div class="clearfix"></div>
						<?php } } else { ?>
							<li><a class="scroll" href="index.php#home" data-hover="<?php language('home'); ?>"><?php language('home'); ?></a></li>
							<li><a class="scroll" href="index.php#aboutme" data-hover="<?php language('about'); ?>"><?php language('about'); ?></a></li>
							<li><a class="scroll" href="index.php#universitycourses" data-hover="<?php language('universitycourses'); ?>"><?php language('universitycourses'); ?></a></li>
							<li><a class="scroll" href="index.php#othercourses" data-hover="<?php language('othercourses'); ?>"><?php language('othercourses'); ?></a></li>							
							<li><a class="scroll" href="index.php#contact" data-hover="<?php language('contact'); ?>"><?php language('contact'); ?></a></li>
							<li><a href="lang.php?lang=ar&index.php" data-hover="عربي">عربي</a></li>
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
			 <div class="banner" style="border-radius: 5%;">
					<?php //if(!empty($carouseldata)) { ?>
					<div class="banner-slider" style="border-radius: 5%;">
						<center><h3 class="slogan">Your Success Is Our Goal</h3></center>
						<!-- 
						<div  id="top" class="rslides">
						<ul class="rslides" id="slider3">						
						<?php //for($i=0;$i<count($carouseldata);$i++) { ?>
						<li>
						  <div class="banner-info">
						     <h3><strong><?php //echo $carouseldata[$i]['title']; ?></strong></h3>
						    <p><?php //echo $carouseldata[$i]['description']; ?></p>
						  </div>
						</li>						
						<?php //} ?>
					</ul>
			     </div> -->
			   </div>
					<?php //} ?>
			 </div>
			 <!--banner-slide-->
					<!--<script src="js/responsiveslides.min.js"></script>
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
				  </script>-->

			 <!--//banner-slide-->
			  <div class="clearfix"></div>
			 <!--end-banner-->
			 
			 <!--start-about-->
			 <div id="aboutme">
			  <center><div id="circlebig"><div id="circle"></div></div></center>
				<div class="about" id="gallery" style="border-radius: 5%;">
				  <h3 class="tittle"><strong><?php language('about'); ?></strong></h3>
				   <div class="ab-top">
					<div class="col-md-7 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo ' col-md-push-5" '; } ?> ab-left" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo ' dir="rtl" '; } ?>>
					<?php if(!empty($about)) { ?>
					<h3 class="sub-text"><strong><?php language('mission'); ?></strong></h3>
					 <p style="text-align: justify;"><?php echo $about['mission']; ?></p>
					 <h3 class="sub-text"><strong><?php language('vision'); ?></strong></h3>
					 <p style="text-align: justify;"><?php echo $about['vision']; ?></p>
					<?php } ?>
					</div>
					<div class="col-md-5 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo ' col-md-pull-7" '; } ?> ab-img">
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
			</div>
			 
			 <!--start-universitycourses-->
		<div id="universitycourses">
		<center><div id="circlebig"><div id="circle"></div></div></center>
		<div class="gallery" id="about" style="border-radius: 5%;">
			<h3 class="tittle two"><strong><?php language('universitycourses'); ?></strong></h3>
			<?php if(!empty($universitycourses)) { ?>
			<div class="gallery-bottom">
			 <?php for($i=0;$i<count($universitycourses);$i++) { ?>
			 <div class="view view-fifth" style="height: 225px;">
                    <a href="uploads/universitycourses/thumbnail/<?php echo $universitycourses[$i]['image']; ?>" class="b-link-stripe b-animate-go  swipebox"  title="<?php echo $universitycourses[$i]['title'].' - '.$universitycourses[$i]['faculty'].' - '.$universitycourses[$i]['university']; ?>"><img src="uploads/universitycourses/thumbnail/<?php echo $universitycourses[$i]['image']; ?>" alt="<?php echo $universitycourses[$i]['title'].' - '.$universitycourses[$i]['faculty'].' - '.$universitycourses[$i]['university']; ?>" class="img-responsive">
						<div class="mask" style="height: 225px;">
							<h2><?php echo $universitycourses[$i]['title'].' - '.$universitycourses[$i]['faculty'].' - '.$universitycourses[$i]['university']; ?></h2>
							<p><?php echo substr($universitycourses[$i]['description'], 0, strpos($universitycourses[$i]['description'], ' ', 150)); //echo substr($universitycourses[$i]['description'], 0, 150);?></p>
							<a href="#" class="info" data-toggle="modal" data-target="#universitycourse<?php echo $i; ?>"><?php language('more'); ?></a>
							<a href="booking.php?id=<?php echo $universitycourses[$i]['id']; ?>&coursetype=universitycourses" class="info"><?php language('register'); ?></a>
						</div>
					</a>
                </div>
				
		<div id="universitycourse<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #18c9d2; color: #fff;">
						<strong><?php echo $universitycourses[$i]['title'].' - '.$universitycourses[$i]['faculty'].' - '.$universitycourses[$i]['university']; ?></strong>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<br>
					</div>
					<div class="modal-body" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>dir="rtl"<?php } ?>>
						<center><img src="uploads/universitycourses/thumbnail/<?php echo $universitycourses[$i]['image']; ?>" alt="<?php echo $universitycourses[$i]['title']; ?>" /></center><br>						
						<p style="text-align: justify;"><?php echo $universitycourses[$i]['description']; ?></p>
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
				<?php if(getnoOfTable('universitycourses') > 3) { ?>
					<div class="col-md-12 col-xs-12">
						<center><a href="universitycourses.php" class="universitycourses-link"><?php language('more'); ?></a></center>
					</div>
				<?php } ?>
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
   
			<!--start-othercourses-->
		<div id="othercourses">
		<center><div id="circlebig"><div id="circle"></div></div></center>
		<div class="gallery" id="gallery" style="border-radius: 5%;">
			<h3 class="tittle"><strong><?php language('othercourses'); ?></strong></h3>
			<?php if(!empty($othercourses)) { ?>
			<div class="gallery-bottom">
			 <?php for($i=0;$i<count($othercourses);$i++) { ?>
			 <div class="view view-fifth" style="height: 225px;">
                    <a href="uploads/othercourses/thumbnail/<?php echo $othercourses[$i]['image']; ?>" class="b-link-stripe b-animate-go  swipebox"  title="<?php echo $othercourses[$i]['title']; ?>"><img src="uploads/othercourses/thumbnail/<?php echo $othercourses[$i]['image']; ?>" alt="<?php echo $othercourses[$i]['title']; ?>" class="img-responsive">
						<div class="mask" style="height: 225px;">
							<h2><?php echo $othercourses[$i]['title']; ?></h2>
							<p><?php echo substr($othercourses[$i]['description'], 0, strpos($othercourses[$i]['description'], ' ', 150)); //echo substr($othercourses[$i]['description'], 0, 150);?></p>
							<a href="#" class="info" data-toggle="modal" data-target="#othercourse<?php echo $i; ?>"><?php language('more'); ?></a>
							<a href="booking.php?id=<?php echo $othercourses[$i]['id']; ?>&coursetype=othercourses" class="info"><?php language('register'); ?></a>
						</div>
					</a>
                </div>
				
				<div id="othercourse<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #18c9d2; color: #fff;">
						<strong><?php echo $othercourses[$i]['title']; ?></strong>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<br>
					</div>
					<div class="modal-body" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>dir="rtl"<?php } ?>>
						<center><img src="uploads/othercourses/thumbnail/<?php echo $othercourses[$i]['image']; ?>" alt="<?php echo $othercourses[$i]['title']; ?>" /></center><br>						
						<p style="text-align: justify;"><?php echo $othercourses[$i]['description']; ?></p>
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
				<?php if(getnoOfTable('othercourses') > 3) { ?>
					<div class="col-md-12 col-xs-12">
						<center><a href="othercourses.php" class="othercourses-link"><?php language('more'); ?></a></center>
					</div>
				<?php } ?>
			<?php } ?>			
		</div>
		</div>
		<!--contact-->
			<div id="contactus">
			<center><div id="circlebig"><div id="circle"></div></div></center>
			<div class="contact" id="contact" style="border-radius: 5%;">
					<h3 class="tittle two"><strong><?php language('contact'); ?></strong></h3>
						<div class="contact-top">
							<div class="col-md-8 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo ' col-md-pull-4 '; } ?> contact-top-right">
								<form action="develops/message.php" method="POST">
									<input type="text" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo ' dir="rtl" '; } ?> class="text" name="name" placeholder="<?php language('name'); ?>" value="<?php language('name'); ?>">
									 <input type="email" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo ' dir="rtl" '; } ?> class="text" name="email" placeholder="<?php language('email'); ?>" value="<?php language('email'); ?>">
									<textarea name="message" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo ' dir="rtl" '; } ?> placeholder="<?php language('message'); ?>" ><?php language('message'); ?></textarea>
									<div class="sub-button col-md-12 col-xs-12">
										<center><input type="submit" name="sendmessage" value="<?php language('send'); ?>"></center>
									</div>
								</form>
							</div>
							<div class="col-md-4 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo ' col-md-push-8 '; } ?> contact-top-left">
							<?php if(!empty($contact)) { ?>
							<?php if($contact['address'] != '') { ?>
							<div class="contact-top-one">
								<h4 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>style="text-align: right;" dir="rtl"<?php } ?>><strong><?php language('address'); ?>:</strong></h4>
								<p <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>style="text-align: right;" dir="rtl"<?php } ?>><?php echo $contact['address']; ?></p>
							</div>
							<?php } if($contact['mobile'] != '' || $contact['phone'] != '') { ?>
							<div class="contact-top-one">
								<h4 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>style="text-align: right;" dir="rtl"<?php } ?>><strong><?php language('phone'); ?>:</strong></h4>
									<p <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>style="text-align: right;" dir="rtl"<?php } ?>>																		
									<?php
									if($contact['phone'] != '') { 
										if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') {
											language('phone');	echo ': '.$contact['phone'];
										} else {
											language('phone');	echo ': '.$contact['phone'];
										}
									}
									?>
									<span>
									<?php
									if($contact['mobile'] != '') { 
										if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') {
											language('mobile');	echo ': '.$contact['mobile'];
										} else {
											language('mobile');	echo ': '.$contact['mobile'];
										}
									}
									?>
									</span>
									</p>
							</div>
							<?php } if($contact['email'] != '') { ?>
							<div class="contact-top-one">
								<h4 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>style="text-align: right;" dir="rtl"<?php } ?>><strong><?php language('email'); ?>:</strong></h4>
								<p <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>style="text-align: right;" dir="rtl"<?php } ?>><a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></p>
							</div>
							<?php } } ?>
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