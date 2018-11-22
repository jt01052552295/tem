<?php if (!defined("_INDEX_")) { ?>
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->






<footer id="footer" <?php if (!defined("_INDEX_")) { ?>class="subFooter"<?php } ?>>
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
        <address>
            경상남도 김해시 주촌면 골든루트로 80-16, 406-19호 (중소기업비지니스센터)  I  TEL : 070-4800-0220  I  FAX : 070-8282-8258<br/>
            Copyright&copy; CRAYON INDUSTRIAL CO., LTD.  All rights reserved.
        </address>


    </div>
</footer>