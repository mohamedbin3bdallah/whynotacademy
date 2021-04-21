<?php
include('../libs/lang.php');
if(isset($_POST['id']))
{	
	$id = $_POST['id'];
	$title = 'title'.$lang_file;
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select id,{$title} as title from faculties where universityid = '$id' order by {$title} ASC");
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			?><option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option><?php			
		}
	}
	include("../libs/closedb.php");
   exit;
}
?>