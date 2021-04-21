<?php

function getnoOfOtherCourses()
{
	include("libs/config.php");
	include("libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from othercourses");
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

function getOtherCourses($lang,$startResults,$resultsPerPage)
{
	$title = 'title'.$lang;
	$description = 'description'.$lang;
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select id,{$title} as title,{$description} as description,image from othercourses order by time LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];			
			$allrows[$i]['title'] = $row['title'];
			$allrows[$i]['description'] = $row['description'];
			$allrows[$i]['image'] = $row['image'];
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

?>