<?php

if(!$cate_name[$code_high]){
	$_menu_current = basename($_SERVER['PHP_SELF']);
	$_menu_current_arr = explode(".", $_menu_current );
	$_menu_current_name = $_menu_current_arr[0];

	switch($_menu_current_name):
		case "sitemap": $left_top_name = "사이트맵"; break;
		case "inquiry": $left_top_name = "고객센터"; break;

		default: $left_top_name = $cate_name[$code_high];
	endswitch;
} else {
	$left_top_name = $cate_name[$code_high];
}
?>


<div class="left_top">
	<h2><?php echo $left_top_name?></h2>	
</div>

<ul class="sub_menu">
<?
if (sizeof ( $page_1_name [$code_high] )) {
	for($i = 1; $i < sizeof ( $page_1_name [$code_high] ); $i ++) {
		if ($code_sub_1 == $page_1_html [$code_high] [$i]) {
			$submenu_r = "_r";
		} else {
			$submenu_r = "";
		}
		?>
		<li class="sub_menu_li<?=$submenu_r?>"
			onMouseOver="this.className='sub_menu_li_r'"
			onMouseOut="this.className='sub_menu_li<?=$submenu_r?>'"><a href="<?=KI_URL.$code_high?>/<?=$page_1_html[$code_high][$i]?>.html"><?=$page_1_name[$code_high][$i]?></a></li>
		<? 
// 서브2 메뉴출력 ---- 해당페이지 상관없이 출력시 &&$code_sub_1_no==$i 삭제
		if ($page_2_html [$code_high] [$i] [1] && $code_sub_1_no == $i) {
			?>
			<ul class="sub2_menu">
				<?
			
for($k = 1; $k < sizeof ( $page_2_name [$code_high] [$i] ); $k ++) {
	if ($code_sub_2 == $page_2_html [$code_high] [$i] [$k]) {
		$sub2menu_r = "_r";
	} else {
		$sub2menu_r = "";
	}
	?>
		<li class="sub2_menu_li<?=$sub2menu_r?>"
			onClick="javascript:location.href='<?=KI_URL.$code_high."/".$page_2_html[$code_high][$i][$k]?>.html'"
			onMouseOver="this.className='sub2_menu_li_r'"
			onMouseOut="this.className='sub2_menu_li<?=$sub2menu_r?>'"><?=$page_2_name[$code_high][$i][$k]?></a></li>
			<?}?></ul><?}?>
<?}}?>
</ul>

