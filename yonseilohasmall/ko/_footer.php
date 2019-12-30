<?php if (!defined("_INDEX_")) { ?>
        </div><!-- .contents_wrap -->
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->


<footer id="footer">
    <div class="copyright_wrap">

        <div class="copy_logo"><img src="<?php echo G5_LANG_IMG_URL?>/copy_logo.png" /></div>
        <div class="addr ">
            <ul class="ft_ul">                   
                <li><a href="<?php echo G5_LANG_URL?>/customer/ft01.php">이용약관</a></li>
                <li><a href="<?php echo G5_LANG_URL?>/customer/ft02.php">개인정보보호방침</a></li>
                <li><a href="<?php echo G5_LANG_URL?>/customer/ft03.php">이메일주소무단수집거부</a></li>
                <li><a href="<?php echo G5_LANG_URL?>/customer/sitemap.php">사이트맵</a></li>

                <?php if($is_member){?>
                <li><a href="<?php echo G5_BBS_URL?>/member_confirm.php?url=register_form.php">정보수정</a></li>
                <li><a href="<?php echo G5_BBS_URL?>/logout.php">로그아웃</a></li>
                <?php }else{?>
                <li><a href="<?php echo G5_BBS_URL?>/login.php" class="login">Admin</a></li>
                <?php }?>
            </ul>
            <p>
                부산시 수영구 광남로 61-1 현빌딩 3층    전화 : 1544-0539    팩스 : 070-4035-2035<br/>
                Copyright&copy; YONSEILOHAS  All rights reserved.
            </p>
        </div>

        <div class="copy_cert">
            <ul class="grid3">
                <li><a href="http://www.moel.go.kr" target="_blank"><img src="<?php echo G5_LANG_IMG_URL?>/ft01.png" alt="고용노동부"/></a></li>
                <li><a href="http://www.hrdkorea.or.kr" target="_blank"><img src="<?php echo G5_LANG_IMG_URL?>/ft02.png" alt="한국산업인력공단"/></a></li>
                <li><a href="https://www.koreatech.ac.kr/" target="_blank"><img src="<?php echo G5_LANG_IMG_URL?>/ft03.png" alt="한국기술교육대학교"/></a></li>
            </ul>
        </div>


    </div>
</footer>