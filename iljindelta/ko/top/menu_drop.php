<div class="menu_aid">
    <div class="etc_menu">
        <?php if($is_member){?>
        <a href="<?=ROOT_URL?>/board/bbs/member_confirm.php?url=register_form.php">정보수정</a>
        <a href="<?=ROOT_URL?>/board/bbs/logout.php">LOGOUT</a>
        <?php }else{?>
        <a href="<?=ROOT_URL?>/board/bbs/login.php">ADMIN</a>
        <?php }?>
        <a href="<?=KI_URL?>community/inquiry.html">고객센터</a>
        <a href="<?=KI_URL?>customer/sitemap.html">SITEMAP</a>
        <a href="#" id="lang_btn" class="qna"><i class="fas fa-globe"></i> 한국어</a>
    </div><!-- etc_menu -->
</div>


<nav class="head">
    <div id="lang_bg">
        <div class="lang_wrap">
            <div class="lang_nemo">
                <div class="lang_semo"></div>
                <a href="/ko/" class="curr_lang lang_active">
                    KOR 
                    <span></span>
                </a>
                <a href="/chn/" class="">
                    CHN 
                    <span></span>
                </a>
                <a href="/jap/" class="">
                    JAP 
                    <span></span>
                </a>
                <a href="/en/" >
                    ENG
                    <span></span>
                </a>                    
            </div>
        </div>
    </div>

    <div class="logo"><h1><a href="<?=KI_URL?>" title="홈으로 가기"><img src="<?=KI_URL?>images/logo.png" alt="일진델타" /></a></h1></div>
    <div class="nav">
        <ul>
            <? for($i = 1; $i < sizeof ( $order_category ); $i ++) { ?>
            <li class="nav2 <?php if ($code_high_no == $i) { ?> selected_item<?php }?>"><a href="<?=KI_URL.$order_category[$i]?>/<?=$page_1_html[$order_category[$i]][0]?>.html"><?php echo $cate_name[$order_category[$i]]?><span class="line motion"></span></a>
                <?php if ($page_1_name[$order_category[$i]][1]){ ?>
                    <ul class="subNavi">
                    <?php for ($k=1 ; $k < sizeof($page_1_name[$order_category[$i]]) ; $k++) { ?>
                        <li>
                            <a href="<?=KI_URL.$order_category[$i]?>/<?=$page_1_html[$order_category[$i]][$k]?>.html"><?=$page_1_name[$order_category[$i]][$k]?></a>
                        </li>
                        
                    <?php }?>
                    </ul>
                <?php }?>
            </li>
            <? } ?>

        </ul>
    </div>
</nav><!-- head -->
<div class="subMenuBg"></div>