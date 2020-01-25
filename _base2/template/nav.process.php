<?php  
switch (@$_GET['module']) {

	default:
	include "module/dashboard/index.php";
	break;
	
}
?>