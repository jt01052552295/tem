<?php if (!defined("_INDEX_")) { ?>
        </div><!-- .contents_wrap -->
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->


<footer id="footer" <?php if (!defined("_INDEX_")): ?> class="subFooter" <?php endif; ?> >


        <div class="copy_menu">
            <ul class="ft_ul">                   
                <li><a href="#"><?php echo  $infodu['lang']['common']['ft01'] ?></a></li>
                <li><a href="#"><?php echo  $infodu['lang']['common']['ft02'] ?></a></li>
                <li class="last"><a href="<?php echo G5_LANG_URL?>/customer/sitemap.php"><?php echo  $infodu['lang']['common']['ft03'] ?></a></li>

                <?php if($is_member){?>
                <li><a href="<?php echo G5_BBS_URL?>/member_confirm.php?url=register_form.php"><?php echo  $infodu['lang']['common']['ft04'] ?></a></li>
                <li class="last"><a href="<?php echo G5_BBS_URL?>/logout.php"><?php echo  $infodu['lang']['common']['ft05'] ?></a></li>
                <?php }else{?>
                <!-- <li class="last"><a href="<?php echo G5_BBS_URL?>/login.php" class="login"><?php echo  $infodu['lang']['common']['ft06'] ?></a></li> -->
                <?php }?>
            </ul>
        </div>

    <div class="copyright_wrap font_malgun">
        <div class="goTop">
            <a href="#" class="top_btn"><i class="fas fa-angle-up"></i><span class="sr-only"><?php echo  $infodu['lang']['common']['txt03']?></span></a>
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
                <?php echo  $infodu['lang']['common']['txt01']?>
                <div class="copyright opacity_50"><p><?php echo  $infodu['lang']['common']['txt02']?></p></div>
            </address>   
        </div>

        <div class="copy_by2">         
            <a href="http://www.koreaind.com" target="_blank" class="copy_link"><?php echo  $infodu['lang']['common']['txt04']?></a>
        </div>



    </div>
</footer>