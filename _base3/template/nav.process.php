<?php  
switch (@$_GET['module']) {

	case 'laporan':
	include "module/laporan/index.php";
	break;

	case 'tentangaplikasi':
	include "module/tentangaplikasi/index.php";
	break;

	case 'masuk':
	include "module/masuk/index.php";
	break;

	case 'userinfo':
	include "module/userinfo/index.php";
	break;

	default:
	include "module/dashboard/index.php";
	break;
	
}
?>