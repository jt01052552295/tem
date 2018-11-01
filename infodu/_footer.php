<?php if (!defined("_INDEX_")) { ?>
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->

<div class="foot_content_wrap">
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
    
    <div class="mapBox" >
        <iframe src="http://infodu.co.kr/map/infodu.php"></iframe>
    </div>


</div>


<div id="footer_wrap">
    <div class="foot_content_inner">
        <div class="ft_addr">
            <div class="addr">
                대표 : 김형성  ㅣ  사업자등록번호 : 607-51-77864   <a href="http://ftc.go.kr/info/bizinfo/communicationView.jsp?apv_perm_no=2013330007930200222&area1=&area2=&currpage=1&searchKey=04&searchVal=6075177864&stdate=&enddate=" target="_blank" class="adm">[ 사업자정보확인 ]</a>  ㅣ  통신판매업신고번호 : 제2013-부산동래-0221호<br class="pc_only" />
                부산광역시 동래구 중앙대로 1291-1 상주빌딩 5F  ㅣ  TEL : 051-504-6877  ㅣ  FAX : 051-506-5526  
            </div>
        </div>

        <div class="copyright_wrap">
            <p class="copyright">Copyright © 한국산업정보사 ALL RIGHTS RESERVED</p>
        </div>

        <div class="footer_copy ">
            <a href="http://www.sbc.or.kr/sbc/index_info/index_info_01.html" target="_blank"><img src="<?php echo KI_IMG_URL?>/copy01.png" alt="" /></a>
            <a href="https://www.exportvoucher.com/portal/sample/main" target="_blank"><img src="<?php echo KI_IMG_URL?>/copy02.png" alt="" /></a>
            <a href="http://kidp.or.kr" target="_blank"><img src="<?php echo KI_IMG_URL?>/copy03.png" alt="" /></a>
            <a href="https://www.tongro.co.kr/" target="_blank"><img src="<?php echo KI_IMG_URL?>/copy04.png" alt="" /></a>
        </div>
    </div>
</div>

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
