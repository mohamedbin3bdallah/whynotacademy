<?php
$_SERVER['HTTP_PRAGMA'] = 'no-cache';
$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	/*if(preg_match('/[p{Arabic}]+$/u','adasd asdad')) echo 0;
	else echo 1;
	
	if(preg_match('/[a-zA-Z]+$/u','سشيشسي شسيشسي شسيشسي')) echo 2;
	else echo 3;*/
	
	?><pre><?php //print_r($_SERVER['HTTP_USER_AGENT']); ?></pre><?php
	?><pre><?php print_r($_SERVER); ?></pre><?php
?>