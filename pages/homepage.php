<?php
if(isset($_COOKIE['userid']))
{
	include('../libs/lang.php');
	include('../develops/homepage.php');
	if($lang_file == "ar")
	echo '<html xml:lang="ar" lang="ar" dir=rtl xmlns="http://www.w3.org/1999/xhtml">';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<?php include('../designs/head.php'); ?>
</head>
<body <?php if(isset($lat,$lng)) echo 'onload="initialize('.$lat.','.$lng.');"'; ?>>
<div class="container">
<?php include('../designs/containers/homepage.php'); ?>
</div>
</body>
</html>
<?php
} else echo header('location:../index.php'); ?>