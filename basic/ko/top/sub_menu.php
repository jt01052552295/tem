<!-- <h2 class="left_top"><?php echo $cate_name[$code_high]?></h2> -->

<?

$sub_cnt = sizeof($page_1_name[$code_high])-1;
if($sub_cnt != 0) $sub_w = 100/$sub_cnt;
if (sizeof ( $page_1_name [$code_high] )) {
?>


<style>
.side-bar {width:210px;float:left;padding:35px 0 0 0;}
.side-bar h3 {color:#030303;font-weight: 700;font-size:30px;}
.side-bar ul.nav {padding-top:25px;}
.side-bar ul.nav > li.menu {height:30px;border:1px solid #e6e6e6;border-width:1px 0 0 0;background: url("../img/left-dot.png") 0 0 no-repeat;padding-left: 29px;}
.side-bar ul.nav > li.menu:hover ,
.side-bar ul.nav > li.menu.open {background: url("../img/left-dot.png") 0 -31px #f24703 no-repeat;}
.side-bar ul.nav > li.menu:hover > a,
.side-bar ul.nav > li.menu.open > a {color:#fff;}
.side-bar ul.nav > li.menu:last-child {border-width:1px 0;}
.side-bar ul.nav > li.menu a {color:#3d3d3d;font-size:13px;line-height: 30px;}
.side-bar ul.sub {}
.side-bar ul.sub > li {height:30px;border:1px solid #e6e6e6;border-width:1px 0 0 0;}
</style>

<aside class="side-bar">
	<h3>회사소개</h3>
	<ul class="nav">
		<li class="menu"><a href="javascript:;">인사말</a></li>
		<li class="menu"><a href="javascript:;">연혁</a></li>
		<li class="menu open">
			<a href="javascript:;">오시는길</a>
			<ul class="sub">
				<li><a href="javascript:;">2차</a></li>
				<li><a href="javascript:;">2차</a></li>
				<li><a href="javascript:;">2차</a></li>
			</ul>
		</li>

		<?php for($i = 1; $i < sizeof ( $page_1_name [$code_high] ); $i ++): ?>
			<?php 
				($code_sub_1 == $page_1_html [$code_high] [$i])?$active = "open":$active = "";
			?>
			<!-- <li class="<?php echo $active?>"><a href="<?=KI_URL.$code_high."/".$page_1_html[$code_high][$i]?>.html"><?=$page_1_name[$code_high][$i]?></a></li> -->

		<?php endfor; ?>
	</ul>
	<!-- <article class="customer-box">
		<div class="customer-title"><h3>고객센터</h3> </div>
		<p>
			궁금하신 게 있으신가요?
		</p>
		<div class="tel">012.345.6789</div>
		<div class="fax">FAX 051.123.4567</div>
		<div class="mail">E-mail webmaster@flowdesign.co.kr</div>
	</article> -->
</aside>



<ul class="sub_menu" style="display: none;">
<?
	for($i = 1; $i < sizeof ( $page_1_name [$code_high] ); $i ++) {
		if ($code_sub_1 == $page_1_html [$code_high] [$i]) {
			$submenu_r = "_r";
		} else {
			$submenu_r = "";
		}
		?>
		<li class="sub_menu_li<?=$submenu_r?> <?php if($i==1):?> first <?php endif;?>" data-attr-index="<?php echo $i." ".sizeof ( $page_1_name [$code_high] )?>"
			onMouseOver="this.className='sub_menu_li_r'"
			onMouseOut="this.className='sub_menu_li<?=$submenu_r?>'">
			<a href="<?=KI_URL.$code_high."/".$page_1_html[$code_high][$i]?>.html">
			<?=$page_1_name[$code_high][$i]?>
			</a>
		</li>
		
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
<?}?>
</ul>

<?}?>
