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
<div id="wrap">

	<header id="header" class="on sub">
	     <? include "menu_drop.php"; ?>

	</header><!-- //header -->


<div class="k_wrap sub_wrap">
	
	<div class="sub_vg">
		<div id="vg_con">
			<p><?php echo $code_high ?></p>
			<h2><?php echo $cate_name[$code_high]?></h2>
		</div>
	</div>

	<div class="k_container type_center">
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

		<!-- contents_wrap -->
		<div class="contents_wrap">
			<div class="title_wrap">
				<?include "title.php";?>
			</div>
			<div class="contents">