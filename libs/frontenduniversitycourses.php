<?php

function getUniversities($lang)
{
	$title = 'title'.$lang;
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select id,{$title} as title from universities order by {$title} ASC");
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			?><option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option><?php			
		}
	}
	include("libs/closedb.php");
}

function getFaculties($id,$universityid,$lang)
{
	$title = 'title'.$lang;
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select id,{$title} as title from faculties where universityid = '$universityid' order by {$title} ASC");
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			?><option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option><?php			
		}
	}
	include("libs/closedb.php");
}
	

function getUniversityCourseByID($id)
{
	include("libs/config.php");
	include("libs/opendb.php");
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
	include("libs/closedb.php");
	return $allrows;	
}

function getnoOfUniversityCourses()
{
	include("libs/config.php");
	include("libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from universitycourses");
	$row = $result->fetch();
	include("libs/closedb.php");
	return $row['count'];
}

function getnoOfUniversityCoursesByFacultyID($facultyid)
{
	include("libs/config.php");
	include("libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from universitycourses where facultyid = '$facultyid'");
	$row = $result->fetch();
	include("libs/closedb.php");
	return $row['count'];
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

function getUniversityCourses($lang,$startResults,$resultsPerPage)
{
	$title = 'title'.$lang;
	$description = 'description'.$lang;
	$university = 'university'.$lang;
	$faculty = 'faculty'.$lang;
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select id,universityid,facultyid,{$university} as university,{$faculty} as faculty,{$title} as title,{$description} as description,image from universitycourses LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
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
	}
	include("libs/closedb.php");
	return $allrows;
}

function getUniversityCoursesByFacultyID($facultyid,$lang,$startResults,$resultsPerPage)
{
	$title = 'title'.$lang;
	$description = 'description'.$lang;
	$university = 'university'.$lang;
	$faculty = 'faculty'.$lang;
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select id,universityid,facultyid,{$university} as university,{$faculty} as faculty,{$title} as title,{$description} as description,image from universitycourses where facultyid = '$facultyid' LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
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
	}
	include("libs/closedb.php");
	return $allrows;
}

?>