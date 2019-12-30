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

									?>

		                            <li><a href="<?php echo $nav3rd[$k]['url']?>" class="<?php echo $submenu_r?>"><?php echo $nav3rd[$k]['title']?></a></li>

		                        <?php endif; ?>
		                    <?php endfor; ?>
		                </ul>
					<?php endif;?>

	            </li>
	        <?php endif; ?>
	    <?php endfor; ?>
	</ul>

	<div class="sideBan ban01">
		<a href="#none">
			<h5>강사소개</h5>
			<p>포에이엠 교육 전문강사를 소개합니다.</p>
		</a>
	</div>
	<div class="sideBan ban02">
		<a href="#none">
			<h5>교육원소개</h5>
			<p>포에이엠 교육원 정보입니다.</p>
		</a>
	</div>

	<div class="sideBan2">
		<div class="company_info">
            <ul>
            	<li class="tit">교육상담센터</li>
                <li class="tel">1544-<strong>0539</strong></li>
                <li class="info">E-mail. <strong>4amedu@naver.com</strong></li>
                <li class="info">Fax. <strong>070-4035-2035</strong></li>
                <li class="info2"><span>토요일·일요일·공휴일 휴무</span></li>
                <li class="info3"><span>토,일,공휴일은 1:1문의 및 자주묻는 질문을 이용해주세요.</span></li>
            </ul>
        </div>
	</div>

	
</div>