<?php
include('../libs/universities.php');
include('../classes/ResizeImage.php');
$userid = $_COOKIE['userid'];

if(isset($_GET['oldid']) && $_GET['oldid'] != '')
{
	$university = getUniversityByID($_GET['oldid']);
}

if(isset($_GET['page'])) $page = (int) $_GET['page'];
else $page = 0;
if ($page < 1) $page = 1;
$resultsPerPage = 10;
$startResults = ($page - 1) * $resultsPerPage;
$noOfuniversities = getnoOfUniversities();
$totalPages = ceil($noOfuniversities / $resultsPerPage);

if(isset($_POST['saveuniversity']))
{
	unset($_POST['saveuniversity']);
	if(isset($_POST['oldimage']) && $_POST['oldimage'] != '')
	{
		if(isset($_FILES['file']['error']) && $_FILES['file']['error'] == 0)
		{	
			unlink("../uploads/universities/".$_POST['oldimage']);
			unlink("../uploads/universities/thumbnail/".$_POST['oldimage']);
			$image = upload_profile_picture();
		}
		else $image = $_POST['oldimage'];
	}
	else $image = upload_profile_picture();
	
	if($image)
	{
		if(isset($_POST['oldid']) && $_POST['oldid'] != '') updateUniversities($_POST['oldid'],$_POST['titleen'],$_POST['titlear'],$_POST['descriptionen'],$_POST['descriptionar'],$image);
		else insertUniversities($_POST['titleen'],$_POST['titlear'],$_POST['descriptionen'],$_POST['descriptionar'],$image);
	}
	unset($image,$_FILES);
	header('location: universities.php');
}
?>