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
            <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.png);"></li>
            <li class="main-slider-li" id="main-slider-1" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg02.png);"></li>
            <li class="main-slider-li" id="main-slider-3" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg03.png);"></li>
        </ul>

        

        <div class="vg_down">
            <a href="#" id="go_service"><img src="<?php echo G5_LANG_IMG_URL?>/tt.png" alt="" /></a>
            <span id="main-slider-prev"></span> <!-- 이전 -->
            <span id="main-slider-next"></span> <!-- 다음 -->  
        </div>
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
        $('#main-slider-prev a').click(function(){
           mainSlider.goToPrevSlide();
        }); 
        $('#main-slider-next a').click(function(){
            mainSlider.goToNextSlide();
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
                <a href="#"><span>기술현황</span></a>
            </div>

            <div class="partner_inner">
                <div class="partner-slider-controls">
                    <span id="partner-slider-prev"></span> <!-- 이전 -->
                    <h3>Products</h3>
                    <span id="partner-slider-next"></span> <!-- 다음 -->
                </div>

                <div class="partner-slider">
                    <div class="partner-box">
                        <a href="javascript:;">
                            <img src="<?php echo G5_LANG_IMG_URL?>/product01.png"  alt="" />
                            <div class="con">
                                <h4>PLUG</h4>
                                <p>차체홀부 기밀</p>
                            </div>
                        </a>
                    </div>
                    <div class="partner-box">
                        <a href="javascript:;">
                            <img src="<?php echo G5_LANG_IMG_URL?>/product02.png"  alt="" />
                            <div class="con">
                                <h4>샤크 안테나 PAD</h4>
                                <p>사크안테나 누수방지 </p>
                            </div>
                        </a>
                    </div>
                    <div class="partner-box">
                        <a href="javascript:;">
                            <img src="<?php echo G5_LANG_IMG_URL?>/product03.png"  alt="" />
                            <div class="con">
                                <h4>SPRING PAD</h4>
                                <p>압쇼바 충격 흡수, 소음방지</p>
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


<section class="k_wrap" id="management_section">
        
    <div class="k_container type_center">
        <div class="customerInner">
            <div class="lt_wrap">
                
                <div class="lt">
                    <strong class="lt_title">Notice</strong>
                    <ul>
                        <li>
                            <a href="#" class="lt_a">
                                <h5>삼부고무공업(주) 홈페이지 오픈하였습니다.</h5>
                                <div class="lt_date">2018.11.01</div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="lt_a">
                                <h5>삼부고무공업(주) 홈페이지 오픈하였습니다.</h5>
                                <div class="lt_date">2018.11.01</div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="lt_a">
                                <h5>삼부고무공업(주) 홈페이지 오픈하였습니다.</h5>
                                <div class="lt_date">2018.11.01</div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="lt_a">
                                <h5>삼부고무공업(주) 홈페이지 오픈하였습니다.</h5>
                                <div class="lt_date">2018.11.01</div>
                            </a>
                        </li>
                        
                    </ul>
                    <div class="lt_more"><a href="#"><span class="sound_only">공지사항&amp;뉴스더보기</span></a></div>
                </div>

            </div>
            <div class="customer_center">                  
                <h3 class="title">고객문의</h3>
                <p class="content">T. 051-301-1415<br/>F. 051-304-1587</p>
                <a href="#">온라인 문의하기 <span class="right_arrow"></span></a>
            </div>
            <div class="location_center">                  
                <h3 class="title">오시는 길</h3>
                <p class="content">부산광역시 사상구<br/>사상로 349번길 22</p>
                <a href="#">찾아오시는 길 <span class="right_arrow"></span></a>
            </div>
        </div>

    </div>

</section>



<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>