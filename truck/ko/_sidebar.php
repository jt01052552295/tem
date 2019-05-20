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
	                if($currentMenuArr['mCode'] == $nav2nd[$j]['mCode']):
	                    $submenu_r = 'selected';
	                endif;
	            ?>
	            <li class=""><a href="<?php echo $nav2nd[$j]['url']?>" class="<?php echo $submenu_r?>"><?php echo $nav2nd[$j]['title']?></a>

	            		<ul class="sub2_sidebar">
		                    <?php for($k=0; $k<count($nav3rd); $k++):?>
		                        <?php if(substr($nav3rd[$k]['mCode'],0,2) == $nav2nd[$j]['mCode']): ?>
		                            <li><a href="<?php echo $nav3rd[$k]['url']?>"><?php echo $nav3rd[$k]['title']?></a></li>
		                        <?php endif; ?>
		                    <?php endfor; ?>
		                </ul>

	            </li>
	        <?php endif; ?>
	    <?php endfor; ?>
	</ul>

	<div class="sideQuick">
		<ul class="quick_list2">
			<li class="bg01"><a href="#"><span class=""><?php echo $infodu['lang']['index']['main']['quick02']?></span></a></li>
			<li class="bg02"><a href="#"><span class=""><?php echo $infodu['lang']['index']['main']['quick03']?></span></a></li>
			<li class="bg03"><a href="#"><span class=""><?php echo $infodu['lang']['index']['main']['quick04']?></span></a></li>
			<li class="bg04"><a href="#"><span class=""><?php echo $infodu['lang']['index']['main']['quick05']?></span></a></li>
			<li class="bg05"><a href="#"><span class=""><?php echo $infodu['lang']['index']['main']['quick06']?></span></a></li>
			<li class="bg06"><a href="#"><span class=""><?php echo $infodu['lang']['index']['main']['quick07']?></span></a></li>
			<li class="last"><a href="#"><span class=""><?php echo $infodu['lang']['index']['main']['quick01']?></span></a></li>
		</ul>
	</div>

	
</div>