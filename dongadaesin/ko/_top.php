    <div id="message_box" data-display="">
        <div class="k_container type_center">
            <div class="box_txt img"><img src="<?php echo G5_LANG_IMG_URL?>/topBanner_ic.png" /></div>
            <div class="box_txt"><p><?php echo  $infodu['lang']['common']['top01']?></p></div>
            <div class="box_txt tel"><p><?php echo  $infodu['lang']['common']['top02']?></p></div>
            <div class="box_txt"><a href="#" class="tran-animate"><?php echo  $infodu['lang']['common']['top03']?></a></div>

            <div class="message_box_close">
                <a href="#" id="message_box_close_btn" class="">
                    <span class="line1 tran-animate"></span>
                    <span class="line2 tran-animate"></span>
                </a>                
            </div>
        </div>
    </div>
<header id="header" class="main" >



    <div class="header_wrap tran-animate" id="header_height">
        
        <div class="headerBox">           
            <div class="cs" id="totalMenu">
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

            <div class="logo"><h1><a href="<?php echo G5_LANG_URL?>"><span class="blind"><?php echo $infodu['title']?></span></a></h1></div>

            <div class="right">
                <ul> 
                    <?php if($is_member){?>
                    <li><a href="<?php echo G5_BBS_URL?>/member_confirm.php?url=register_form.php">정보수정</a></li>
                    <li><a href="<?php echo G5_BBS_URL?>/logout.php">로그아웃</a></li>
                    <?php }else{?>
                    <li><a href="<?php echo G5_LANG_URL?>/mail/mail.php" class="login">로그인</a></li>
                    <li><a href="<?php echo G5_LANG_URL?>/mail/mail.php">회원가입</a></li>
                    <?php }?>
                    <li><a href="<?php echo G5_LANG_URL?>/mail/mail.php">오시는길</a></li>
                    
                </ul>
            </div>

        </div>


        <div class="header_inner"> 
           <?php include_once(G5_LANG_PATH.'/_menu_drop.php'); ?>
           <!-- <div class="lang">
                <a href="#" id="lang_btn">LANG <i class="fas fa-angle-down"></i></a>
           </div>  -->

        </div>
            
        <!--모바일메뉴!-->
        <div id="m_menu">
            <a href="#"><i class="fas fa-bars fa-2x"></i></a>
        </div>
         <?php include_once(G5_LANG_PATH.'/_menu_drop_mobile.php'); ?>                     
        
         <div class="subMenuBg">&nbsp;</div>
    </div> 
</header>
<div id="header_overlay"></div>
<!-- 전체메뉴 -->
<?php include_once(G5_LANG_PATH.'/_menu_total.php'); ?>


<?php if (!defined("_INDEX_")) { ?>
<div class="sub_vg" style="display: none">
    <div id="vg_con">
        <h2><?php echo $breadcrumArr[0]['title'];?></h2>
        <p><?php echo $infodu['lang']['sub']['common'][0]?></p>
    </div>
</div>


<div class="k_wrap pc_only" id="tabMiddleWrap" style="display: none">

    <div class="ssnav montserrat" >
          <ul>
                <!-- <li style="width: 25%;"><a href="#" class=""><span>Drilling Machine</span></a></li>
                <li style="width: 25%;"><a href="#"><span>Bandsaw</span></a></li>
                <li style="width: 25%;"><a href="#" class="active"><span>Bevelling Machine</span></a></li>
                <li style="width: 25%;"><a href="#"><span>Shot Blast</span></a></li> -->

                <?php 
                    $total = 0;
                    for($j=0; $j<count($nav2nd); $j++):
                        if(substr($nav2nd[$j]['mCode'],0,2) == $breadcrumArr[0]['mCode']):
                            $total++;
                        endif;
                    endfor;
                ?>

                <?php for($j=0; $j<count($nav2nd); $j++):?>
                    <?php if(substr($nav2nd[$j]['mCode'],0,2) == $breadcrumArr[0]['mCode']): ?>
                        <?php
                            
                            if($total>0){
                                $widthSize = 100 / $total;
                            } else {
                                $widthSize = 100;
                            }

                            $submenu_r = '';
                            if($currentMenuArr['mCode'] == $nav2nd[$j]['mCode']):
                                $submenu_r = 'active';
                            endif;
                        ?>


                        <li style="width:<?php echo $widthSize?>%"><a href="<?php echo $nav2nd[$j]['url']?>" class="<?php echo $submenu_r?>"><span><?php echo $nav2nd[$j]['title']?></span></a></li>
                    <?php endif; ?>
                <?php endfor; ?>
            </ul>
    </div>


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


<div class="subNavWrap" id="sub_navi" style="display: block">
    <div class="subNavInner">
        <a href="<?php echo G5_LANG_URL?>"  class="btn_home"><span class="blind">홈으로 이동</span></a>
        <ul class="subNav1st">
            <li class="navi_dp1">
                <a href="#" class="dp1">
    

                    <?php 
                         if($breadcrumArr[0]['title']): echo $breadcrumArr[0]['title'];
                         else: 
                            if (function_exists('get_head_title')) {
                                echo get_head_title($g5['title']);
                            }
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

            <?php if($breadcrumArr[1]['title']):?>
            <li class="navi_dp1">
                <a href="#" class="dp1"><?php echo $breadcrumArr[1]['title']?> <span class="sub_drop bg"><em class="blind">대분류 <?php echo $breadcrumArr[1]['title']?> 하위 메뉴 펼치기</em> </span></a>
                
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
            <?php if($breadcrumArr[2]['title']):?>
            <li class="navi_dp1">
                <a href="#" class="dp1"><?php echo $breadcrumArr[2]['title']?> <span class="sub_drop bg"><em class="blind">대분류 <?php echo $breadcrumArr[2]['title']?> 하위 메뉴 펼치기</em> </span></a>
                
                <ul class="subNav2nd" data-attr="<?php echo substr($breadcrumArr[2]['mCode'],0,4)?> - <?php echo substr($nav3rd[$j]['mCode'],0,4)?>">
                    <?php 
                        for($j=0; $j<count($nav3rd); $j++):
                            if(substr($breadcrumArr[2]['mCode'],0,4) == substr($nav3rd[$j]['mCode'],0,4)):
                            //if(substr($currentMenuArr['mCode'],0,4) == $nav2nd[$j]['mCode']):
                                $cls = "";
                                $access = "이동";
                                if($breadcrumArr[2]['mCode'] == $nav3rd[$j]['mCode']): 
                                    $cls = "active"; 
                                    $access = "메뉴 활성화";
                                endif;
                    ?>
                                    <li class="navi_dp2 <?php echo $cls?>"><a href="<?php echo $nav3rd[$j]['url']?>" title="대분류 <?php echo $breadcrumArr[1]['title']?> 하위 메뉴 <?php echo $i?>번 - <?php echo $nav3rd[$j]['title']?> <?php echo $access?>"><?php echo $nav3rd[$j]['title']?></a></li>
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


    <div class="left_wrap" style="display: none">
        <?php include_once(G5_LANG_PATH.'/_sidebar.php'); ?>
    </div>

    <div class="contents_wrap noSidebar">
        <div class="title_wrap">    
            <div class="sub_vg_title">
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
            <div class="breadcrum">
                <?php 
                    $breadcrum_str = '';
                    for($b=0; $b<count($breadcrumArr); $b++):
                        $breadcrum_str .= '&nbsp;&nbsp;&gt;&nbsp;&nbsp;'.$breadcrumArr[$b]['title'];
                    endfor;
                ?>
                Home<?php echo $breadcrum_str;?>
            </div>
        </div>
<?php } ?>     