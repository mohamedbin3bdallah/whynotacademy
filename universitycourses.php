<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/frontenduniversitycourses.php');
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
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/frontenduniversitycourses.js"></script>
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
<!-- <script>
	$('document').ready(function () {
		$("#gallery").mouseenter(function() {
			var audio = $('#zigzagSoundClip')[0];
			audio.play();
		});
		$("#about").mouseenter(function() {
			var audio = $('#zigzagSoundClip')[0];
			audio.play();
		});
		
		$("#gallery").mouseleave(function() {
			var audio = $('#zigzagSoundClip')[0];
			audio.pause();
			audio.currentTime = 0;
		});
		$("#about").mouseleave(function() {
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
			  <div class="container" style="padding-top: 5%;">  
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
							<li><a class="" href="index.php#home" data-hover="<?php language('home'); ?>"><?php language('home'); ?></a></li>
							<li><a class="" href="index.php#aboutme" data-hover="<?php language('about'); ?>"><?php language('about'); ?></a></li>
							<li><a class="" href="index.php#universitycourses" data-hover="<?php language('universitycourses'); ?>"><?php language('universitycourses'); ?></a></li>
							<li><a class="" href="index.php#othercourses" data-hover="<?php language('othercourses'); ?>"><?php language('othercourses'); ?></a></li>							
							<li><a class="" href="index.php#contact" data-hover="<?php language('contact'); ?>"><?php language('contact'); ?></a></li>
							<li><a href="lang.php?lang=en&universitycourses.php" data-hover="English">English</a></li>
							<div class="clearfix"></div>
						<?php } else { ?>
							<li><a href="lang.php?lang=en&universitycourses.php" data-hover="English">English</a></li>
							<li><a class="" href="index.php#contact" data-hover="<?php language('contact'); ?>"><?php language('contact'); ?></a></li>
							<li><a class="" href="index.php#othercourses" data-hover="<?php language('othercourses'); ?>"><?php language('othercourses'); ?></a></li>							
							<li><a class="" href="index.php#universitycourses" data-hover="<?php language('universitycourses'); ?>"><?php language('universitycourses'); ?></a></li>
							<li><a class="" href="index.php#aboutme" data-hover="<?php language('about'); ?>"><?php language('about'); ?></a></li>
							<li><a class="" href="index.php#home" data-hover="<?php language('home'); ?>"><?php language('home'); ?></a></li>
							<div class="clearfix"></div>
						<?php } } else { ?>
							<li><a class="" href="index.php#home" data-hover="<?php language('home'); ?>"><?php language('home'); ?></a></li>
							<li><a class="" href="index.php#aboutme" data-hover="<?php language('about'); ?>"><?php language('about'); ?></a></li>
							<li><a class="" href="index.php#universitycourses" data-hover="<?php language('universitycourses'); ?>"><?php language('universitycourses'); ?></a></li>
							<li><a class="" href="index.php#othercourses" data-hover="<?php language('othercourses'); ?>"><?php language('othercourses'); ?></a></li>							
							<li><a class="" href="index.php#contact" data-hover="<?php language('contact'); ?>"><?php language('contact'); ?></a></li>
							<li><a href="lang.php?lang=ar&universitycourses.php" data-hover="عربي">عربي</a></li>
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
			 
			
			<div id="search">
			<center><div id="circlebig"><div id="circle"></div></div></center>
			<div class="gallery" id="gallery" style="border-radius: 5%;"  <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>dir="rtl"<?php } ?>>
				<h3 class="tittle"><strong><?php language('search'); ?></strong></h3><br>
				<div class="row">
					<div class="col-md-6 col-xs-12  <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo ' col-md-push-6'; } ?>">
						<center><select class="universitycourses-select" name="university" id="university">
							<option value=""><?php language('select').language(' ').language('university'); ?></option>
							<?php getUniversities($lang_file); ?>
						</select></center>
					</div>
					<div class="col-md-6 col-xs-12  <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo ' col-md-pull-6'; } ?>">
						<form action="" method="GET">
							<center><select class="universitycourses-select" name="faculty" id="faculty" onchange="this.form.submit()">
								<option value=""><?php language('select').language(' ').language('faculty'); ?></option>
							</select></center>
						</form>
					</div>
				</div>
			</div>
			</div>
		
		<!--universitycourses-->
			<div id="universitycourses">
			<center><div id="circlebig"><div id="circle"></div></div></center>
			<div class="gallery" id="about" style="border-radius: 5%;">
			<h3 class="tittle two"><strong><?php language('universitycourses'); ?></strong></h3>
			<?php
				if(isset($_GET['faculty']) && ($_GET['faculty'] != 0 || $_GET['faculty'] != '')) $universitycourses =  getUniversityCoursesByFacultyID($_GET['faculty'],$lang_file,$startResults,$resultsPerPage);
				else $universitycourses =  getUniversityCourses($lang_file,$startResults,$resultsPerPage);
				if(!empty($universitycourses)) { 
			?>
			<div class="gallery-bottom">
			 <?php for($i=0;$i<count($universitycourses);$i++) { ?>
			 <div class="view view-fifth" style="height: 225px;">
                    <a href="uploads/universitycourses/thumbnail/<?php echo $universitycourses[$i]['image']; ?>" class="b-link-stripe b-animate-go  swipebox"  title="<?php echo $universitycourses[$i]['title'].' - '.$universitycourses[$i]['faculty'].' - '.$universitycourses[$i]['university']; ?>"><img src="uploads/universitycourses/thumbnail/<?php echo $universitycourses[$i]['image']; ?>" alt="<?php echo $universitycourses[$i]['title'].' - '.$universitycourses[$i]['faculty'].' - '.$universitycourses[$i]['university']; ?>" class="img-responsive">
						<div class="mask"  style="height: 225px;">
							<h2><?php echo $universitycourses[$i]['title'].' - '.$universitycourses[$i]['faculty'].' - '.$universitycourses[$i]['university']; ?></h2>
							<p><?php echo substr($universitycourses[$i]['description'], 0, strpos($universitycourses[$i]['description'], ' ', 150)); ?></p>
							<a href="#" class="info" data-toggle="modal" data-target="#universitycourse<?php echo $i; ?>"><?php language('more'); ?></a>
							<a href="booking.php?id=<?php echo $universitycourses[$i]['id']; ?>&coursetype=universitycourses" class="info"><?php language('register'); ?></a>
						</div>
					</a>
                </div>
				
		<div id="universitycourse<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #18c9d2; color: #fff;">
						<?php echo $universitycourses[$i]['title'].' - '.$universitycourses[$i]['faculty'].' - '.$universitycourses[$i]['university']; ?>
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
			<div class="row">
			<div class="col-md-4 col-md-offset-5 col-xs-7 col-xs-offset-3">
				 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>
				 <nav>
					<?php if(isset($_GET['faculty']) && ($_GET['faculty'] != 0 || $_GET['faculty'] != '')) { ?>
					<ul class="pagination">
						<?php if($totalPages > 1) { ?><li><a href="?faculty=<?php echo $_GET['faculty']; ?>&page=<?php echo $totalPages; ?>"><?php language("last"); ?></a></li><?php } ?>
						<?php if($page < $totalPages-1) { ?><li>
							<a href="?faculty=<?php echo $_GET['faculty']; ?>&page=<?php echo $page+2; ?>" aria-label="Next">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li><?php } ?>
						<?php if($page < $totalPages) { ?><li><a href="?faculty=<?php echo $_GET['faculty']; ?>&page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?faculty=<?php echo $_GET['faculty']; ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li><?php } ?>
						<?php if($page > 1) { ?><li><a href="?faculty=<?php echo $_GET['faculty']; ?>&page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li><?php } ?>						
						<?php if($page > 3) { ?><li>
							<a href="?faculty=<?php echo $_GET['faculty']; ?>&page=<?php echo $page-2; ?>" aria-label="Previous">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?faculty=<?php echo $_GET['faculty']; ?>&page=1"><?php language("first"); ?></a></li><?php } ?>						
					</ul>
					<?php } else { ?>
					<ul class="pagination">
						<?php if($totalPages > 1) { ?><li><a href="?page=<?php echo $totalPages; ?>"><?php language("last"); ?></a></li><?php } ?>
						<?php if($page < $totalPages-1) { ?><li>
							<a href="?page=<?php echo $page+2; ?>" aria-label="Next">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li><?php } ?>
						<?php if($page < $totalPages) { ?><li><a href="?page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?page=<?php echo $page; ?>"><?php echo $page; ?></a></li><?php } ?>
						<?php if($page > 1) { ?><li><a href="?page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li><?php } ?>						
						<?php if($page > 3) { ?><li>
							<a href="?page=<?php echo $page-2; ?>" aria-label="Previous">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?page=1"><?php language("first"); ?></a></li><?php } ?>						
					</ul>
					<?php } ?>
				</nav>
				 <?php } else { ?>
				<nav>
					<?php if(isset($_GET['faculty']) && ($_GET['faculty'] != 0 || $_GET['faculty'] != '')) { ?>
					<ul class="pagination">
						<?php if($totalPages > 1) { ?><li><a href="?faculty=<?php echo $_GET['faculty']; ?>&page=1"><?php language("first"); ?></a></li><?php } ?>
						<?php if($page > 3) { ?><li>
							<a href="?faculty=<?php echo $_GET['faculty']; ?>&page=<?php echo $page-2; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li><?php } ?>
						<?php if($page > 1) { ?><li><a href="?faculty=<?php echo $_GET['faculty']; ?>&page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?faculty=<?php echo $_GET['faculty']; ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li><?php } ?>
						<?php if($page < $totalPages) { ?><li><a href="?faculty=<?php echo $_GET['faculty']; ?>&page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
						<?php if($page < $totalPages-1) { ?><li>
							<a href="?faculty=<?php echo $_GET['faculty']; ?>&page=<?php echo $page+2; ?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?faculty=<?php echo $_GET['faculty']; ?>&page=<?php echo $totalPages; ?>"><?php language("last"); ?></a></li><?php } ?>
					</ul>
					<?php } else { ?>
					<ul class="pagination">
						<?php if($totalPages > 1) { ?><li><a href="?page=1"><?php language("first"); ?></a></li><?php } ?>
						<?php if($page > 3) { ?><li>
							<a href="?page=<?php echo $page-2; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li><?php } ?>
						<?php if($page > 1) { ?><li><a href="?page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?page=<?php echo $page; ?>"><?php echo $page; ?></a></li><?php } ?>
						<?php if($page < $totalPages) { ?><li><a href="?page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
						<?php if($page < $totalPages-1) { ?><li>
							<a href="?page=<?php echo $page+2; ?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?page=<?php echo $totalPages; ?>"><?php language("last"); ?></a></li><?php } ?>
					</ul>
					<?php } ?>
				</nav>
				<?php } ?>
			</div>
		</div>
			<?php } ?>
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