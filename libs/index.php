<?php

function getnoOfTable($table)
{
	include("libs/config.php");
	include("libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from {$table}");
	$row = $result->fetch();
	include("libs/closedb.php");
	return $row['count'];
}

function getCarousel()
{
	include("libs/config.php");
	include("libs/opendb.php");	
	$result = $dbh->query("select * from carousel");
	$allrows = array();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$allrows[$i]['id'] = $row['id'];
		$allrows[$i]['image'] = $row['image'];
	}
	include("libs/closedb.php");
	return $allrows;
}

function getCarouselData($lang)
{
	$title = 'title'.$lang;
	$description = 'description'.$lang;
	include("libs/config.php");
	include("libs/opendb.php");	
	$result = $dbh->query("select id,{$title} as title,{$description} as description from carouseldata");
	$allrows = array();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$allrows[$i]['id'] = $row['id'];
		$allrows[$i]['title'] = $row['title'];
		$allrows[$i]['description'] = $row['description'];		
	}
	include("libs/closedb.php");
	return $allrows;
}

function getAbout($lang)
{
	$mission = 'mission'.$lang;
	$vision = 'vision'.$lang;
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select id,{$mission} as mission,{$vision} as vision from about");
	$row = $result->fetch();			
	include("libs/closedb.php");
	return $row;
}

function getAboutImages()
{
	include("libs/config.php");
	include("libs/opendb.php");	
	$result = $dbh->query("select * from aboutimages");
	$allrows = array();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$allrows[$i]['id'] = $row['id'];
		$allrows[$i]['image'] = $row['image'];
	}
	include("libs/closedb.php");
	return $allrows;
}

function getUniversityCourses($lang)
{
	$title = 'title'.$lang;
	$description = 'description'.$lang;
	$university = 'university'.$lang;
	$faculty = 'faculty'.$lang;
	include("libs/config.php");
	include("libs/opendb.php");	
	$result = $dbh->query("select id,universityid,facultyid,{$university} as university,{$faculty} as faculty,{$title} as title,{$description} as description,image from universitycourses order by id DESC LIMIT 3");
	$allrows = array();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$allrows[$i]['id'] = $row['id'];
		$allrows[$i]['universityid'] = $row['universityid'];
		$allrows[$i]['facultyid'] = $row['facultyid'];
		$allrows[$i]['university'] = $row['university'];
		$allrows[$i]['faculty'] = $row['faculty'];
		$allrows[$i]['title'] = $row['title'];
		$allrows[$i]['description'] = $row['description'];		
		$allrows[$i]['image'] = $row['image'];
	}
	include("libs/closedb.php");
	return $allrows;
}

function getOtherCourses($lang)
{
	$title = 'title'.$lang;
	$description = 'description'.$lang;
	include("libs/config.php");
	include("libs/opendb.php");	
	$result = $dbh->query("select id,{$title} as title,{$description} as description,image from othercourses order by id DESC LIMIT 3");
	$allrows = array();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$allrows[$i]['id'] = $row['id'];
		$allrows[$i]['title'] = $row['title'];
		$allrows[$i]['description'] = $row['description'];		
		$allrows[$i]['image'] = $row['image'];
	}
	include("libs/closedb.php");
	return $allrows;
}

function getContact($lang)
{
	$address = 'address'.$lang;
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select id,mobile,phone,email,{$address} as address from contact");
	$row = $result->fetch();
	include("libs/closedb.php");
	return $row;	
}

function getNameByID($table,$field,$find,$lang)
{
	$title = 'title'.$lang;
	include("libs/config.php");
	include("libs/opendb.php");	
	$result = $dbh->query("select {$title} as title from {$table} where {$field} = '$find'");
	$row = $result->fetch();
	include("libs/closedb.php");
	return $row['title'];
}

function getCourseInfo($table,$field,$find,$lang)
{
	$title = 'title'.$lang;
	include("libs/config.php");
	include("libs/opendb.php");
	if($table == 'universitycourses')
	{
		$result = $dbh->query("select universityid,facultyid,{$title} as title from {$table} where {$find} = '$find'");
		$row = $result->fetch();
		include("libs/closedb.php");
		return $row['title'].' - '.getNameByID('faculties','id',$row['facultyid'],$lang).' - '.getNameByID('universities','id',$row['universityid'],$lang);
		
	}
	else
	{
		$result = $dbh->query("select {$title} as title from {$table} where {$find} = '$find'");
		$row = $result->fetch();
		include("libs/closedb.php");
		return $row['title'];
	}
}

?>