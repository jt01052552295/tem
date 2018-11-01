<header class="main bg" >
    <div class="header_wrap tran-animate" id="header_height">
        <div class="headerBox">
        	<div class="logo"><h1><a href="<?php echo KI_URL?>"><span class="blind">한국산업정보사 로고</span></a></h1></div>
            <div class="header_inner"> 
               <?php include_once(KI_PATH.'/_menu_drop.php'); ?>
            </div>
            <!-- <div class="lang">
                <a href="#" id="sideToggle"><i class="fas fa-bars fa-2x"></i></a>
            </div> -->              
            <div class="subMenuBg opacity_70">&nbsp;</div>
        </div>

         <div id="m_menu">
            <a href="#"><i class="fas fa-bars fa-2x"></i></a>
        </div>
        <!--모바일메뉴!-->
        <?php include_once(KI_PATH.'/_menu_drop_mobile.php'); ?>


        <!--사이드 토글!-->
        <?php //include_once(KI_PATH.'/_menu_drop_side.php'); ?>
        

        

    </div> 
</header>



<?php if (!defined("_INDEX_")) { ?>
<div class="sub_vg">
	<div id="vg_con">
		<p><?php echo $breadcrumArr[0]['pid']?></p>
		<h2><?php echo $breadcrumArr[0]['title']?></h2>
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
					<option value="<?=KI_URL.$order_category[$i]?>/<?=$page_1_html[$order_category[$i]][0]?>.html" <?php echo $cls?>><?=$cate_name[$order_category[$i]]?></option>
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
						<option value="<?=KI_URL.$code_high."/".$page_1_html[$code_high][$i]?>.html" <?php echo $cls?>><?=$page_1_name[$code_high][$i]?></option>
					<?php	
							}
						  }
					?>
				</select>
			</div>


		</div>
    </div>
</div>





<div class="k_wrap" id="subPageWrap">
    <?php if (!defined("_WIDE_SCREEN_")): ?><div class="k_container type_center" id="subPage"><?php endif; ?>
<?php } ?>