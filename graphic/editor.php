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
	1. 버튼 레이아웃
	2. 입력창 세로조절
	3. 플러그인 기능
-->
<div id="wrap">

	<div class="editor">
		<div class="tool-area">
			<div class="row">
				<div class="box">
					<div class="btn-wrap">
						<select onchange="fontEditor(this[this.selectedIndex].value)" class="eSelect">
			                <option value="Arial">Arial</option>
			                <option value="Courier">Courier</option>
			                <option value="Courier New">Courier New</option>
			                <option value="Georgia">Georgia</option>
			                <option value="Helvetica">Helvetica</option>
			                <option value="Palatino">Palatino</option>
			                <option value="Times New Roman">Times New Roman</option>
			                <option value="Trebuchet MS">Trebuchet MS</option>
			                <option value="Verdana">Verdana</option>
			              </select>   
		            </div>
		            <div class="btn-wrap">
		           		<select onchange="fontSize(this[this.selectedIndex].value)" class="eSelect">
			                <option value="1">8pt</option>
			                <option value="2">10pt</option>
			                <option value="3">12pt</option>
			                <option value="4">14pt</option>
			                <option value="5">18pt</option>
			                <option value="6">24pt</option>
			                <option value="7">36pt</option>
			              </select>     
		            </div>

				</div>
				<div class="box">
					<div class="btn-wrap">
						<button class="eBtn" data-action="bold" title="Bold">
		                  <i class="fa fa-bold"></i>
		                </button>
		            </div>
		            <div class="btn-wrap">
						<button class="eBtn" data-action="italic" title="italic">
		                  <i class="fa fa-italic"></i>
		                </button>
		            </div>
		            <div class="btn-wrap">
						<button class="eBtn" data-action="underline" title="underline">
		                  <i class="fa fa-underline"></i>
		                </button>
		            </div>
		            <div class="btn-wrap">
						<button class="eBtn" data-action="strikethrough" title="strikethrough">
		                  <i class="fa fa-strikethrough"></i>
		                </button>
		            </div>

				</div>
				<div class="box">
					<div class="btn-wrap">
						<button class="eBtn" data-action="justifyLeft" title="justifyLeft">
		                  <i class="fa fa-align-left"></i>
		                </button>
		            </div>
		            <div class="btn-wrap">
						<button class="eBtn" data-action="justifyCenter" title="justifyCenter">
		                  <i class="fa fa-align-center"></i>
		                </button>
		            </div>
		            <div class="btn-wrap">
						<button class="eBtn" data-action="justifyRight" title="justifyRight">
		                  <i class="fa fa-align-right"></i>
		                </button>
		            </div>
		            <div class="btn-wrap">
						<button class="eBtn" data-action="insertOrderedList" title="Insert ordered list">
		                  <i class="fas fa-list-ol"></i>
		                </button>
		                <button class="eBtn" data-action="insertUnorderedList" title="Insert unordered list">
		                  <i class="fas fa-list-ul"></i>
		                </button>
		                <button class="eBtn" data-action="outdent" title="outdent">
		                  <i class="fas fa-outdent"></i>
		                </button>
		                <button class="eBtn" data-action="indent" title="indent">
		                  <i class="fas fa-indent"></i>
		                </button>
		            </div>
				</div>
			</div>
			<div class="row">
				<div class="box">
					<div class="btn-wrap">
						<button class="eBtn" data-action="undo" title="Undo">
		                  <i class="fa fa-undo"></i>
		                </button>
		                <button class="eBtn" data-action="redo" title="Redo">
		                  <i class="fas fa-redo"></i>
		                </button>
		                <button class="eBtn" data-action="removeFormat" title="Remove format">
		                  <i class="fas fa-eraser"></i>
		                </button>
		            </div>
				</div>
				<div class="box">
					<div class="btn-wrap">
						<button class="eBtn" data-action="code" title="Show HTML-Code">
		                  <i class="fas fa-code"></i>
		                </button>
		               
		            </div>
				</div>
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
const editor = document.getElementsByClassName('editor')[0];
const toolbar = editor.getElementsByClassName('tool-area')[0];	
const buttons = toolbar.querySelectorAll('.eBtn:not(.has-submenu)');

for(let i = 0; i < buttons.length; i++) {
  let button = buttons[i];
  
  button.addEventListener('click', function(e) {
    let action = this.dataset.action;
    console.log(action)

    
    document.execCommand(action, false);
  });
}
function fontEditor(fontName) {
  document.execCommand("fontName", false, fontName);
}

function fontSize(fontSize){
    document.execCommand("FontSize", false, fontSize);
}


</script>


</body>
</html>