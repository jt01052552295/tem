 <!DOCTYPE html>
<!--[if IE 7]> <html lang="ko" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="ko" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="ko" class="ie9"> <![endif]-->
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="naver-site-verification" content="218cba3d748fe142d80a2e5843f1df55c33208e1"/>
<meta name="subject" content="다건종합건설" />
<meta name="keywords" content="제주종합건설, 호텔, 리조트 개발사업, 타운하우스, 주택 개발사업, 시공 개발 상담" />
<meta name="description" content="제주종합건설, 호텔, 리조트 개발사업, 타운하우스, 주택 개발사업, 시공 개발 상담" />
<title>(주)다건종합건설</title>
<link href="/css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="/js/scrollbar/jquery.mCustomScrollbar.css" />
<link rel="stylesheet" type="text/css" href="/Fancybox/css/jquery.fancybox.css?v=2.1.5">
<script type="text/javascript" src="/js/jquery-1.8.3.js"></script>
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
<![endif]-->
<script>
$(function() {
	$gnb = $(".nav_list");
	var $gnb_thispage = '';

	$("ul.nav_2nd li a").each(function(){
		if($(this).hasClass("active")){
			$(this).parent("li").parent("ul").parent("li").find(" > a").addClass("active");
			$(this).parent("li").parent("ul").parent("li").find(" > a > span.over").show();
			$(this).parent("li").parent("ul").parent("li").find(" > a > span.out").hide();
		}
	});

	$gnb_thispage = $gnb.find("a.active").parent("li").parent("ul").parent("li").find("a.lv1");
	$gnb_thispage.addClass("active");

	$gnb.find($("a.lv1:not(active)")).parent("li").mouseenter(function(){
		$("ul.nav_2nd").hide();
		$("a.lv1").removeClass("active");
		$(this).find("a.lv1").addClass("active");
		$(this).find("a.lv1").next("ul.nav_2nd").show();
		$(this).find("a.lv1").children('.over').show();
		$(this).find("a.lv1").children('.out').hide();

	})

	$gnb.find($("a.lv1:not(active)")).parent("li").mouseleave(function(){
		$(this).find("a.lv1").removeClass("active");
		$(this).find("a.lv1").next("ul.nav_2nd").hide();
		$(this).find("a.lv1").children('.over').hide();
		$(this).find("a.lv1").children('.out').show();
	});

	$gnb.mouseleave(function(){
		$gnb_thispage.addClass("active");
		$gnb_thispage.find("span.over").show();
		$gnb_thispage.find("span.out").hide();
		$gnb_thispage.next("ul").show();
	});


});
</script>

</head>
<body>

<div id="wrap">
	<div id="wrapper">
		<header>
			<div class="gnb_menu">
				<div class="inner_gnb_menu">
					<h1 class="logo"><a href="./">로고</a></h1>

					<ul class="nav_list">
						<li class="menu_list"><a class="lv1" href="./?path=company" ><span class="over">- 회사소개</span><span class="out">회사소개</span></a>
							<ul class="nav_2nd nav2_1">
								<li class="menu2_list"><a class="cls_company" href="./?path=company">회사개요</a></li>
								<li class="menu2_list"><a class="cls_ceo" href="./?path=ceo">CEO인사말</a></li>
								<li class="menu2_list"><a class="cls_organization" href="./?path=organization">조직도</a></li>
								<li class="menu2_list"><a class="cls_history" href="./?path=history">연혁</a></li>
								<li class="menu2_list"><a class="cls_ci" href="./?path=ci">CI</a></li>
								<li class="menu2_list"><a class="cls_location" href="./?path=location">오시는길</a></li>
							</ul>
						</li>
						<li class="menu_list"><a class="lv1" href="./?path=buildRequest&bType=write"><span class="over">- 공사견적</span><span class="out">공사견적</span></a></li>
						<li class="menu_list"><a class="lv1" href="./?path=notice"><span class="over">- 고객지원</span><span class="out">고객지원</span></a>
							<ul class="nav_2nd nav2_3">
								<li class="menu2_list"><a class="cls_notice" href="./?path=notice">공지사항</a></li>
								<li class="menu2_list"><a class="cls_news" href="./?path=news">건축뉴스</a></li>
								<li class="menu2_list"><a class="cls_qna" href="./?path=qna">고객문의</a></li>
							</ul>
						</li> 
						<li class="menu_list"><a class="lv1" href="./?path=ing"><span class="over">- 공사관리</span><span class="out">공사관리</span></a>
							<ul class="nav_2nd nav2_4">
								<li class="menu2_list"><a class="cls_ing" href="./?path=ing">시공현장</a></li>
								<li class="menu2_list"><a class="cls_complete" href="./?path=complete">완료공사</a></li>
								<li class="menu2_list"><a class="cls_system" href="./?path=system">스마트건설관리시스템</a></li>
							</ul>
						</li>
						<li class="menu_list last"><a class="lv1" href="./?path=business"><span class="over">- 사업소개</span><span class="out">사업소개</span></a>
							<ul class="nav_2nd nav2_5">
								<li class="menu2_list"><a class="cls_business01" href="./?path=business01">호텔/리조트</a></li>
								<li class="menu2_list"><a class="cls_business02" href="./?path=business02">타운하우스</a></li>
								<li class="menu2_list"><a class="cls_business03" href="./?path=business03">주택</a></li>
							</ul>
						</li> 
					</ul>


					<div class="nav_b_area">
						<ul class="nav_b">
							<li class="fir"><a href="javascript:alert('준비중 입니다.');" class="btn_down"><img src="/img/btn/btn_down.jpg" alt="공사지명원 다운받기" /></a></li>
							<li class="sec"><a href="/admin" target="_blank" class="btn_Intranet"><img src="/img/btn/btn_Intranet.jpg" alt="사내 인트라넷" /></a></li>
							<li><a href="./?path=agreement" class="link">이용약관</a></li>
							<li><a href="./?path=policy" class="link">개인정보보호정책</a></li>
							<li><a href="./?path=refuse" class="link">이메일주소 무단수집거부</a></li>
						</ul>
					</div>






				</div>
			</div>

			<div class="gnb_member">
				<!--scTop-->
				<ul class="nav_list2 ">
					<li class="scTopLogin mem_list"><a href="{3}" title="로그인">로그인</a></li>
					<li class="scTopLogin line">&nbsp;</li>
					<li class="scTopLogin mem_list last"><a href="./?path=joinAgreement" title="회원가입">회원가입</a></li>

					<li class="scTopLogout mem_list"><a href="{4}" title="로그아웃">로그아웃</a></li>
					<li class="scTopLogout line">&nbsp;</li>
					<li class="scTopLogout mem_list last"><a href="{5}" class="my_active" title="마이페이지">마이페이지</a></li>
				</ul>
				<!--scTop-->
				


				<div class="copyright">
					<p>
						ⓒDAGEON,<br/>All rights reserved.
					</p>
				</div>
			</div>

		</header>