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
            <div class="copy_logo"><img src="<?php echo G5_LANG_IMG_URL?>/copy_logo.png" border="0"/></div>
            <div class="copy_addr">
                <p>
                    본사 및 공장 : 경기도 양주군 은현면 용암리 73<br/>
                    TEL : 031)862-8181&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FAX : 031)864-4294<br/>
                    E-MAIL : natotrade@daum.net
                </p>
            </div>
            <div class="copy_location">
                <ul>
                    <li><a href="<?php echo G5_LANG_URL?>/company/location.php">서울사무소</a></li>
                    <li><a href="<?php echo G5_LANG_URL?>/company/location.php">중국법인</a></li>
                    <li><a href="<?php echo G5_LANG_URL?>/company/location.php">상해사무소</a></li>
                    <li><a href="<?php echo G5_LANG_URL?>/company/location.php">광주사무소</a></li>
                </ul>
            </div>
        </div>

        <div class="copy_menu">
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


    </div>
    <div class="copy_by">
        <p class="copyright">Copyright&copy; 나토상사(주)  All rights reserved.</p>
        <a href="http://www.koreaind.com" target="_blank" class="copy_link">
            <small>powered by</small> 한국산업정보
        </a>
    </div>
</footer>