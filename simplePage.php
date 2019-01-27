<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$title= "Test title";
$content="<h1>Hello World</h1>";
$page= include_once "/opt/lampp/htdocs/php_Lessons/page.php";

echo $page;


?>