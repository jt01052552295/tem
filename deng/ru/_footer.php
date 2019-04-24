<?php if (!defined("_INDEX_")) { ?>
        </div><!-- .contents_wrap -->
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->


<footer id="footer">
    <div class="copyright_wrap">
        <div class="copy_logo"><img src="<?php echo G5_LANG_IMG_URL?>/copy_logo.png" border="0"/></div>

        <div class="foot_menu font_malgun">
            <a href="<?php echo G5_LANG_URL?>">Home</a> &nbsp;
            <a href="<?php echo G5_LANG_URL?>/customer/sitemap.php">Sitemap</a> &nbsp;
            <a href="<?php echo G5_LANG_URL?>/mail/mail.php">CONTACT US</a> &nbsp;
            <!-- <a href="#" id="lang_btn">Language <i class="fas fa-caret-down"></i></a> &nbsp; -->
            <?php if($is_member){?>
            <a href="<?php echo G5_BBS_URL?>/member_confirm.php?url=register_form.php">정보수정</a> &nbsp;
            <a href="<?php echo G5_BBS_URL?>/logout.php">Logout</a> &nbsp;
            <?php }else{?>
            <!-- <a href="<?php echo G5_BBS_URL?>/login.php">ADMIN</a> &nbsp; -->
            <?php }?>
        </div>

        <address class="font_malgun">
            <?php echo $infodu['lang']['index']['footer']['txt01']?><br/>
            <?php echo $infodu['lang']['index']['footer']['txt02']?><br/>
            <?php echo $infodu['lang']['index']['footer']['txt03']?><br/><br/>
            <p><?php echo $infodu['lang']['index']['footer']['txt04']?></p>
        </address>

        
    </div>

</footer>