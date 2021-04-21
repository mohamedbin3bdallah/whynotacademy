<?php
if(isset($_POST['id']))
{
	$id = $_POST['id'];
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("delete from booking where id = '$id'");
	if($stmt->execute())	echo 1;	
	include("../libs/closedb.php");
   exit;
}
?>