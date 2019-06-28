<?php
define('_INDEX_', true); 
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_LANG_MOBILE_PATH.'/index.php');
    return;
}
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
// include_once(G5_LIB_PATH.'/latest.lib.php');
?>
<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/aos/aos.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/aos/aos.js"></script>
<script>
  AOS.init();
</script>

<?php 
// include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
?>


<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css?ver=<?php echo G5_CSS_VER?>" />
<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main_pro.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>

<div class="vg_inner">
	
	<!-- <ul class="main-slider">
		<li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
	</ul>
 -->
	<div class="vg_title" id="title1" style="display: none">
		<p class="t_shadow"><?php echo $infodu['lang']['index']['main']['txt02']?></p>
		<h2 class="t_shadow"><?php echo $infodu['lang']['index']['main']['txt01']?></h2>
		
		<!-- <span id="main-slider-prev"></span> 
		<span id="main-slider-next"></span>  -->

		<!-- <div id="main-bx-pager">
			<ul>
				<li> <a data-slide-index="0" href=""><span class="blind">1</span></a></li>
                <li> <a data-slide-index="0" href=""><span class="blind">2</span></a></li>
                <li> <a data-slide-index="0" href=""><span class="blind">3</span></a></li>
			</ul>
		</div>  -->

	</div>

    <div class="vg_product_wrap">

        <ul class="main-pro-slider">
            <?php for($i=0; $i<3; $i++):?>
            <li>
                <div class="pro">
                    <div class="thumb"> <a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/vg01.jpg" /></a></div>
                    <div class="cont">
                        <h4><a href="#"><?php echo $infodu['lang']['index']['main']['pro01']?></a></h4>
                        <p class=""><?php echo $infodu['lang']['index']['main']['pro02']?></p>
                        <div class="more">
                            <a href="#" class="tran-animate"><span><?php echo $infodu['lang']['index']['main']['pro03']?></span><span class="arrow"></span></a>
                        </div>
                            
                    </div>
                </div>
            </li>
            <?php endfor;?>
        </ul>

       <!--  <span id="main-pro-slider-prev"><span class="blind">prev</span></span> 
        <span id="main-pro-slider-next"><span class="blind">next</span></span>  -->

        
    </div>

    <div id="main-pro-bx-pager">
        <ul>
            <li> <a data-slide-index="0" href=""><span class="blind">1</span></a></li>
            <li> <a data-slide-index="1" href=""><span class="blind">2</span></a></li>
            <li> <a data-slide-index="2" href=""><span class="blind">3</span></a></li>
        </ul>
    </div> 


	<!-- <div class="vg_down"><a href="#" id="go_service"><img src="<?php echo G5_LANG_IMG_URL?>/mouse.png" alt="" class="upDownAni"> <span>Scroll Down</span></a></div> -->
</div>

