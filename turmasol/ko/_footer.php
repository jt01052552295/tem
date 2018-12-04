<?php if (!defined("_INDEX_")) { ?>
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->




   
    <div class="k_wrap bgf3">
        <div class="k_container type_center">
            <ul class="ft_ul">                   
                <li><a href="<?php echo G5_LANG_URL?>">Home</a></li>
                <li class="bar"></li>
                <li><a href="<?php echo G5_LANG_URL?>">Contact us</a></li>
                <li class="bar"></li>
                <li><a href="<?php echo G5_LANG_URL?>">Site map</a></li>
                <li class="bar"></li>
                <li><a href="./en">English</a></li>
            </ul>


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
        </div>
    </div>


<footer id="footer">
    <div class="copyright_wrap">
        <div class="copy_logo"><img src="<?php echo G5_LANG_IMG_URL?>/copy_logo.png" border="0"/></div>
        
        <div class="ft_info">            
           <ul>
                <li><strong>company</strong>(주)터머솔</li>
                <li><strong>ceo</strong>안홍</li>
                <li><strong>tel</strong>055-314-3662</li>
                <li><strong>fax</strong>055-313-3662</li>
                <li><strong>add</strong>경남 김해시 유하로 59번길 31</li>
           </ul>
        </div>
        <div class="copy_by">
            <a href="javascript:alert('준비중입니다.');" class="naver tran-animate"><span class="green">(주)터머솔</span> Brochure <span class="arrow">→</span></a>
            <div class="copyright"><p>Copyright © TURMASOL All Rights Reserved.</p></div>
            <a href="http://www.koreaind.com" target="_blank" class="copy_link">
                <small>powered by</small> 한국산업정보
            </a>
        </div>


    </div>
</footer>