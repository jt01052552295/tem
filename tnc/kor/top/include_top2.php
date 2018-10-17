<!DOCTYPE html>
<html>
<!-- head -->
<? include "head.php" ?>
<? include "list/order_list.php" ?>
<? include "function.php" ?>

<? include "admin/admin_data.php" ?>

<? if($site['db']){ 
	include_once "../../board/common.php";
}?>

<body>
<div id="wrap" class="noBg">

<header class="bg">
    <div class="header_wrap topPosition">
        <div class="headerBox">
        	<div class="logo"><h1><a href="/kor"><span class="blind">티앤씨글로벌 로고</span></a></h1></div>
            <div class="header_inner">                               
               <?include "menu_drop2.php";?>
            </div>
            <div class="lang">
                <a href="#"><span>영문페이지</span></a>
            </div>
            <div class="subMenuBg opacity_70">&nbsp;</div>
        </div>

         <div id="m_menu">
            <a href="#"><i class="fas fa-bars fa-2x"></i></a>
        </div>
        <!--모바일메뉴!-->
        <?include "menu_drop_mobile.php";?>
        
    </div> 

    <div class="quickWrap">
        <div class="leftQuick">
            <ul class="quick_list">
                <li class=""><a href="#" class="goToMain" id="q1"><span class="blind">contact us</span></a></li>
                <li class=""><a href="#" class="goToMain" id="q2"><span class="blind">오시는길</span></a></li>
                <li class=""><a href="#" class="goToMain" id="q3"><span class="blind">052) 240 - 8300</span></a></li>
                <li class="last"><a href="#" class="goToMain" id="q4"><span class="blind">위로</span></a></li>
            </ul>
        </div>
    </div>

    <div class="sub_vg">
		<div id="vg_con">
			<h2><?php echo $cate_name[$code_high]?></h2>
			<p>신뢰와 도전 TNC그룹의 정신입니다 </p>
		</div>
	</div>

</header>




<div class="middle_wrap">
	<!-- contents -->
	<div class="middle_sub">
		<div class="vg_sub_area2">
			<ul class="sub_tab2" data-attr="<?php echo $code_sub_1. ' ' .$page_1_html[$code_high][$i]. ' ' .$code_high ?>">
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
					<li class="tab_list"><a href="<?=KI_URL.$code_high."/".$page_1_html[$code_high][$i]?>.html" class="<?php echo $submenu_r?>"><?=$page_1_name[$code_high][$i]?></a></li>
				<?php }?>
				
			</ul>
		</div>
		
		<div class="contents_wrap">
			<div class="contents">