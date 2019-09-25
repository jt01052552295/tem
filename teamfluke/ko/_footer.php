<?php if (!defined("_INDEX_")) { ?>

<?php } ?>

<!-- 하단 시작 { -->




        <section class="k_wrap section fp-auto-height">
            <footer id="footer">
                <div class="copyright_wrap">
                    <div class="goTop" style="display: none">
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
                    <div class="copy_by2">         
                        <a href="http://www.koreaind.com" target="_blank" class="copy_link"><?php echo $infodu['lang']['common']['txt04']?></a>
                    </div>


                </div>
            </footer>
        </section>

    </div>
</div>