<?php  
// Title Declaration
switch (@$_GET['module']) {

	default:
	$title = $settings['title'];
	break;
}
?>
<title><?= $title ?></title>   