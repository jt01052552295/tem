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
<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/aos/aos.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/aos/aos.js"></script>
<script>
  AOS.init();
</script>


<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>
<section class="k_wrap">
    <div class="vg_inner">
        
        <ul class="main-slider">
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
        </ul>

        <div class="vg_title" id="title1">
            <h2>
                <div class="vg_tit_box " data-aos="fade-up" data-aos-duration="1000"><div class=""><?php echo $infodu['lang']['index']['main']['txt01']?></div></div>
                <div class="vg_tit_box " data-aos="fade-up" data-aos-duration="1000"><div class=""><?php echo $infodu['lang']['index']['main']['txt02']?></div></div>
            </h2>
            <p data-aos="fade-up" data-aos-duration="2000"><?php echo $infodu['lang']['index']['main']['txt03']?></p>
            <span id="main-slider-prev"></span> <!-- 이전 -->
            <span id="main-slider-next"></span> <!-- 다음 --> 

            <div id="main-bx-pager">
                <ul>
                    <li> <a data-slide-index="0" href=""><span class="blind">1</span></a></li>
                    <li> <a data-slide-index="1" href=""><span class="blind">2</span></a></li>
                    <li> <a data-slide-index="2" href=""><span class="blind">3</span></a></li>
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
            auto: true,
            mode:'horizontal',
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
        $('#main-slider-prev a, #main-slider-next a').click(function(){
            mainSlider.stopAuto();
            mainSlider.startAuto();
        });

        // setInterval(function(e){ 
        //     mainSlider.goToNextSlide();
        // }, 5000);
        
    });
   
</script>


<section class="k_wrap" id="info_section">
    <div class="k_container type_center">
        <div class="inner_wrap">       
            <div class="inner bg01" data-aos="fade-up" data-aos-duration="500">
                <a href="#" class="banner">
                    <h4 class="title"><?php echo $infodu['lang']['index']['main']['txt04']?></h4>
                    <p class="content"><?php echo $infodu['lang']['index']['main']['txt05']?></p>
                    <div class="btn"></div>
                </a>
            </div>
            <div class="inner bg02" data-aos="fade-up" data-aos-duration="1000">
                <a href="#" class="banner">
                    <h4 class="title"><?php echo $infodu['lang']['index']['main']['txt06']?></h4>
                    <p class="content"><?php echo $infodu['lang']['index']['main']['txt07']?></p>
                    <div class="btn"></div>
                </a>
            </div>
        </div>


    </div>
</section>

<section class="k_wrap" id="business_section">
    <div class="k_container type_center">
           <div class="businessInner">       
                <div class="business_title">
                    <h4 data-aos="fade-down"><?php echo $infodu['lang']['index']['main']['txt08']?></h4>
                    <p data-aos="fade-down"><?php echo $infodu['lang']['index']['main']['txt09']?></p>
                </div>
                <div class="business" data-aos="fade-down">
                    <a href="#" class="tran-animate"><span><?php echo $infodu['lang']['index']['main']['txt10']?></span><span class="white_arrow"></span></a>
                </div>
            </div>

    </div>
</section>


