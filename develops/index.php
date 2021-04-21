<?php
include('libs/frontendlang.php');
include('libs/index.php');

$carousel = getCarousel();
//$carouseldata = getCarouselData($lang_file);
$about = getAbout($lang_file);
$aboutimages = getAboutImages();
$universitycourses = getUniversityCourses($lang_file);
$othercourses = getOtherCourses($lang_file);
$contact = getContact($lang_file);
?>