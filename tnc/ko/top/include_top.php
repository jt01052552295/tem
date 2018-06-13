<!DOCTYPE>
<html>
<!-- head -->
<? include "head.php" ?>
<? include "list/order_list.php" ?>
<? include "function.php" ?>

<? include "admin/admin_data.php" ?>

<? if($site['db']){ 
	include_once "../../board/common.php";
}?>


<body class="bodysub">


<div id="head_wrap">
	<div class="menu_aid"><?include "menu_aid.php";?></div>
	<!--  logo -->
	<div id="head">
		<h1 class="logo"><a href="<?=KI_URL?>"><img src="<?=KI_URL?>images/logo.png"  border="0" /></a></h1>
		<div class="menu_wrap">
			
			<?include "menu_drop.php";?>
		</div>
	</div>

	<div class="box_wrap">
		<div id="subQuickMenu">
			<ul>
				<li class="title">진료<br/>예약및 상담</li>
				<li><div class="ico"><img src="<?=KI_URL?>images/ico_tel.png" alt=""></li>
				<li class="tel">
					051)<br/>
					204-9998<br/>
					204-9971<br/>
					204-2229
				</li>
				<li class="mm"><a href="#">진료시간</a></li>
				<li class="mm"><a href="#">이용안내</a></li>
			</ul>
		</div>
	</div>

	<script>
		$(document).ready(function(){
			$(window).scroll(function() {
				var win = $(window);
				var winHeight = win.height();
				var wScroll = $(this).scrollTop();	

				if(wScroll > 250){
					$('#subQuickMenu').animate({top:$(window).scrollTop()+"px" },{queue: false, duration: 500});  
					// if(wScroll >= $(document).height() - $('#subQuickMenu').offset().top ){
					// 	$('#subQuickMenu').removeClass('m-fixed');
					// } else {
					// 	$('#subQuickMenu').addClass('m-fixed');
					// }
				}else{
					$('#subQuickMenu').animate({top:"250px" },{queue: false, duration: 350});  
					// $('#subQuickMenu').removeClass('m-fixed');
				} 
			}); // 서브페이지 메뉴 고정

		})
	</script>


</div>


<?php
if($cate_name[$code_high]=="") {
	$_menu_current = basename($_SERVER['PHP_SELF']);
	$_menu_current_arr = explode(".", $_menu_current );
	$_menu_current_name = $_menu_current_arr[0];

	switch($_menu_current_name):
		case "sitemap": $cate_name[$code_high] = "사이트맵"; break;
	endswitch;
}
?>

<div class="sub_vg">
	<div id="vg_con">
		<h2><?php echo $cate_name[$code_high]?></h2>
		<p>우리는 가족입니다! 감천참편한요양병원</p>
	</div>
</div>

<div id="middle_wrap">
	<!-- contents -->
	<div id="middle_sub">
		<div class="vg_sub_area">
			<ul class="sub_tab" data-attr="<?php echo $code_sub_1. ' ' .$page_1_html[$code_high][$i]. ' ' .$code_high ?>">
				<?php 
					$total = sizeof($page_1_name [$code_high]) -1;
					if($total>0){
						$widthSize = 100 / $total;
					} else {
						$widthSize = 100;
					}

					for($i = 1; $i < sizeof ( $page_1_name [$code_high] ); $i ++) {
						if ($code_sub_1 == $page_1_html[$code_high][$i]) {
							$submenu_r = "selected";
						} else {
							$submenu_r = "";
						}

				?>
					<li class="tab_list" style="width:<?php echo $widthSize?>%"><a href="<?=KI_URL.$code_high."/".$page_1_html[$code_high][$i]?>.html" class="<?php echo $submenu_r?>"><?=$page_1_name[$code_high][$i]?></a></li>
				<?php }?>
				
			</ul>
		</div>
		
		<div class="contents_wrap">
			<div class="contents">