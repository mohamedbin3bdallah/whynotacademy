<?php

function getCarousel()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select * from carousel");
	$allrows = array();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$allrows[$i]['id'] = $row['id'];
		$allrows[$i]['image'] = $row['image'];
	}
	include("../libs/closedb.php");
	return $allrows;
}

function getCarouselData()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select * from carouseldata");
	$allrows = array();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$allrows[$i]['id'] = $row['id'];
		$allrows[$i]['titleen'] = $row['titleen'];
		$allrows[$i]['descriptionen'] = $row['descriptionen'];
		$allrows[$i]['titlear'] = $row['titlear'];
		$allrows[$i]['descriptionar'] = $row['descriptionar'];
	}
	include("../libs/closedb.php");
	return $allrows;
}

function upload_profile_picture($imagename)
{
	$file_extn = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	if($_FILES["file"]["type"] == "image/jpg")
	{
		$image_director = "../uploads/carousel";
		$_FILES["file"]["name"] = $imagename.'.'.$file_extn;
		move_uploaded_file($_FILES["file"]["tmp_name"], $image_director.'/'.$_FILES["file"]["name"]);
		$resizeObj = new Resize($image_director.'/'.$_FILES["file"]["name"]);
		$resizeObj -> resizeImage(250, 250, 'exact');
		$resizeObj -> saveImage($image_director.'/thumbnail/'.$_FILES["file"]["name"], 100);
		return $_FILES["file"]["name"];
	}
	else return 0;
}

function updateCarousel($id,$image)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update carousel set image = '$image' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

function updateCarouselData($id,$titleen,$descriptionen,$titlear,$descriptionar)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update carouseldata set titleen = '$titleen',descriptionen = '$descriptionen',titlear = '$titlear',descriptionar = '$descriptionar' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

?>