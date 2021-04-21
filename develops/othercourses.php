<?php
include('../libs/othercourses.php');
include('../classes/ResizeImage.php');
$userid = $_COOKIE['userid'];

if(isset($_GET['oldid']) && $_GET['oldid'] != '')
{
	$othercourse = getOtherCourseByID($_GET['oldid']);
}

if(isset($_GET['page'])) $page = (int) $_GET['page'];
else $page = 0;
if ($page < 1) $page = 1;
$resultsPerPage = 10;
$startResults = ($page - 1) * $resultsPerPage;
$noOfothercourses = getnoOfOtherCourses();
$totalPages = ceil($noOfothercourses / $resultsPerPage);

if(isset($_POST['saveothercourse']))
{
	unset($_POST['saveothercourse']);
	if(isset($_POST['oldimage']) && $_POST['oldimage'] != '')
	{
		if(isset($_FILES['file']['error']) && $_FILES['file']['error'] == 0)
		{	
			unlink("../uploads/othercourses/".$_POST['oldimage']);
			unlink("../uploads/othercourses/thumbnail/".$_POST['oldimage']);
			$image = upload_profile_picture();
		}
		else $image = $_POST['oldimage'];
	}
	else $image = upload_profile_picture();
	
	if($image)
	{
		if(isset($_POST['oldid']) && $_POST['oldid'] != '') updateOtherCourses($_POST['oldid'],$_POST['titleen'],$_POST['titlear'],$_POST['descriptionen'],$_POST['descriptionar'],$image);
		else insertOtherCourses($_POST['titleen'],$_POST['titlear'],$_POST['descriptionen'],$_POST['descriptionar'],$image);
	}
	unset($image,$_FILES);
	header('location: othercourses.php');
}
?>