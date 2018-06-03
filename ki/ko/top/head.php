<? include "config.php"; ?>
<head>
	<title><?php echo $site['title']?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta HTTP-EQUIV="imagetoolbar" CONTENT="no">
	
	<meta name="Keywords" content="<?php echo $site['keywords']?>">
	<meta name="description" content="<?php echo $site['keywords']?>">
	
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php echo $site['title']?>">
	<meta property="og:description" content="<?php echo $site['keywords']?>">
	<meta property="og:image" content="<?php echo KI_IMG_URL.'logo.jpg'?>">
	<meta property="og:url" content="<?php echo ROOT_URL?>">
	
	<link rel="shortcut icon" href="<?=KI_URL?>images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?=KI_URL?>images/favicon.ico" type="image/x-icon">
	
	<link rel="stylesheet" href="<?=KI_URL?>css/reset.css">
	<link rel="stylesheet" href="<?=KI_URL?>css/infodu.css">
	<link rel="stylesheet" href="<?=KI_URL?>css/contents.css">
	<link rel="stylesheet" href="<?=KI_URL?>mail/mailcss.css">
	
	<script src="<?php echo KI_TOP_URL?>js/jquery-1.8.3.min.js" ></script>
	<script src='<?=KI_TOP_URL?>js/flash.js'></script>
	<script src="<?=KI_TOP_URL?>js/openwindow.js"></script>
</head>