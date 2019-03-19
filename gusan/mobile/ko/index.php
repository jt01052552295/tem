<?php
define('_INDEX_', true); 
include_once('./_common.php');



include_once(G5_LANG_MOBILE_PATH.'/_header.php'); 
include_once(G5_LANG_MOBILE_PATH.'/_top.php'); 
?>

<link rel="stylesheet" href="<?php echo G5_LANG_MOBILE_JS_URL?>/bxslider/dist/jquery.bxslider.main.css" />
<script src="<?php echo G5_LANG_MOBILE_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>

<div class="vg_inner">
    
    <ul class="main-slider">
        <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_MOBILE_IMG_URL?>/vg01.jpg);"></li>
        <li class="main-slider-li" id="main-slider-1" style="background-image: url(<?php echo G5_LANG_MOBILE_IMG_URL?>/vg02.jpg);"></li>
        <li class="main-slider-li" id="main-slider-2" style="background-image: url(<?php echo G5_LANG_MOBILE_IMG_URL?>/vg03.jpg);"></li>
		<li class="main-slider-li" id="main-slider-2" style="background-image: url(<?php echo G5_LANG_MOBILE_IMG_URL?>/vg04.jpg);"></li>
		<li class="main-slider-li" id="main-slider-2" style="background-image: url(<?php echo G5_LANG_MOBILE_IMG_URL?>/vg05.jpg);"></li>
    </ul>

    <div class="vg_title" id="title1">
        <h2>
            <div class="vg_tit_box font_daehan"><div class="parallax-init-pc topTxt"><?php echo $infodu['lang']['index']['main'][0]?></div></div>
        </h2>
        <span id="main-slider-prev"></span> <!-- 이전 -->
        <span id="main-slider-next"></span> <!-- 다음 -->  
    </div>       

    <div class="vg_down"><a href="#" id="go_service"><span>Scroll Down</span></a></div>


   
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

    <link href="<?php echo G5_LANG_MOBILE_JS_URL?>/bxslider/dist/jquery.bxslider.carousel.css" rel="stylesheet">
    <section class="k_wrap" id="service_section">
        <div class="k_container type_center partner_container">

                <div class="partner_inner">
                    <span id="partner-slider-prev"></span> <!-- 이전 -->
                    <span id="partner-slider-next"></span> <!-- 다음 -->

					<div class="partner-slider font_malgun">
                        <?php echo latest("pic_exam", "example", 8, 30); ?>
                    </div>                   
                </div>          
				

				<div class="partner_tel font_malgun">
					<h4 class="tit"><?php echo $infodu['lang']['index']['main'][3]?></h4>
					<div class="tel"><?php echo $infodu['lang']['index']['main'][4]?></div>

					<div class="go_link">
						<a href="<?php echo G5_LANG_MOBILE_URL?>/mail/mail.php"><span><?php echo $infodu['lang']['index']['main'][5]?></span></a>
					</div>
				</div>
        </div>
    </section>


    <script>
        $(document).ready(function(){
            var partnerSlider = $('.partner-slider').bxSlider({
                auto: true,
                infiniteLoop: true,
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


			<?php echo latest("pic_basic", "gallery", 1, 30); ?>


        </div>
    </section>
</div>


<?php
include_once(G5_LANG_MOBILE_PATH.'/_footer.php'); 
?>