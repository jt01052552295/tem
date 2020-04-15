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
	2. 입력창 용 https://javascript.info/article/mouse-drag-and-drop/ball4/
	https://medium.com/the-z/making-a-resizable-div-in-js-is-not-easy-as-you-think-bda19a1bc53d
	3. 플러그인 기능 ( insertHtml 활용 )
-->
<div id="wrap">

	<div class="editor">
		<div class="tool-area">
			<div class="row">
				<div class="box font_size_box">
					<div class="btn-wrap">
						<div class="dropdown">
							<a href="#" class="dropbtn"><span id="fn">Font</span> <i class="fas fa-caret-down"></i></a>
						 	<ul class="dropdown-content">
							    <li><a href="#" data-fn="Arial">Arial</a></li>
							    <li><a href="#" data-fn="Courier">Courier</a></li>
							    <li><a href="#" data-fn="Courier New">Courier New</a></li>
							    <li><a href="#" data-fn="Georgia">Georgia</a></li>
							    <li><a href="#" data-fn="Helvetica">Helvetica</a></li>
							    <li><a href="#" data-fn="Palatino">Palatino</a></li>
							    <li><a href="#" data-fn="Times New Roman">Times New Roman</a></li>
							    <li><a href="#" data-fn="Trebuchet MS">Trebuchet MS</a></li>
							    <li><a href="#" data-fn="Verdana">Verdana</a></li>
						    </ul>
						</div>
		            </div>
		            <div class="btn-wrap">
		            	<div class="dropdown">
							<a href="#" class="dropbtn"><span id="fsn">Size</span> <i class="fas fa-caret-down"></i></a>
						 	<ul class="dropdown-content">
							    <li><a href="#" data-fs="1" data-fsn="8pt">8pt</a></li>
							    <li><a href="#" data-fs="2" data-fsn="10pt">10pt</a></li>
							    <li><a href="#" data-fs="3" data-fsn="12pt">12pt</a></li>
							    <li><a href="#" data-fs="4" data-fsn="14pt">14pt</a></li>
							    <li><a href="#" data-fs="5" data-fsn="18pt">18pt</a></li>
							    <li><a href="#" data-fs="6" data-fsn="24pt">24pt</a></li>
							    <li><a href="#" data-fs="7" data-fsn="36pt">36pt</a></li>
						    </ul>
						</div>   
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
						<button class="eBtn" data-action="fcolor" title="font color">
		                  <i class="fab fa-fonticons-fi"></i>
		                </button>
		            </div>
		            <div class="btn-wrap">
						<button class="eBtn" data-action="fcolorBg" title="font & background color">
		                 <i class="fab fa-fonticons"></i>
		                </button>
		            </div>
		            <div class="btn-wrap">
						<button class="eBtn" data-action="sup" title="superscript">
		                  <i class="fas fa-superscript"></i>
		                </button>
		            </div>
		            <div class="btn-wrap">
						<button class="eBtn" data-action="sub" title="subscript">
		                  <i class="fas fa-subscript"></i>
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
						<button class="eBtn" data-action="" title="Text height">
		                  <i class="fas fa-text-height"></i>
		                </button>
		                <button class="eBtn" data-action="" title="Text width">
		                  <i class="fas fa-text-width"></i>
		                </button>
		   
		            </div>
		        </div>
				<div class="box">
					<div class="btn-wrap">
						<button class="eBtn" data-action="createLink" title="createLink">
		                  <i class="fa fa-link"></i>
		                </button>
		                <button class="eBtn" data-action="foreColor" title="foreColor">
		                  <i class="fa fa-tint"></i>
		                </button>
		   
		            </div>
		        </div>
		        <div class="box">
					<div class="btn-wrap">
						<button class="eBtn" data-action="undo" title="Undo">
		                  <i class="fa fa-undo"></i>
		                </button>
		                <button class="eBtn" data-action="redo" title="Redo">
		                  <i class="fas fa-redo"></i>
		                </button>
		                <button class="eBtn" data-action="removeFormat" title="Remove format">
		                  <i class="fas fa-remove-format"></i>
		                </button>
		            </div>
				</div>
				<div class="box">
					<div class="btn-wrap">
						<button class="eBtn" data-action="code" title="Show HTML-Code">
		                  <i class="fas fa-code"></i>
		                </button>
		            </div>
		            <div class="btn-wrap">
						<button class="eBtn" data-action="text" title="Show Text Only">
		                  <i class="fas fa-font"></i>
		                </button>
		            </div>
				</div>
			</div>
		</div>

		<div class="content-area">
			<div class="visuell-view" id="input_content" contenteditable>
				hello world
	        </div>
	        <textarea class="html-view"></textarea>
		</div>
		<div class="bottom-area" id="bottom_div">
			<div class="box">
				<button type="button" class="eBtn" id="input_content_size_btn" title="입력창 세로 사이즈 조절"><i class="fas fa-arrows-alt-v"></i><span>입력창</span></button>

			</div>
		</div>

	</div>
	


