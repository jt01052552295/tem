<?php if (!defined("_INDEX_")) { ?>
        </div><!-- .contents_wrap -->
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->


<footer id="footer" class="k_wrap">
    <div class="k_container type_center">
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
                사업자등록번호 605-81-65281<br/>
                부산광역시 진구 황령대로 69 (전포3동 362-66번지)&nbsp;&nbsp;|&nbsp;&nbsp;TEL : 051-819-1614, 051-804-1614&nbsp;&nbsp;|&nbsp;&nbsp;FAX : 051-808-3255
                <div class="copyright"><p>Copyright © WOOJU GASKET CO.,LTD. All Rights Reserved.</p></div>
            </address>
            
            <a href="http://www.koreaind.com" target="_blank" class="copy_link">
                <small>powered by</small> 한국산업정보
            </a>
        </div>


    </div>
</footer>