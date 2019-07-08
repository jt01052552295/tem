<div class="left_inner">
	<div class="left_top">
		<h2><span><?php 
	             if($breadcrumArr[0]['title']): echo $breadcrumArr[0]['title'];
	             else: 
	             			if (function_exists('get_head_title')) {
                                echo get_head_title($g5['title']);
                            }
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

											$leftTitle = $nav3rd[$k]['title'];
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

	
</div>