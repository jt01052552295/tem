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
        	<div class="logo"><h1><a href="/kor"><span class="blind">티엔씨글로벌 로고</span></a></h1></div>
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

    <?include "quick.php";?>


</header>
<div class="sub_vg">
	<div id="vg_con">
		<h2><?php echo $cate_name[$code_high]?></h2>
		<p>신뢰와 도전 TNC글로벌의 정신입니다 </p>
	</div>
</div>

<?php

if ($page_1_name[$code_high][$code_sub_1_no]){
	$title_echo=$page_1_name[$code_high][$code_sub_1_no];

}else{
	
		$_menu_current = basename($_SERVER['PHP_SELF']);
		$_menu_current_arr = explode(".", $_menu_current );
		$_menu_current_name = trim($_menu_current_arr[0]);
		
		switch($_menu_current_name):
			case "sitemap": $title_echo = "사이트맵"; break;
			case "air_guide": $title_echo = "대표 항공사 사이트"; break;
			default: $title_echo = ".";
		endswitch;

}

?>


<div class="middle_wrap">
	<div class="middle_sub wide">


		<?php
			$blank_arr = array("air_guide");  
			if(!in_array($_menu_current_name, $blank_arr)):
		?>
			<div class="vg_sub_area2 wide" data-col="">
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
						<li class="tab_list <?php echo $submenu_r?>"><a href="<?=KI_URL.$code_high."/".$page_1_html[$code_high][$i]?>.html" ><?=$page_1_name[$code_high][$i]?></a></li>
					<?php }?>
					
				</ul>

				<div class="sub_depth_1">
					<select onchange="location.href=this.value">
						<?php 
							for($i = 1; $i < sizeof ( $order_category ); $i ++):  
								$cls = "";
								if($cate_name[$code_high] == $cate_name[$order_category[$i]]): 
									$cls = "selected"; 
								endif;
						
						?>
						<option value="<?=KI_URL.$order_category[$i]?>/<?=$page_1_html[$order_category[$i]][0]?>.html" <?php echo $cls?>><?=$cate_name[$order_category[$i]]?></option>
						<?php endfor; ?>
					</select>
				</div>
				<div class="sub_depth_2">
					<select onChange="location.href=this.value">
						<?php 
							if (sizeof ( $page_1_name [$code_high] )) {
								for($i = 1; $i < sizeof ( $page_1_name [$code_high] ); $i ++) {
									$cls = "";
									if($title_echo == $page_1_name[$code_high][$i]): 
										$cls = "selected"; 
									endif;
						?>
							<option value="<?=KI_URL.$code_high."/".$page_1_html[$code_high][$i]?>.html" <?php echo $cls?>><?=$page_1_name[$code_high][$i]?></option>
						<?php	
								}
							  }
						?>
					</select>
				</div>


			</div>
		<?php endif; ?>
		
		<div class="contents_wrap">
			<div class="contents">
				<div class="title_wrap w1200">    
					<h3 class="title"><?=$title_echo?></h3>
					<?php if(!in_array($_menu_current_name, $blank_arr)): ?>
						<ul>
						   <li><a href="/kor">HOME</a></li>
						   <li><a href="#"><?php echo $cate_name[$code_high]?></a></li>
						   <li><strong><?=$page_1_name[$code_high][$code_sub_1_no]?></strong></li>
						</ul>
					<?php endif; ?>
				</div>


				<div class="container wide">
