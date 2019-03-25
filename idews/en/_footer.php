<?php if (!defined("_INDEX_")) { ?>
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->


<footer id="footer">
    <div class="copyright_wrap">
        <div class="goTop">
            <a href="#" class="top_btn"><i class="fas fa-angle-up"></i><span class="sr-only"><?php echo $infodu['lang']['common']['txt03']?></span></a>
        </div>
        <script>
        $('.top_btn').click(function(e){
            e.preventDefault;
            $('html, body').animate({ scrollTop : 0 }, 500 );
        });
        </script>

        <div class="copy_logo"><img src="<?php echo G5_LANG_IMG_URL?>/copy_logo.png" /></div>
        <address class="basicInfo pc">
            <?php echo $infodu['lang']['common']['txt01']?><br/>
            <small><?php echo $infodu['lang']['common']['txt02']?></small>
        </address>

        <address class="basicInfo mobile">
            <?php echo $infodu['lang']['common']['txt10']?><br/>
            <small><?php echo $infodu['lang']['common']['txt02']?></small>
        </address>


    </div>
</footer>