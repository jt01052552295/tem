<?php
define('_INDEX_', true); 
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_LANG_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>


<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>
<section class="k_wrap">
    <div class="vg_inner">
        
        <ul class="main-slider">
            <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg.png);"></li>
            <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg.png);"></li>
            <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg.png);"></li>
        </ul>

        <div class="vg_title" id="title1">
            <h2>
                <div class="vg_tit_box1"><div class="">Cryogenic Consulting</div></div>
                <div class="vg_tit_box2"><div class="">& Services</div></div>
            </h2>
            <p>초저온, 초전도 배관 시스템 전문회사로 다양한 목적의 시스템을 구축하고<br/>
                대응하기 위한 응용기술과 솔루션을 개발 공급하고 있습니다.</p>
            <span id="main-slider-prev"></span> <!-- 이전 -->
            <span id="main-slider-next"></span> <!-- 다음 -->  
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
            speed: 500,
            pager: false,
            controls: true,
            nextSelector: '#main-slider-prev',
            prevSelector: '#main-slider-next',   
            onSliderLoad: function(){
                //$.fn.sloganAniamte();

                //setTimeout(function() {
                    //$('.main-slider > li').removeClass('active-slide');   
                    //$('.main-slider > li').eq(0).addClass('active-slide');
                //}, 1000);

                
            },
            onSlideAfter: function (slide, oldIndex, newIndex) {
                var current = mainSlider.getCurrentSlide();
                switch (oldIndex){
                }
                switch (current){
                }
            }

        });

        setInterval(function(e){ 
            mainSlider.goToNextSlide();
        }, 5000);
        
    });
   
</script>













<section class="k_wrap" id="ban_section">
    <div class="k_container type_center carMain right">

        <div class="car_desc">
            <h3>초저온 컨설팅&서비스<small>크레용<small></h3>
            <p>
                &quot;내부배관 또는 외부배관에 벨로우즈를 설치하지 않더라도<br/>저온 수축에 대응이 가능한 기능이 포함된 진공단열배관입니다.&quot;
            </p>
            <div class="more_view"><a href="#" class="btnMore inline tran-animate">사업소개 바로가기&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="right_arrow"></span></a></div>
        </div> 
        <div class="car_img">
            <img src="<?php echo G5_LANG_IMG_URL?>/service.png" alt="" class="img-responsive">
        </div>

    </div>
</section>

<section class="k_wrap" id="business_section">
    <div class="k_container type_center">
           <h3 class="business_title">QUICK MENU</h3>
           <div class="businessInner">       
                <div class="business ">
                    <a href="javascript:;" class="tran-animate">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/quick01.png"></div>
                        <div class="desc">
                            <h3 class="title">주요실적</h3>
                            <p class="content">CRAYON 주요실적<br/>페이지입니다.</p>
                        </div>
                    </a>
                </div>
                <div class="business ">
                    <a href="javascript:;" class="tran-animate">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/quick02.png"></div>
                        <div class="desc">
                            <h3 class="title">기술현황</h3>
                            <p class="content">CRAYON 기술현황<br/>페이지입니다.</p>
                        </div>
                    </a>
                </div>
                <div class="business ">
                    <a href="javascript:;" class="tran-animate">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/quick03.png"></div>
                        <div class="desc">
                            <h3 class="title">오시는길</h3>
                            <p class="content">CRAYON 오시는길<br/>페이지입니다.</p>
                        </div>
                    </a>
                </div>
                <div class="business last">
                    <a href="javascript:;" class="tran-animate">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/quick04.png"></div>
                        <div class="desc">
                            <h3 class="title">고객문의</h3>
                            <p class="content">궁금한 사항을 문의주시면<br/>답변드리겠습니다.</p>
                        </div>
                    </a>
                </div>

            </div>

    </div>
</section>






<link href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.carousel.css?ver=<?php echo G5_CSS_VER?>" rel="stylesheet">
<section class="k_wrap" id="service_section">
    <div class="k_container type_center">

            <div class="partner_inner">
                <div class="partner-slider-controls">
                    
                    <h3>보유장비</h3>

                    <span id="partner-slider-prev"></span> <!-- 이전 -->
                    <span id="partner-slider-next"></span> <!-- 다음 -->
                    <span id="partner-slider-more"><a href="#">보러가기</a></span> <!-- 다음 -->
                </div>

                <div class="partner-slider">
                    <div class="partner-box">
                        <a href="javascript:;">
                            <img src="<?=G5_LANG_IMG_URL?>/product01.png"  alt="" />
                            <div class="con">
                                <h4>ASM 380</h4>
                            </div>
                        </a>
                    </div>
                    <div class="partner-box">
                        <a href="javascript:;">
                            <img src="<?=G5_LANG_IMG_URL?>/product02.png"  alt="" />
                            <div class="con">
                                <h4>ASM 380</h4>
                            </div>
                        </a>
                    </div>
                    <div class="partner-box">
                        <a href="javascript:;">
                            <img src="<?=G5_LANG_IMG_URL?>/product03.png"  alt="" />
                            <div class="con">
                                <h4>ASM 380</h4>
                            </div>
                        </a>
                    </div>
                    <div class="partner-box">
                        <a href="javascript:;">
                            <img src="<?=G5_LANG_IMG_URL?>/product04.png"  alt="" />
                            <div class="con">
                                <h4>ASM 380</h4>
                            </div>
                        </a>
                    </div>
                </div>   
            </div>

        
        
    </div>
</section>


<script>
    $(document).ready(function(){
        var partnerSlider = $('.partner-slider').bxSlider({
            auto: true,
            infiniteLoop: true,
            slideMargin:23,
            minSlides:4,
            maxSlides:4,
            moveSlides:1,
            slideWidth:283,
            wrapperClass: 'partner-wrapper',
            autoControls: false,
            adaptiveHeight: false,
            pager:false,
            speed:1000,
            controls: true,
            nextSelector: '#partner-slider-next',
            prevSelector: '#partner-slider-prev',
        });
        $('#partner-slider-prev a, #partner-slider-next a').click(function(){
            partnerSlider.stopAuto();
            partnerSlider.startAuto();
        });
    });
</script>   




<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>