<?php

function getUniversityByID($id)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from universities where id = '$id'");
	$allrows = array();	
	if(!empty($result))
	{
		$row = $result->fetch();
		$allrows['titleen'] = $row['titleen'];
		$allrows['titlear'] = $row['titlear'];
		$allrows['descriptionen'] = $row['descriptionen'];
		$allrows['descriptionar'] = $row['descriptionar'];
		$allrows['image'] = $row['image'];
	}
	include("../libs/closedb.php");
	return $allrows;	
}

function getnoOfUniversities()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from universities");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['count'];
}

function getUniversities($startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from universities LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['titleen'] = $row['titleen'];
			$allrows[$i]['titlear'] = $row['titlear'];
			$allrows[$i]['descriptionen'] = $row['descriptionen'];
			$allrows[$i]['descriptionar'] = $row['descriptionar'];
			$allrows[$i]['image'] = $row['image'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

function upload_profile_picture()
{
	$file_extn = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	if($_FILES["file"]["type"] == "image/jpg" || $_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"] == "image/gif" || $_FILES["file"]["type"] == "image/png")
	{
		$image_director = "../uploads/universities";
		$_FILES["file"]["name"] = rand().'.'.$file_extn;
		move_uploaded_file($_FILES["file"]["tmp_name"], $image_director.'/'.$_FILES["file"]["name"]);
		$resizeObj = new Resize($image_director.'/'.$_FILES["file"]["name"]);
		$resizeObj -> resizeImage(400, 400, 'exact');
		$resizeObj -> saveImage($image_director.'/thumbnail/'.$_FILES["file"]["name"], 100);
		return $_FILES["file"]["name"];
	}
	else return 0;
}

function updateUniversities($id,$titleen,$titlear,$descriptionen,$descriptionar,$image)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update universities set titleen = '$titleen',titlear = '$titlear',descriptionen = '$descriptionen',descriptionar = '$descriptionar',image = '$image' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

function insertUniversities($titleen,$titlear,$descriptionen,$descriptionar,$image)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("insert into `universities` (`titleen`,`titlear`,`descriptionen`,`descriptionar`,`image`) values ('$titleen','$titlear','$descriptionen','$descriptionar','$image')");
	$stmt->execute();
	include("../libs/closedb.php");
}

?>