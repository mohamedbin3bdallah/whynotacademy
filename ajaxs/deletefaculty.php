<?php
if(isset($_POST['id'],$_POST['pic']))
{
	$id = $_POST['id'];
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select count(*) as count from universitycourses where facultyid = '$id'");
	$row = $result->fetch();
	if($row['count'] == 0)
	{
		$stmt = $dbh->prepare("delete from faculties where id = '$id'");
		if($stmt->execute())
		{
			unlink("../uploads/faculties/".$_POST['pic']);
			unlink("../uploads/faculties/thumbnail/".$_POST['pic']);
			echo 1;
		}
	}
	include("../libs/closedb.php");
   exit;
}
?>