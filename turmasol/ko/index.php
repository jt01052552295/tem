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
        </ul>

        <div class="vg_title" id="title1">
            <h2>
                <div class="vg_tit_box "><div class="parallax-init-pc">Companies </div></div>
                <div class="vg_tit_box "><div class="parallax-init-pc">seeking</div></div>
                <div class="vg_tit_box "><div class="parallax-init-pc">a change</div></div>
            </h2>
            <div class="vg_bottom_line"></div>
            <p>항공기 엔진부품 제조 판금 및 특수공정 전문업체</p>
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
            controls: false,
            nextSelector: '#main-slider-prev',
            prevSelector: '#main-slider-next',   
            onSliderLoad: function(){
                $.fn.sloganAniamte();

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

        // setInterval(function(e){ 
        //     mainSlider.goToNextSlide();
        // }, 5000);
        
    });
   
</script>













<section class="k_wrap" id="ban_section">
    <div class="k_container type_center carMain right">

        <div class="car_desc">
            <h3>About US<small>Automotive parts manufacturing automation equipment and testing</small></h3>
            <p>
                (주)터머솔은 기술개발을 최우선 과제로 삼아 연구·개발하는 자세로 항공기 부품관련<br/>
                생산 자동화 설비 및 시험기를 전문적으로 생산하는 기업입니다.<br/> 
                국내 산업용 기기의 자동화에 끊임없는 연구와 창의적 기술 개발에 최선을 다하겠습니다.
            </p>
            <div class="more_view"><a href="#" class="btnMore inline tran-animate"><span>+</span>MORE</a></div>
        </div> 
        <div class="car_img">
            <img src="<?php echo G5_LANG_IMG_URL?>/service.png" alt="" class="img-responsive">
        </div>

    </div>
</section>

<section class="k_wrap">
    <div class="k_container type_center">
           <div class="businessInner">       
                <div class="business ">
                    <a href="javascript:;" class="tran-animate bc1 hover-shadow hover-float">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/quick01.png"></div>
                        <div class="desc">
                            <h3 class="title">설비현황</h3>
                            <p class="content">equipment</p>
                        </div>
                    </a>
                </div>
                <div class="business ">
                    <a href="javascript:;" class="tran-animate bc2 hover-shadow hover-float">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/quick02.png"></div>
                        <div class="desc">
                            <h3 class="title">사업분야</h3>
                            <p class="content">business</p>
                        </div>
                    </a>
                </div>
                <div class="business ">
                    <a href="javascript:;" class="tran-animate bc3 hover-shadow hover-float">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/quick03.png"></div>
                        <div class="desc">
                            <h3 class="title">인증현황</h3>
                            <p class="content">Certification </p>
                        </div>
                    </a>
                </div>
                <div class="business">
                    <a href="javascript:;" class="tran-animate bc4 hover-shadow hover-float">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/quick04.png"></div>
                        <div class="desc">
                            <h3 class="title">견적문의</h3>
                            <p class="content">Estimate</p>
                        </div>
                    </a>
                </div>
                <div class="business last">
                    <a href="javascript:;" class="tran-animate bc5 hover-shadow hover-float">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/quick05.png"></div>
                        <div class="desc">
                            <h3 class="title">오시는길</h3>
                            <p class="content">location</p>
                        </div>
                    </a>
                </div>

            </div>

    </div>
</section>






<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>