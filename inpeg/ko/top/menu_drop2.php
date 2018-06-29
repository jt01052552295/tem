<div id="gnb">
    <nav>
        <ul class="gnb_list clear">
            <?for($i = 1; $i < sizeof ( $order_category ); $i ++) { ?>
            <li class="nav1">
                <a href="<?=KI_URL.$order_category[$i]?>/<?=$page_1_html[$order_category[$i]][0]?>.html" class="menu_link"><?php echo $cate_name[$order_category[$i]]?></a>
                <?php if ($page_1_name[$order_category[$i]][1]){ ?>
                <ul class="subNavi">
                    <?php for ($k=1 ; $k < sizeof($page_1_name[$order_category[$i]]) ; $k++) { ?>
                    <li><a href="<?=KI_URL.$order_category[$i]?>/<?=$page_1_html[$order_category[$i]][$k]?>.html"><?=$page_1_name[$order_category[$i]][$k]?></a></li>
                    <?php }?>
                </ul>
                <?php }?>
            </li>
            <? } ?>
        </ul>
    </nav>
</div>