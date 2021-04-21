<?php
include('libs/frontendlang.php');
include('libs/frontendothercourses.php');

if(isset($_GET['page'])) $page = (int) $_GET['page'];
else $page = 0;
if ($page < 1) $page = 1;
$resultsPerPage = 9;
$startResults = ($page - 1) * $resultsPerPage;
$noOfothercourses = getnoOfOtherCourses();
$totalPages = ceil($noOfothercourses / $resultsPerPage);
?>