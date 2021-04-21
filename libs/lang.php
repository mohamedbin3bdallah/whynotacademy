<?php
if(isset($_COOKIE['userid']) && ($_SERVER['SCRIPT_NAME'] == '/whynotacademy/index.php' || $_SERVER['SCRIPT_NAME'] == '/whynotacademy/booking.php'))
{
	if(isset($_COOKIE['lang'])) $lang_file = $_COOKIE['lang'];
	else $lang_file = 'en';
	include("languages/$lang_file.php");
}
elseif(isset($_COOKIE['userid']))
{
	if(isset($_COOKIE['lang'])) $lang_file = $_COOKIE['lang'];
	else $lang_file = 'en';
	include("../languages/$lang_file.php");
}
elseif(isset($_COOKIE['lang']))
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