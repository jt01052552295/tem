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
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg1.jpg);"></li>
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg1.jpg);"></li>
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg1.jpg);"></li>
        </ul>

        <div class="vg_title" id="title1">
            <h2>
                <div class="vg_tit_box "><div class="nanum_pen"><?php echo $infodu['lang']['index']['main'][0]?></div></div>
                <div class="vg_tit_box "><div class=""><?php echo $infodu['lang']['index']['main'][1]?></div></div>
            </h2>
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


<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/aos/aos.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/aos/aos.js"></script>
<script src="<?php echo G5_LANG_JS_URL?>/aos/aos2.js"></script>
<script>
  AOS.init();
</script>

<section class="k_wrap " id="intro_section">
    <div class="introInner">
            <div class="intro_title">
                <!-- <h4 data-aos="fade-down" data-aos-offset="120"><?php echo $infodu['lang']['index']['main'][2]?></h4> -->
                <h4 id="test"><?php echo $infodu['lang']['index']['main'][2]?></h4>
                <p><?php echo $infodu['lang']['index']['main'][3]?></p>
            </div>

            <div class="intro">
                <a href="javascript:;">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/intro01.png" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main'][4]?></h3>
                    </div>
                </a>
            </div>
            <div class="intro">  
                 
                <a href="javascript:;">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/intro02.png" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main'][5]?></h3>
                    </div>
                </a>
            </div>
            <div class="intro"> 
                 
                <a href="javascript:;">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/intro03.png" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main'][6]?></h3>
                    </div>
                </a>
            </div>
            <div class="intro"> 
                 
                <a href="javascript:;">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/intro04.png" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main'][7]?></h3>
                    </div>
                </a>
            </div>

    </div>
</section>


<script>
    var runOnScroll =  function(evt) {
      //console.log(evt.target);
    };

    var elements = document.querySelectorAll("[data-aos]");
    elements = Array.prototype.slice.call(elements);


    elements.forEach(function(element) {
      //console.info(elements)
      //window.addEventListener("scroll", runOnScroll);
    });


    $(window).scroll(function() {
        var i = window.innerHeight;
        var currentTop = i + (window.pageYOffset * 1)
        var basic_offset = 120;
        var target = 0;

        var e = document.querySelector("#test");

        for (var t = 0, n = 0; e && !isNaN(e.offsetLeft) && !isNaN(e.offsetTop); ) {
            t += e.offsetLeft - ("BODY" != e.tagName ? e.scrollLeft : 0),
            n += e.offsetTop - ("BODY" != e.tagName ? e.scrollTop : 0),
            e = e.offsetParent;
        }

        var targetElm = document.querySelector("#test");

        target = n + basic_offset;
        currentTop > target ? targetElm.classList.add("aos-animate") : targetElm.classList.remove("aos-animate");

    });
</script>



<section class="k_wrap " id="etc_section">
    <div class="k_container type_center etcInner">
            <div class="etc_title">
                <h4><?php echo $infodu['lang']['index']['main'][8]?></h4>
                <p><?php echo $infodu['lang']['index']['main'][9]?></p>
            </div>

            <div class="etc_center tran-animate">
                <a href="#">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/etc01.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main'][10]?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main'][11]?></p>
                    </div>
                </a>
            </div>
            <div class="etc_center tran-animate">  
                 
                <a href="#">                     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/etc02.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main'][12]?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main'][13]?></p>
                    </div>
                </a>
            </div>
            <div class="etc_center tran-animate"> 
                 
                <a href="#">                  
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/etc03.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main'][14]?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main'][15]?></p>
                    </div>
                </a>
            </div>

    </div>
</section>



<section class="k_wrap" id="business_section">
    <div class="k_container type_center">
           <div class="businessInner">       
                <div class="business_title">
                    <h4 ><?php echo $infodu['lang']['index']['main'][16]?></h4>
                    <p ><?php echo $infodu['lang']['index']['main'][17]?></p>
                </div>
                <div class="business " >
                    <a href="#" class="tran-animate"><span><?php echo $infodu['lang']['index']['main'][18]?></span><span class="white_arrow"></span></a>
                </div>
                <div class="business " >
                    <a href="#" class="tran-animate"><span><?php echo $infodu['lang']['index']['main'][19]?></span><span class="white_arrow"></span></a>
                </div>
             

            </div>

    </div>
