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
                주소 : 울산광역시 중구 성안9길 18 (성안동)  l  전화번호 : 052-248-7500  l  팩스번호 : 052-248-7500
                <div class="copyright"><p>Copyright © 늘푸른사회복지재단 All Rights Reserved.</p></div>
            </address>
            

        </div>


    </div>
</footer>