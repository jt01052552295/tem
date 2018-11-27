<!-- Google Tag Manager -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBSZJ8P"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager -->

<div class="hidden-xs">
    <header class="header clearfix">
        <div class="header_sp_first">
            <div class="header_sp_first__logo">
                <a href="./"><img src="<?php echo G5_LANG_IMG_URL?>/top/pc/logo_pc.png" alt="Forsean" width="82" height="41"></a>
            </div>
            <div class="header_sp_first__r">
                <div class="header_sp_first__r__btnm">
                    <p class="header_sp_first__r__btnm__over">
                        <span class="line_first"></span>
                        <span class="line_second"></span>
                        <span class="line_thirt"></span>
                        <span class="line_four"></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="header_sp_second">
            <div class="header_sp_second__wrap">
                <ul class="header_sp_second__wrap__list">
                    <li><a href="#sec01">SNS에서도 화제</a></li>
                    <li><a href="#sec02">미디어 게재</a></li>
                    <li><a href="#sec03">결과의 메커니즘</a></li>
                    <li><a href="#sec04">선택해야하는 이유</a></li>
                    <li><a href="#sec05">사용법은 간단</a></li>
                    <li><a href="javascript:;">개발자 "후지와라 雪桜"</a></li>
                </ul>
                <p class="btn_close"><span>Close</span></p>
            </div>
        </div>
    </header>
</div>
<div class="visible-xs">
    <div class="header_sp_first">
        <div class="header_sp_first__logo">
            <a href="./"><img src="<?php echo G5_LANG_IMG_URL?>/top/sp/logo_sp.png" alt="Forsean" width="67" height="33"></a>
        </div>
        <div class="header_sp_first__r">
            <div class="header_sp_first__r__btnm">
                <p class="header_sp_first__r__btnm__over">
                    <span class="line_first"></span>
                    <span class="line_second"></span>
                    <span class="line_thirt"></span>
                    <span class="line_four"></span>
                </p>
            </div>
        </div>
    </div>
    <div class="header_sp_second">
        <div class="header_sp_second__wrap">
            <ul class="header_sp_second__wrap__list">
                <li><a href="#sec01">SNS에서도 화제</a></li>
                <li><a href="#sec02">미디어 게재</a></li>
                <li><a href="#sec03">결과의 메커니즘</a></li>
                <li><a href="#sec04">선택해야하는 이유</a></li>
                <li><a href="#sec05">사용법은 간단</a></li>
                <li><a href="javascript:;">개발자 "후지와라 雪桜"</a></li>
            </ul>
              <p class="btn_close"><span>Close</span></p>
        </div>
    </div>
</div>



