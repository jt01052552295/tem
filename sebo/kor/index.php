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
        </ul>

        <div class="vg_title" id="title1">
            <h2>
                <div class="vg_tit_box "><div class="">Make Future</div></div>
                <div class="vg_tit_box "><div class="">Realize your dreams!</div></div>
            </h2>
            <span id="main-slider-prev"></span> <!-- 이전 -->
            <span id="main-slider-next"></span> <!-- 다음 --> 

            <div id="main-bx-pager">
                <ul>
                    <li> <a data-slide-index="0" href=""><span class="blind">1</span></a></li>
                    <li> <a data-slide-index="1" href=""><span class="blind">2</span></a></li>
                </ul>
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
            controls: false,
            nextSelector: '#main-slider-prev',
            prevSelector: '#main-slider-next',  
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












<section class="k_wrap" id="ban_section">
    <div class="k_container type_center">

        <div class="product_wrap">
            <div class="product_inner">
                
                <div class="pro_content a1">
                    <a href="business/control.html">
                        <h4><img src="<?=G5_LANG_IMG_URL?>/etc01.png"></h4>
                        <p>임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트</p>
                        <span class="more"></span>
                        <div class="bg"><img src="<?=G5_LANG_IMG_URL?>/a01.png"></div>
                    </a>
                </div>

                <div class="pro_content a1">
                    <a href="business/safety.html">
                        <h4><img src="<?=G5_LANG_IMG_URL?>/etc02.png"></h4>
                        <p>임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트</p>
                        <span class="more"></span>
                        <div class="bg"><img src="<?=G5_LANG_IMG_URL?>/a02.png"></div>
                    </a>
                </div>

                <div class="pro_content a1">
                    <a href="business/control.html">
                        <h4><img src="<?=G5_LANG_IMG_URL?>/etc03.png"></h4>
                        <p>임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트</p>
                        <span class="more"></span>
                        <div class="bg"><img src="<?=G5_LANG_IMG_URL?>/a03.png"></div>
                    </a>
                </div>

                <div class="pro_content a3">
                    <a href="business/safety.html">
                        <h4><img src="<?=G5_LANG_IMG_URL?>/etc04.png"></h4>
                        <p>임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트, 임시텍스트</p>
                        <span class="more"></span>
                        <div class="bg"><img src="<?=G5_LANG_IMG_URL?>/a04.png"></div>
                    </a>
                </div>



            </div>
        </div>

    </div>
</section>

<section class="k_wrap" id="business_section">
    <div class="k_container type_center">
           <div class="businessInner">       
                <div class="business ">
                    <a href="javascript:;" class="tran-animate bc1">
                        <div class="thumb bc1"></div>
                        <div class="desc">
                            <h3 class="title">회사소개</h3>
                            <p class="content">SEBO의 신뢰, 품질, 고객 감동을<br/>최고의 가치로 생각합니다.</p>
                        </div>
                    </a>
                </div>
                <div class="business ">
                    <a href="javascript:;" class="tran-animate bc2">
                        <div class="thumb bc2"></div>
                        <div class="desc">
                            <h3 class="title">제품소개</h3>
                            <p class="content">SEBO의 다양한 제품의 정보를<br/>확인하실 수 있습니다.</p>
                        </div>
                    </a>
                </div>
                <div class="business ">
                    <a href="javascript:;" class="tran-animate bc3 ">
                        <div class="thumb bc3"></div>
                        <div class="desc">
                            <h3 class="title">회사연혁</h3>
                            <p class="content">SEBO의 현재까지의 연혁을<br/>알려드립니다.</p>
                        </div>
                    </a>
                </div>
                <div class="business last">
                    <a href="javascript:;" class="tran-animate bc4">
                        <div class="thumb bc4"></div>
                        <div class="desc">
                            <h3 class="title">공지 및 뉴스</h3>
                            <p class="content">SEBO의 공지사항 및 뉴스<br/>페이지입니다.</p>
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
                    
                    <h3>Ship Sales & Purchase</h3>

                    <span id="partner-slider-prev"></span> <!-- 이전 -->
                    <span id="partner-slider-next"></span> <!-- 다음 -->
                    <span id="partner-slider-more"><a href="#">보러가기</a></span> <!-- 다음 -->
                </div>

                <div class="partner-slider">
                    <div class="partner-box">
                        <a href="javascript:;">
                            <img src="<?=G5_LANG_IMG_URL?>/product01.png"  alt="" />
                            <div class="con">
                                <h4>Ship Sales</h4>
                            </div>
                        </a>
                    </div>
                    <div class="partner-box">
                        <a href="javascript:;">
                            <img src="<?=G5_LANG_IMG_URL?>/product02.png"  alt="" />
                            <div class="con">
                                <h4>Ship Purchase</h4>
                            </div>
                        </a>
                    </div>
                    <div class="partner-box">
                        <a href="javascript:;">
                            <img src="<?=G5_LANG_IMG_URL?>/product03.png"  alt="" />
                            <div class="con">
                                <h4>Ship Sales</h4>
                            </div>
                        </a>
                    </div>
                    <div class="partner-box">
                        <a href="javascript:;">
                            <img src="<?=G5_LANG_IMG_URL?>/product04.png"  alt="" />
                            <div class="con">
                                <h4>Ship Purchase</h4>
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



<section class="k_wrap">
    <div class="k_container type_center">

        <div class="mapBox">
            <iframe src="http://infodu.co.kr/map/sebo.php"></iframe>


            <div class="map_info">
                <div class="map_info_inner">
                    <dl>
                        <dt>Contact Us</dt>
                        <dd class="addr">부산광역시 해운대구 센텀중앙로 48<br/>(우동) 1902호</dd>
                        <dd class="tel">051-462-6888</dd>
                        <dd class="fax">051-462-6889</dd>
                        <dd class="mail">sebo@sebo-ltd.com</dd>
                    </dl>
                </div>
            </div>
        </div>


    </div>
</section>            


<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>