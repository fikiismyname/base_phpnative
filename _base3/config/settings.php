<?php  
include "limit.php";
include "session.php";
include "i.function.php";
include "function.php";
include "timezone.php";
include "mysql.php";

$settings['title'] = 'Project Name';
$settings['desc'] = 'Description';
$settings['author'] = 'Irfaan Programmer';
$settings['version'] = 'v1.0';
$baseurl = home_base_url();

//ob_start("sanitize_output");
?>