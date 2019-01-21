<header class="main" >
    <div class="header_wrap tran-animate" id="header_height">
        <div class="headerBox">


            <div id="lang_bg">
                <div class="lang_wrap">
                    <div class="lang_nemo">
                        <div class="lang_semo"></div>
                        <a href="<?php echo G5_URL?>/ko" class="curr_lang lang_active">
                            Korean 
                        </a>
                        <a href="<?php echo G5_URL?>/en" >
                            English
                        </a>
                        <a href="<?php echo G5_URL?>/en" >
                            Chinese
                        </a>                  
                    </div>
                </div>
            </div> 

            <div class="logo"><h1><a href="<?php echo G5_URL?>"><span class="blind"><?php echo $infodu['title']?></span></a></h1></div>
            <div class="header_inner"> 
               <?php include_once(G5_LANG_PATH.'/_menu_drop.php'); ?>
            </div>             
            <div class="lang">
                <a href="#" id="lang_btn">Laguage <i class="fas fa-angle-down"></i></a>
            </div> 
            
        </div>
        <div class="subMenuBg">&nbsp;</div>
    </div> 
</header>



<?php if (!defined("_INDEX_")) { ?>
<div class="sub_vg">
    <div id="vg_con">
        <h2>
            <?php echo $breadcrumArr[0]['title']?>
            <small>무결점품질을 목표로 고객만족을 실현하는  피혁염료업체 나토상사(주)입니다.</small>
        </h2>
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
                <a href="#" class="dp1">
    

                    <?php 
                         if($breadcrumArr[0]['title']): echo $breadcrumArr[0]['title'];
                         else: echo get_head_title($g5['title']);
                         endif;

                    ?>

                    <span class="sub_drop bg"><em class="blind">대분류 메뉴 펼치기</em></span>
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

            <?php if($currentMenuArr['title'] && $breadcrumArr[1]['title']):?>
            <li class="navi_dp1">
                <a href="#" class="dp1"><?php echo $currentMenuArr['title']?> <span class="sub_drop bg"><em class="blind">대분류 <?php echo $currentMenuArr['title']?> 하위 메뉴 펼치기</em> </span></a>
                
                <ul class="subNav2nd">
                    <?php 
                        for($j=0; $j<count($nav2nd); $j++):
                            if(substr($breadcrumArr[1]['mCode'],0,2) == substr($nav2nd[$j]['mCode'],0,2)):
                            //if(substr($currentMenuArr['mCode'],0,4) == $nav2nd[$j]['mCode']):
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
        <div class="sub_vg_title" style="display: block">
            <?php if($currentPrevArr['url']):?>
            <!-- <a href="<?php echo $currentPrevArr['url']?>" class="sub_arrow sub_left_arrow">&lt; </a> -->
            <?php endif;?>


            <h2 class="title"><?php //echo get_head_title($g5['title']); ?>
                <?php 

                        $level = count($breadcrumArr)-1;
                        $titleChk = true;
                        for($b=$level; $b>=0; $b--):

                            if($breadcrumArr[$b]['title']): 
                                echo $breadcrumArr[$b]['title']; 
                                $titleChk = false;
                                break;
                            endif;
                        endfor;

                        if ($titleChk === true) {
                            if (function_exists('get_head_title')) {
                                echo get_head_title($g5['title']);
                            }
                        }


                    ?>  


            </h2>

            <?php if($currentNextArr['url']):?>
            <!-- <a href="<?php echo $currentNextArr['url']?>" class="sub_arrow sub_right_arrow">&gt;</a> -->
            <?php endif;?>

        </div>
        <!-- <div class="sub_vg_title_line"></div> -->
    </div>
<?php } ?>