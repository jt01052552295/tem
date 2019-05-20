<?php if (!defined("_INDEX_")) { ?>
        </div><!-- .contents_wrap -->
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>




<div class="k_wrap ft1">
    <div class="k_container type_center">
        <ul class="ft_ul">                   
            <li><a href="<?php echo G5_LANG_URL?>/customer/company.php"><?php echo  $infodu['lang']['common']['ft01']?></a></li>
            <li><a href="<?php echo G5_LANG_URL?>/customer/provision.php"><?php echo  $infodu['lang']['common']['ft02']?></a></li>
            <li><a href="<?php echo G5_LANG_URL?>/customer/privacy.php"><?php echo  $infodu['lang']['common']['ft03']?></a></li>
        </ul>
    </div>
</div>

<div class="k_wrap">
    <div class="k_container type_center ft2">
        <h3><?php echo  $infodu['lang']['common']['cus01']?></h3>
        <div class="info_col customer">
            <div class="widget-box">
                <div class="help-tel"><span class="ico_mic"></span><span class="tel"><?php echo  $infodu['lang']['common']['cus02']?></span></div>
                <div class="help-block" >
                    <?php echo  $infodu['lang']['common']['cus03']?><br>
                    <?php echo  $infodu['lang']['common']['cus04']?>
                </div>
            </div>
        </div>

        <div class="info_col ">

            <div class="spo_center">
                <a href="<?php echo G5_LANG_URL?>/customer/location.php">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/ico_location.png" title="" ></div>
                    <div class="tt font_BmJua">오시는길</div>
                </a>
            </div>
            <div class="spo_center">
                <a href="<?php echo G5_LANG_URL?>/guide/guide.php">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/ico_guide.png" title="" ></div>
                    <div class="tt font_BmJua">이용안내</div>
                </a>
            </div>
            <div class="spo_center">
                <a href="<?php echo G5_LANG_URL?>/guide/selling.php">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/ico_car.png" title="" ></div>
                    <div class="tt font_BmJua">내차팔기</div>
                </a>
            </div>


        </div>

    </div>
</div>    

<!-- 하단 시작 { -->
<footer id="footer" <?php if (!defined("_INDEX_")): ?> class="subFooter" <?php endif; ?> >

    <div class="copyright_wrap">
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
                <div class="copyright"><p><?php echo  $infodu['lang']['common']['txt02']?></p></div>

                <a href="http://www.koreaind.com" target="_blank" class="copy_link">
                    <?php echo  $infodu['lang']['common']['txt04']?>        
                </a>
            </address>    


        </div>


    </div>
</footer>