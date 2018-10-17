<h2 class="menu">
	<ul>
<?
for($i = 1; $i < sizeof ( $order_category ); $i ++) { ?>
	<!-- CUSTOM ADDR -->
	<a href="<?=KI_URL.$order_category[$i]?>/<?=$page_1_html[$order_category[$i]][0]?>.html">
		<li <?php if ($code_high_no == $i) {?> class="selected_menu" <?php }?> >
			<?php echo $cate_name[$order_category[$i]]?>
		</li>
	</a>
<? } ?>
	</ul>
</h2>