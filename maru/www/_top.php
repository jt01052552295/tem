 <!DOCTYPE html>
<!--[if IE 7]> <html lang="ko" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="ko" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="ko" class="ie9"> <![endif]-->
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="subject" content="마루종합건설(주)" />
<title>마루종합건설(주)</title>
<link href="/css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="/js/scrollbar/jquery.mCustomScrollbar.css" />
<link rel="stylesheet" type="text/css" href="/Fancybox/css/jquery.fancybox.css?v=2.1.5">
<script type="text/javascript" src="/js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="/js/jQueryRotate.js"></script>
<script type="text/javascript" src="/js/front.js"></script>
<script type="text/javascript" src="/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="/js/jquery.form.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/jquery.validate.pack.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
<script type="text/javascript" src="/js/default.js"></script>
<script type="text/javascript" src="/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="/js/placeholders.min.js"></script>

<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script type="text/javascript" src="/js/PIE_IE678.js"></script>
<![endif]-->
<!--[if IE 9]>
<script type="text/javascript" src="/js/PIE_IE9.js"></script>
<![endif]-->
<script>
$(function() {
	$gnb = $(".nav_list");

	$(".lv1").click(function(e){
		e.preventDefault();
		var $this = $(this);	

		if($(this).hasClass('as')){
			location.href = $(this).attr('href');
		}

		if($(this).next("ul.nav_2nd").length == 0){
			return false;
		}
		if($(this).parent().hasClass('on')){ 
			$('#bodyContent').stop().animate({'left':'0px'},function(){
				$(this).removeClass("active");
				$(this).next("ul.nav_2nd").hide();
				$('.nav_back').removeClass('on');
			});
			
		}else{ 
			$('#bodyContent').stop().animate({'left':'207px'});
			$("ul.nav_2nd").hide();
			$("a.lv1").removeClass("active");
			$(this).addClass("active");
			$(this).next("ul.nav_2nd").show();
			$('.nav_back').addClass('on');
		}	
	});

	$gnb2 = $(".nav_2nd");
	$gnb2.find($("a.lv2:not(active)")).parent("li").mouseenter(function(){
		$(this).find("a.lv2").children('.over').show();
		$(this).find("a.lv2").children('.out').hide();
	})
	
	$gnb2.find($("a.lv2:not(active)")).parent("li").mouseleave(function(){
		$(this).find("a.lv2").children('.over').hide();
		$(this).find("a.lv2").children('.out').show();
	})

	$('.btn').mouseenter(function(){
		$(this).children('span.txt').addClass('on');
		$(this).children('span.animateBG').stop().animate({"width":"100%"}, 300)
	})
	$('.btn').mouseleave(function(){
			$(this).children('span.txt').removeClass('on');
		$(this).children('span.animateBG').stop().animate({"width":"0"}, 300)
	})
	
	$("#greenRoateSquare").hide()
	$("#greenRoateSquare").rotate({angle:-26});
	$("#greenRoateSquare").click(function(){
		$(this).stop().animate({"width":"640px"},1).animate({"height":"400px"},1)
	});
	//$("#greenRoateSquare").rotate({bind:{
	  //click: function(){
		//$(this).rotate({
		  //angle: 0,
		  //animateTo:180
		  //})
		//}
	  //}
	//});

});
</script>

</head>
<body>