<?php if (!defined("_INDEX_")) { ?>
<div class="sub_vg">
	<div id="vg_con">


<?php
	
// echo "<!-- pre currentMenuArr>";
// print_r($currentMenuArr);
// echo "</pre -->";


?>

		<h2><small>CRAYON</small><?php echo $breadcrumArr[0]['title']?></h2>
		
	</div>
</div>
<div class="subSection mobile_only"></div>


<div class="k_wrap pc_only" id="tabMiddleWrap">
    <div class="k_container type_center" id="tabMiddlePage">


    	


    	<div class="vg_sub_area2">
			<ul class="sub_tab2" >
				<?php for($j=0; $j<count($nav2nd); $j++):?>
                    <?php if(substr($nav2nd[$j]['mCode'],0,2) == $breadcrumArr[0]['mCode']): ?>
                    	<?php
                    		$submenu_r = '';
                    		if($currentMenuArr['mCode'] == $nav2nd[$j]['mCode']):
                    			$submenu_r = 'selected';
                    		endif;
                    	?>


                        <li class="tab_list "><a href="<?php echo $nav2nd[$j]['url']?>" class="<?php echo $submenu_r?>"><?php echo $nav2nd[$j]['title']?></a></li>
                    <?php endif; ?>
                <?php endfor; ?>
			</ul>





			<div class="sub_depth_1">
				<select onchange="location.href=this.value">
					<?php 
						for($i = 1; $i < sizeof ( $order_category ); $i ++):  
							$cls = "";
							if($cate_name[$code_high] == $cate_name[$order_category[$i]]): 
								$cls = "selected"; 
							endif;
					
					?>
					<option value="" <?php echo $cls?>><?=$cate_name[$order_category[$i]]?></option>
					<?php endfor; ?>
				</select>
			</div>
			<div class="sub_depth_2">
				<select onChange="location.href=this.value">
					<?php 
						if (sizeof ( $page_1_name [$code_high] )) {
							for($i = 1; $i < sizeof ( $page_1_name [$code_high] ); $i ++) {
								$cls = "";
								if($title_echo == $page_1_name[$code_high][$i]): 
									$cls = "selected"; 
								endif;
					?>
						<option value="" <?php echo $cls?>><?=$page_1_name[$code_high][$i]?></option>
					<?php	
							}
						  }
					?>
				</select>
			</div>


		</div>

		<div class="vg_sub_area">
			<ul class="sub_tab">
				<?php 
					$total = count($nav2nd);
					if($total>0){
						$widthSize = 100 / $total;
					} else {
						$widthSize = 100;
					}

					for($j=0; $j<count($nav2nd); $j++):
						if(substr($nav2nd[$j]['mCode'],0,2) == $breadcrumArr[0]['mCode']):
							$submenu_r = '';
                    		if($currentMenuArr['mCode'] == $nav2nd[$j]['mCode']):
                    			$submenu_r = 'selected';
                    		endif;

				?>
							<li class="tab_list"><a href="<?php echo $nav2nd[$j]['url']?>" class="<?php echo $submenu_r?>"><?php echo $nav2nd[$j]['title']?></a></li>
					<?php endif; ?>
				<?php endfor;?>
				
			</ul>
		</div>



    </div>
</div>


<div class="subNavWrap" id="sub_navi">
    <div class="subNavInner">
        <a href="<?php echo G5_LANG_URL?>"  class="btn_home"><span class="blind">홈으로 이동</span></a>
        <ul class="subNav1st">
            <li class="navi_dp1">
                <a href="#" class="dp1"><?php echo $breadcrumArr[0]['title']?> 
                	<!-- <span class="sub_drop bg"><em class="blind">대분류 메뉴 펼치기</em></span> -->
                </a>
                <ul class="subNav2nd">
                    <?php 
                        for($i=0; $i<count($nav1st); $i++):
                            $cls = "";
                            $access = "이동";
                            if($breadcrumArr[0]['mCode'] == $nav1st[$i]['mCode']): 
                                $cls = "active"; 
                                $access = "메뉴 활성화중";
                            endif;
                    
                    ?>
                    <li class="navi_dp2 <?php echo $cls?>">
                        <a href="<?php echo $nav1st[$i]['url']?>" title="대분류  메뉴 <?php echo $i?>번 - <?php echo $nav1st[$i]['title']?> <?php echo $access?>"><?php echo $nav1st[$i]['title']?></a>
                    </li>
                    <?php endfor; ?>
                </ul>
            </li>

            <?php if($breadcrumArr[1]['title']):?>
            <li class="navi_dp1">
                <a href="#" class="dp1"><?php echo $breadcrumArr[1]['title']?> <span class="sub_drop bg"><em class="blind">대분류 <?php echo $breadcrumArr[1]['title']?> 하위 메뉴 펼치기</em> </span></a>
                <ul class="subNav2nd">
                    <?php 
                        for($j=0; $j<count($nav2nd); $j++):
                            if(substr($breadcrumArr[1]['mCode'],0,2) == substr($nav2nd[$j]['mCode'],0,2)):
                                $cls = "";
                                $access = "이동";
                                if($breadcrumArr[1]['mCode'] == $nav2nd[$j]['mCode']): 
                                    $cls = "active"; 
                                    $access = "메뉴 활성화";
                                endif;
                    ?>
                                    <li class="navi_dp2 <?php echo $cls?>"><a href="<?php echo $nav2nd[$j]['url']?>" title="대분류 <?php echo $breadcrumArr[0]['title']?> 하위 메뉴 <?php echo $i?>번 - <?php echo $nav2nd[$j]['title']?> <?php echo $access?>"><?php echo $nav2nd[$j]['title']?></a></li>
                    <?php   
                            endif;
                        endfor;
                    ?>
                </ul>
            </li>     
            <?php endif; ?>    
        </ul>

        <!-- //navi_list -->
    </div>
</div>
<!-- //navi menu -->





<div class="k_wrap" id="subPageWrap">
    <?php if (!defined("_WIDE_SCREEN_")): ?><div class="k_container type_center" id="subPage"><?php endif; ?>

    <div class="title_wrap">    
        <div class="sub_vg_title" style="display: none">
            <?php if($currentPrevArr['url']):?>
            <!-- <a href="<?php echo $currentPrevArr['url']?>" class="sub_arrow sub_left_arrow">&lt; </a> -->
            <?php endif;?>


            <h2 class="title"><?php //echo get_head_title($g5['title']); ?>
            	<?php 
            		// if($breadcrumArr[1]['title']): echo $breadcrumArr[1]['title'];
            		// elseif($breadcrumArr[2]['title']): echo $breadcrumArr[2]['title'];
            		// else: echo $breadcrumArr[0]['title'];
            		// endif;

            	?>


            </h2>

            <?php if($currentNextArr['url']):?>
            <!-- <a href="<?php echo $currentNextArr['url']?>" class="sub_arrow sub_right_arrow">&gt;</a> -->
            <?php endif;?>

        </div>
        <!-- <div class="sub_vg_title_line"></div> -->
    </div>
<?php } ?>