<?php if (!defined("_INDEX_")) { ?>
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->


<div class="k_wrap" id="ft2">
    <div class="k_container type_center">



        <div class="copyright_cs">
            <span>
                <a href="tel:<?php echo $infodu['lang']['common']['fm01']?>" style="color: #fff;">
                    <img src="<?php echo G5_LANG_IMG_URL?>/bottom_tel.jpg" style="vertical-align: top;">
                    <?php echo $infodu['lang']['common']['fm01']?>
                </a>
            </span>
        
            <span>
                <img src="<?php echo G5_LANG_IMG_URL?>/bottom_email.jpg" style="vertical-align: middle;">
                <?php echo $infodu['lang']['common']['fm02']?>
            </span>
        </div>

        <div class="copyright_aid">
            <a href="<?php echo G5_LANG_URL?>"><?php echo $infodu['lang']['common']['fm03']?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="<?php echo G5_LANG_URL?>/mail/mail.php"><?php echo $infodu['lang']['common']['fm04']?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="<?php echo G5_LANG_URL?>/company/location.php"><?php echo $infodu['lang']['common']['fm05']?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="#" class="top_btn"><?php echo $infodu['lang']['common']['fm06']?></a>
        </div>


    </div>
</div>

<footer id="footer">
    <div class="copyright_wrap">
        <script>
        $('.top_btn').click(function(e){
            e.preventDefault;
            $('html, body').animate({ scrollTop : 0 }, 500 );
        });
        </script>

        <div class="copy_inner">

            <div class="copy_logo"><img src="<?php echo G5_LANG_IMG_URL?>/copy_logo.png" /></div>
            <address class="basicInfo pc">
                <strong><?php echo $infodu['lang']['common']['txt01']?></strong><br/>
                <?php echo $infodu['lang']['common']['txt02']?><br/>
                <small><?php echo $infodu['lang']['common']['txt03']?></small>
            </address>

            <address class="basicInfo mobile">
                <?php echo $infodu['lang']['common']['txt10']?><br/>
                <small><?php echo $infodu['lang']['common']['txt03']?></small>
            </address>
        </div>

        <div class="copy_fm">
            <?php for($i=0; $i<count($nav1st); $i++): ?>
            <div class="copy_nav">
                <h5><a href="<?php echo $nav1st[$i]['url']?>"><?php echo $nav1st[$i]['title']?></a></h5>
                <div class="meCon">
                        <?php for($j=0; $j<count($nav2nd); $j++):?>
                        <?php if(substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']): ?>
                            <span><a href="<?php echo $nav2nd[$j]['url']?>"><?php echo $nav2nd[$j]['title']?></a></span>
                        <?php endif;?>
                        <?php endfor; ?>

                </div>
            </div>
            <?php endfor; ?>
        </div>


    </div>
</footer>