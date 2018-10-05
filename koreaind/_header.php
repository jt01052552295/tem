<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">
<meta name="HandheldFriendly" content="true">
<meta name="format-detection" content="telephone=no">
<meta name="Keywords" content="<?php echo $infodu['keywords']?>">
<meta name="description" content="<?php echo $infodu['keywords']?>">
<meta property="og:type" content="webinfodu">
<meta property="og:title" content="<?php echo $infodu['title']?>">
<meta property="og:description" content="<?php echo $infodu['keywords']?>">
<meta property="og:image" content="<?php echo KI_IMG_URL.'/logo.jpg'?>">
<meta property="og:url" content="<?php echo KI_URL?>">
<title><?php echo $infodu['title']?></title>
<link rel="canonical" href="<?php echo KI_URL?>">

<link rel="shortcut icon" href="<?php echo KI_IMG_URL?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo KI_IMG_URL?>/favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="<?=KI_CSS_URL?>/bootstrap-4.1.1-dist/css/bootstrap.css"> 
<link rel="stylesheet" href="<?php echo KI_CSS_URL?>/infodu.css?ver=<?php echo KI_TIME_YMD; ?>">
<?php if(!defined("_INDEX_")):?>
	<link rel="stylesheet" href="<?php echo KI_CSS_URL?>/contents.css?ver=<?php echo KI_TIME_YMD; ?>">
<?php endif; ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<script src="<?php echo KI_JS_URL?>/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.x-git.min.js" crossorigin="anonymous"></script>         
<script src="<?php echo KI_JS_URL?>/default.js?ver=<?php echo KI_TIME_YMD; ?>" ></script>
<script src="<?php echo KI_JS_URL?>/front.js?ver=<?php echo KI_TIME_YMD; ?>" ></script>
<script src="<?=KI_JS_URL?>/popper.min.js" crossorigin="anonymous"></script>
<script src="<?=KI_CSS_URL?>/bootstrap-4.1.1-dist/js/bootstrap.js" ></script>
</head>
<body>