<section class="k_wrap " id="etc_section">
    <div class="k_container type_center etcInner">

            <div class="etc_center bg01" data-aos="fade-down" data-aos-duration="1000">
                <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/etc01.png" title="" ></div>
                <div class="con">      
                    <h3 class="title"><?php echo $infodu['lang']['index']['main']['txt11']?></h3>
                    <p class="tel"><?php echo $infodu['lang']['index']['main']['txt12']?></p>
                </div>
                <div class="dashed_line"></div>
                <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/etc02.png" title="" ></div>
                <div class="con">
                    <p class="content"><?php echo $infodu['lang']['index']['main']['txt13']?><br/><?php echo $infodu['lang']['index']['main']['txt14']?></p>
                </div>
            </div>
            <div class="etc_center bg02" data-aos="fade-down" data-aos-duration="1500">  
                <a href="#"> 
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['txt15']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['txt16']?></p>
                    </div>            
                    <div class="dashed_line2"></div>        
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/etc03.png" title="" ></div>
                </a>
            </div>
            <div class="etc_center bg03" data-aos="fade-down" data-aos-duration="2000"> 
                 
                <a href="#">                  
                    <div class="lt">      
                        <h3><?php echo $infodu['lang']['index']['main']['txt17']?></h3>
                        <div class="article"><?php echo $infodu['lang']['index']['main']['txt18']?></div>
                        <div class="dashed_line3"></div>
                        <div class="datetime"><?php echo $infodu['lang']['index']['main']['txt19']?></div>
                    </div>
                </a>
            </div>

    </div>
</section> 


<section class="k_wrap " id="sponsor_section">
    <div class="k_container type_center spoInner">
            <div class="spo_title">
                <h4 data-aos="fade-down"><?php echo $infodu['lang']['index']['main']['txt20']?></h4>
                <p data-aos="fade-down"><?php echo $infodu['lang']['index']['main']['txt21']?></p>
            </div>

            <div class="spo_wrapper">
                <div class="spo_center odd"  data-aos="fade-right">
                    <a href="#">     
                        <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/spo01.jpg" title="" ></div>
                        <div class="con">      
                            <h3><?php echo $infodu['lang']['index']['main']['txt22']?></h3>
                            <p><?php echo $infodu['lang']['index']['main']['txt23']?></p>
                            <div class="btn"></div>
                        </div>

                    </a>
                </div>
                <div class="spo_center even"  data-aos="fade-left">  
                     
                    <a href="#">                     
                        
                        <div class="con">      
                            <h3><?php echo $infodu['lang']['index']['main']['txt24']?></h3>
                            <p><?php echo $infodu['lang']['index']['main']['txt25']?></p>
                            <div class="btn"></div>
                        </div>
                        <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/spo02.jpg" title="" ></div>
                        
                    </a>
                </div>
            </div>

    </div>
</section>



<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.rslide.css" />
<!-- <script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script> -->



<div class="r_slide">
    <ul>
        <li><img src="<?php echo G5_LANG_IMG_URL?>/rs01.jpg"></li>
        <li><img src="<?php echo G5_LANG_IMG_URL?>/rs02.jpg"></li>
        <li><img src="<?php echo G5_LANG_IMG_URL?>/rs03.jpg"></li>
    </ul>
    <span id="rs-slider-prev"></span>
    <span id="rs-slider-next"></span>
    <div class="rs_txt_wrap">
        <div class="rs_txt">
            <div class="rs_con">
                <h4 data-aos="fade-up" ><?php echo $infodu['lang']['index']['main']['txt26']?></h4>
                <strong data-aos="fade-up" data-aos-duration="800"><?php echo $infodu['lang']['index']['main']['txt27']?></strong>
                <p data-aos="fade-up" data-aos-duration="1200"><?php echo $infodu['lang']['index']['main']['txt28']?></p>                            
            </div>
        </div>
        <div class="rs_txt">
            <div class="rs_con">
                <h4 data-aos="fade-up" ><?php echo $infodu['lang']['index']['main']['txt26']?></h4>
                <strong data-aos="fade-up" data-aos-duration="800"><?php echo $infodu['lang']['index']['main']['txt27']?></strong>
                <p data-aos="fade-up" data-aos-duration="1200"><?php echo $infodu['lang']['index']['main']['txt28']?></p>                            
            </div>
        </div>
        <div class="rs_txt">
            <div class="rs_con">
                <h4 data-aos="fade-up" ><?php echo $infodu['lang']['index']['main']['txt26']?></h4>
                <strong data-aos="fade-up" data-aos-duration="800"><?php echo $infodu['lang']['index']['main']['txt27']?></strong>
                <p data-aos="fade-up" data-aos-duration="1200"><?php echo $infodu['lang']['index']['main']['txt28']?></p>                            
            </div>
        </div>         
    </div>

    <div class="rs_bg bg01"></div>
    <div class="rs_bg bg02"></div>