<script>

    $(document).ready(function(){

        var mainSlider = $('.main-slider').bxSlider({
            auto: false,
            mode:'fade',
            infiniteLoop: false,
            wrapperClass: 'main-wrapper',
            autoControls: false,
            adaptiveHeight: true,
            touchEnabled: false,
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
        //$('#main-slider-prev a, #main-slider-next a').click(function(){
            //mainSlider.stopAuto();
            //mainSlider.startAuto();
        //});

         // setInterval(function(e){ 
         //     mainSlider.goToNextSlide();
         // }, 5000);


        var mproSlider = $('.main-pro-slider').bxSlider({
            auto: true,
            mode:'fade',
            infiniteLoop: true,
            wrapperClass: 'mpro-wrapper',
            autoControls: false,
            adaptiveHeight: true,
            touchEnabled: false,
            speed: 500,
            pager: true,
            controls: true,
            nextSelector: '#main-pro-slider-next',
            prevSelector: '#main-pro-slider-prev',  
            pagerCustom: '#main-pro-bx-pager', 
            onSliderLoad: function(){
            },
            onSlideAfter: function (slide, oldIndex, newIndex) {
            }

        });
        $('#main-pro-slider-prev a, #main-pro-slider-next a').click(function(){
            mproSlider.stopAuto();
            mproSlider.startAuto();
        });         
        
    });
   
</script>

<div class="main_con">

    <section class="k_wrap">
        <div class="k_container type_center">

            <div class="csInner" >
                <div class="info_col lt" >
                    <h4>공지사항</h4>
                    <div class="more_view"><a href="#" class="btnMore"><span class="tran-animate">+</span></a></div>
                    <ul>
                        <?php for($i=0; $i<5; $i++):?>
                        <li>
                            <a href="#" class="lt_a font_malgun">
                                <div class="bottomLine"></div>
                                <h5><span>[공지]</span> 2019 신나는 주말체육학교 용품신청서</h5>
                                <div class="lt_date">09-28</div>
                            </a>
                        </li>
                        <?php endfor;?>
                                
                    </ul>
                </div>

                <div class="info_col" >
                    <h4>대회 / 행사일정</h4>

                    <div id="event-bx-pager">
                        <ul>
                            <?php for($i=0; $i<4; $i++):?>
                            <li> <a data-slide-index="<?php echo $i?>" href=""><span class="blind"><?php echo $i+1?></span></a></li>
                            <?php endfor;?>
                        </ul>
                    </div> 

                    <link href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.event.css" rel="stylesheet">
                    <div class="event_wrap">
                        <ul class="event-slider">
                            <?php for($i=0; $i<4; $i++):?>
                            <li>
                                <div class="event_box">
                                    <div class="thumb"> <a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/bbs01.jpg" /></a></div>
                                    <div class="cont">
                                        <h5><a href="#">제 10회 금정구 축구 협회 친선 축구대회</a></h5>
                                        <p class="">금정구 체육회에서 주최하는 제10회 금정구 축구 ...</p>
                                        <div class="lt_date">09-28</div>
                                        <div class="more">
                                            <a href="#" class="tran-animate"><span>+</span>MORE</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                            <?php endfor;?>
                        </ul>
                    </div>
                    <script>

                        $(document).ready(function(){

                            var eventSlider = $('.event-slider').bxSlider({
                                auto: true,
                                mode:'horizontal',
                                infiniteLoop: true,
                                wrapperClass: 'event-wrapper',
                                autoControls: false,
                                adaptiveHeight: true,
                                touchEnabled: false,
                                speed: 500,
                                pager: true,
                                controls: false, 
                                pagerCustom: '#event-bx-pager', 
                                onSliderLoad: function(){                                   
                                }
                            });
                        });
                       
                    </script>


                </div>
                <div class="info_col last" >
                    <div id="gallery-bx-pager">
                        <ul>
                            <?php for($i=0; $i<4; $i++):?>
                            <li> <a data-slide-index="<?php echo $i?>" href=""><span class="blind"><?php echo $i+1?></span></a></li>
                            <?php endfor;?>
                        </ul>
                    </div>

                    <link href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.gallery.css" rel="stylesheet">
                    <div class="gallery_wrap">
                        <ul class="gallery-slider">
                            <?php for($i=0; $i<4; $i++):?>
                            <li>
                                <div class="gall_box">
                                    <div class="thumb"><a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/bbs02.jpg" /></a></div>
                                    <div class="cont">
                                        <span>[갤러리]</span>
                                        <h5><a href="#">제5회 건강달리기 행사</a></h5>
                                    </div>
                                    
                                </div>
                            </li>
                            <?php endfor;?>
                        </ul>
                    </div>
                    <span id="gallery-slider-prev"><span class="blind">prev</span></span> 
                    <span id="gallery-slider-next"><span class="blind">next</span></span>
                    <script>

                        $(document).ready(function(){

                            var gallerySlider = $('.gallery-slider').bxSlider({
                                auto: true,
                                mode:'horizontal',
                                infiniteLoop: true,
                                wrapperClass: 'gallery-wrapper',
                                autoControls: false,
                                adaptiveHeight: true,
                                touchEnabled: false,
                                speed: 500,
                                pager: true,
                                controls: true,
                                nextSelector: '#gallery-slider-next',
                                prevSelector: '#gallery-slider-prev',  
                                pagerCustom: '#gallery-bx-pager', 
                                onSliderLoad: function(){                                   
                                }
                            });
                            $('#gallery-prev a, #gallery-next a').click(function(){
                                gallerySlider.stopAuto();
                                gallerySlider.startAuto();
                            });
                        });
                       
                    </script>
                    
                </div>
                
            </div>

        

        </div>
    </section>





    <link href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.spo.css" rel="stylesheet">
    <section class="k_wrap">
        <div class="k_container type_center">

                <div class="spo_inner">
                    <span id="spo-slider-prev"></span> <!-- 이전 -->
                    <span id="spo-slider-next"></span> <!-- 다음 -->

                    <div class="spo-slider">

                        <?php for($i=1;$i<=5;$i++):?>
                            <div class="spo-box">
                                <a href="#" class="">
                                    <div class="con">
                                        <h4 class="spo0<?php echo $i?>"><?php echo $infodu['lang']['index']['main']['spo0'.$i]?></h4>
                                        <div class="more tran-animate"><?php echo $infodu['lang']['index']['main']['spoMore']?></div>
                                    </div>
                                    <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/spoThumb0<?php echo $i?>.jpg" alt="" /></div>
                                </a>
                            </div>
                        <?php endfor;?>
                        
                    </div>                   
                </div>          
            
        </div>
    </section>
    <script>
        $(document).ready(function(){
            var spoSlider = $('.spo-slider').bxSlider({
                auto: true,
                infiniteLoop: true,
                slideMargin:0,
                minSlides:5,
                maxSlides:5,
                moveSlides:1,
                slideWidth:280,
                wrapperClass: 'spo-wrapper',
                autoControls: false,
                adaptiveHeight: false,
                pager:true,
                speed:1000,
                controls: true,
                nextSelector: '#spo-slider-next',
                prevSelector: '#spo-slider-prev',
            });
            $('#spo-slider-prev a, #spo-slider-next a').click(function(){
                spoSlider.stopAuto();
                spoSlider.startAuto();
            });
        });
    </script>   




    <section class="k_wrap" id="customer_section">
        <div class="k_container type_center font_malgun">

                <div class="customer_center first">
                    <a href="#">         
                        <div class="thumb ico01"></div>           
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['info01']?></h3>
                    </a>
                </div>
                <div class="customer_center">
                    <a href="#">         
                        <div class="thumb ico02"></div>           
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['info02']?></h3>
                    </a>
                </div>
                <div class="customer_center">
                    <a href="#">         
                        <div class="thumb ico03"></div>           
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['info03']?></h3>
                    </a>
                </div>
                <div class="customer_center">
                    <a href="#">         
                        <div class="thumb ico04"></div>           
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['info04']?></h3>
                    </a>
                </div>
                <div class="customer_center last">
                    <a href="#">         
                        <div class="thumb ico05"></div>           
                        <h3 class="title "><?php echo $infodu['lang']['index']['main']['info05']?></h3>
                    </a>
                </div>

        </div>
    </section>



    <link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.carousel.css" />
    <div class="partner_wrap">
        <div class="partner_inner">
            <!-- <span id="partner-slider-prev"></span> 
            <span id="partner-slider-next"></span> --> 
            <div class="partner-slider">
                <div><a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/partner01.jpg"  alt="" /></a></div>
                <div><a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/partner02.jpg"  alt="" /></a></div>
                <div><a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/partner03.jpg"  alt="" /></a></div>
                <div><a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/partner04.jpg"  alt="" /></a></div>
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
                    slideMargin:68,
                    minSlides:4,
                    maxSlides:4,
                    moveSlides:1,
                    ticker: true,
                    tickerHover: true,
                    slideWidth:299,
                    wrapperClass: 'partner-wrapper',
                    autoControls: false,
                    adaptiveHeight: false,
                    pager:false,
                    speed:20000,
                    controls: false,
                    nextSelector: '#partner-slider-next',
                    prevSelector: '#partner-slider-prev',
                };

                // return ($(window).width()>=1024) ? settings1 : settings2;
                return settings1;

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


</div>


<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>