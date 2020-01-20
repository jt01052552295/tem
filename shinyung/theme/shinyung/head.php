<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    <div id="tnb">
    	<div class="inner">
			<ul id="hd_qnb">
               

                <li><a href="<?php echo G5_URL ?>"><?php echo $infodu['lang']['common']['top01']?></a></li>
                <li><a href="<?php echo G5_URL ?>/mail/mail.php"><?php echo $infodu['lang']['common']['top02']?></a></li>
                <li class="last"><a href="<?php echo G5_PAGE_URL; ?>/sitemap.php"><?php echo $infodu['lang']['common']['top03']?></a></li>
                <!-- <li><a href="#none" id="addFavorite"><?php echo $infodu['lang']['common']['top04']?></a></li> -->

                <script>
                        $.fn.addFavorite = function(){
                            var bookmarkURL = window.location.href;
                            var bookmarkTitle = document.title;
                            var triggerDefault = false;

                            if ('addToHomescreen' in window && addToHomescreen.isCompatible) {
                              // Mobile browsers
                              //addToHomescreen({ autostart: false, startDelay: 0 }).show(true);
                            } else if (window.sidebar && window.sidebar.addPanel) {
                                // Firefox version < 23
                                window.sidebar.addPanel(bookmarkTitle, bookmarkURL, '');
                            } else if ((window.sidebar && (navigator.userAgent.toLowerCase().indexOf('firefox') > -1)) || (window.opera && window.print)) {
                                // Firefox version >= 23 and Opera Hotlist
                                var $this = $(this);
                                $this.attr('href', bookmarkURL);
                                $this.attr('title', bookmarkTitle);
                                $this.attr('rel', 'sidebar');
                                $this.off(e);
                                triggerDefault = true;
                            } else if (window.external && ('AddFavorite' in window.external)) {
                                // IE Favorite
                                window.external.AddFavorite(bookmarkURL, bookmarkTitle);
                                triggerDefault = true;
                            } else {
                                // WebKit - Safari/Chrome
                                alert((navigator.userAgent.toLowerCase().indexOf('mac') != -1 ? 'Cmd' : 'Ctrl') + ' ' + "<?php echo $infodu['lang']['common']['bookmark'] ?>");
                                triggerDefault = true;
                            }

                            return triggerDefault;

                        };

                        $('#addFavorite').on('click', function(e) {
                            e.preventDefault();
                            var device = navigator.userAgent.toLowerCase();
                            var result = $.fn.addFavorite();
                            if(!result){
                                alert('error..')
                            }
                            // if(device.indexOf('android') != -1){
                            
                            // } else {
                            
                            // }
                            
                        });

                </script>

                <?php if ($is_admin) {  ?>
                <!-- <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_MASTER_URL); ?>"><?php echo $infodu['lang']['common']['top07']?></a></li> -->
                <!-- <li><a href="<?php echo G5_BBS_URL ?>/logout.php"><?php echo $infodu['lang']['common']['top08']?></a></li> -->
                <?php } else {  ?>
                <!-- <li><a href="<?php echo G5_BBS_URL ?>/login.php"><?php echo $infodu['lang']['common']['top05']?></a></li> -->
                <?php }  ?>

	        </ul>
		</div>
    </div>
    
    <div id="hd_wrapper">

        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_THEME_IMG_URL ?>/logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>
    
        <nav id="gnb">
            <h2>메인메뉴</h2>
            <div class="">
                <ul class="navLst"> 
                    <?php 
                            // /language/언어별.menu.php 참고
                        ?>
                        <?php foreach($nav_datas as $menu){ ?>

                            <?php 
                                $on = '';
                                if( $menu['mCode'] == $breadcrumArr[0]['mCode']): 
                                    $on = '';
                                endif;
                            ?>
                        
                            <li><a href="<?php echo $menu['url']?>" class="menu_link  <?php echo $on?>"><span><?php echo $menu['title']?></span></a>

                                <?php
                                  // if(false):
                                  if(count($menu['items'])>0): // 2차
                                    $k=0;
                                    echo '<ul class="subNavi">'.PHP_EOL;
                                    foreach($menu['items'] as $subMenu):
                                ?>
                                        <li><a href="<?php echo $subMenu['url']?>"><span><?php echo $subMenu['title']?></span></a></li>
                                <?php
                                    endforeach;
                                    echo '</ul>'.PHP_EOL;
                                  endif;    
                                ?>

                            </li>

                        <?php }?>   
                </ul>
            </div>
        </nav>   
        
    </div>
    <?php if(defined('_INDEX_')) { ?>
        <script src="<?php echo G5_THEME_JS_URL ?>/bxslider/dist/jquery.bxslider.js?ver=<?php echo G5_JS_VER; ?>"></script>
        <link rel="stylesheet" href="<?php echo G5_THEME_JS_URL ?>/bxslider/dist/jquery.bxslider.main.css?ver=<?php echo G5_CSS_VER; ?>">


        <div class="vg_inner">
            <ul class="main-slider">               
                <li class="main-slider-li" style="background-image: url(<?php echo G5_THEME_IMG_URL?>/vg01.jpg);"></li>
                <li class="main-slider-li" style="background-image: url(<?php echo G5_THEME_IMG_URL?>/vg01.jpg);"></li>
                <li class="main-slider-li" style="background-image: url(<?php echo G5_THEME_IMG_URL?>/vg01.jpg);"></li>
            </ul>

            <div id="main-bx-pager" >
                <ul>
                    <li> <a data-slide-index="0" href="" class="active"><span class="blind">1</span></a></li>
                    <li> <a data-slide-index="1" href="" class=""><span class="blind">2</span></a></li>
                    <li> <a data-slide-index="2" href="" class=""><span class="blind">3</span></a></li>
                   
                </ul>
            </div> 

            <div class="vg_box">
                <div class="vg_title">
                    <h2 class=""><?php echo $infodu['lang']['common']['vg01']?></h2>
                    <p class=""><?php echo $infodu['lang']['common']['vg02']?></p>
                </div>
                <div class="vg_item"> <img src="<?php echo G5_THEME_IMG_URL?>/vg_item.png" /> </div>
            </div>

        </div>
        <script>
            $(document).ready(function(){
                var mainSlider = $('.main-slider').bxSlider({
                    auto: true,
                    mode:'fade',
                    touchEnabled: false, 
                    infiniteLoop: true,
                    wrapperClass: 'main-wrapper',
                    autoControls: false,
                    adaptiveHeight: true,
                    pager:true,
                    pagerCustom: '#main-bx-pager',
                    speed:500,
                    controls: true,
                    prevSelector: '#main-slider-prev',
                    nextSelector: '#main-slider-next',
                });
                $('#main-slider-prev a, #main-slider-next a').click(function(){
                    mainSlider.stopAuto();
                    mainSlider.startAuto();
                });
            });
        </script>

        
    <?php } else { ?>
        <div class="hd_box sub subVg<?php echo $breadcrumArr[0]['mCode'];?>">
            <div class="sub_vg_title">
                <h2><?php echo $breadcrumArr[0]['subTitle'];?></h2>
                <p><?php echo $infodu['lang']['common']['subVgText']?></p>
            </div>
        </div>
    <?php } ?>
     
    
    
