<?php if (!defined("_INDEX_")) { ?>
        </div><!-- .contents_wrap -->
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->


<footer id="footer" <?php if (!defined("_INDEX_")): ?> class="subFooter" <?php endif; ?> >
    <div class="copyright_wrap">
        <div class="goTop">
            <a href="#" class="top_btn"><i class="fas fa-angle-up"></i><span class="sr-only">위로</span></a>
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
                202, 119-1, Kkotbawi-ro, Dong-gu, Ulsan, Republic of Korea / TEL : +82-52-201-0283 / FAX : +82-52-234-0283
                <div class="copyright"><p>Copyright © JISAN ENGINEERING CO.,LTD. All Rights Reserved.</p></div>
            </address>
            
            <a href="http://www.koreaind.com" target="_blank" class="copy_link">
                <small>powered by</small> KOREAIND
            </a>
        </div>


    </div>
</footer>