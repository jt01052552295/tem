<h2 class="menu">
	<ul>
<?
for($i = 1; $i < sizeof ( $order_category ); $i ++) { ?>
	<!-- CUSTOM ADDR -->
	
		<li <?php if ($code_high_no == $i) {?> class="selected_menu" <?php }?> >
			<a href="<?=KI_URL.$order_category[$i]?>/<?=$page_1_html[$order_category[$i]][0]?>.html"><?php echo $cate_name[$order_category[$i]]?></a>
		</li>
	
<? } ?>
		<li class="lang"><a href="javascript:;"><span class="blind">한국어</span></a></li>
		<li class="last"><a href="javascript:;"><span class="blind">버튼</span></a></li>

	</ul>
</h2>