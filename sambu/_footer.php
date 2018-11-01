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

        <div class="copy_logo"><img src="<?php echo KI_IMG_URL?>/copy_logo.png" border="0"/></div>
        <address>
            부산광역시 사상구 사상로 349번길 22  l  전화번호 : 051-301-1415  l  팩스번호 : 051-304-1587<br/>
            Copyright&copy; SAMBU RUBBER INDUSTRIAL CO., LTD.  All rights reserved.
        </address>


    </div>
</footer>

<?php
    // echo "<!-- <pre _GET>\n";print_r($_GET);echo "\n</pre> -->";
    // echo "<!-- <pre _POST>\n";print_r($_POST);echo "\n</pre> -->";
    // echo "<!-- <pre _SESSION>\n";print_r($_SESSION);echo "\n</pre> -->";
    // echo "<!-- <pre _COOKIE>\n";print_r($_COOKIE);echo "\n</pre> -->";
    // echo "<!-- <pre _SERVER>\n";print_r($_SERVER);echo "\n</pre> -->";
    //echo "<!-- <pre currentMenuArr>\n";print_r($currentMenuArr);echo "\n</pre> -->";
?>
</body>
</html>
