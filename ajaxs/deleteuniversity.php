<?php
if(isset($_POST['id'],$_POST['pic']))
{
	$id = $_POST['id'];
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select count(*) as count from faculties where universityid = '$id'");
	$row = $result->fetch();
	if($row['count'] == 0)
	{
		$stmt = $dbh->prepare("delete from universities where id = '$id'");
		if($stmt->execute())
		{
			unlink("../uploads/universities/".$_POST['pic']);
			unlink("../uploads/universities/thumbnail/".$_POST['pic']);
			echo 1;
		}
	}
	include("../libs/closedb.php");
   exit;
}
?>