</div>




<script type="text/javascript">
    var rslider = $(".r_slide ul").bxSlider({
        speed : 1500,
        pager : false,
        wrapperClass: 'rs-wrapper',
        easing : "cubic-bezier(0.3, 0, 0, 1)",
        controls: true,
        nextSelector: '#rs-slider-next',
        prevSelector: '#rs-slider-prev',
        onSliderLoad : function(){
            $('.rs_txt_wrap > .rs_txt').eq(0).show();
            $(".r_slide ul li").eq(1).find("img").css("marginLeft", "-20%");
        },
        onSlideBefore : function(){
            var current = rslider.getCurrentSlide();
            var next = rslider.getCurrentSlide() + 1;
            $(".r_slide ul li").eq(current).find("img").animate({marginLeft:0}, 1400);
            $(".r_slide ul li").eq(next).find("img").animate({marginLeft: "-20%"}, 1400);
        },
        onSlideAfter : function(obj){
            var idx = $(obj).index();
            $('.rs_txt_wrap > .rs_txt').hide();
            $('.rs_txt_wrap > .rs_txt').eq(idx -1).show();

        }
    });

    $('#rs-slider-prev a, #rs-slider-next a').click(function(){
        rslider.stopAuto();
        rslider.startAuto();
    });
</script>





<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.carousel.css" />
<div class="partner_wrap">
    <div class="partner_inner">
        <span id="partner-slider-prev"></span> <!-- 이전 -->
        <span id="partner-slider-next"></span> <!-- 다음 -->
        <div class="partner-slider">
            <div><a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/slide1.jpg"  alt="" /></a></div>
            <div><a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/slide1.jpg"  alt="" /></a></div>
            <div><a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/slide1.jpg"  alt="" /></a></div>
            <div><a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/slide1.jpg"  alt="" /></a></div>
            <div><a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/slide1.jpg"  alt="" /></a></div>
        </div>
        
    </div>
</div>
<script>
    $(document).ready(function(){

        var settings = function() {

            var settings2 = {
                auto: true,
                infiniteLoop: true,
                wrapperClass: 'partner-wrapper',
                autoControls: false,
                adaptiveHeight: false,
                pager:false,
                speed:100,
                controls: true,
                nextSelector: '#partner-slider-next',
                prevSelector: '#partner-slider-prev',
            };

            var settings1 = {
                auto: true,
                infiniteLoop: true,
                slideMargin:8,
                minSlides:5,
                maxSlides:5,
                moveSlides:1,
                slideWidth:232,
                wrapperClass: 'partner-wrapper',
                autoControls: false,
                adaptiveHeight: false,
                pager:false,
                speed:100,
                controls: true,
                nextSelector: '#partner-slider-next',
                prevSelector: '#partner-slider-prev',
            };

            return ($(window).width()>=1024) ? settings1 : settings2;

        }


        var mySlider;
        function tourLandingScript() {
            mySlider.reloadSlider(settings());
        }        

        mySlider = $('.partner-slider').bxSlider(settings());
        $(window).resize(tourLandingScript);


        $('#partner-slider-prev a, #partner-slider-next a').click(function(){
            mySlider.stopAuto();
            mySlider.startAuto();
        });
        $('#partner-slider-toggle a').click(function(e){
            e.preventDefault();
            var toggle = $(this).attr('data-toggle');
            if(toggle=="stop"){
                mySlider.stopAuto();
                $(this).attr('data-toggle', 'start');
            } else {
                mySlider.stopAuto();
                mySlider.startAuto();
                $(this).attr('data-toggle', 'stop');
            }
        });
    });
</script>



<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>