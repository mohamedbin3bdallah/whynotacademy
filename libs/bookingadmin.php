<?php

function getnoOfBooking()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from booking");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['count'];
}

function getBooking($startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from booking order by time DESC LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['name'] = $row['name'];
			$allrows[$i]['email'] = $row['email'];
			$allrows[$i]['mobile'] = $row['mobile'];
			$allrows[$i]['coursetype'] = $row['coursetype'];
			$allrows[$i]['courseid'] = $row['courseid'];
			$allrows[$i]['time'] = $row['time'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

function getNameByID($table,$field,$find,$lang)
{
	$title = 'title'.$lang;
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select {$title} as title from {$table} where {$field} = '$find'");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['title'];
}

function getCourseInfo($table,$field,$find,$lang)
{
	$title = 'title'.$lang;
	include("../libs/config.php");
	include("../libs/opendb.php");
	if($table == 'universitycourses')
	{
		$result = $dbh->query("select universityid,facultyid,{$title} as title from {$table} where {$field} = '$find'");
		$row = $result->fetch();
		include("../libs/closedb.php");
		return $row['title'].' - '.getNameByID('faculties','id',$row['facultyid'],$lang).' - '.getNameByID('universities','id',$row['universityid'],$lang);
		
	}
	else
	{
		$result = $dbh->query("select {$title} as title from {$table} where {$field} = '$find'");
		$row = $result->fetch();
		include("../libs/closedb.php");
		return $row['title'];
	}
}

?>