<div id="wrap">
	<div id="wrapper">
		<header>
			<div class="nav_t_area">
				<h1 class="logo"><a href="./">로고</a></h1>
				<div class="memberBtn">
					<!--scTop-->
					<ul class="nav_list2 ">
						<li class="scTopLogin mem_list" style=""><a href="{3}" title="로그인" class="btn greenBasic full"><span class="txt">로그인</span><span class="animateBG">&nbsp;</span></a></li>
						<li class="scTopLogin mem_list last" style=""><a href="./?path=joinAgreement" title="회원가입" class="btn greenSecond full"><span class="txt">회원가입</span><span class="animateBG">&nbsp;</span></a></li>

						<li class="scTopLogout mem_list" ><a href="{4}" title="로그아웃" class="btn greenBasic full"><span class="txt">로그아웃</span><span class="animateBG">&nbsp;</span></a></li>
						<li class="scTopLogout mem_list last" ><a href="{5}" title="마이페이지" class="btn greenSecond full"><span class="txt">마이페이지</span><span class="animateBG">&nbsp;</span></a></li>
					</ul>
					<!--scTop-->

				</div>
				<ul class="nav_list">
					<li class="menu_list"><a class="lv1" href="#">건축주</a>
						<ul class="nav_2nd nav2_1">
							<li class="menu2_list"><a class="lv2" href="./?path=intro"><span class="over">· 사업소개</span><span class="out">사업소개</span></a></li>
							<li class="menu2_list"><a class="lv2" href="./?path=buildStudyAZ"><span class="over">· 건축AtoZ</span><span class="out">건축AtoZ</span></a></li>
							<li class="menu2_list"><a class="lv2" href="./?path=buildStudy"><span class="over">· 건축공부방</span><span class="out">건축공부방</span></a></li>
							<li class="menu2_list"><a class="lv2" href="./?path=story"><span class="over">· 건축이야기</span><span class="out">건축이야기</span></a></li>
							<li class="menu2_list"><a class="lv2" href="./?path=gallery"><span class="over">· 건축갤러리</span><span class="out">건축갤러리</span></a></li>
						</ul>
					</li>
					<li class="menu_list"><a class="lv1" href="#">회사소개</a>
						<ul class="nav_2nd nav2_1">
							<li class="menu2_list"><a class="lv2" href="./?path=history"><span class="over">· 연혁</span><span class="out">연혁</span></a></li>
							<li class="menu2_list"><a class="lv2" href="./?path=ceo"><span class="over">· 인사말</span><span class="out">인사말</span></a></li>
							<li class="menu2_list"><a class="lv2" href="./?path=organization"><span class="over">· 조직도</span><span class="out">조직도</span></a></li>
							<li class="menu2_list"><a class="lv2" href="./?path=location"><span class="over">· 오시는길</span><span class="out">오시는길</span></a></li>
						</ul>
					</li>

					<li class="menu_list"><a class="lv1" href="#">공사관리</a>
						<ul class="nav_2nd nav2_4">
							<li class="menu2_list"><a class="lv2" href="./?path=ing"><span class="over">· 시공현장</span><span class="out">시공현장</span></a></li>
							<li class="menu2_list"><a class="lv2" href="./?path=complete"><span class="over">· 완료공사</span><span class="out">완료공사</span></a></li>
							<li class="menu2_list"><a class="lv2" href="./?path=system"><span class="over">· 현장관리시스템</span><span class="out">현장관리시스템</span></a></li>
							<li class="menu2_list"><a class="lv2" href="./?path=propose"><span class="over">· 협력제안</span><span class="out">협력제안</span></a></li>
						</ul>
					</li>
					<li class="menu_list last"><a class="lv1" href="#">고객지원</a>
						<ul class="nav_2nd nav2_5">
							<li class="menu2_list"><a class="lv2" href="./?path=notice"><span class="over">· 공지사항</span><span class="out">공지사항</span></a></li>
							<li class="menu2_list"><a class="lv2" href="./?path=news"><span class="over">· 건축뉴스</span><span class="out">건축뉴스</span></a></li>
							<li class="menu2_list"><a class="lv2" href="./?path=qna"><span class="over">· Q&A</span><span class="out">Q&A</span></a></li>
						</ul>
					</li> 
					<li class="menu_list last"><a class="lv1 as" href="./?path=as&bType=write">A/S센터</a></li> 
				</ul>
			</div>
			<div class="nav_back">&nbsp;</div>

			<div class="nav_b_area">
				
				
				<div class="nav_company">
					<div class="company_tit">
						<h3>마루종합건설(주) </h3>
						<p>주택건설 · 건축공사 · 개발시행 및 컨설팅</p>
					</div>

					<dl class="company_info">
						<dt>대&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;표</dt>
						<dd>: 이주우</dd>
						<dt>전&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;화</dt>
						<dd>: 051-710-3380</dd>
						<dt>팩&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;스</dt>
						<dd>: 051-710-3381</dd>
						<dt>사업자번호</dt>
						<dd>: 617-81-52737</dd>
					</dl>

					<div class="copyright"><p>COPYRIGHT (C) 2017 MARU ALL RIGHTS RESERVED.</p></div>
				</div>
				<div class="nav_policy">
					<a href="./?path=agreement">
						<span class="left">홈페이지 관련 정책</span>
						<span class="right">+</span>
					</a>
				</div>
			</div>
		</header>