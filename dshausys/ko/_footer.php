<?php if (!defined("_INDEX_")) { ?>
        </div><!-- .contents_wrap -->
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->

<div class="k_wrap ft1">
    <div class="k_container type_center">
        <ul class="ft_ul">                   
            <li><a href="<?php echo G5_LANG_URL?>/company/message.php"><?php echo  $infodu['lang']['common']['ft01']?></a></li>
            <li><a href="<?php echo G5_BBS_URL?>/content.php?co_id=provision"><?php echo  $infodu['lang']['common']['ft02']?></a></li>
            <li><a href="<?php echo G5_BBS_URL?>/content.php?co_id=privacy"><?php echo  $infodu['lang']['common']['ft03']?></a></li>
        </ul>
    </div>
</div>

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
                업체명 : 동성산업  대표 : 주원미  등록번호 : 606-11-78791<br/>
                대저 zin 윈도우플러스 전시장 : 부산광역시 강서구 대저1동 1748-28 (평강로 331)<br/> 
                모라 LG하우시스 전시장 : 부산광역시 사상구 모라2동 1362번지(백양대로 880) 우신프라자 상가 2층 209호<br/> 
                공장 : 부산광역시 강서구 강동동 697-3<br/> 
                TEL : 051-971-6901  /  FAX : 051-971-6903<br/> 
                주소 : 울산광역시 중구 성안9길 18 (성안동)  l  전화번호 : 052-248-7500  l  팩스번호 : 052-248-7500
                <div class="copyright"><p>Copyright © 2013 동성산업 All Rights Reserved.</p></div>

                <a href="http://www.koreaind.com" target="_blank" class="copy_link">
                    <?php echo  $infodu['lang']['common']['txt04']?>        
                </a>
            </address>
            

        </div>


    </div>
</footer>