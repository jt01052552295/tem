<?php 
$ver_time = date("Y-m-dH:i:s");
$ver_time = preg_replace("/[^0-9]*/s", "", $ver_time);
?>
<!DOCTYPE html>
<!--[if IE 7]> <html lang="ko" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="ko" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="ko" class="ie9"> <![endif]-->
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>심플 위지윅 에디터</title>
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="google" content="notranslate">
<meta name="format-detection" content="telephone=no">
<link href="./asset/css/fonts.css?t=<?php echo $ver_time?>" rel="stylesheet">
<link href="./asset/css/default.css?t=<?php echo $ver_time?>" rel="stylesheet">
<link href="./asset/css/editor.css?t=<?php echo $ver_time?>" rel="stylesheet">
<link href="./asset/fontawesome/css/all.css?ver=1" rel="stylesheet">
<script src="./asset/js/jquery-3.3.1.min.js?ver=1" crossorigin="anonymous"></script>
<script src="./asset/js//jquery-2.x-git.min.js" crossorigin="anonymous"></script>
<script src="./asset/dev/error.js" crossorigin="anonymous"></script>

<!--[if lt IE 9]><script src="./asset/js/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="./asset/js/respond.min.js"></script><![endif]-->
<!--[if lt IE 9]><script src="./asset/js/IE9.js"></script><![endif]-->
</head>
<body>
<!-- 
	http://naver.github.io/smarteditor2/demo/

-->
<div id="wrap">

	<div class="editor">
		<div class="tool-area">
			<div class="row">
				<div class="box">11</div>
				<div class="box">
					<div class="btn-wrap">
						<button class="eBtn" data-action="bold" title="Bold">
		                  <i class="fa fa-bold"></i>
		                </button>
		            </div>
		            <div class="btn-wrap">
						<button class="eBtn" data-action="bold" title="Bold">
		                  <i class="fa fa-bold"></i>
		                </button>
		            </div>
		            <div class="btn-wrap">
						<button class="eBtn" data-action="bold" title="Bold">
		                  <i class="fa fa-bold"></i>
		                </button>
		            </div>
		            <div class="btn-wrap">
						<button class="eBtn" data-action="bold" title="Bold">
		                  <i class="fa fa-bold"></i>
		                </button>
		            </div>

				</div>
				<div class="box">11</div>
			</div>
			<div class="row">
				<div class="box">11</div>
			</div>
		</div>

		<div class="content-area">
			<div class="visuell-view" contenteditable>
				hello world
	        </div>
	        <textarea class="html-view"></textarea>
		</div>

	</div>
	


</div>


<!-- script 모음 -->

<script>
	



</script>


</body>
</html>