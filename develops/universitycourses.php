<?php
include('../libs/universitycourses.php');
include('../classes/ResizeImage.php');
$userid = $_COOKIE['userid'];

if(isset($_GET['oldid']) && $_GET['oldid'] != '')
{
	$universitycourse = getUniversityCourseByID($_GET['oldid']);
}

if(isset($_GET['page'])) $page = (int) $_GET['page'];
else $page = 0;
if ($page < 1) $page = 1;
$resultsPerPage = 10;
$startResults = ($page - 1) * $resultsPerPage;
$noOfuniversitycourses = getnoOfUniversityCourses();
$totalPages = ceil($noOfuniversitycourses / $resultsPerPage);

if(isset($_POST['saveuniversitycourse']))
{
	unset($_POST['saveuniversitycourse']);
	if(isset($_POST['oldimage']) && $_POST['oldimage'] != '')
	{
		if(isset($_FILES['file']['error']) && $_FILES['file']['error'] == 0)
		{	
			unlink("../uploads/universitycourses/".$_POST['oldimage']);
			unlink("../uploads/universitycourses/thumbnail/".$_POST['oldimage']);
			$image = upload_profile_picture();
		}
		else $image = $_POST['oldimage'];
	}
	else $image = upload_profile_picture();
	
	if($image)
	{
		$universitytitles = getnoOfNamesByID('universities','id',$_POST['university']);
		$facultytitles = getnoOfNamesByID('faculties','id',$_POST['faculty']);
		if(isset($_POST['oldid']) && $_POST['oldid'] != '') updateUniversityCourses($_POST['oldid'],$_POST['university'],$_POST['faculty'],$universitytitles['titleen'],$universitytitles['titlear'],$facultytitles['titleen'],$facultytitles['titlear'],$_POST['titleen'],$_POST['titlear'],$_POST['descriptionen'],$_POST['descriptionar'],$image);
		else insertUniversityCourses($_POST['university'],$_POST['faculty'],$universitytitles['titleen'],$universitytitles['titlear'],$facultytitles['titleen'],$facultytitles['titlear'],$_POST['titleen'],$_POST['titlear'],$_POST['descriptionen'],$_POST['descriptionar'],$image);
	}
	unset($image,$_FILES);
	header('location: universitycourses.php');
}
?>