</div>


<!-- script 모음 -->

<script>
const editor = document.getElementsByClassName('editor')[0];
const toolbar = editor.getElementsByClassName('tool-area')[0];	
const buttons = toolbar.querySelectorAll('.eBtn:not(.has-submenu)');

// for(let i = 0; i < buttons.length; i++) {
//   let button = buttons[i];
  
//   button.addEventListener('click', function(e) {
//     let action = this.dataset.action;
//     console.log(action)

    
//     document.execCommand(action, false);
//   });
// }

var elmnt_div = document.getElementById("input_content");
var elmnt_btn = document.getElementById("input_content_size_btn");
var elmnt_bot = document.getElementById("bottom_div");


let currentDroppable = null;

$(document).ready(function(){
    $('#input_content_size_btn').on('mousedown', function(e){
        var $dragable = $('#input_content'),
            startHeight = $dragable.height(),
            pY = e.pageY;
        
        $(document).on('mouseup', function(e){
            $(document).off('mouseup').off('mousemove');
        });
        $(document).on('mousemove', function(me){
            // var mx = (me.pageX - pX);
            var my = (me.pageY - pY);
            
            $dragable.css({
                height: startHeight + my,
            });
        });
                
    });
});

// elmnt_btn.onmousedown = function(event) {
//   let direction = "";
//   let oldX = 0;
//   let oldY = 0;
//   let shiftX = event.clientX - elmnt_btn.getBoundingClientRect().left;
//   let shiftY = event.clientY - elmnt_btn.getBoundingClientRect().top; 


//   //moveAt(event.pageX, event.pageY);

//   function moveAt(pageX, pageY) {
//     var num = 0;
//   	if (pageX > oldX && pageY == oldY) {
//   		direction="East";
//   	} else if (pageX == oldX && pageY > oldY) {
//   		direction="South";
//   		num = num + 5;
//   		elmnt_div.style.height = elmnt_div.offsetHeight + num + 'px';
//   	} else if (pageX == oldX && pageY < oldY) {
//   		direction="North";
//   		num = num - 5;
//   		num = num * -1;
//   		elmnt_div.style.height = elmnt_div.offsetHeight - num + 'px';
//   	} else if (pageX < oldX && pageY == oldY) {
//   		direction="West";
//   	} else {
//   		direction="";
//   	}

//   	console.log(direction)
//   	oldX = pageX;
//     oldY = pageY;
//   }

// 	function onMouseMove(event){
		
//         let elemBelow = document.elementFromPoint(event.clientX, event.clientY);
//         if (!elemBelow) return;

//    		let droppableBelow = elemBelow;

//    		//console.log(elmnt_btn, droppableBelow)

//         if(elmnt_btn == droppableBelow){
//         	moveAt(event.pageX, event.pageY);
//         } else {
//         	document.removeEventListener('mousemove', onMouseMove);
//         	return;
//         }

// 	}


// 	document.addEventListener('mousemove', onMouseMove);

// 	elmnt_btn.onmouseup = function() {
// 		console.log('onmouseup')
// 	    document.removeEventListener('mousemove', onMouseMove);
// 	    elmnt_btn.onmouseup = null;
// 	};
// };

// elmnt_btn.onmouseover = function(event) {
// 	console.log('onmouseover')
// };

// elmnt_btn.onmouseout = function(event) {
// 	console.log('onmouseout')
// };

elmnt_btn.ondragstart = function() {
  return false;
};

</script>

<script src="./asset/dev/editor.js?t=<?php echo $ver_time?>"></script>
<script>
	var mode = 'dev';
	var jk = jKeditor.getInstance(mode);
	jk.init();
	//$("#tempTrigger").trigger('click');


</script>


</body>
</html>