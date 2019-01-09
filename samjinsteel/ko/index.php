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
            <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
            <li class="main-slider-li" id="main-slider-1" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
            <li class="main-slider-li" id="main-slider-2" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
        </ul>

        <div class="vg_title" id="title1">
            <span>best company</span>
            <h2>
                <div class="vg_tit_box "><div class="">SAMJIN STEEL</div></div>
            </h2>
            <p>저희 삼진철강(주)는 철강제 제작업체입니다.</p>
<!--             <div id="main-bx-pager">
                <ul>
                    <li> <a data-slide-index="0" href="" class=""><span class="blind">1</span></a></li>
                    <li> <a data-slide-index="1" href="" class=""><span class="blind">2</span></a></li>
                    <li> <a data-slide-index="2" href="" class="active"><span class="blind">3</span></a></li>
                    <li> <a data-slide-index="3" href="" class=""><span class="blind">4</span></a></li>
                </ul>
            </div>  -->

            <a href="#" class="vg_more">자세히 보기 <span class="right_arrow"></span></a>

        </div>

        

        <div class="vg_down">
            <span id="main-slider-prev"></span> <!-- 이전 -->
            <span id="main-slider-next"></span> <!-- 다음 -->  
        </div>

        <section class="k_wrap" id="business_section">
            <div class="k_container type_center">
                   <div class="businessInner">       
                        <div class="business ">
                            <a href="<?php echo G5_LANG_URL?>/company/company.php" class="tran-animate bc1">
                                <div class="thumb bc1"></div>
                                <div class="desc">
                                    <h3 class="title">보유 인증서</h3>
                                    <p class="content">보유인증서 페이지입니다.</p>
                                </div>
                            </a>
                        </div>
                        <div class="business ">
                            <a href="<?php echo G5_LANG_URL?>/tech/tech.php" class="tran-animate bc2">
                                <div class="thumb bc2"></div>
                                <div class="desc">
                                    <h3 class="title">기술현황</h3>
                                    <p class="content">설비현황 페이지입니다.</p>
                                </div>
                            </a>
                        </div>
                        <div class="business ">
                            <a href="<?php echo G5_LANG_URL?>/company/location.php" class="tran-animate bc3 ">
                                <div class="thumb bc3"></div>
                                <div class="desc">
                                    <h3 class="title">오시는길</h3>
                                    <p class="content">찾아오시는 길 입니다.</p>
                                </div>
                            </a>
                        </div>
                        <div class="business last">
                            <a href="<?php echo G5_LANG_URL?>/company/message.php" class="tran-animate bc4">
                                <div class="thumb bc4"></div>
                                <div class="desc">
                                    <h3 class="title">CEO인사말</h3>
                                    <p class="content">방문해주셔서 감사합니다.</p>
                                </div>
                            </a>
                        </div>

                    </div>

            </div>
        </section>

    </div>
</section>
<script>
    $(document).ready(function(){

        $('#go_service').click(function(e){
            e.preventDefault();
            var service_section = $('#service_section').offset().top;

            var heights = $('#header_height').map(function(){
                return $(this).outerHeight(true);
            }).get(),
            maxHeight = Math.max.apply(null, heights);
            var goTo = service_section;
            $('html, body').animate({scrollTop : goTo}, 400);
        }); 



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
                //$.fn.sloganAniamte();

                
            },
            onSlideAfter: function (slide, oldIndex, newIndex) {
                var current = mainSlider.getCurrentSlide();
                switch (oldIndex){
                }
                switch (current){
                }
            }

        });
        $('#main-slider-prev a, #main-slider-next a').click(function(){
           mainSlider.stopAuto();
           mainSlider.startAuto();
        }); 

        setInterval(function(e){ 
            mainSlider.goToNextSlide();
        }, 5000);
        
    });
   
</script>


<link href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.carousel.css?ver=<?php echo KI_TIME_YMD?>" rel="stylesheet">
<section class="k_wrap" id="service_section">
    <div class="k_container type_center">
        <div class="serviceInner">
            <div class="tech_center">         
                <h3 class="title">고객문의</h3>
                <p class="content">T. 055-343-9670~5<br>F. 055-343-9676</p>
                <a href="#">온라인 문의 <span class="right_arrow"></span></a>
            </div>

            <div class="partner_inner">
                <div class="partner-slider-controls">
                    <span id="partner-slider-prev"></span> <!-- 이전 -->
                    <h3>제품소개</h3>
                    <span id="partner-slider-next"></span> <!-- 다음 -->
                </div>

                <div class="partner-slider">
                    <div class="partner-box">
                        <a href="javascript:;">
                            <img src="<?=G5_LANG_IMG_URL?>/product01.jpg"  alt="" />
                            <div class="con">
                                <h4>Aluminium</h4>
                                <p>Beverage cans, food cans, etc.</p>
                            </div>
                        </a>
                    </div>
                    <div class="partner-box">
                        <a href="javascript:;">
                            <img src="<?=G5_LANG_IMG_URL?>/product02.jpg"  alt="" />
                            <div class="con">
                                <h4>Aluminium</h4>
                                <p>Beverage cans, food cans, etc.</p>
                            </div>
                        </a>
                    </div>
                    <div class="partner-box">
                        <a href="javascript:;">
                            <img src="<?=G5_LANG_IMG_URL?>/product03.jpg"  alt="" />
                            <div class="con">
                                <h4>Aluminium</h4>
                                <p>Beverage cans, food cans, etc.</p>
                            </div>
                        </a>
                    </div>
                </div>                   
            </div>
        </div>

        
        
    </div>
</section>


<script>
    $(document).ready(function(){
        var partnerSlider = $('.partner-slider').bxSlider({
            auto: false,
            infiniteLoop: true,
            slideMargin:9,
            minSlides:3,
            maxSlides:3,
            moveSlides:1,
            slideWidth:278,
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