<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>


<?php for($i=0; $i<count($nav1st); $i++): ?>
<div class="sitemap2">
	<div class="sitemap_cate2"><a href="<?php echo $nav1st[$i]['url']?>"><span class="sitemap_cate_text2"><?php echo $nav1st[$i]['title']?></span></a></div>
	<div class="sitemap_text2">
		<ul>
			<?php for($j=0; $j<count($nav2nd); $j++):?>
			<?php if(substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']): ?>
				<li><div><a href="<?php echo $nav2nd[$j]['url']?>"><?php echo $nav2nd[$j]['title']?></a><div></li>
			<?php endif;?>
			<?php endfor; ?>

		</ul>

	</div>
</div>
<?php endfor; ?>
<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>