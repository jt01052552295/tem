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
<title>html5, canvas 테스트</title>
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="google" content="notranslate">
<meta name="format-detection" content="telephone=no">
<link href="./asset/css/fonts.css?t=<?php echo $ver_time?>" rel="stylesheet">
<link href="./asset/css/default.css?t=<?php echo $ver_time?>" rel="stylesheet">
<link href="./asset/css/style.css?t=<?php echo $ver_time?>" rel="stylesheet">
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
            <li><button class="mBtn" data-menuName="func11"><i class="fas fa-arrows-alt"></i><span>Move</span></button></li>
            <li><button class="mBtn" data-menuName="func12"><i class="fas fa-expand"></i><span>Marquee</span></button></li>
            <li><button class="mBtn" data-menuName="func13"><i class="fas fa-crop"></i><span>Crop</span></button></li>
            <li><button class="mBtn" data-menuName="func14"><i class="fas fa-eye-dropper"></i><span>Eye</span></button></li>
            <li><button class="mBtn" data-menuName="func15"><i class="fas fa-eraser"></i><span>Erase</span></button></li>
            <li><button class="mBtn" data-menuName="func16"><i class="fas fa-pen-nib"></i><span>Pen</span></button></li>
            <li><button class="mBtn" data-menuName="func17"><i class="fas fa-font"></i><span>Text</span></button></li>
            <li><button class="mBtn" data-menuName="func18"><i class="fas fa-mouse-pointer"></i><span>Path</span></button></li>
            <li><button class="mBtn" data-menuName="func19"><i class="far fa-square"></i><span>Square</span></button></li>
            <li><button class="mBtn" data-menuName="func20"><i class="far fa-circle"></i><span>Circle</span></button></li>
            <li><button class="mBtn" data-menuName="func21"><i class="fas fa-minus"></i><span>Line</span></button></li>
            <li><button class="mBtn" data-menuName="func22"><i class="far fa-star-half"></i><span>Line2</span></button></li>
            <li><button class="mBtn" data-menuName="func23"><i class="fas fa-star-half"></i><span>Line3</span></button></li>
            <li><button class="mBtn" data-menuName="func24"><i class="far fa-hand-paper"></i><span>Hand</span></button></li>
            <li><button class="mBtn" data-menuName="func25"><i class="fas fa-search"></i><span>Zoom</span></button></li>
            <li><button class="mBtn" data-menuName="func26"><i class="fas fa-ellipsis-h"></i><span>More</span></button></li>
        </ul>

        <div class="foreBg">
        	<div class="groundToggle"><a href="#"><i class="fas fa-retweet"></i></a></div>
        	<button class="groundColor" id="foreG" data-colorMode = "foreColorMode" data-menuName="colorPicker" data-currentColor=""></button>
        	<button class="groundColor" id="backG" data-colorMode = "backColorMode" data-menuName="colorPicker" data-currentColor=""></button>
        </div>

	</aside>

	<main id="main">
		<canvas id='drawingCanvas' width='915' height='670'>
		  Canvas not supported
		</canvas>

	</main>


	<footer id="footer">푸터</footer>

	<div id="modal" class="modalWrap">
		<div class="modalInner">
			<div class="modalTit">
				<h5>모달창</h5>
				<div class="modalBtn">
					<button class="dbtn line closeModal">취소</button> 
				</div>
			</div>
			<div class="modalCon" id="getModalData-menu-New">
				
				New1111
			</div>
			<div class="modalCon" id="getModalData-menu-colorPicker">
				<div class="modalBtn2">
					<button class="dbtn line setColorClose">확인</button> 
				</div>
				<!-- preview element -->
				<div class="preview"></div>
				<!-- colorpicker element -->
				<div class="colorpicker">
				    <canvas id="picker" width="300" height="300"></canvas>
				    <div class="colorPaletteWrap">
				    	<div class="colorPaletteControl"><i class="far fa-hand-point-left" id="colorPaletteControlHandler"></i></div>
					    <canvas id="colorPalette" width="30" height="300"></canvas>
					</div>

				    <div class="controls">
				        <div><label>R</label> <input type="text" id="rVal" /></div>
				        <div><label>G</label> <input type="text" id="gVal" /></div>
				        <div><label>B</label> <input type="text" id="bVal" /></div>
				        <div><label>A</label> <input type="text" id="aVal" /></div>
				        <div><label>RGB</label> <input type="text" id="rgbVal" /></div>
				        <div><label>HEX</label> <input type="text" id="hexVal" /></div>
				        <div><label>HSL</label> <input type="text" id="hslVal" /></div>
				        <div><label>CMYK</label> <input type="text" id="cmykVal" /></div>
				    </div>

				    <div class="controls_panel">
				        <div class="cPanel">
				        	<label><span>R :</span><input type="number" id="r01" class="red01" value="255" /></label> 
				        	<div class="slide_panel"><input type="range" id="r01v" class="red01" min="0" max="255" step="1" value="255"></div> 
				        </div>
				        <div class="cPanel">
				        	<label><span>G :</span><input type="number" id="g01" class="green01" value="255" /></label> 
				        	<div class="slide_panel"><input type="range" id="g01v" class="green01" min="0" max="255" step="1" value="255"></div> 
				        </div>
				        <div class="cPanel">
				        	<label><span>B :</span><input type="number" id="b01" class="blue01" value="255" /></label> 
				        	<div class="slide_panel"><input type="range" id="b01v" class="blue01" min="0" max="255" step="1" value="255"></div> 
				        </div>
				        <div class="cPanel">
				        	<label><span>H :</span><input type="number" id="h01" class="hue01" value="360" /></label> 
				        	<div class="slide_panel"><input type="range" id="h01v" class="hue01" min="0" max="360" step="1" value="360"></div> 
				        </div>
				        <div class="cPanel">
				        	<label><span>S :</span><input type="number" id="s01" class="sat01" value="100" /></label> 
				        	<div class="slide_panel"><input type="range" id="s01v" class="sat01" min="0" max="100" step="1" value="100"></div> 
				        </div>
				        <div class="cPanel">
				        	<label><span>L :</span><input type="number" id="l01" class="light01" value="50" /></label> 
				        	<div class="slide_panel"><input type="range" id="l01v" class="light01" min="0" max="100" step="1" value="100"></div> 
				        </div>			  

				        <div class="cPanel">
				        	<label><span>C :</span><input type="number" id="c01" class="cyan01" value="100" /></label> 
				        	<div class="slide_panel"><input type="range" id="c01v" class="cyan01" min="0" max="100" step="1" value="100"></div> 
				        </div>
				        <div class="cPanel">
				        	<label><span>M :</span><input type="number" id="m01" class="magenta01" value="100" /></label> 
				        	<div class="slide_panel"><input type="range" id="m01v" class="magenta01" min="0" max="100" step="1" value="100"></div> 
				        </div>
				        <div class="cPanel">
				        	<label><span>Y :</span><input type="number" id="y01" class="yellow01" value="100" /></label> 
				        	<div class="slide_panel"><input type="range" id="y01v" class="yellow01" min="0" max="100" step="1" value="100"></div> 
				        </div>
				        <div class="cPanel">
				        	<label><span>K :</span><input type="number" id="k01" class="kkk01" value="100" /></label> 
				        	<div class="slide_panel"><input type="range" id="k01v" class="kkk01" min="0" max="100" step="1" value="100"></div> 
				        </div>
				    </div>
				</div>



			</div>         
		</div>
	</div>

</div>


<!-- script 모음 -->
<script src="./asset/dev/w3color.js?t=<?php echo $ver_time?>"></script>
<script src="./asset/dev/colorPicker.js?t=<?php echo $ver_time?>"></script>
<script src="./asset/dev/main.js?t=<?php echo $ver_time?>"></script>
<script>
	var mode = 'dev';
	var main = Main.getInstance(mode);
	main.init();
</script>



<!-- 

컨셉 : 유틸리티 프로그램 처럼	

기능 : 캔버스 사이즈 ( 오토, 매뉴얼 )
기능 : unde ,redo
기능 : 이미지 리사이즈, 캔버스 리사이즈, 회전 , 가로세로 정렬?
기능 : 가이드라인
기능 : 선, 도형, 텍스트, 색상(파레트), 지우기, 이미지 파일 업로드, 파일저장

포토샵 심화 : 레이어, 필터 등등


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