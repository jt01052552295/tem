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
    
    <div class="foot_content_inner">

        <div class="ft_addr">
        	<h4>한국산업정보사</h4>
        	<div class="addr">
                대표 : 김형성  ㅣ  부산광역시 동래구 중앙대로 1291-1 상주빌딩 5F  ㅣ  TEL : 051-504-6877  ㅣ  FAX : 051-506-5526 <br class="pc_only" />
                사업자등록번호 : 607-51-77864  <a href="http://ftc.go.kr/info/bizinfo/communicationView.jsp?apv_perm_no=2013330007930200222&area1=&area2=&currpage=1&searchKey=04&searchVal=6075177864&stdate=&enddate=" target="_blank" class="adm">[ 사업자정보확인 ]</a>   ㅣ   통신판매업신고번호 : 제2013-부산동래-0221호  <br class="pc_only" /><br class="pc_only" />

				<a href="#" >CONTACT</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">고객센터</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">이메일주소 무단수집 거부</a><br class="" />
				<a href="#" class="adm">[ ADMIN ] </a>
			</div>
        </div>

        <div class="ft_btnLink">
            <ul>
                <li><a href="#" class="mail"><span>메일</span></a></li>
                <li><a href="#" class="kakao"><span>카톡</span></a></li>
                <li><a href="#" class="naver"><span>네이버<br/>톡톡</span></a></li>
            </ul>

        </div>
    </div>
</div>


<div id="footer_wrap">
    <div class="copyright_wrap">
        <p class="copyright">Copyright © KOREA INDUSTRIAL INFOMATION CO. ALL RIGHTS RESERVED.</p>
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