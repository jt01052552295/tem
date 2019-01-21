<div class="left_inner">
	<div class="left_top">
		<h2><span><?php 
	             if($breadcrumArr[0]['title']): echo $breadcrumArr[0]['title'];
	             else: echo get_head_title($g5['title']);
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

	<div class="cs_center">
		<h4>CONTACT US</h4>
		<div class="cs1">
			<p class="tel">053-719-0114</p>
			<p class="fax">FAX. 053-719-0115</p>
		</div>
	</div>		
</div>