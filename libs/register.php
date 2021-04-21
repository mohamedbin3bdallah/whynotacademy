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

function checkUsername($username)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select username from users where username = '$username'")->fetchColumn();
	include("libs/closedb.php");
	if(isset($result) && $result == $username) return 0;
	else return 1;
}

function checkUserEmail($email)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select email from users where email = '$email'")->fetchColumn();
	include("libs/closedb.php");
	if(isset($result) && $result == $email) return 0;
	else return 1;
}

function getIDByname($table,$field,$name)
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
	//$person['userid'] = uniqid(rand(), true);
	$person['password'] = hash('sha256', $person['password'], FALSE);
	//$person['code'] = uniqid(mt_rand(111111111,999999999));
	return $person;
}

function register($person)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$fquery = "insert into users (";
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

?>