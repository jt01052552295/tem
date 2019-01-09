<header class="main" >
    <div class="header_wrap tran-animate" id="header_height">
        <div class="headerBox">

            <div class="etc_menu">
                <a href="<?php echo G5_URL?>">Home</a> &nbsp;
                <a href="#">Inquiry</a> &nbsp;
                <a href="#">Sitemap</a> &nbsp;
                <a href="#" id="lang_btn">Language <i class="fas fa-caret-down"></i></a> &nbsp;
                <?php if($is_member){?>
                <a href="<?=G5_BBS_URL?>/member_confirm.php?url=register_form.php">정보수정</a> &nbsp;
                <a href="<?=G5_BBS_URL?>/logout.php">Logout</a> &nbsp;
                <?php }else{?>
                <a href="<?=G5_BBS_URL?>/login.php">ADMIN</a> &nbsp;
                <?php }?>
            </div><!-- etc_menu -->
            <div id="lang_bg">
                <div class="lang_wrap">
                    <div class="lang_nemo">
                        <div class="lang_semo"></div>
                        <a href="<?php echo G5_URL?>/ko" class="curr_lang lang_active">
                            KOR 
                            <span></span>
                        </a>
                        <a href="<?php echo G5_URL?>/en" >
                            ENG
                            <span></span>
                        </a>               
                    </div>
                </div>
            </div> 

            <div class="logo"><h1><a href="<?php echo G5_URL?>"><span class="blind"><?php echo $infodu['title']?></span></a></h1></div>
            <div class="header_inner"> 
               <?php include_once(G5_LANG_PATH.'/_menu_drop.php'); ?>
            </div>             
            
        </div>
        <div class="subMenuBg">&nbsp;</div>
    </div> 
</header>



<?php if (!defined("_INDEX_")) { ?>
<div class="sub_vg">
    <div id="vg_con">
        <p>samjin steel</p>
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

        </div>

        <?php
            $tabCnt = 0;
            for($j=0; $j<count($nav2nd); $j++):
                if(substr($nav2nd[$j]['mCode'],0,2) == $breadcrumArr[0]['mCode']):
                    $tabCnt++;
                endif;
            endfor;
        ?>

        <div class="vg_sub_area" data-cnt="<?php echo ($tabCnt==1)?'hidden':''; ?>">
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