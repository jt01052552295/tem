<?php
define('_INDEX_', true); 
include_once('./_common.php');

// if (G5_IS_MOBILE) {
//     include_once(G5_LANG_MOBILE_PATH.'/index.php');
//     return;
// }

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
			<li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg02.jpg);"></li>
			<li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg03.jpg);"></li>
			<li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg04.jpg);"></li>
			<li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg05.jpg);"></li>
		</ul>

		<div class="vg_title">
			<small class=" "><?php echo $infodu['lang']['index']['main']['txt01']?></small>
			<h2 class=" "><?php echo $infodu['lang']['index']['main']['txt02']?></h2>
			<p class=" "><?php echo $infodu['lang']['index']['main']['txt03']?></p>
		</div>


		<div id="main-pro-bx-pager">
            <ul>
                <li> <a data-slide-index="0" href="" class="active"><span class="step"></span><span class="blind">1</span></a></li>
                <li> <a data-slide-index="1" href="" class=""><span class="step"></span><span class="blind">2</span></a></li>
                <li> <a data-slide-index="2" href="" class=""><span class="step"></span><span class="blind">3</span></a></li>
                <li> <a data-slide-index="3" href="" class=""><span class="step"></span><span class="blind">4</span></a></li>
                <li> <a data-slide-index="4" href="" class=""><span class="step"></span><span class="blind">5</span></a></li>
            </ul>


             <div class="main-slider-controls">		
				<span id="slider-play"><a class="control-play-btn" href="#" data-toggle="stop"><i class="fa fa-pause"></i><span class="sound_only">메인슬라이드 정지</span></a></span>
			</div> 
        </div>

       



	</div>
</section>
<script>
	$(document).ready(function(){

		$('#go_service').click(function(e){
			e.preventDefault();
			var service_section = $('#info_section').offset().top;
			var goTo = service_section;
			$('html, body').animate({scrollTop : goTo}, 400);
		}); 


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
			pagerCustom: '#main-pro-bx-pager', 
			onSliderLoad: function(){
				
				$('#main-pro-bx-pager a.active span.step').animate({'width' : '100%'}, 6000, function(){});   

				

				
			},
			onSlideBefore: function (slide, oldIndex, newIndex) {
				var current = mainSlider.getCurrentSlide();
				$('#main-pro-bx-pager li a').each(function(index, item){

					var s_index = $(item).data('slide-index');

					if(current == s_index){
						$(item).find('span.step').animate({'width' : '100%'}, 6000, function(){}); 

					}
				})

				
				

			},
			onSlideAfter: function (slide, oldIndex, newIndex) {
				var current = mainSlider.getCurrentSlide();
				$('#main-pro-bx-pager li a span.step').css({'width':'0%'})
				
			}

		});
		$('#main-slider-prev a, #main-slider-next a').click(function(){
			mainSlider.stopAuto();
			mainSlider.startAuto();
		});

		var timer = null;
        timer = setInterval(function(e){ 
            mainSlider.goToNextSlide();
        }, 6000);


        $('#slider-play a').click(function(e){
			e.preventDefault();
			var toggle = $(this).attr('data-toggle');

			if(toggle=="stop"){
				clearInterval(timer);
				$(this).attr('data-toggle', 'start');
				$(this).find('.fa').removeClass('fa-pause').addClass('fa-play');
				$(this).find('span').html('메인슬라이드 시작');
			} else {
				timer = setInterval(function(e){ 
		            mainSlider.goToNextSlide();
		        }, 6000);
				$(this).attr('data-toggle', 'stop');
				$(this).find('.fa').removeClass('fa-play').addClass('fa-pause');
				$(this).find('span').html('메인슬라이드 정지');
			}

		});
		
	});
   
</script>


<section class="k_wrap " id="etc_section">
    <div class="k_container type_center etcInner">
            <div class="etc_title">
                <h4 class="font_montserrat"><?php echo $infodu['lang']['index']['main']['etc01']?></h4>
                <p><?php echo $infodu['lang']['index']['main']['etc02']?></p>
            </div>

            <div class="etc_center">
                <a href="#">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_icon01.png" /></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['etc03']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['etc04']?></p>
                        <p class="content2 font_montserrat"><?php echo $infodu['lang']['index']['main']['etcMore']?></p>
                    </div>
                </a>
            </div>
            <div class="etc_center">              
                <a href="#">                          
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_icon02.png" /></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['etc05']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['etc06']?></p>
                        <p class="content2 font_montserrat"><?php echo $infodu['lang']['index']['main']['etcMore']?></p>
                    </div>
                </a>
            </div>
            <div class="etc_center">               
                <a href="#">                     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_icon03.png" /></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['etc07']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['etc08']?></p>
                        <p class="content2 font_montserrat"><?php echo $infodu['lang']['index']['main']['etcMore']?></p>
                    </div>
                </a>
            </div>

    </div>
