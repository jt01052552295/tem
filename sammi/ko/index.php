<?php
define('_INDEX_', true); 
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>


<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>
<section class="k_wrap">
    <div class="vg_inner">
        
        <ul class="main-slider">
            <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg.png);">
                
            </li>
        </ul>

        <div class="vg_title" id="title1">
            <h2>
                <div class="vg_tit_box1"><div class="parallax-init-pc init-up">바삭함이 일품</div></div>
                <div class="vg_tit_box2"><div class="parallax-init-pc init-up">크리스피 치킨</div></div>
            </h2>
            <p>오늘은 치킨먹기 좋은 날</p>
        </div>


        

        <div class="vg_down">
            <a href="<?php echo G5_LANG_URL?>/menu/menu.php" id="go_service" class="tran-animate"><span>메뉴 경쟁력 보기</span></a>

            <!-- <span id="main-slider-prev"></span>
            <span id="main-slider-next"></span> -->
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){

        // $('#go_service').click(function(e){
        //     e.preventDefault();
        //     var service_section = $('#service_section').offset().top;

        //     var heights = $('#header_height').map(function(){
        //         return $(this).outerHeight(true);
        //     }).get(),
        //     maxHeight = Math.max.apply(null, heights);
        //     var goTo = service_section;
        //     $('html, body').animate({scrollTop : goTo}, 400);
        // }); 


        $.fn.sloganAniamte = function(){
            $('#title1 .parallax-init-pc').each(function(e){
                var currLink = $(this)
                currLink.addClass("add-stage");
            });
        };   



        var mainSlider = $('.main-slider').bxSlider({
            auto: false,
            mode:'fade',
            infiniteLoop: true,
            wrapperClass: 'main-wrapper',
            autoControls: false,
            adaptiveHeight: true,
            speed: 1000,
            pager: false,
            controls: true,
            nextSelector: '#main-slider-prev',
            prevSelector: '#main-slider-next',   
            onSliderLoad: function(){
                $.fn.sloganAniamte();

                setTimeout(function() {
                    $('.main-slider > li').removeClass('active-slide');   
                    $('.main-slider > li').eq(0).addClass('active-slide');
                }, 1000);

                
            },
            onSlideAfter: function (slide, oldIndex, newIndex) {
                var current = mainSlider.getCurrentSlide();
                switch (oldIndex){
                }
                switch (current){
                }
            }

        });
        $('#main-slider-prev a').click(function(){
           mainSlider.goToPrevSlide();
        }); 
        $('#main-slider-next a').click(function(){
            mainSlider.goToNextSlide();
        }); 

        // setInterval(function(e){ 
        //     mainSlider.goToNextSlide();
        // }, 5000);
        
    });
   
</script>


<link href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.carousel.css?ver=<?php echo G5_CSS_VER?>" rel="stylesheet">
<section class="k_wrap" id="service_section">
    <div class="k_container type_center">

        <div class="partner_inner">
            <div class="partner-slider-controls">
                <!-- <span id="partner-slider-prev"></span> -->
                <!-- <span id="partner-slider-next"></span> -->
            </div>

            <div class="partner-slider">
                <?php for($i=0; $i<5; $i++):?>
                <div class="partner-box">
                    <img src="<?=G5_LANG_IMG_URL?>/menu01.png"  alt="" />
                    <div class="con">
                        <p>누구나 반하는 달달 매콤 우리가족 영양간식<br/>인생메뉴 등극! 맛있닭!</p>
                    </div>
                    <a href="<?php echo G5_LANG_URL?>/menu/menu.php" class="tran-animate">메뉴 더보기 <span class="right_arrow"></span></a>
                </div>
                <?php endfor;?>



            </div>                   
        </div>

        
        
    </div>
</section>


<script>
    $(document).ready(function(){
        var partnerSlider = $('.partner-slider').bxSlider({
            auto: false,
            infiniteLoop: true,
            mode:'fade',
            wrapperClass: 'partner-wrapper',
            autoControls: false,
            adaptiveHeight: false,
            pager:true,
            speed:1000,
            controls: false,
            nextSelector: '#partner-slider-next',
            prevSelector: '#partner-slider-prev',
        });
        $('#partner-slider-prev a, #partner-slider-next a').click(function(){
            partnerSlider.stopAuto();
            partnerSlider.startAuto();
        });
    });
</script>   



<section class="k_wrap" id="pattern_section">
</section>

<section class="k_wrap" id="management_section">
        
    <div class="k_container type_center">
        <div class="product_inner">

            
            <div class="pro_header">
                <div class="pro_header_bar"><img src="<?php echo G5_LANG_IMG_URL?>/key_logo.png"></div>
                <h4>창업 key point</h4>
            </div>

        

            <div class="pro_content">
                <a href="javascript:;">
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/a01.jpg"></div>
                    <h4>membership fee</h4>
                    <span class="engTit">가맹비</span>
                    <p>無</p>
                    <span class="more">필요없습니다. 정직하게 약속합니다</span>
                </a>
            </div>
            <div class="pro_content">
                <a href="javascript:;">
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/a02.jpg"></div>
                    <h4>interior costs</h4>
                    <span class="engTit">인테리어비</span>
                    <p>無</p>
                    <span class="more">필요없습니다. 정직하게 약속합니다</span>
                </a>
            </div>
            <div class="pro_content">
                <a href="javascript:;">
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/a03.jpg"></div>
                    <h4>Other expenses</h4>
                    <span class="engTit">기타경비</span>
                    <p>無</p>
                    <span class="more">필요없습니다. 정직하게 약속합니다</span>
                </a>
            </div>



        </div>

    </div>

</section>


<section class="k_wrap" id="ban_section">
    <div class="k_container type_center">
        <div class="car_desc">
            
            <h3>맛! 수익! 이미 검증 되었습니다</h3>
            <p>
                 A taste completed by years of development
            </p>
            <div class="more_view"><a href="<?php echo G5_LANG_URL?>/store/store.php" class="btnMore tran-animate"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;매장찾기</a></div>

        </div>
    </div>
</section>




<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>