<?php
define('_INDEX_', true); 
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>

<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/aos/aos.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/aos/aos.js"></script>
<script>
  AOS.init();
</script>

<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>
<section class="k_wrap">
    <div class="vg_inner">
        
        <ul class="main-slider">
            <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.png);"></li>
            <li class="main-slider-li" id="main-slider-1" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.png);"></li>
            <li class="main-slider-li" id="main-slider-2" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.png);"></li>
        </ul>

        <div class="vg_title">
            <h2>
            	<strong class="font_montserrat"><?php echo $infodu['lang']['index']['main']['txt01']?></strong>
            	<strong class="font_montserrat"><?php echo $infodu['lang']['index']['main']['txt02']?></strong>
           	</h2>
            <p><?php echo $infodu['lang']['index']['main']['txt03']?></p>
            
            <div id="main-pro-bx-pager">
                <ul>
                    <li> <a data-slide-index="0" href="" class="active"><span class="step"></span><span class="blind">1</span></a></li>
                    <li> <a data-slide-index="1" href="" class=""><span class="step"></span><span class="blind">2</span></a></li>
                    <li> <a data-slide-index="2" href="" class=""><span class="step"></span><span class="blind">3</span></a></li>
                </ul>
            </div>

            <div class="main-slider-controls">		
				<span id="slider-play"><a class="control-play-btn" href="#" data-toggle="stop"><i class="fa fa-pause"></i><span class="sound_only">메인슬라이드 정지</span></a></span>


			</div>


        </div>

        

        <!-- <div class="vg_down">
            <a href="#" id="go_service"><img src="<?php echo G5_LANG_IMG_URL?>/tt.png" alt="" /></a>
            <span id="main-slider-prev"></span>
            <span id="main-slider-next"></span>
        </div> -->
    </div>
</section>
<script>
    $(document).ready(function(){

        var mainSlider = $('.main-slider').bxSlider({
            auto: false,
            mode:'fade',
            infiniteLoop: true,
            wrapperClass: 'main-wrapper',
            autoControls: false,
            adaptiveHeight: true,
            speed: 1000,
            pager: true,
            controls: true,
            nextSelector: '#main-slider-prev',
            prevSelector: '#main-slider-next',  
            pagerCustom: '#main-pro-bx-pager', 
            onSliderLoad: function(){
                $('.main-slider > li').eq(0).addClass('active-slide');
                $('#main-pro-bx-pager a.active span.step').animate({'width' : '100%'}, 6000, function(){});   
            },
            onSlideBefore: function (slide, oldIndex, newIndex) {
            	var current = mainSlider.getCurrentSlide();
				// setTimeout(function() {
				// 	$('.main-slider > li').removeClass('active-slide');   
				// 	$('.main-slider > li').eq(newIndex).addClass('active-slide');
				// }, 1000);

				console.log(current)
				$('#main-pro-bx-pager li a').each(function(index, item){

					var s_index = $(item).data('slide-index');

					if(current == s_index){
						$(item).find('span.step').animate({'width' : '100%'}, 6000, function(){}); 

					}
				})

				// $('#main-pro-bx-pager a.active span.step').animate({'width' : '100%'}, 6000, function(){});   


				// var width = 1;
				// setTimeout(function() {
					

				// 	width++;
				// 	$('#main-pro-bx-pager li a.active span.step').animate({'width' : width+'%'});   

				// }, 1000);	
            },
            onSlideAfter: function (slide, oldIndex, newIndex) {
                var current = mainSlider.getCurrentSlide();
                $('#main-pro-bx-pager li a span.step').css({'width':'0%'})
                
            }

        });
        $('#main-slider-prev a').click(function(){
           mainSlider.goToPrevSlide();
        }); 
        $('#main-slider-next a').click(function(){
            mainSlider.goToNextSlide();
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
                <h4><?php echo $infodu['lang']['index']['main']['etc01']?></h4>
                <p><?php echo $infodu['lang']['index']['main']['etc02']?></p>
            </div>

            <div class="etc_center tran-animate">
                <a href="<?php echo G5_LANG_URL?>/company/location.php">     
                    <div class="bg cn"></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['etc03']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['etc04']?></p>
                        <p class="content2"><?php echo $infodu['lang']['index']['main']['etc05']?></p>
                    </div>
                </a>
            </div>
            <div class="etc_center tran-animate">                   
                <a href="<?php echo G5_LANG_URL?>/company/location.php">                     
                    <div class="bg kr"></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['etc06']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['etc07']?></p>
                        <p class="content2"><?php echo $infodu['lang']['index']['main']['etc08']?></p>
                    </div>
                </a>
            </div>
            <div class="etc_center tran-animate">                  
                <a href="<?php echo G5_LANG_URL?>/company/location.php">                  
                    <div class="bg in"></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['etc09']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['etc10']?></p>
                        <p class="content2"><?php echo $infodu['lang']['index']['main']['etc11']?></p>
                    </div>
                </a>
            </div>

    </div>
</section>


<section class="k_wrap" id="business_section">
    <div class="k_container type_center">
            <div class="businessInner">       
                <div class="business ">
                    <a href="<?php echo G5_LANG_URL?>/tech/tech.php" class="tran-animate">
                        <div class="inner">
                            <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/contents02_icon_technology.png" /></div>
                            <div class="desc">
                                <h3 class="title"><?php echo $infodu['lang']['index']['main']['business01']?></h3>
                                <p class="content"><?php echo $infodu['lang']['index']['main']['business02']?></p>
                                <div class="more"><span><?php echo $infodu['lang']['index']['main']['businessMore']?></span></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="business last">
                    <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=gallery" class="tran-animate">
                        <div class="inner">
                            <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/contents02_icon_gallery.png" /></div>
                            <div class="desc">
                                <h3 class="title"><?php echo $infodu['lang']['index']['main']['business03']?></h3>
                                <p class="content"><?php echo $infodu['lang']['index']['main']['business04']?></p>
                                <div class="more"><span><?php echo $infodu['lang']['index']['main']['businessMore']?></span></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
    </div>
</section>

             

<section class="k_wrap" id="bottom_section">
    <div class="k_container type_center">
        

       <div class="bottomInner">       
            <div class="bottom_content">
                <div><img src="<?php echo G5_LANG_IMG_URL?>/contents03_quote.png" /></div>
                <p>
                    <?php echo $infodu['lang']['index']['main']['bottom01']?><br/>
                    <span><?php echo $infodu['lang']['index']['main']['bottom02']?></span>
                </p>
                <div><img src="<?php echo G5_LANG_IMG_URL?>/contents03_unquote.png" /></div>
            </div>
            <div class="bottomBox">
                <a href="<?php echo G5_LANG_URL?>/company/company.php" class="tran-animate"><span><?php echo $infodu['lang']['index']['main']['bottom03']?></span></a>
            </div>
        </div>
    </div>
</section>




<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>