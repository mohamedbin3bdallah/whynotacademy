<?php
if(isset($_COOKIE['lang']))
{	
	$lang_file = $_COOKIE['lang'];
	include("languages/$lang_file.php");
}
else
{
	$lang_file = 'en';
	include("languages/en.php");
}
?>