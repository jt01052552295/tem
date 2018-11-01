<header class="main" >
    <div class="header_wrap tran-animate" id="header_height">
        <div class="headerBox">

        	<div class="etc_menu">
		        <a href="<?php echo KI_URL?>">Home</a> &nbsp;
		        <a href="#">Inquiry</a> &nbsp;
		        <a href="#">Sitemap</a> &nbsp;
		        <a href="#" id="lang_btn">Language <i class="fas fa-caret-down"></i></a> &nbsp;
		        <?php if($is_member){?>
		        <a href="<?=ROOT_URL?>/board/bbs/member_confirm.php?url=register_form.php">정보수정</a> &nbsp;
		        <a href="<?=ROOT_URL?>/board/bbs/logout.php">Logout</a> &nbsp;
		        <?php }else{?>
		        <a href="<?=ROOT_URL?>/board/bbs/login.php">ADMIN</a> &nbsp;
		        <?php }?>
		    </div><!-- etc_menu -->
		    <div id="lang_bg">
		        <div class="lang_wrap">
		            <div class="lang_nemo">
		                <div class="lang_semo"></div>
		                <a href="<?php echo KI_URL?>/ko" class="curr_lang lang_active">
		                    KOR 
		                    <span></span>
		                </a>
		                <a href="<?php echo KI_URL?>/en" >
		                    ENG
		                    <span></span>
		                </a>   
		                <a href="<?php echo KI_URL?>/cn" >
		                    CHN
		                    <span></span>
		                </a>                  
		            </div>
		        </div>
		    </div> 

        	<div class="logo"><h1><a href="<?php echo KI_URL?>"><span class="blind"><?php echo $infodu['title']?></span></a></h1></div>
            <div class="header_inner"> 
               <?php include_once(KI_PATH.'/_menu_drop.php'); ?>
            </div>
            <!-- <div class="lang">
                <a href="#" id="sideToggle"><i class="fas fa-bars fa-2x"></i></a>
            </div> -->              
            <div class="subMenuBg opacity_95">&nbsp;</div>
        </div>

    </div> 
</header>



<?php if (!defined("_INDEX_")) { ?>
<div class="sub_vg">
	<div id="vg_con">
		<p>sambu rubber</p>
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





<div class="k_wrap" id="subPageWrap">
    <?php if (!defined("_WIDE_SCREEN_")): ?><div class="k_container type_center" id="subPage"><?php endif; ?>
<?php } ?>