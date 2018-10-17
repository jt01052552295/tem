<h2 class="menu">
	<ul>
<?
for($i = 1; $i < sizeof ( $order_category ); $i ++) {?>
	<a href="<?=KI_URL.$order_category[$i]?>/<?=$page_1_html[$order_category[$i]][0]?>.html">
	<li>
	<?php if ($code_high_no == $i) {?>
		<img src="<?=KI_IMG_URL?>menu_<?=$order_category[$i]?>_r.gif" />
	<?php }else{?>
		<img src="<?=KI_IMG_URL?>menu_<?=$order_category[$i]?>.gif"
		 	 onmouseover="this.src='<?=KI_IMG_URL?>menu_<?=$order_category[$i]?>_r.gif'"
			 onmouseout="this.src='<?=KI_IMG_URL?>menu_<?=$order_category[$i]?>.gif'" />
	<?php }?>
	</li>
	</a>
<? }?>
	</ul>
</h2>