<?php if (!defined("_INDEX_")) { ?>
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->


<footer id="footer">

    <div class="copyright_wrap">
        <div class="goTop">
            <a href="#" class="top_btn"><i class="fas fa-angle-up"></i><span class="sr-only">위로</span></a>
        </div>
        <script>
        $('.top_btn').click(function(e){
            e.preventDefault;
            $('html, body').animate({ scrollTop : 0 }, 500 );
        });
        </script>

        <div class="copy_inner">
            <div class="copy_logo"><img src="<?php echo G5_LANG_IMG_URL?>/copy_logo.png" /></div>
            <div class="copy_addr">
                <p>
                    
                </p>
            </div>

            <div class="basicInfo pc">
                <p>대표 : 박  상 순<br>TEL : 055-852-3055  /  FAX : 055-958-3399<br/>ADD : 경남 사천시 축동면 화당산로224</p>
                <p class="copy_txt">Copyright&copy; SAMSAM CORP. All rights reserved.</p>
            </div>

        </div>

        <div class="copy_menu">
            <div class="sitemap_tit"><h4>SITE MAP</h4></div>
            <?php for($i=0; $i<count($nav1st); $i++): ?>
            <div class="sitemap">
                <div class="sitemap_cate"><a href="<?php echo $nav1st[$i]['url']?>"><span class="sitemap_cate_text"><?php echo $nav1st[$i]['title']?></span></a></div>
                <div class="sitemap_text">
                    <ul>
                        <?php for($j=0; $j<count($nav2nd); $j++):?>
                        <?php if(substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']): ?>
                            <li><a href="<?php echo $nav2nd[$j]['url']?>"><?php echo $nav2nd[$j]['title']?></a></li>
                        <?php endif;?>
                        <?php endfor; ?>

                    </ul>

                </div>
            </div>
            <?php endfor; ?>
        </div>

        <a href="http://www.koreaind.com" target="_blank" class="copy_link">
            <small>powered by</small> 한국산업정보
        </a>



    </div>
</footer>