</div>
<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">

    <?php if (!defined('_INDEX_')) { ?>
            <div class="subNavWrap" id="sub_navi">
                <div class="subNavInner">
                    <a href="<?php echo G5_URL?>"  class="btn_home"><span class="">HOME</span></a>

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
                                <span class="sub_drop bg tran-animate"><em class="blind">대분류 메뉴 펼치기</em></span>
                            </a>
                            <ul class="subNav2nd">
                                <?php 
                                    foreach($nav_datas as $menu):
                                            $cls = "";
                                            $access = "이동";
                                            if($breadcrumArr[0]['mCode'] == $menu['mCode']): 
                                                $cls = "active"; 
                                                $access = "메뉴 활성화중";
                                            endif;
                                
                                ?>
                                            <li class="navi_dp2 <?php echo $cls?>">
                                                <a href="<?php echo $menu['url']?>" title="대분류  메뉴 <?php echo $i?>번 - <?php echo $menu['title']?> <?php echo $access?>">
                                                    <?php echo $menu['title']?>
                                                </a>
                                            </li>
                                <?php 
                                    endforeach; 
                                ?>
                            </ul>
                        </li>
                        <?php if($breadcrumArr[1]['title']):?>
                        <li class="navi_dp1">
                            <a href="#" class="dp1"><?php echo $breadcrumArr[1]['title']?> <span class="sub_drop bg tran-animate"><em class="blind">대분류 <?php echo $breadcrumArr[1]['title']?> 하위 메뉴 펼치기</em> </span></a>
                            
                            <ul class="subNav2nd">
                                <?php 
                                    foreach($nav_datas as $menu):
                                        if(count($menu['items'])>0):
                                            foreach($menu['items'] as $subMenu):
                                                if(substr($breadcrumArr[1]['mCode'],0,2) == substr($subMenu['mCode'],0,2)):
                                                    $cls = "";
                                                    $access = "이동";
                                                    if($breadcrumArr[1]['mCode'] == $subMenu['mCode']): 
                                                        $cls = "active"; 
                                                        $access = "메뉴 활성화";
                                                    endif;
                                    ?>
                                                    <li class="navi_dp2 <?php echo $cls?>">
                                                        <a href="<?php echo $subMenu['url']?>" title="대분류 <?php echo $breadcrumArr[0]['title']?> 하위 메뉴 <?php echo $i?>번 - <?php echo $subMenu['title']?> <?php echo $access?>">
                                                            <?php echo $subMenu['title']?>
                                                        </a>
                                                    </li>
                                    <?php   
                                                endif;
                                            endforeach;
                                        endif;
                                    endforeach;
                                ?>
                            </ul>
                            
                            
                        </li>
                        <?php endif; ?> 
                    </ul>




                    <!-- //navi_list -->
                </div>
            </div>

    <?php } ?>
    

    <div id="container_wr" class="<?php 
            if(defined("_INDEX_")):
                echo "main";
            elseif(defined("_WIDE_CONTENTS_")):
                echo "wide_contents";
            else:
                echo "";
            endif;
        ?>"
    >
   
    <div id="aside" class="<?php echo (!defined("_INDEX_"))?'sub':'main'; ?>" style="display: none">
        <?php echo latest("basic_notice", "notice", 5, 25); ?>      
    </div>


    <div id="container" class="noSide <?php echo (!defined("_INDEX_"))?'sub':'main'; ?>">
        <?php if (!defined("_INDEX_")) { ?>
            <h2 id="container_title"><span>
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
            </span></h2>
        <?php } ?>

