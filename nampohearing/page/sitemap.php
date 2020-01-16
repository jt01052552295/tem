<?php
define('_CONTENTS_', true);
include_once('./_common.php');


if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/content.php');
    return;
}


//  서브페이지 CSS 경로 : /page/asset/contents.css

// 페이지 제목 설정 (안해도됨)
$g5['title'] = '';
include_once('./_head.php');


// echo "<ul>";
// foreach($nav_datas as $menu){
	
//   echo "<li>".$menu['mCode']." " .$menu['title']. ' - '.count($menu['items']);

//   if(count($menu['items'])>0): // 2차
// 	$k=0;
//   	echo '<ol>'.PHP_EOL;
// 	foreach($menu['items'] as $subMenu):
// 		echo "<li>".$subMenu['mCode']." " .$subMenu['title']." ";
// 		if(count($subMenu['items'])>0):  // 3차
// 			$j=0;
// 			echo '<ol>'.PHP_EOL;
// 			foreach($subMenu['items'] as $nav):
// 				echo "<li>".$nav['mCode']." " .$nav['title'];
// 			endforeach;
// 			echo '</ol>'.PHP_EOL;
// 		endif;
// 		echo "</li>".PHP_EOL;
//   	endforeach;
// 	echo '</ol>'.PHP_EOL;
//   endif;
  
  
//   echo "</li>".PHP_EOL;
// }
// echo "</ul>";
?>


<div class="sitemap_wrap">
	<?php
		foreach($nav_datas as $menu){
	?>
	<div class="sitemap">
		<h5><a href="<?php echo $menu['url']; ?>"><?php echo $menu['title'] ?></a></h5>
		

		<?php
			if(count($menu['items'])>0):
				echo '<ul>'.PHP_EOL;
				foreach($menu['items'] as $subMenu):

		?>
					<li><a href="<?php echo $subMenu['url']; ?>"><?php echo $subMenu['title'] ?></a></li>
		<?php
				endforeach;
				echo '</ul>'.PHP_EOL;
			endif;
		?>

			

	</div>
	<?php }?>
</div>



<?php
include_once('./_tail.php');
?>