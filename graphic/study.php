<!DOCTYPE html>
<!--[if IE 7]> <html lang="ko" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="ko" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="ko" class="ie9"> <![endif]-->
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>html5, canvas 테스트</title>
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="google" content="notranslate">
<meta name="format-detection" content="telephone=no">
<link href="./asset/css/fonts.css?ver=1" rel="stylesheet">
<link href="./asset/css/default.css?ver=1" rel="stylesheet">
<link href="./asset/css/style.css?ver=1" rel="stylesheet">
<link href="./asset/fontawesome/css/all.css?ver=1" rel="stylesheet">
<script src="./asset/js/jquery-3.3.1.min.js?ver=1" crossorigin="anonymous"></script>
<script src="./asset/js//jquery-2.x-git.min.js" crossorigin="anonymous"></script>
<!--[if lt IE 9]><script src="./asset/js/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="./asset/js/respond.min.js"></script><![endif]-->
<!--[if lt IE 9]><script src="./asset/js/IE9.js"></script><![endif]-->
</head>
<body>

<div id="wrap">
	<header id="header">
		<div class="menubar">
			<ul class="topMenu">
				<li class="dropdown left"><a href="#" class="dropbtn"><i class="fab fa-html5"></i></a>
				 	<ul class="dropdown-content">
					     <li><a href="#" data-menuName="Home"><i class="fas fa-home"></i> Home</a></li>
					     <li><a href="#" data-menuName="About"><i class="fas fa-atlas"></i> About</a></li>
					     <li><a href="#" data-menuName="System"><i class="fas fa-tv"></i> System</a></li>
					     <li><a href="#" data-menuName="Log"><i class="fas fa-clipboard-list"></i> Log</a></li>
				    </ul>
				</li>
				<li class="dropdown left"><a href="#" class="dropbtn">File <i class="fas fa-caret-down"></i></a>
				 	<ul class="dropdown-content">
					     <li><a href="#" data-menuName="New"><i class="fas fa-file-alt"></i> New</a></li>
					     <li><a href="#" data-menuName="Open"><i class="fas fa-folder-open"></i> Open</a></li>
					     <li><a href="#" data-menuName="Save"><i class="fas fa-save"></i> Save</a></li>
					     <li><a href="#" data-menuName="Exit"><i class="fas fa-sign-out-alt"></i> Exit</a></li>
				    </ul>
				</li>
				<li class="dropdown left"><a href="#" class="dropbtn">Edit <i class="fas fa-caret-down"></i></a>
					<ul class="dropdown-content">
					     <li><a href="#" data-menuName="">Sliders</a></li>
					     <li><a href="#" data-menuName="">Galleries</a></li>
					     <li><a href="#" data-menuName="">Apps</a></li>
					     <li><a href="#" data-menuName="">Extensions</a></li>
				    </ul>
				</li>
				<li class="dropdown left"><a href="#" class="dropbtn">Image <i class="fas fa-caret-down"></i></a>
				 	<ul class="dropdown-content">
					     <li><a href="#" data-menuName="">Sliders</a></li>
					     <li><a href="#" data-menuName="">Galleries</a></li>
					     <li><a href="#" data-menuName="">Apps</a></li>
					     <li><a href="#" data-menuName="">Extensions</a></li>
				    </ul>
				</li>
				<li class="dropdown left"><a href="#" class="dropbtn">Help <i class="fas fa-caret-down"></i></a>
				 	<ul class="dropdown-content">
					     <li><a href="#" data-menuName=""><i class="fas fa-book"></i> Manual</a></li>
					     <li><a href="#" data-menuName=""><i class="fas fa-at"></i> CS</a></li>
					     <li><a href="#" data-menuName=""><i class="far fa-angry"></i> Bug</a></li>
				    </ul>
				</li>
				<li class="dropdown right"><a href="#" class="dropbtn"><i class="fas fa-ellipsis-v"></i></a>
				 	<ul class="dropdown-content">
					     <li><a href="#" data-menuName=""><i class="fas fa-id-card"></i> Login</a></li>
					     <li><a href="#" data-menuName=""><i class="fas fa-user-plus"></i> Join</a></li>
					     <li><a href="#" data-menuName=""><i class="fas fa-user"></i> My</a></li>
					     <li><a href="#" data-menuName=""><i class="fas fa-power-off"></i> Logout</a></li>
				    </ul>
				</li>
			</ul>
		</div>
	</header>


	<aside id="side">
		<ul class="cate">
            <li><button class="mBtn">Click Me</button></li>
            <li><button class="mBtn">Click Me</button></li>
            <li><button class="mBtn">Click Me</button></li>
            <li><button class="mBtn">Click Me</button></li>
            <li><button class="mBtn">Click Me</button></li>
        </ul>
	</aside>

	<main id="main">
		<canvas id='drawingCanvas' width='915' height='670'>
		  Canvas not supported
		</canvas>

	</main>


	<footer id="footer">푸터</footer>

</div>

<!-- script 모음 -->
 
<?php 
$ver_time = date("Y-m-dH:i:s");
$ver_time = preg_replace("/[^0-9]*/s", "", $ver_time);
?>
<script src="./asset/dev/singleton.js?t=<?php echo $ver_time?>"></script>

<script>
	

</script>



<!-- 

컨셉 : 유틸리티 프로그램 처럼	

기능 : 캔버스 사이즈 ( 오토, 매뉴얼 )
기능 : unde ,redo
기능 : 이미지 리사이즈, 캔버스 리사이즈, 회전 , 가로세로 정렬?
기능 : 가이드라인
기능 : 선, 도형, 텍스트, 색상(파레트), 지우기, 이미지 파일 업로드, 파일저장

포토샵 심화 : 레이어, 필터 등등


 -->



<!-- <canvas id='drawingCanvas' width='915' height='670'>
  Canvas not supported
</canvas>	 -->


<!-- 부트스트랩 3.3.7 - 드롭다운메뉴 확장용, jquery ui

참고해보자
https://github.com/behigh/bootstrap_dropdowns_enhancement : MIT
https://github.com/phstc/jquery-dateFormat : MIT
https://github.com/jquery/jquery-mousewheel : https://github.com/jquery/jquery-mousewheel/blob/master/LICENSE.txt
https://github.com/ccampbell/mousetrap : Apache 2.0
https://github.com/eligrey/FileSaver.js : https://github.com/eligrey/FileSaver.js/blob/master/LICENSE.md
https://github.com/pieroxy/lz-string/ (http://pieroxy.net/blog/pages/lz-string/index.html) :  WTFPL
https://github.com/kig/canvasfilters : MIT
https://www.npmjs.com/package/rgbquant : MIT
https://github.com/jnordberg/gif.js : MIT -->


<!-- 
하면서 알게된 기타 잡지식
1. Canvas는 비트맵 기반, SVG는 벡터기반 


-->


</body>
</html>