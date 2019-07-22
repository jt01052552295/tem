<?php if (!defined("_INDEX_")) { ?>
        </div><!-- .contents_wrap -->
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->
         
<div class="k_wrap bgf3">
    <div class="k_container type_center">
        <ul class="ft_ul">                   
            <li><a href="<?php echo G5_LANG_URL?>"><?php echo  $infodu['lang']['common']['ft01'] ?></a></li>
            <li class="bar"></li>
            <li><a href="<?php echo G5_LANG_URL?>/mail/mail.php"><?php echo  $infodu['lang']['common']['ft02'] ?></a></li>
            <li class="bar"></li>
            <li><a href="<?php echo G5_LANG_URL?>/customer/sitemap.php"><?php echo  $infodu['lang']['common']['ft03'] ?></a></li>
            <li class="bar"></li>
            <li><a href="<?php echo G5_URL?>/en"><?php echo  $infodu['lang']['common']['ft04'] ?></a></li>
            <li class="bar"></li>
            <li><a href="<?php echo G5_URL?>/cn"><?php echo  $infodu['lang']['common']['ft05'] ?></a></li>
            <li class="bar"></li>
            <li><a href="<?php echo G5_URL?>/jp"><?php echo  $infodu['lang']['common']['ft06'] ?></a></li>

            <?php if($is_member){?>
                <li class="bar"></li>
                <li><a href="<?php echo G5_ADMIN_URL?>"><?php echo  $infodu['lang']['common']['ft07'] ?></a></li>
                <li class="bar"></li>
                <li><a href="<?php echo G5_BBS_URL?>/logout.php"><?php echo  $infodu['lang']['common']['ft08'] ?></a></li>
                <?php }else{?>
                <!-- <li class="bar"></li>
                <li><a href="<?php echo G5_BBS_URL?>/login.php" class="login"><?php echo  $infodu['lang']['common']['ft09'] ?></a></li> -->
            <?php }?>
        </ul>


        <div class="goTop">
            <a href="#" class="top_btn"><img src="<?php echo G5_LANG_IMG_URL?>/top_btn.png"></a>
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


<footer id="footer" <?php if (!defined("_INDEX_")): ?> class="subFooter" <?php endif; ?> >


    <div class="copyright_wrap font_malgun">
        <div class="copy_logo"><img src="<?php echo G5_LANG_IMG_URL?>/copy_logo.png" /></div>
        <div class="ft_info">            
           <ul>
                <li><strong><?php echo  $infodu['lang']['common']['copy01']?></strong><?php echo  $infodu['lang']['common']['copy06']?></li>
                <li><strong><?php echo  $infodu['lang']['common']['copy02']?></strong><?php echo  $infodu['lang']['common']['copy07']?></li>
                <li><strong><?php echo  $infodu['lang']['common']['copy03']?></strong><?php echo  $infodu['lang']['common']['copy08']?></li>
                <li><strong><?php echo  $infodu['lang']['common']['copy04']?></strong><?php echo  $infodu['lang']['common']['copy09']?></li>
                <li class="add"><strong><?php echo  $infodu['lang']['common']['copy05']?></strong><?php echo  $infodu['lang']['common']['copy10']?></li>
           </ul>
        </div>

        <div class="copy_by">
            <div class="brochure">
                <a href="#"><span class="blue">Brochure</span> Download <span class="more">→</span></a>
            </div>
            <div class="copyright"><p><?php echo  $infodu['lang']['common']['txt02']?></p></div>
        </div>

    </div>
</footer>