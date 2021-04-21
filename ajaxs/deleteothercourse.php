<?php
if(isset($_POST['id'],$_POST['pic']))
{	
	$id = $_POST['id'];
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("delete from othercourses where id = '$id'");
	if($stmt->execute())
	{
		unlink("../uploads/othercourses/".$_POST['pic']);
		unlink("../uploads/othercourses/thumbnail/".$_POST['pic']);
		echo 1;
	}
	include("../libs/closedb.php");
   exit;
}
?>