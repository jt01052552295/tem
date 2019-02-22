<?php
define('_INDEX_', true); 
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>

<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>

<div class="vg_inner">
    
    <ul class="main-slider">
        <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
        <li class="main-slider-li" id="main-slider-1" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg02.jpg);"></li>
        <li class="main-slider-li" id="main-slider-2" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg03.jpg);"></li>
    </ul>

    <div class="vg_title" id="title1">
        <h2>
            <div class="vg_tit_box font_daehan"><div class="parallax-init-pc topTxt"><?php echo $infodu['lang']['index']['main'][0]?></div></div>
        </h2>
        <span id="main-slider-prev"></span> <!-- 이전 -->
        <span id="main-slider-next"></span> <!-- 다음 -->  
    </div>       

    <div class="vg_down"><a href="#" id="go_service"><img src="<?php echo G5_LANG_IMG_URL?>/mouse.png" alt="" class="upDownAni" /> <span>Scroll Down</span></a></div>


   
</div>

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

        $.fn.sloganAniamte = function(){
            $('#title1 .parallax-init-pc').each(function(e){
                var currLink = $(this)
                var e = e + 1;
                var _d = 500 * (e)
                currLink.delay(_d).animate({opacity:"1.0"}, _d , function(){
                    currLink.addClass("add-stage");
                });
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
                setTimeout(function() {
                    $.fn.sloganAniamte();
                }, 500);
                $('.main-slider > li').eq(0).addClass('active-slide');

                
            },
            onSlideBefore: function (slide, oldIndex, newIndex) {
                var current = mainSlider.getCurrentSlide();

                setTimeout(function() {
                    $('.main-slider > li').removeClass('active-slide');   
                    $('.main-slider > li').eq(newIndex).addClass('active-slide');
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
        

        setInterval(function(e){ 
            mainSlider.goToNextSlide();
        }, 8000);
        
    });
   
</script>


<div class="main_con">

    <link href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.carousel.css" rel="stylesheet">
    <section class="k_wrap" id="service_section">
        <div class="k_container type_center">

                <div class="partner_inner">
                    <span id="partner-slider-prev"></span> <!-- 이전 -->
                    <span id="partner-slider-next"></span> <!-- 다음 -->

                    <div class="partner-slider font_malgun">
                        <div class="partner-box">
                            <a href="javascript:;">
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/pro01.jpg"  alt="" /></div>
                                <div class="con">
                                    <h4>양산한옥</h4>
                                    <p>순수 자연소재로만 사용하여 가장 자연이 깃든 숨을 쉬는집을 시공하였습니다.</p>
                                    <div class="more">자세히 보기</div>
                                </div>
                            </a>
                        </div>
                        <div class="partner-box">
                            <a href="javascript:;">
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/pro02.jpg"  alt="" /></div>
                                <div class="con">
                                    <h4>서울한옥</h4>
                                    <p>순수 자연소재로만 사용하여 가장 자연이 깃든 숨을 쉬는집을 시공하였습니다.</p>
                                    <div class="more">자세히 보기</div>
                                </div>
                            </a>
                        </div>
                        <div class="partner-box">
                            <a href="javascript:;">
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/pro03.jpg"  alt="" /></div>
                                <div class="con">
                                    <h4>이반성주택</h4>
                                    <p>순수 자연소재로만 사용하여 가장 자연이 깃든 숨을 쉬는집을 시공하였습니다.</p>
                                    <div class="more">자세히 보기</div>
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
                auto: false,
                infiniteLoop: true,
                slideMargin:32,
                minSlides:3,
                maxSlides:3,
                moveSlides:1,
                slideWidth:445,
                wrapperClass: 'partner-wrapper',
                autoControls: false,
                adaptiveHeight: false,
                pager:true,
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

            <div class="thumb2"><a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/cu01.jpg" alt="" /></a></div>
            <div class="entryWrapTr">
                <div class="concon font_malgun">
                    <div class="ctit">
                        <h3 class="font_daehan">목수이야기</h3>
                        <h4>서울시 은평구 진광동 [ 2019. 02 ]</h4>
                    </div>
                    <div class="ccon">
                        <p>
                            대지면적 : 294.9㎡<br/>
                            건축면적 : 146.58㎡<br/>
                            연면적 : 307.5㎡
                        </p>
                    </div>
                    <div class="a-box"><a href="#" class="sub_link_btn tran-animate"><span>자세히 보기</span><span class="arrow"></span></a></div>
                </div>
            </div>
            

        </div>
    </section>



    <section class="k_wrap" id="business_section">
        <div class="k_container type_center">
           <div class="businessInner">       
                <div class="business_title font_daehan">
                    <h4 data-aos="fade-down" data-aos-duration="500" class="aos-init aos-animate"><?php echo $infodu['lang']['index']['main'][1]?></h4>
                    <p data-aos="fade-down" data-aos-duration="500" class="aos-init aos-animate"><?php echo $infodu['lang']['index']['main'][2]?></p>
                </div>
            </div>
        </div>
    </section>

</div>



<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>