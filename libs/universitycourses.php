<?php

function getUniversities($id,$lang)
{
	$title = 'title'.$lang;
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select id,{$title} as title from universities order by {$title} ASC");
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			?><option value="<?php echo $row['id']; ?>" <?php if($id == $row['id']) echo 'selected'; ?>><?php echo $row['title']; ?></option><?php			
		}
	}
	include("../libs/closedb.php");
}

function getFaculties($id,$universityid,$lang)
{
	$title = 'title'.$lang;
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select id,{$title} as title from faculties where universityid = '$universityid' order by {$title} ASC");
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			?><option value="<?php echo $row['id']; ?>" <?php if($id == $row['id']) echo 'selected'; ?>><?php echo $row['title']; ?></option><?php			
		}
	}
	include("../libs/closedb.php");
}
	
function getnoOfNamesByID($table,$field,$find)
{	
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select titleen,titlear from {$table} where {$field} = '$find'");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row;
}
	
function getUniversityCourseByID($id)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from universitycourses where id = '$id'");
	$allrows = array();	
	if(!empty($result))
	{
		$row = $result->fetch();
		$allrows['universityid'] = $row['universityid'];
		$allrows['facultyid'] = $row['facultyid'];
		$allrows['titleen'] = $row['titleen'];
		$allrows['titlear'] = $row['titlear'];
		$allrows['descriptionen'] = $row['descriptionen'];
		$allrows['descriptionar'] = $row['descriptionar'];
		$allrows['image'] = $row['image'];
	}
	include("../libs/closedb.php");
	return $allrows;	
}

function getnoOfUniversityCourses()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from universitycourses");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['count'];
}

function getUniversityCourses($startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from universitycourses LIMIT $startResults, $resultsPerPage");
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
		$image_director = "../uploads/universitycourses";
		$_FILES["file"]["name"] = rand().'.'.$file_extn;
		move_uploaded_file($_FILES["file"]["tmp_name"], $image_director.'/'.$_FILES["file"]["name"]);
		$resizeObj = new Resize($image_director.'/'.$_FILES["file"]["name"]);
		$resizeObj -> resizeImage(400, 400, 'exact');
		$resizeObj -> saveImage($image_director.'/thumbnail/'.$_FILES["file"]["name"], 100);
		return $_FILES["file"]["name"];
	}
	else return 0;
}

function updateUniversityCourses($id,$universityid,$facultyid,$universityen,$universityar,$facultyen,$facultyar,$titleen,$titlear,$descriptionen,$descriptionar,$image)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update universitycourses set universityid = '$universityid',facultyid = '$facultyid',universityen = '$universityen',universityar = '$universityar',facultyen = '$facultyen',facultyar = '$facultyar',titleen = '$titleen',titlear = '$titlear',descriptionen = '$descriptionen',descriptionar = '$descriptionar',image = '$image' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

function insertUniversityCourses($universityid,$facultyid,$universityen,$universityar,$facultyen,$facultyar,$titleen,$titlear,$descriptionen,$descriptionar,$image)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("insert into `universitycourses` (`universityid`,`facultyid`,`universityen`,`universityar`,`facultyen`,`facultyar`,`titleen`,`titlear`,`descriptionen`,`descriptionar`,`image`) values ('$titleen','$facultyid','$universityen','$universityar','$facultyen','$facultyar','$titleen','$titlear','$descriptionen','$descriptionar','$image')");
	$stmt->execute();
	include("../libs/closedb.php");
}

?>