<nav class="head">
    <div class="etc_menu">
        <a href="<?=KI_URL?>index.html">HOME</a> &nbsp;
        <a href="<?=KI_URL?>community/inquiry.html">고객문의</a> &nbsp;
        <a href="<?=KI_URL?>customer/sitemap.html">SITEMAP</a> &nbsp;
        <a href="#" id="lang_btn">LANGUAGE <i class="fas fa-caret-down"></i></a> &nbsp;
        <?php if($is_member){?>
        <a href="<?=ROOT_URL?>/board/bbs/member_confirm.php?url=register_form.php">정보수정</a> &nbsp;
        <a href="<?=ROOT_URL?>/board/bbs/logout.php">LOGOUT</a> &nbsp;
        <?php }else{?>
        <a href="<?=ROOT_URL?>/board/bbs/login.php">ADMIN</a> &nbsp;
        <?php }?>
    </div><!-- etc_menu -->
    <div id="lang_bg">
        <div class="lang_wrap">
            <div class="lang_nemo">
                <div class="lang_semo"></div>
                <a href="/ko/" class="curr_lang lang_active">
                    KOR 
                    <span></span>
                </a>
                <a href="/en/" >
                    ENG
                    <span></span>
                </a>                    
            </div>
        </div>
    </div>
    <div class="logo"><h1><a href="/" title="홈으로 가기"><img src="<?=KI_URL?>images/logo.png" alt="(주)인펙비전" /></a></h1></div>
    <div class="nav">
        <ul>
            <? for($i = 1; $i < sizeof ( $order_category ); $i ++) { ?>
            <li class="nav2"><a href="<?=KI_URL.$order_category[$i]?>/<?=$page_1_html[$order_category[$i]][0]?>.html"><?php echo $cate_name[$order_category[$i]]?><span class="line motion"></span></a>
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