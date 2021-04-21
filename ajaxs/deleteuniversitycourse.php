<?php
if(isset($_POST['id'],$_POST['pic']))
{	
	$id = $_POST['id'];
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("delete from universitycourses where id = '$id'");
	if($stmt->execute())
	{
		unlink("../uploads/universitycourses/".$_POST['pic']);
		unlink("../uploads/universitycourses/thumbnail/".$_POST['pic']);
		echo 1;
	}
	include("../libs/closedb.php");
   exit;
}
?>