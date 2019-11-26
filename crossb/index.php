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


<div class="page">
    <div class="demo" style="font-family: 'NanumGothic'; font-weight: 900; font-style: normal;">
        <h1>NanumGothic ExtraBold</h1>
        <pre>.your-style {
			    font-family: 'NanumGothic';
			    font-weight: 900;
			    font-style: normal;
			}
		</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
    <div class="demo" style="font-family: 'NanumGothic'; font-weight: 700; font-style: normal;">
        <h1>NanumGothic Bold</h1>
        <pre>.your-style {
			    font-family: 'NanumGothic';
			    font-weight: 700;
			    font-style: normal;
			}
		</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
    <div class="demo" style="font-family: 'NanumGothic'; font-weight: 400; font-style: normal;">
        <h1>NanumGothic Regular</h1>
        <pre>.your-style {
	            font-family: 'NanumGothic';
	            font-weight: 400;
	            font-style: normal;
	        }
	    </pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
    <div class="demo" style="font-family: 'NanumGothic'; font-weight: 100; font-style: normal;">
        <h1>NanumGothic Light</h1>
        <pre>.your-style {
			    font-family: 'NanumGothic';
			    font-weight: 100;
			    font-style: normal;
			}
		</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
</div>  


<?php elseif($_GET['f']=='noto'):?>
<div class="page">
    <div class="demo" style="font-family: 'NotoSans'; font-weight: 900; font-style: normal;">
        <h1>NotoSans Black</h1>
        <pre>.your-style {
		    font-family: 'NotoSans';
		    font-weight: 900;
		    font-style: normal;
		}</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
    <div class="demo" style="font-family: 'NotoSans'; font-weight: 700; font-style: normal;">
        <h1>NotoSans Bold</h1>
        <pre>.your-style {
		    font-family: 'NotoSans';
		    font-weight: 700;
		    font-style: normal;
		}</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
    <div class="demo" style="font-family: 'NotoSans'; font-weight: 400; font-style: normal;">
        <h1>NotoSans Regular</h1>
        <pre>.your-style {
            font-family: 'NotoSans';
            font-weight: 400;
            font-style: normal;
        }</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
    <div class="demo" style="font-family: 'NotoSans'; font-weight: 100; font-style: normal;">
        <h1>NotoSans Thin</h1>
        <pre>.your-style {
		    font-family: 'NotoSans';
		    font-weight: 100;
		    font-style: normal;
		}</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
</div>   
<?php elseif($_GET['f']=='open'):?>
<div class="page">
    <div class="demo" style="font-family: 'Open Sans'; font-weight: 800; font-style: normal;">
        <h1>Open Sans Extra-Bold</h1>
        <pre>.your-style {
		    font-family: 'Open Sans';
		    font-weight: 800;
		    font-style: normal;
		}</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
    <div class="demo" style="font-family: 'Open Sans'; font-weight: 700; font-style: normal;">
        <h1>Open Sans Bold</h1>
        <pre>.your-style {
		    font-family: 'Open Sans';
		    font-weight: 700;
		    font-style: normal;
		}</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
    <div class="demo" style="font-family: 'Open Sans'; font-weight: 600; font-style: normal;">
        <h1>Open Sans Semi-Bold</h1>
        <pre>.your-style {
		    font-family: 'Open Sans';
		    font-weight: 600;
		    font-style: normal;
		}</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
    <div class="demo" style="font-family: 'Open Sans'; font-weight: 400; font-style: normal;">
        <h1>Open Sans Regular</h1>
        <pre>.your-style {
            font-family: 'Open Sans';
            font-weight: 400;
            font-style: normal;
        }</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
    <div class="demo" style="font-family: 'Open Sans'; font-weight: 300; font-style: normal;">
        <h1>Open Sans Light</h1>
        <pre>.your-style {
		    font-family: 'Open Sans';
		    font-weight: 300;
		    font-style: normal;
		}</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
</div>   
<?php elseif($_GET['f']=='mont'):?>
<div class="page">
	<div class="demo" style="font-family: 'Montserrat'; font-weight: 900; font-style: normal;">
        <h1>Montserrat Black</h1>
        <pre>.your-style {
		    font-family: 'Montserrat';
		    font-weight: 900;
		    font-style: normal;
		}</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
    <div class="demo" style="font-family: 'Montserrat'; font-weight: 800; font-style: normal;">
        <h1>Montserrat Extra-Bold</h1>
        <pre>.your-style {
		    font-family: 'Montserrat';
		    font-weight: 800;
		    font-style: normal;
		}</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
    <div class="demo" style="font-family: 'Montserrat'; font-weight: 700; font-style: normal;">
        <h1>Montserrat Bold</h1>
        <pre>.your-style {
		    font-family: 'Montserrat';
		    font-weight: 700;
		    font-style: normal;
		}</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
    <div class="demo" style="font-family: 'Montserrat'; font-weight: 600; font-style: normal;">
        <h1>Montserrat Semi-Bold</h1>
        <pre>.your-style {
		    font-family: 'Montserrat';
		    font-weight: 600;
		    font-style: normal;
		}</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
    <div class="demo" style="font-family: 'Montserrat'; font-weight: 500; font-style: normal;">
        <h1>Montserrat Medium</h1>
        <pre>.your-style {
		    font-family: 'Montserrat';
		    font-weight: 500;
		    font-style: normal;
		}</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
    <div class="demo" style="font-family: 'Montserrat'; font-weight: 400; font-style: normal;">
        <h1>Montserrat Regular</h1>
        <pre>.your-style {
            font-family: 'Montserrat';
            font-weight: 400;
            font-style: normal;
        }</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
    <div class="demo" style="font-family: 'Montserrat'; font-weight: 300; font-style: normal;">
        <h1>Montserrat Light</h1>
        <pre>.your-style {
		    font-family: 'Montserrat';
		    font-weight: 300;
		    font-style: normal;
		}</pre>
        <div class="font-container">
            <p class="letters">
                abcdefghijklmnopqrstuvwxyz
                <br /> ABCDEFGHIJKLMNOPQRSTUVWXYZ
                <br /> 0123456789.:,;()*!?'@#
                <>$%&^+-=~
                    <br> 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
                    <br> 무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세.
            </p>
            <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
            <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</p>
        </div>
    </div>
</div>  
<?php else:?>

<?php endif;?>




</body>
</html>