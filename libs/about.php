<?php

function getAbout()
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from about");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row;	
}

function getAboutImages()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select * from aboutimages");
	$allrows = array();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$allrows[$i]['id'] = $row['id'];
		$allrows[$i]['image'] = $row['image'];
	}
	include("../libs/closedb.php");
	return $allrows;
}

function upload_profile_picture($imagename)
{
	$file_extn = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	if($_FILES["file"]["type"] == "image/jpg" || $_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"] == "image/gif" || $_FILES["file"]["type"] == "image/png")
	{
		$image_director = "../uploads/about";
		$_FILES["file"]["name"] = $imagename.'.'.$file_extn;
		move_uploaded_file($_FILES["file"]["tmp_name"], $image_director.'/'.$_FILES["file"]["name"]);
		$resizeObj = new Resize($image_director.'/'.$_FILES["file"]["name"]);
		$resizeObj -> resizeImage(450, 390, 'exact');
		$resizeObj -> saveImage($image_director.'/thumbnail/'.$_FILES["file"]["name"], 100);
		return $_FILES["file"]["name"];
	}
	else return 0;
}

function updateAboutImages($id,$image)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update aboutimages set image = '$image' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

function updateAbout($id,$missionen,$missionar,$visionen,$visionar)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update about set missionen = '$missionen',missionar = '$missionar',visionen = '$visionen',visionar = '$visionar' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

?>