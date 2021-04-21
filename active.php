<?php
if(isset($_GET['code']) && $_GET['code'] != '')
{
	$code = $_GET['code'];
	include("libs/config.php");
	include("libs/opendb.php");
	$stmt = $dbh->prepare("update users set active = '1',code = '' where code = '$code'");
	$stmt->execute();	
	include("libs/closedb.php");
	header('Location: login.php');
}
?>