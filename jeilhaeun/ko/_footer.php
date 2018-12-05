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
                경남 통영시  055-648-0776, 055-648-0777 / FAX : 055-648-0774
                <div class="copyright"><p>Copyright © 통영 사량도 여객선 All Rights Reserved.</p></div>
            </address>
            
            <a href="http://www.koreaind.com" target="_blank" class="copy_link">
                <small>powered by</small> 한국산업정보
            </a>
        </div>


    </div>
</footer>