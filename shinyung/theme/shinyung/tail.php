<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>
    

</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">

    <!-- <div class="ft_wr2">
        <ul class="ft_ul">
            <li><a href="<?php echo get_pretty_url('content', 'company'); ?>"><?php echo $infodu['lang']['common']['ft01']?></a></li>
            <li><a href="<?php echo get_pretty_url('content', 'provision'); ?>"><?php echo $infodu['lang']['common']['ft02']?></a></li>
            <li><a href="<?php echo get_pretty_url('content', 'privacy'); ?>"><?php echo $infodu['lang']['common']['ft03']?></a></li>
            <li><a href="#none" onclick="window.open('http://www.ftc.go.kr/bizCommPop.do?wrkr_no=<?php echo str_replace("-", "", $default['de_admin_company_saupja_no']);?>', 'bizCommPop', 'width=750, height=950;');return false;">사업자정보확인</a></li>
            <li><a href="<?php echo get_device_change_url(); ?>">모바일버전</a></li>
        </ul>
    </div> -->
    <div id="ft_wr">

        <a href="<?php echo G5_URL; ?>" id="ft_logo"><img src="<?php echo G5_THEME_IMG_URL; ?>/logo_copy.png" alt=""></a>
        <div class="ft_info">
            <?php echo $infodu['lang']['common']['copy']?>
        </div>  


        <a href="http://www.koreaind.com" target="_blank" class="copy_link">
            <?php echo $infodu['lang']['common']['copy02']?>
        </a>
        
	</div>      
        
    
    
    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">TOP</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>