</section>


<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.it.css?ver=<?php echo G5_CSS_VER?>" />
<section class="k_wrap " id="it_section">

	<ul class="it-slider">
	    <?php for($i=0; $i<3; $i++):?>
	    <li>
	    	<div class="it_img">
	            <a href="#">
	                <img src="<?php echo G5_LANG_IMG_URL?>/contents02_img01.jpg" alt="" />
	            </a>
	        </div>
	        <div class="it_desc">
	            <h3 class="font_montserrat"><?php echo $infodu['lang']['index']['main']['proTitle']?></h3>
	            <h4 class=""><?php echo $infodu['lang']['index']['main']['proSubTitle']?></h3>
	            <p><?php echo $infodu['lang']['index']['main']['pro01']?></p>
	            <div class="more_view font_montserrat">
	                <a href="#" class="btnMore tran-animate">
	                    <?php echo $infodu['lang']['index']['main']['proMore']?>  
	                    <div class="bgArrow"></div>  
	                    <div class="bg tran-animate"></div>              
	                </a>
	            </div>
	        </div>
	        
	    </li>
	    <?php endfor;?>
	</ul>
	<span id="it-slider-prev"></span>
	<span id="it-slider-next"></span>
</section>

<script>
    $(document).ready(function(){
        var settings1 = function() {
            var settings1 = {
                auto: true,
                mode: 'fade',
                infiniteLoop: true,
                wrapperClass: 'it-wrapper',
                autoControls: false,
                adaptiveHeight: true,
                speed: 500,
                pager: false,
                controls: true, 
				touchEnabled: false,  
                nextSelector: '#it-slider-next',
                prevSelector: '#it-slider-prev'
            };
            return settings1;
        }

        var itSlider;
        itSlider = $('.it-slider').bxSlider(settings1());

        $('#it-slider-prev a, #it-slider-next a').click(function(){
            itSlider.stopAuto();
            itSlider.startAuto();
        });
        
    });
   
</script>




<section class="k_wrap " id="gall_section">
    <div class="k_container type_center gallInner">
            <div class="gall_title">
                <h4 class="font_montserrat"><?php echo $infodu['lang']['index']['main']['gallTitle']?></h4>
                <p><?php echo $infodu['lang']['index']['main']['gallSubTitle']?></p>
            </div>
            <div class="gallery">
                <a href="#">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_img01.jpg" /></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['gall01']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['gall02']?></p>
                    </div>
                </a>
            </div>
            <div class="gallery">              
                <a href="#">                          
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_img02.jpg" /></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['gall03']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['gall04']?></p>
                    </div>
                </a>
            </div>
            <div class="gallery">               
                <a href="#">                     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_img03.jpg" /></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['gall05']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['gall06']?></p>
                    </div>
                </a>
            </div>
            <div class="gallery">               
                <a href="#">                     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_img04.jpg" /></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['gall07']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['gall08']?></p>
                    </div>
                </a>
            </div>

    </div>
</section>


<section class="k_wrap " id="">
	<div class="k_container type_center">
	    <div class="customerInner">
	        <div class="customer odd">    
	        	<a href="#">     
	                <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/contents04_icon01.png" /></div>
	                <div class="con">      
	                    <h3 class="title"><?php echo $infodu['lang']['index']['main']['cus01']?></h3>
	                    <p class="content"><?php echo $infodu['lang']['index']['main']['cus02']?></p>
	                </div>
	                <div class="more white"></div>
	            </a>
	        </div>
	        <div class="customer even">
	            <a href="#">     
	                <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/contents04_icon02.png" /></div>
	                <div class="con">      
	                    <h3 class="title"><?php echo $infodu['lang']['index']['main']['cus03']?></h3>
	                    <p class="content"><?php echo $infodu['lang']['index']['main']['cus04']?></p>
	                </div>
	                <div class="more black"></div>
	            </a>
	        </div>
	        
	    </div>
	</div>
</section>



<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>