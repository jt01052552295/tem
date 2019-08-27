<?php if (!defined("_INDEX_")) { ?>
        </div><!-- .contents_wrap -->
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->

<footer id="footer" <?php if (!defined("_INDEX_")): ?> class="subFooter" <?php endif; ?> >
    <div class="copyright_wrap">
        <div class="goTop">
            <a href="#" class="top_btn"><i class="fa fa-angle-up" aria-hidden="true"></i><span class="blind"><?php echo  $infodu['lang']['common']['txt03']?></span></a>
        </div>
        <script>
        $(document).ready(function(){
            $('.top_btn').click(function(e){
                e.preventDefault();
                var id = $(this).attr('id');
                $('html, body').animate({scrollTop : 0}, 400);
            }); 
        });
        </script>

        


        <div class="copy_logo"><img src="<?php echo G5_LANG_IMG_URL?>/copy_logo.png" /></div>

       

        <div class="copy_by">
            <address>
                <span class="pc"><?php echo  $infodu['lang']['common']['txt01']?></span>
                <span class="mobile"><?php echo  $infodu['lang']['common']['txt01m']?></span>
            </address>   
            <div class="copyWrap">
                <div class="copyright"><p><?php echo  $infodu['lang']['common']['txt02']?></p></div>
                <a href="http://www.koreaind.com" target="_blank" class="copy_link">
                    <?php echo  $infodu['lang']['common']['txt04']?>        
                </a> 
            </div>      
        </div>





    </div>
</footer>