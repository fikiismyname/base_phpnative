<?php  
// Title Declaration
switch (@$_GET['module']) {

	case 'laporan':
	$title = "Laporan ".$settings['title'];
	break;

	case 'tentangaplikasi':
	$title = "Tentang Aplikasi ".$settings['title'];
	break;

	case 'masuk':
	$title = "Masuk ".$settings['title'];
	break;

	case 'userinfo':
	$title = "User Info";
	break;

	default:
	$title = $settings['title'];
	break;
}
?>
<title><?= $title ?></title>   