<?php if (!defined("_INDEX_")) { ?>
        </div><!-- .contents_wrap -->
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
                경북 경산시 진량읍 대구대로 201 ICC 1311호, 1312호&nbsp;&nbsp;|&nbsp;&nbsp;전화번호 : 053-719-0114&nbsp;&nbsp;|&nbsp;&nbsp;팩스번호 : 053-719-0115
                <div class="copyright"><p>Copyright © JUNGDO TECHNOLOGY All Rights Reserved.</p></div>
            </address>
        </div>


    </div>
</footer>