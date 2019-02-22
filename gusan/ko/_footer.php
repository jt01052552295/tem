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

        <div class="copy_logo"><img src="<?php echo G5_LANG_IMG_URL?>/copy_logo.png" border="0"/></div>
        <address class="font_malgun">
            <?php echo $infodu['lang']['index']['footer'][0]?><br/>
            <?php echo $infodu['lang']['index']['footer'][1]?>
        </address>

        <div class="copy_by">
            <a href="http://www.koreaind.com" target="_blank" class="copy_link">
                <small>powered by</small> 한국산업정보
            </a>
        </div>
    </div>

</footer>