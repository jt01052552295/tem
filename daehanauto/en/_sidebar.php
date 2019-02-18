<div class="left_inner">
	<div class="left_top">


		<?php
		    $left_h2 = "sideTit";
			if($currentMenuArr['pid'] == 'profit' || $currentMenuArr['pid'] == 'notice' || $currentMenuArr['pid'] == 'gall'): 
				 $left_h2 = "";
			endif;
		?>
		<h2 class="<?php echo $left_h2?>">
			<span><?php 
	             if($breadcrumArr[0]['title']): echo $breadcrumArr[0]['title'];
	             else: echo $g5['title'];
	             endif;

	        ?></span></h2>	
	</div>

	<ul class="sidebar">
		 <?php for($j=0; $j<count($nav2nd); $j++):?>
	        <?php if(substr($nav2nd[$j]['mCode'],0,2) == $breadcrumArr[0]['mCode']): ?>
				 <?php
	                $submenu_r = '';
	                if(substr($currentMenuArr['mCode'],0,4) == $nav2nd[$j]['mCode']):
	                    $submenu_r = 'selected';
	                endif;
	            ?>

				<?php if($nav2nd[$j]['image_visible']):?>

				<li><img src="<?php echo G5_LANG_IMG_URL?>/<?php echo $nav2nd[$j]['image_visible']?>"></li>
				<?php endif;?>
	            <li class=""><a href="<?php echo $nav2nd[$j]['url']?>" class="<?php echo $submenu_r?>"><?php echo $nav2nd[$j]['title']?></a>

	            		<?php if(substr($currentMenuArr['mCode'],0,4) == $nav2nd[$j]['mCode']): ?>
							<ul class="sub2_sidebar">
								<?php for($k=0; $k<count($nav3rd); $k++):?>
									<?php if(substr($nav3rd[$k]['mCode'],0,4) == $breadcrumArr[1]['mCode']): ?>
										<?php
											$submenu_r = '';
											if(substr($currentMenuArr['mCode'],0,6) == $nav3rd[$k]['mCode']):
												$submenu_r = 'selected';
											endif;

											$leftTitle = '';
											if($nav3rd[$k]['mCode'] == '301010' || $nav3rd[$k]['mCode'] == '301020' || $nav3rd[$k]['mCode'] == '301030' || $nav3rd[$k]['mCode'] == '301040'):
												$leftTitle = $nav3rd[$k]['leftTitle'];
											else:
												$leftTitle = $nav3rd[$k]['title'];
											endif;
										?>
										<li><a href="<?php echo $nav3rd[$k]['url']?>" class="<?php echo $submenu_r?>"><?php echo $leftTitle?></a></li>
									<?php endif; ?>
								<?php endfor; ?>
							</ul>
						<?php endif;?>

	            </li>
	        <?php endif; ?>
	    <?php endfor; ?>
	</ul>

	<div class="cs_center">
		<a href="<?php echo G5_LANG_URL?>/tech/location.php"><img src="<?php echo G5_LANG_IMG_URL?>/banner1.png" /></a>
	</div>		
</div>