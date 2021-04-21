<?php
include('libs/frontendlang.php');
include('libs/frontenduniversitycourses.php');

if(isset($_GET['page'])) $page = (int) $_GET['page'];
else $page = 0;
if ($page < 1) $page = 1;
$resultsPerPage = 9;
$startResults = ($page - 1) * $resultsPerPage;
if(isset($_GET['faculty']) && ($_GET['faculty'] != 0 || $_GET['faculty'] != '')) $noOfuniversitycourses = getnoOfUniversityCoursesByFacultyID($_GET['faculty']);
else $noOfuniversitycourses = getnoOfUniversityCourses();
$totalPages = ceil($noOfuniversitycourses / $resultsPerPage);
?>