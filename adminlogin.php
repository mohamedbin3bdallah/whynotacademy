<?php
if(!isset($_COOKIE['userid']))
{
	include('libs/lang.php');
	function login($myusername,$passw0rd,$rem)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$passw0rd = hash('sha256', $passw0rd, FALSE);
	$query1 = $dbh->query("select id from  admins where username = '$myusername' and password = '$passw0rd'");
	$row = $query1->fetch();
	if(!empty($row))
	{
		if($rem)
		{
			setcookie('userid', $row['id'], time()+60*60*24*100, "");
		}
		else
		{
			setcookie('userid', $row['id']);
		}
		return 1;
    }
	else return 0;
}

if(isset($_POST['loginsubmit'])) 
{
	unset($_POST['loginsubmit']);
	if($_POST['myusername'] != '' && $_POST['passw0rd'] != '')
	{
		if(isset($_POST['remember'])) { $rem = 1; unset($_POST['remember']); }
		else $rem = 0;
		$loginOp = login($_POST['myusername'],$_POST['passw0rd'],$rem);		
		if($loginOp == 1) echo header('location: pages/homepage.php');
		elseif($loginOp == 0) echo '<div id="wrongaccount"></div>';
	}
}
	//include('develops/register.php');
	/*if($lang_file == "ar")
	echo '<html xml:lang="ar" lang="ar" dir=rtl xmlns="http://www.w3.org/1999/xhtml">';*/
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<?php include('designs/heads/index.php'); ?>
</head>
<body>
<div class="container">
<?php include('designs/headers/index.php'); ?>
</div>
</body>
</html>
<?php } else echo header('location:index.php'); ?>