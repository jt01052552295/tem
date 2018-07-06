<h2 class="left_top">
	<div><?php echo $cate_name[$code_high]?></div>	
</h2>

<?

$sub_cnt = sizeof($page_1_name[$code_high])-1;
if($sub_cnt != 0) $sub_w = 100/$sub_cnt;
if (sizeof ( $page_1_name [$code_high] )) {
?>



<ul class="sub_tab" data-attr="<?php echo $code_sub_1. ' ' .$page_1_html[$code_high][$i]. ' ' .$code_high ?>">
	<?php 
		for($i = 1; $i < sizeof ( $page_1_name [$code_high] ); $i ++) {
			if ($code_sub_1 == $page_1_html[$code_high][$i]) {
				$submenu_r = "selected";
			} else {
				$submenu_r = "";
			}
		?>
		<li class="tab_list">
			<a href="<?=KI_URL.$code_high."/".$page_1_html[$code_high][$i]?>.html" class="<?php echo $submenu_r?>"><?=$page_1_name[$code_high][$i]?></a> <span class="go">화살표</span>
			<?php 
				// 서브2 메뉴출력 ---- 해당페이지 상관없이 출력시 &&$code_sub_1_no==$i 삭제
				if ($page_2_html [$code_high] [$i] [1] && $code_sub_1_no == $i) {
			?>
					<ul class="sub2_menu">
					<?php
						for($k = 1; $k < sizeof ( $page_2_name [$code_high] [$i] ); $k ++) {
							if ($code_sub_2 == $page_2_html [$code_high] [$i] [$k]) {
								$sub2menu_r = "selected";
							} else {
								$sub2menu_r = "";
							}
					?>
						<li class="sub2_menu_li"><a href="<?=KI_URL.$code_high."/".$page_2_html[$code_high][$i][$k]?>.html" class="<?php echo $sub2menu_r?>"><?=$page_2_name[$code_high][$i][$k]?></a></li>
					<?php }?>
					</ul>
			<?php }?>
		</li>
	<?php }?>

</ul>
<?php }?>

<div class="cs_center">
	<h4>CS Center</h4>
	<div class="cs1">
		<p class="center">[본사/공장/부설연구소]</p>
		<p class="tel">051-514-0008</p>
		<p class="fax">FAX 051-515-4580</p>
	</div>
	<div class="cs1">
		<p class="center">[영업본부]</p>
		<p class="tel">02-863-0020</p>
		<p class="fax">FAX 02-839-0311</p>
	</div>

</div>