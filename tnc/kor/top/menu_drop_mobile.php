<div class="m_menu_wrap" id="amenu">
    <div class="dim"></div>
    <div class="m_menu_bg"></div>
    <div class="m_menu_h">
        <div class="nav-top">
            <div class="btn-x">
                <a href="#"><i class="fas fa-times fa-2x"></i></a>
            </div>
        </div>
        <ul class="m-nav">
             <?
                for($i = 1; $i < sizeof ( $order_category ); $i ++) { 
            ?>
            <li>
                <a href="#" class="mName <?php echo ($i==1)?'on':'';?>"><?php echo $cate_name[$order_category[$i]]?> <i class="fas fa-angle-down"></i></a>

                <?php if ($page_1_name[$order_category[$i]][1]){ ?>
                <ul class="sub_menu sm01" >
                    <?php for ($k=1 ; $k < sizeof($page_1_name[$order_category[$i]]) ; $k++) { ?>
                    <li><a href="<?=KI_URL.$order_category[$i]?>/<?=$page_1_html[$order_category[$i]][$k]?>.html"><?=$page_1_name[$order_category[$i]][$k]?></a></li>
                    <?php }?>
                </ul>
                <?php }?>
            </li>
            <? } ?>
        </ul>
        <div class="m_lang">
            <ul>
                <li><a href="#" class="on">KOR</a></li>
                <li><a href="#">ENG</a></li>
            </ul>
        </div>
        <p>2018 © TNC Global. <br>ALL RIGHTS RESERVED.</p>
    </div>
</div>