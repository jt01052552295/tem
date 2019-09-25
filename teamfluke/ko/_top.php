<header class="main" >
    <div class="etc_top" style="display: none">
        <div class="etc_menu">
            <a href="<?php echo G5_LANG_URL?>"><?php echo $infodu['lang']['common']['top01']?></a>
            <a href="<?php echo G5_LANG_URL?>/mail/mail.php"><?php echo $infodu['lang']['common']['top02']?></a>
            <a href="<?php echo G5_LANG_URL?>/customer/sitemap.php"><?php echo $infodu['lang']['common']['top04']?></a>
            <!--  <a href="#" id="lang_btn">Language <i class="fas fa-caret-down"></i></a> &nbsp; -->
            <?php if($is_member){?>
            <a href="<?php echo G5_BBS_URL?>/member_confirm.php?url=register_form.php"><?php echo $infodu['lang']['common']['top06']?></a>
            <a href="<?php echo G5_BBS_URL?>/logout.php"><?php echo $infodu['lang']['common']['top07']?></a>
            <?php }else{?>
            <a href="<?php echo G5_BBS_URL?>/login.php"><?php echo $infodu['lang']['common']['top05']?></a>
            <?php }?>
        </div><!-- etc_menu -->
    </div>
    <div class="header_wrap tran-animate" id="header_height">
        
        <div class="headerBox">

            
            <div id="lang_bg">
                <div class="lang_wrap">
                    <div class="lang_nemo">
                        <div class="lang_semo"></div>
                        <a href="<?php echo G5_LANG_URL?>/ko" class="curr_lang lang_active">
                            KOR 
                            <span></span>
                        </a>
                        <a href="<?php echo G5_LANG_URL?>/en" >
                            ENG
                            <span></span>
                        </a>   
                        <a href="<?php echo G5_LANG_URL?>/cn" >
                            CHN
                            <span></span>
                        </a>                  
                    </div>
                </div>
            </div> 

            <div class="logo"><h1><a href="<?php echo G5_LANG_URL?>"><span class="blind"><?php echo $infodu['title']?></span></a></h1></div>
            <div class="header_inner"> 
               <?php include_once(G5_LANG_PATH.'/_menu_drop.php'); ?>
            </div>
            <div class="lang">
                <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> <span><?php echo $infodu['lang']['common']['phone']?></span></a>
            </div>              
            
        </div>
        <div class="subMenuBg">&nbsp;</div>
    </div> 
</header>


<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/fullPage/dist/fullpage.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/fullPage/dist/fullpage.js"></script>

<?php if (defined("_INDEX_")) { ?>
<script type="text/javascript">
    $(document).ready(function(){

        var animatedFade = 'animated fadeIn';            
        var animatedFadeUp = 'animated fadeInUp';
        var animatedFadeDown = 'animated fadeInDown';
        var animatedFadeLeft = 'animated fadeInLeft';
        var animatedFadeRight = 'animated fadeInRight';
        var animatedEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationend';

        var full_page = $('#fullPage').fullpage({
            
            menu: '#anchor_nav',
            anchors: ['menu1', 'menu2', 'menu3', 'menu4', 'menu5'],
            afterLoad: function(origin, destination, direction){               
               
                $('.section').eq(destination.index).find('.aFadeLt').addClass(animatedFadeLeft)
                $('.section').eq(destination.index).find('.aFadeRt').addClass(animatedFadeRight)
                $('.section').eq(destination.index).find('.aFadeUp').addClass(animatedFadeUp)
                

            }  
        });

    });
</script>
<?php } else {?>
<script type="text/javascript">
    $(document).ready(function(){

        var animatedFade = 'animated fadeIn';            
        var animatedFadeUp = 'animated fadeInUp';
        var animatedFadeDown = 'animated fadeInDown';
        var animatedFadeLeft = 'animated fadeInLeft';
        var animatedFadeRight = 'animated fadeInRight';
        var animatedEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationend';

        var full_page = $('#fullPage').fullpage({
            
            afterLoad: function(origin, destination, direction){               
               
                $('.section').eq(destination.index).find('.aFadeLt').addClass(animatedFadeLeft)
                $('.section').eq(destination.index).find('.aFadeRt').addClass(animatedFadeRight)
                $('.section').eq(destination.index).find('.aFadeUp').addClass(animatedFadeUp)
                

            }  
        });

    });
</script>
 <?php }?>



<div id="wrapper">
    <?php if (defined("_INDEX_")) { ?>
    <div class="anchor_wrap">
        <ul id="anchor_nav">
            <li data-menuanchor="menu1" class="active"><a href="#menu1"><span><?php echo $infodu['lang']['index']['main']['ach01']?></span></a></li>
            <li data-menuanchor="menu2"><a href="#menu2"><span><?php echo $infodu['lang']['index']['main']['ach02']?></span></a></li>
            <li data-menuanchor="menu3"><a href="#menu3"><span><?php echo $infodu['lang']['index']['main']['ach03']?></span></a></li>
            <li data-menuanchor="menu4"><a href="#menu4"><span><?php echo $infodu['lang']['index']['main']['ach04']?></span></a></li>
            <li data-menuanchor="menu5"><a href="#menu5"><span><?php echo $infodu['lang']['index']['main']['ach05']?></span></a></li>
        </ul>
    </div>
    <?php }?>
    
    <div id="fullPage"> 

        <?php if (!defined("_INDEX_")) { ?>
        <div class="sub_vg" style="display: none">
            <div id="vg_con">
                <h2><?php echo $infodu['lang']['common']['subTxt01']?></h2>
                <p><?php echo $infodu['lang']['common']['subTxt02']?></p>
            </div>


            <div class="subNavWrap" id="sub_navi" style="display: block">
                <div class="subNavInner">
                    <div class="subNavInner_bg"></div>
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
        </div>
        <div class="subSection mobile_only"></div>


        <div class="k_wrap " id="tabMiddleWrap" style="display: none">

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








            <div class="title_wrap" style="display: none">    
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