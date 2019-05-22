<!DOCTYPE html>
<!--[if IE 7]> <html lang="ko" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="ko" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="ko" class="ie9"> <![endif]-->
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>폰트, 크로스브라우저 테스트</title>
<link href="./asset/css/fonts.css?ver=1" rel="stylesheet">
<link href="./asset/css/default.css?ver=1" rel="stylesheet">
<link href="./asset/css/style.css?ver=1" rel="stylesheet">
<!-- <script src="./asset/js/jquery-3.3.1.min.js?ver=1" crossorigin="anonymous"></script>
<script src="./asset/js//jquery-2.x-git.min.js" crossorigin="anonymous"></script> -->
<script src="./asset/js/jquery-1.8.3.min.js"></script>

<!--[if lt IE 9]>
<script src="./asset/js/html5shiv.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="./asset/js/respond.min.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="./asset/js/IE9.js"></script>
<![endif]-->
</head>
<body>

<ul class="f_list">
	<li><a href="?f=nanum">나눔고딕</a></li>
	<li><a href="?f=noto">Noto Sans KR</a></li>
	<li><a href="?f=open">Open Sans</a></li>
	<li><a href="?f=mont">Montserrat</a></li>
</ul>

<?php if($_GET['f']=='nanum'):?>
<div class="font_test font_nanum">
	<h1>h1 나눔고딕</h1>
	<h2>h2 나눔고딕</h2>
	<h3>h3 나눔고딕</h3>
	<h4>h4 나눔고딕</h4>
	<h5>h5 나눔고딕</h5>
	<h6>h6 나눔고딕</h6>
	<br/><br/>
	<h1>h1 Nanum Gothic</h1>
	<h2>h2 Nanum Gothic</h2>
	<h3>h3 Nanum Gothic</h3>
	<h4>h4 Nanum Gothic</h4>
	<h5>h5 Nanum Gothic</h5>
	<h6>h6 Nanum Gothic</h6>
	<br/><br/>

	<div class="font_size_12">
		<p class="c_red">사이즈 12</p>
		<p>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</p>
		<strong>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</strong>
		<br/><br/>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</p>
		<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</strong>
		<br/><br/>

		<p>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</p>
		<strong>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</strong>
	</div>
	<div class="font_size_16">
		<p class="c_red">사이즈 16</p>
		<p>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</p>
		<strong>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</strong>
		<br/><br/>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</p>
		<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</strong>
		<br/><br/>

		<p>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</p>
		<strong>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</strong>
	</div>
	<div class="font_size_20">
		<p class="c_red">사이즈 20</p>
		<p>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</p>
		<strong>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</strong>
		<br/><br/>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</p>
		<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</strong>
		<br/><br/>

		<p>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</p>
		<strong>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</strong>
	</div>
</div>
<?php elseif($_GET['f']=='noto'):?>
<div class="font_test font_noto">
	<h1>h1 노토 산스</h1>
	<h2>h2 노토 산스</h2>
	<h3>h3 노토 산스</h3>
	<h4>h4 노토 산스</h4>
	<h5>h5 노토 산스</h5>
	<h6>h6 노토 산스</h6>
	<br/><br/>
	<h1>h1 Noto Sans KR</h1>
	<h2>h2 Noto Sans KR</h2>
	<h3>h3 Noto Sans KR</h3>
	<h4>h4 Noto Sans KR</h4>
	<h5>h5 Noto Sans KR</h5>
	<h6>h6 Noto Sans KR</h6>
	<br/><br/>

	<div class="font_size_12">
		<p class="c_red">사이즈 12</p>
		<p>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</p>
		<strong>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</strong>
		<br/><br/>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</p>
		<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</strong>
		<br/><br/>

		<p>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</p>
		<strong>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</strong>
	</div>
	<div class="font_size_16">
		<p class="c_red">사이즈 16</p>
		<p>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</p>
		<strong>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</strong>
		<br/><br/>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</p>
		<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</strong>
		<br/><br/>

		<p>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</p>
		<strong>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</strong>
	</div>
	<div class="font_size_20">
		<p class="c_red">사이즈 20</p>
		<p>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</p>
		<strong>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</strong>
		<br/><br/>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</p>
		<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</strong>
		<br/><br/>

		<p>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</p>
		<strong>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</strong>
	</div>
</div>
<?php elseif($_GET['f']=='open'):?>
<div class="font_test font_open">
	<h1>h1 오픈 산스</h1>
	<h2>h2 오픈 산스</h2>
	<h3>h3 오픈 산스</h3>
	<h4>h4 오픈 산스</h4>
	<h5>h5 오픈 산스</h5>
	<h6>h6 오픈 산스</h6>
	<br/><br/>
	<h1>h1 Open Sans</h1>
	<h2>h2 Open Sans</h2>
	<h3>h3 Open Sans</h3>
	<h4>h4 Open Sans</h4>
	<h5>h5 Open Sans</h5>
	<h6>h6 Open Sans</h6>
	<br/><br/>

	<div class="font_size_12">
		<p class="c_red">사이즈 12</p>
		<p>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</p>
		<strong>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</strong>
		<br/><br/>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</p>
		<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</strong>
		<br/><br/>

		<p>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</p>
		<strong>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</strong>
	</div>
	<div class="font_size_16">
		<p class="c_red">사이즈 16</p>
		<p>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</p>
		<strong>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</strong>
		<br/><br/>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</p>
		<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</strong>
		<br/><br/>

		<p>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</p>
		<strong>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</strong>
	</div>
	<div class="font_size_20">
		<p class="c_red">사이즈 20</p>
		<p>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</p>
		<strong>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</strong>
		<br/><br/>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</p>
		<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</strong>
		<br/><br/>

		<p>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</p>
		<strong>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</strong>
	</div>
</div>
<?php elseif($_GET['f']=='mont'):?>
<div class="font_test font_montserrat">
	<h1>h1 ??</h1>
	<h2>h2 ??</h2>
	<h3>h3 ??</h3>
	<h4>h4 ??</h4>
	<h5>h5 ??</h5>
	<h6>h6 ??</h6>
	<br/><br/>
	<h1>h1 Montserrat</h1>
	<h2>h2 Montserrat</h2>
	<h3>h3 Montserrat</h3>
	<h4>h4 Montserrat</h4>
	<h5>h5 Montserrat</h5>
	<h6>h6 Montserrat</h6>
	<br/><br/>

	<div class="font_size_12">
		<p class="c_red">사이즈 12</p>
		<p>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</p>
		<strong>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</strong>
		<br/><br/>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</p>
		<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</strong>
		<br/><br/>

		<p>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</p>
		<strong>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</strong>
	</div>
	<div class="font_size_16">
		<p class="c_red">사이즈 16</p>
		<p>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</p>
		<strong>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</strong>
		<br/><br/>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</p>
		<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</strong>
		<br/><br/>

		<p>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</p>
		<strong>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</strong>
	</div>
	<div class="font_size_20">
		<p class="c_red">사이즈 20</p>
		<p>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</p>
		<strong>대한민국은 민주공화국이다. 재판의 심리와 판결은 공개한다. 다만, 심리는 국가의 안전보장 또는 안녕질서를 방해하거나 선량한 풍속을 해할 염려가 있을 때에는 법원의 결정으로 공개하지 아니할 수 있다.</strong>
		<br/><br/>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</p>
		<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla.</strong>
		<br/><br/>

		<p>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</p>
		<strong>1234567890 !@#$%^&*()_+-=;:'",<.>/?`~</strong>
	</div>
</div>
<?php else:?>

<?php endif;?>




</body>
</html>