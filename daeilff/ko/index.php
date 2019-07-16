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
            <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
            <li class="main-slider-li" id="main-slider-1" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg02.jpg);"></li>
            <li class="main-slider-li" id="main-slider-2" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg03.jpg);"></li>
        </ul>

        <div class="vg_title">
            <h2>
            	<span data-aos="fade-up" data-aos-delay="300"><?php echo $infodu['lang']['index']['main']['txt01']?></span>
            	<strong data-aos="fade-up" data-aos-delay="400"><?php echo $infodu['lang']['index']['main']['txt02']?></strong>
           	</h2>
            <p data-aos="fade-up" data-aos-delay="500"><?php echo $infodu['lang']['index']['main']['txt03']?></p>
            
            <div id="main-pro-bx-pager">
                <ul>
                    <li> <a data-slide-index="0" href="" class="active"><span class="step"></span><span class="blind">1</span></a></li>
                    <li> <a data-slide-index="1" href="" class=""><span class="step"></span><span class="blind">2</span></a></li>
                    <li> <a data-slide-index="2" href="" class=""><span class="step"></span><span class="blind">3</span></a></li>
                </ul>
            </div>

            <div class="main-slider-controls">		
				<span id="slider-play"><a class="control-play-btn" href="#" data-toggle="stop"><i class="fas fa-pause"></i><span class="sound_only">메인슬라이드 정지</span></a></span>


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
				setTimeout(function() {
					$('.main-slider > li').removeClass('active-slide');   
					$('.main-slider > li').eq(newIndex).addClass('active-slide');
				}, 1000);

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
				$(this).find('.fas').removeClass('fa-pause').addClass('fa-play');
				$(this).find('span').html('메인슬라이드 시작');
			} else {
				timer = setInterval(function(e){ 
		            mainSlider.goToNextSlide();
		        }, 6000);
				$(this).attr('data-toggle', 'stop');
				$(this).find('.fas').removeClass('fa-play').addClass('fa-pause');
				$(this).find('span').html('메인슬라이드 정지');
			}

		});
        
    });
   
</script>



<section class="k_wrap " id="pro_section">
    <div class="k_container type_center ">
        <div class="proInner">
            <div class="pro_center" data-aos="fade-left">
                <a href="<?php echo G5_LANG_URL?>/products/products.php">    
                    <div class="white bg_red">
                        <div class="inner">
                            <ul>
                                <li class="title"><?php echo $infodu['lang']['index']['main']['pro01']?></li>
                                <li><?php echo $infodu['lang']['index']['main']['pro02']?></li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="pro_center" data-aos="fade-left">  
                 
                <a href="#">  
                 
                    <div class="bg "><img src="<?php echo G5_LANG_IMG_URL?>/pro01.png" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['pro03']?></h3>
                        <div class="more"><span><?php echo $infodu['lang']['index']['main']['proMore']?></span></div>
                    </div>
                </a>
            </div>
            <div class="pro_center" data-aos="fade-left"> 
                 
                <a href="#">                 
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/pro02.png" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['pro04']?></h3>
                        <div class="more"><span><?php echo $infodu['lang']['index']['main']['proMore']?></span></div>
                    </div>
                </a>
            </div>
            <div class="pro_center" data-aos="fade-left"> 
                 
                <a href="#">                   
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/pro03.png" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['pro05']?></h3>
                        <div class="more"><span><?php echo $infodu['lang']['index']['main']['proMore']?></span></div>
                    </div>
                </a>
            </div>



            <div class="pro_center" data-aos="fade-right">  
                 
                <a href="#">                     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/pro04.png" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['pro06']?></h3>
                        <div class="more"><span><?php echo $infodu['lang']['index']['main']['proMore']?></span></div>
                    </div>
                </a>
            </div>
            <div class="pro_center" data-aos="fade-right"> 
                 
                <a href="#">               
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/pro05.png" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['pro07']?></h3>
                        <div class="more"><span><?php echo $infodu['lang']['index']['main']['proMore']?></span></div>
                    </div>
                </a>
            </div>
            <div class="pro_center" data-aos="fade-right"> 
                 
                <a href="#">                
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/pro06.png" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['pro08']?></h3>
                        <div class="more"><span><?php echo $infodu['lang']['index']['main']['proMore']?></span></div>
                    </div>
                </a>
            </div>
            <div class="pro_center" data-aos="fade-right">
                <a href="#" class="">    
                    <div class="opa_011627 tran-animate"></div>
                    <div class="bg_dark">
                        
                        <div class="inner">
                            <ul>
                                <li class="plus">+</li>
                                <li class="title"><?php echo $infodu['lang']['index']['main']['pro09']?></li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>



<section class="k_wrap " id="etc_section">
    <div class="k_container type_center etcInner">

            <div class="etc_center " data-aos="fade-right"> 
                <a href="<?php echo G5_LANG_URL?>/company/company.php"> 
                    <div class="thumb tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/etc01.jpg" alt=""></div>                         
                    <div class="con">
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['etc01']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['etc02']?></p>
                        <div class="more"><span><?php echo $infodu['lang']['index']['main']['etcMore']?></span></div>
                    </div>
                </a>
            </div>
            <div class="etc_right " > 
                <div class="lt" data-aos="fade-left">
                    <h4 class="title">NEWS&<br/>NOTICE</h4>
                    <ul class="lt_list">
                        <?php for($i=0; $i<3; $i++):?>
                        <li>
                            <a href="#">
                                <h5>(주)대일소방 홈페이지 오픈하였습니다.</h5>
                                <div class="lt_date">2019-07-07</div>
                            </a>
                        </li>
                        <?php endfor;?>   
                    </ul>
                    <div class="lt_more">
                        <a href="#" class="tran-animate">
                            <span>자세히보기</span>
                        </a>
                    </div>        

                </div>

                <div class="etc_box" data-aos="fade-up" data-aos-delay="400"> 
                    <a href="<?php echo G5_LANG_URL?>/business/business.php">   
                        <div class="thumb tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/eico01.png" alt=""></div>              
                        <h3 class="title "><?php echo $infodu['lang']['index']['main']['etc03']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['etc04']?></p>
                        <div class="more"><span><?php echo $infodu['lang']['index']['main']['etcMore']?></span></div>
                    </a>
                </div>

                <div class="etc_box last" data-aos="fade-up" data-aos-delay="600">
                    <a href="<?php echo G5_LANG_URL?>/business/business.php">   
                        <div class="thumb tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/eico02.png" alt=""></div>              
                        <h3 class="title "><?php echo $infodu['lang']['index']['main']['etc05']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['etc06']?></p>
                        <div class="more2"><span><?php echo $infodu['lang']['index']['main']['etcMore']?></span></div>
                    </a>
                </div>

            </div>


    </div>
</section>



<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>