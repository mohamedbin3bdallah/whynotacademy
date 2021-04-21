<?php
if(isset($_GET['id']) && $_GET['id'] != '')
{
include('../libs/faculties.php');
include('../classes/ResizeImage.php');
$userid = $_COOKIE['userid'];

if(isset($_GET['oldid']) && $_GET['oldid'] != '')
{
	$faculty = getFacultyByID($_GET['oldid']);
}

if(isset($_GET['page'])) $page = (int) $_GET['page'];
else $page = 0;
if ($page < 1) $page = 1;
$resultsPerPage = 10;
$startResults = ($page - 1) * $resultsPerPage;
$noOffaculties = getnoOfFaculties($_GET['id']);
$totalPages = ceil($noOffaculties / $resultsPerPage);

if(isset($_POST['savefaculty']))
{
	unset($_POST['savefaculty']);
	if(isset($_POST['oldimage']) && $_POST['oldimage'] != '')
	{
		if(isset($_FILES['file']['error']) && $_FILES['file']['error'] == 0)
		{	
			unlink("../uploads/faculties/".$_POST['oldimage']);
			unlink("../uploads/faculties/thumbnail/".$_POST['oldimage']);
			$image = upload_profile_picture();
		}
		else $image = $_POST['oldimage'];
	}
	else $image = upload_profile_picture();
	
	if($image)
	{
		if(isset($_POST['oldid']) && $_POST['oldid'] != '') updateFaculties($_POST['oldid'],$_POST['titleen'],$_POST['titlear'],$_POST['descriptionen'],$_POST['descriptionar'],$image);
		else insertFaculties($_GET['id'],$_POST['titleen'],$_POST['titlear'],$_POST['descriptionen'],$_POST['descriptionar'],$image);
	}
	unset($image,$_FILES);
	header('location: faculties.php?id='.$_GET['id']);
}
}
else header('location: universities.php');
?>