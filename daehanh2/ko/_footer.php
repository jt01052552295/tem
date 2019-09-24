<?php if (!defined("_INDEX_")) { ?>
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->


<footer id="footer">
    <div class="copyright_wrap">
        <div class="goTop">
            <a href="#" class="top_btn"><i class="fa fa-angle-up"></i><span class="blind"><?php echo $infodu['lang']['common']['txt03']?></span></a>
        </div>
        <script>
        $('.top_btn').click(function(e){
            e.preventDefault;
            $('html, body').animate({ scrollTop : 0 }, 500 );
        });
        </script>

        <div class="copy_logo"><img src="<?php echo G5_LANG_IMG_URL?>/copy_logo.png" border="0"/></div>
        <address class="font_malgun">
            <?php echo $infodu['lang']['common']['txt01']?><br/>
            <?php echo $infodu['lang']['common']['txt02']?>
        </address>

        <div class="copy_cert">
            <ul class="grid3">
                <li><img src="<?php echo G5_LANG_IMG_URL?>/copyright_cert01.png" alt=""/></li>
                <li><img src="<?php echo G5_LANG_IMG_URL?>/copyright_cert02.png" alt=""/></li>
                <li><img src="<?php echo G5_LANG_IMG_URL?>/copyright_cert03.png" alt=""/></li>
            </ul>
        </div>


    </div>
</footer>