</section>



<section class="k_wrap" id="lt_section">
    <div class="k_container type_center">

        <div class="lt">              
            <h4 class="title">공지사항</h4>
            <ul class="lt_list">
                <?php for($i=0; $i<4; $i++):?>
                <li>
                    <a href="#">
                        <h5>늘푸른사회복지법인 및 산하시설 2019</h5>
                        <div class="lt_date">19.03.01</div>
                    </a>
                </li>
                <?php endfor; ?>
                        
            </ul>
            <div class="lt_more">
                <a href="#" class="tran-animate">
                    <span class="sound_only">공지사항&amp;뉴스더보기</span>
                    <span class="line1"></span>
                    <span class="line2"></span>
                </a>
            </div>
        </div>
        <div class="lt">              
            <h4 class="title">늘푸른 소식지</h4>
            <ul class="lt_list">
                <?php for($i=0; $i<4; $i++):?>
                <li>
                    <a href="#">
                        <h5>늘푸른소식 28호</h5>
                        <div class="lt_date">19.03.01</div>
                    </a>
                </li>
                <?php endfor; ?>
                        
            </ul>
            <div class="lt_more">
                <a href="#" class="tran-animate">
                    <span class="sound_only">늘푸른소식 더보기</span>
                    <span class="line1"></span>
                    <span class="line2"></span>
                </a>
            </div>
        </div>

    </div>
</section>



<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.carousel.css" />
<div class="partner_wrap">
    <div class="partner_inner">
        <div class="partner-title">
            <div class="partner-slider-controls">
                <span id="partner-slider-prev"></span> <!-- 이전 -->
                <span id="partner-slider-next"></span> <!-- 다음 -->
                <span id="partner-slider-toggle"><a class="pro-stop" href="#" data-toggle="stop">Stop</a></span> <!-- 시작/멈춤 -->
            </div>
        </div>
        <div class="partner-slider">
            <div><a href="http://cafe.daum.net/silver2070" target="_blank"><img src="<?php echo G5_LANG_IMG_URL?>/slide1.jpg"  alt="" /></a></div>
            <div><a href="http://www.honeybees.kr/" target="_blank"><img src="<?php echo G5_LANG_IMG_URL?>/slide2.jpg"  alt="" /></a></div>
            <div><a href="http://cafe.daum.net/babycity1004" target="_blank"><img src="<?php echo G5_LANG_IMG_URL?>/slide3.jpg"  alt="" /></a></div>
            <div><a href="http://www.green-yn.kr" target="_blank"><img src="<?php echo G5_LANG_IMG_URL?>/slide4.jpg"  alt="" /></a></div>
        </div>
        
    </div>
</div>
<script>
    $(document).ready(function(){
        var partnerSlider = $('.partner-slider').bxSlider({
            auto: true,
            infiniteLoop: true,
            slideMargin:20,
            minSlides:4,
            maxSlides:4,
            moveSlides:1,
            slideWidth:245,
            wrapperClass: 'partner-wrapper',
            autoControls: false,
            adaptiveHeight: false,
            pager:false,
            speed:100,
            controls: true,
            nextSelector: '#partner-slider-next',
            prevSelector: '#partner-slider-prev',
        });
        $('#partner-slider-prev a, #partner-slider-next a').click(function(){
            partnerSlider.stopAuto();
            partnerSlider.startAuto();
        });
        $('#partner-slider-toggle a').click(function(e){
            e.preventDefault();
            var toggle = $(this).attr('data-toggle');
            if(toggle=="stop"){
                partnerSlider.stopAuto();
                $(this).attr('data-toggle', 'start');
            } else {
                partnerSlider.stopAuto();
                partnerSlider.startAuto();
                $(this).attr('data-toggle', 'stop');
            }
        });
    });
</script>



<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>