<h2 class="menu">
	<ul class="menudrop">
<?
for($i = 1; $i < sizeof ( $order_category ); $i ++) { ?>
	<li class="menu_sub_li <?php if ($code_high_no == $i) { ?> selected_item<?php }?>">
		<a href="<?=KI_URL.$order_category[$i]?>/<?=$page_1_html[$order_category[$i]][0]?>.html">
			<?php echo $cate_name[$order_category[$i]]?>
		</a>
		<?php if ($page_1_name[$order_category[$i]][1]){ ?>
		<ul class="menu_sub_ul">
		<?php for ($k=1 ; $k < sizeof($page_1_name[$order_category[$i]]) ; $k++) { ?>
			
			<li>
				<a href="<?=KI_URL.$order_category[$i]?>/<?=$page_1_html[$order_category[$i]][$k]?>.html"><?=$page_1_name[$order_category[$i]][$k]?></a>
			</li>
			
		<?php }?>
		</ul>
		<?php }?>
	</li>
<? } ?>
		<!-- <li style="width: 100px; margin-top: 5px;">
			<img id="lang_btn" src="<?php echo KI_URL?>images/lang_btn.png" />
		</li> -->
	</ul>
	
	
	
	
<!-- 	<div id="lang_bg">
		<div class="lang_wrap">
			<div class="lang_nemo">
				<div class="lang_semo"></div>
				
				<a href="/ko/" class="curr_lang lang_active">
					KOR 
					<span></span>
				</a>
				<a href="/en/" >
					ENG
					<span></span>
				</a>
				
			</div>
		</div>
	</div> -->
	
</h2>
 
 
 <script>
 $(".menu_sub_li").mouseenter(function(){
		$(this).children('ul').stop().css("display","block");
});
$(".menu_sub_li").mouseleave(function(){
	$(this).children('ul').stop().css("display","none");
});

$(".lang_nemo a").hover(function(){
	$(".lang_nemo a").removeClass('lang_active');
	$(this).addClass('lang_active');
},function(){
	$(".lang_nemo a").removeClass('lang_active');
	$(".curr_lang").addClass('lang_active');
});
$("#lang_bg").click(function(){
	$(this).fadeOut();
});

$("#lang_btn").click(function(){
	$("#lang_bg").fadeIn();
})
 </script>