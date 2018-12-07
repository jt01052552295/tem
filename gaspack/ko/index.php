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
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg1.png);"></li>
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg1.png);"></li>
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg1.png);"></li>
        </ul>

        <div class="vg_title" id="title1">
            <small>우주가스팩공업(주)</small>
            <h2>
                <div class="vg_tit_box "><div class=""><em>g</em>asket <em>p</em>acking <em>s</em>eal</div></div>
            </h2>


            <p>
                GASKET PACKING 가격 경쟁력 1위업체!<br/>
                저희와 만나면 귀사의 경쟁력이 10% UP 됩니다!
            </p>

            <span id="main-slider-prev"></span> <!-- 이전 -->
            <span id="main-slider-next"></span> <!-- 다음 --> 

            <div id="main-bx-pager">
                <ul>
                    <li> <a data-slide-index="0" href=""><span class="blind">1</span></a></li>
                    <li> <a data-slide-index="1" href=""><span class="blind">2</span></a></li>
                    <li> <a data-slide-index="2" href=""><span class="blind">3</span></a></li>
                </ul>
            </div> 


            <div class="main-bx-icon">
                <div id="main-bx-icons">
                    <a href="#" class="mico1"><div class="filter"></div><span class="tran-animate">S/W GASKET 생산개시</span></a>
                    <a href="#" class="mico2"><div class="filter"></div><span class="tran-animate">1000테프론 성형기 도입</span></a>
                    <a href="#" class="mico3"><div class="filter"></div><span class="tran-animate">선반900×3000 가동</span></a>
                    <a href="#" class="mico4"><div class="filter"></div><span class="tran-animate">가스켓 전문절단 장비 보유</span></a>
                    <a href="#" class="mico5"><div class="filter"></div><span class="tran-animate">레이저 사업부 신설</span></a>
                </div>
            </div>


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
            pager: true,
            controls: true,
            nextSelector: '#main-slider-next',
            prevSelector: '#main-slider-prev',  
            pagerCustom: '#main-bx-pager', 
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






<link href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.carousel.css?ver=<?php echo G5_CSS_VER?>" rel="stylesheet">
<section class="k_wrap" id="service_section">
    <div class="k_container type_center">

            <div class="partner_inner">



                <div class="partner-title">
                    <h2>우주가스팩공업(주)<br/><strong>제품소개</strong></h2>
                    <p>가스켓 생산 연 100억 돌파,<br/>외주 없는 자체 생산!</p>
                    <div class="partner-slider-controls">
                        <span id="partner-slider-prev"><div class="overlay_p"></div></span> <!-- 이전 -->
                        <span id="partner-slider-next"><div class="overlay_p"></div></span> <!-- 다음 -->
                        <span id="partner-slider-more"><div class="overlay_p"></div><a href="#">보러가기</a></span> <!-- 다음 -->
                    </div>
                </div>


                <div class="partner-slider">
                    <div class="partner-box">
                        <a href="javascript:;">
                            <img src="<?=G5_LANG_IMG_URL?>/product01.png"  alt="" />
                            <div class="con">
                                <h4>GLAND PACKING</h4>
                                <p>테프론 섬유패킹, 윤활유입 테프론<br/>섬유 패킹, 슈퍼프론, 해치커버</p>
                            </div>
                        </a>
                    </div>
                    <div class="partner-box">
                        <a href="javascript:;">
                            <img src="<?=G5_LANG_IMG_URL?>/product02.png"  alt="" />
                            <div class="con">
                                <h4>RUBBER SHEET & GASKET</h4>
                                <p>Rubber Sheet & Gasket, Bonded<br/>Seals, Plate Heat Exchanger Gasket</p>
                            </div>
                        </a>
                    </div>
                    <div class="partner-box">
                        <a href="javascript:;">
                            <img src="<?=G5_LANG_IMG_URL?>/product03.png"  alt="" />
                            <div class="con">
                                <h4>GRAPHITE 관련품</h4>
                                <p>Graphite VOC Packing, Graphite,<br/>Graphite Crinkled Tape</p>
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
            slideMargin:22,
            minSlides:3,
            maxSlides:3,
            moveSlides:1,
            slideWidth:284,
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



<section class="k_wrap" id="">
    <div class="k_container type_center">

        <div class="csInner">
            <div class="info_col">
                <h4>CS CENTER</h4>
                <div class="widget-box">
                    <div class="help-tel">
                        <span>대표번호</span> 
                        <span class="tel">051-819-1614<br>051-804-1614 </span>
                    </div>
                    <div class="help-block">
                        E-mail : wj@gaspack.co.kr<br>C.P. 010-8034-1614
                    </div>
                    
                </div>
                <div class="help-event">
                    <a href="#" class="tran-animate"><span>고객문의 바로가기</span></a>
                    <a href="#" class="tran-animate"><span>견적문의 바로가기</span></a>
                </div> 
            </div>
            <div class="info_col lt">
                <h4>NEWS & NOTICE</h4>
                <ul>
                    <li>
                        <a href="#" class="lt_a">
                            <h5>OFFSHORE KOREA 2018</h5>
                            <div class="lt_date">2018.12.01</div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="lt_a">
                            <h5>ISO9001 (유럽인증), OHSAS18001 인증</h5>
                            <div class="lt_date">2018.12.01</div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="lt_a">
                            <h5>DNV GL 선급 획득</h5>
                            <div class="lt_date">2018.12.01</div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="lt_a">
                            <h5>API 6A 인증 획득</h5>
                            <div class="lt_date">2018.12.01</div>
                        </a>
                    </li>
                    
                </ul>
                <div class="lt_more"><a href="#"><span class="sound_only">공지사항&amp;뉴스더보기</span></a></div>
            </div>

            
            <div class="info_col last">
                <h4>CATALOGUE</h4>  
                <div class="widget-box">
                    
                    <a class="catalogue tran-animate" href="#">
                        <img src="<?=G5_LANG_IMG_URL?>/ic_dlc.png" alt="" />
                        <span class="">카탈로그 다운로드</span>
                    </a>

                </div> 
            </div>
            
        </div>

    

    </div>
</section>





<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>