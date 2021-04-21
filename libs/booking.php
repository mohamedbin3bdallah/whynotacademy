<?php

function exist($table,$field,$find)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select {$field} from {$table} where {$field} like '$find'");
	$row = $result->fetch();	
	include("../libs/closedb.php");
	if(!empty($row) && isset($row[$field])) return 1;
	else return 0;
}

function checkUserBooking($email,$name)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select email from booking where email = '$email' and name = '$name'")->fetchColumn();
	include("libs/closedb.php");
	if(isset($result) && $result == $email) return 0;
	else return 1;
}

function getNameByID($table,$field,$find,$lang)
{
	$title = 'title'.$lang;
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select {$title} as title from {$table} where {$field} = '$find'");
	$row = $result->fetch();	
	include("libs/closedb.php");
	if(!empty($row) && isset($row['title'])) return $row['title'];
	else return 0;
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

/*function getIDByname($table,$field,$name)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select id from {$table} where {$field} like '$name'");
	$row = $result->fetch();	
	include("libs/closedb.php");
	if(!empty($row) && isset($row['id'])) return $row['id'];
	else return 0;
}

function register_setvariables()
{
	foreach ($_POST as $key => $value)
	{
		if($value != "")
		{
			$person[$key] = $value;
		}
	}
	unset($_POST);	
	return $person;
}*/

function booking($person)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$fquery = "insert into booking (";
	$lquery = " values (";
	foreach ($person as $key => $value)
	{
		$fquery .= $key;
		$lquery .= "'".$value."'";
		$data  = array_keys($person);
		$lastkey = array_pop($data);
		if($key != $lastkey) 
		{	
			$fquery .= ",";
			$lquery .= ",";
		}	
	}
	$fquery .= ")";
	$lquery .= ")";
	$query = $fquery.$lquery;
	$result = $dbh->prepare($query)->execute();
    include("libs/closedb.php");
	unset($data,$lastkey,$person,$fquery,$lquery,$query,$result);
}

function getCourseInfo($table,$field,$find,$lang)
{
	$title = 'title'.$lang;
	include("libs/config.php");
	include("libs/opendb.php");
	if($table == 'universitycourses')
	{
		$result = $dbh->query("select universityid,facultyid,{$title} as title from {$table} where {$field} = '$find'");
		$row = $result->fetch();
		include("libs/closedb.php");
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