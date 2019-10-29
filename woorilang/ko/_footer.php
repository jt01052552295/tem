<?php if (!defined("_INDEX_")) { ?>
        </div><!-- .contents_wrap -->
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->


<div class="k_wrap" id="ft2">
    <div class="k_container type_center">
        <ul class="ft_ul">                   
            <li><a href="#"><?php echo  $infodu['lang']['common']['ft01'] ?></a></li>
            <li><a href="#"><?php echo  $infodu['lang']['common']['ft02'] ?></a></li>
            <li><a href="<?php echo G5_LANG_URL?>/customer/sitemap.php"><?php echo  $infodu['lang']['common']['ft03'] ?></a></li>


            <?php if($is_member){?>
            <li><a href="<?php echo G5_BBS_URL?>/member_confirm.php?url=register_form.php">정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL?>/logout.php">로그아웃</a></li>
            <?php }else{?>
            <li><a href="<?php echo G5_BBS_URL?>/login.php" class="login">Admin</a></li>
            <?php }?>
        </ul>
    </div>
</div>


<footer id="footer" <?php if (!defined("_INDEX_")): ?> class="subFooter" <?php endif; ?> >
    <div class="copyright_wrap">
        <div class="goTop">
            <a href="#" class="top_btn"><i class="fa fa-angle-up" aria-hidden="true"></i><span class="blind"><?php echo  $infodu['lang']['common']['txt03']?></span></a>
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

        <div class="copy_addr">
            <p><?php echo  $infodu['lang']['common']['txt05']?></p>
        </div>

        <div class="copy_by">
            <address>
                <span class="pc"><?php echo  $infodu['lang']['common']['txt01']?></span>
                <span class="mobile"><?php echo  $infodu['lang']['common']['txt01m']?></span>
            </address>   
            <div class="copyWrap">
                <div class="copyright"><p><?php echo  $infodu['lang']['common']['txt02']?></p></div>
            </div>      
        </div>

        <a href="http://www.koreaind.com" target="_blank" class="copy_link">
            <?php echo  $infodu['lang']['common']['txt04']?>        
        </a> 





    </div>
</footer>