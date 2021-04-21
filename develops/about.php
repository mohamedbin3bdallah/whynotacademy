<?php
include('../libs/about.php');
$userid = $_COOKIE['userid'];
include('../classes/ResizeImage.php');
if(!empty($_FILES['file']['name']) && $_FILES['file']['error'] == 0)
{
	if($_POST['oldimage'] != '')
	{
		unlink("../uploads/about/".$_POST['oldimage']);
		unlink("../uploads/about/thumbnail/".$_POST['oldimage']);
		$imagename = pathinfo($_POST['oldimage'], PATHINFO_FILENAME);
	}	
	$image = upload_profile_picture($imagename);
	if($image) updateAboutImages($_POST['oldid'],$image);
	unset($image,$_FILES);
	header('location: '.$_SERVER['REQUEST_URI']);
}
elseif(isset($_POST['saveabout']))
{
	unset($_POST['saveabout']);
	updateAbout($_POST['oldid'],$_POST['missionen'],$_POST['missionar'],$_POST['visionen'],$_POST['visionar']);
}
?>