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
<div class="back_con"> 
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
                <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);">
                    <div class="vg_title">
                        <h2 class="vg_text_ani delay02">
                            <div class="vg_tit_box"><div class=""><?php echo $infodu['lang']['index']['main']['txt01']?></div></div>
                        </h2>
                        <p class="vg_text_ani delay03"><?php echo $infodu['lang']['index']['main']['txt02']?></p>
                    </div>
                </li>
            </ul>
            <div id="main-bx-pager" style="display: none">
                <ul>
                    <li> <a data-slide-index="0" href=""><span class="blind">1</span></a></li>
                    <li> <a data-slide-index="1" href=""><span class="blind">2</span></a></li>
                    <li> <a data-slide-index="2" href=""><span class="blind">3</span></a></li>
                </ul>
            </div>
            <!-- <div class="vg_down upDownAni"><a href="#" id="go_service"><img src="<?php echo G5_LANG_IMG_URL?>/mouse.png" alt=""></a></div>  -->


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
                pagerCustom: '#main-bx-pager', 
                onSliderLoad: function(){
                    
                    $(".vg_title").addClass("on");
                    //$.fn.sloganAniamte();

                    // setTimeout(function() {
                    //     $('.main-slider > li').removeClass('active-slide');   
                    //     $('.main-slider > li').eq(0).addClass('active-slide');
                    //     $('.main-slider > li').eq(0).find('.square-box').addClass('on');
                    // }, 1000);

                    

                    
                },
                onSlideBefore: function (slide, oldIndex, newIndex) {
                    var current = mainSlider.getCurrentSlide();
                    //$(".square-box").removeClass("on");

                    // setTimeout(function() {
                    //     $('.main-slider > li').removeClass('active-slide');   
                    //     $('.main-slider > li').eq(newIndex).addClass('active-slide');
                    //     $('.main-slider > li').eq(newIndex).find('.square-box').addClass('on');
                    // }, 1000);

                    
                    

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
            // }, 6000);
            
        });
       
    </script>


</div>
<div class="main_con">

    <section class="k_wrap" id="">
        <div class="k_container csInner">
            
                <div class="csBox " data-aos="fade-up" data-aos-duration="200">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cs01.png" alt="" /></div>
                        <div class="desc">
                            <h3 class="title"><?php echo $infodu['lang']['index']['main']['csm01']?></h3>
                            <p class="content">
                                <?php echo $infodu['lang']['index']['main']['csm02']?><br/>
                                <?php echo $infodu['lang']['index']['main']['csm03']?>
                            </p>
                        </div>
                </div>
                <div class="csBox " data-aos="fade-up" data-aos-duration="400">
                    
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cs02.png" alt="" /></div>
                        <div class="desc">
                            <h3 class="title"><?php echo $infodu['lang']['index']['main']['csm04']?></h3>
                            <p class="content"><?php echo $infodu['lang']['index']['main']['csm05']?></p>
                        </div>
                </div>
                <div class="csBox last" data-aos="fade-up" data-aos-duration="600">
                    <a href="#" class="tran-animate">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cs03.png" alt="" /></div>
                        <div class="desc">
                            <h3 class="title"><a href="#"><?php echo $infodu['lang']['index']['main']['csm06']?></a></h3>
                            

                            <ul class="lt">
                               <?php for($i=0; $i<2; $i++):?>           
                                <li><a href="#" class="lt_a"><span>· 홈페이지 리뉴얼 오픈</span></a></li>
                                <?php endfor;?>
                            </ul>

                        </div>
                        <span class="more_ic tran-animate"><a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/cs_arrow.png" alt="" /></a></span>
                    </a>
                </div>
            

        </div>
    </section>



	<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.product.css?ver=<?php echo G5_CSS_VER?>" />
	<section class="k_wrap" id="pro_section">
	    <div class="k_container type_center">
	        <div class="pro_wrap">
	            <div class="page-header">
	                <h4 class="" data-aos="fade-up"><span>JENERAL CHEM</span> PRODUCTS<div class="bottomLine"></div></h4>
	            </div>
	            <div class="product_wrap">

                    <span id="slider-prev"><a class="control-play-btn" href="#" data-toggle="prev"><span class="blind">이전</span></a></span>
                    <span id="slider-next"><a class="control-play-btn" href="#" data-toggle="next"><span class="blind">다음</span></a></span>

	                <ul class="product-slider">  
	                    
                        <li class="pro" data-aos="fade-up" data-aos-duration="200">
                            <a href="#">
                            	<div class="innerLine"></div>
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/pro01.jpg" /></div>
                                <div class="desc">
                                	<span class="sm">GW-818</span>
                                    <h5>METALLIC SILVER</h5>
                                    <span class="more font_malgun tran-animate"><em>>></em></span>
                                </div>
                            </a>
                        </li>
                        <li class="pro" data-aos="fade-up" data-aos-duration="400">
                            <a href="#">
                            	<div class="innerLine"></div>
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/pro02.jpg" /></div>
                                <div class="desc">
                                	<span class="sm">GW-818</span>
                                    <h5>METALLIC SILVER</h5>
                                    <span class="more font_malgun tran-animate"><em>>></em></span>
                                </div>
                            </a>
                        </li>
                        <li class="pro" data-aos="fade-up" data-aos-duration="600">
                            <a href="#">
                            	<div class="innerLine"></div>
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/pro03.jpg" /></div>
                                <div class="desc">
                                	<span class="sm">GW-818</span>
                                    <h5>METALLIC SILVER</h5>
                                    <span class="more font_malgun tran-animate"><em>>></em></span>
                                </div>
                            </a>
                        </li>


	                </ul>
	            </div>
	        </div>
	    </div>
	</section>
	<script>
	    $(document).ready(function(){
	        var settings = function() {
	            var settings1 = {
	                auto: true,
	                infiniteLoop: true,
	                slideMargin:68,
	                slideWidth:421,
	                minSlides:3,
	                maxSlides:3,
	                moveSlides:1,
	                wrapperClass: 'product-wrapper',
	                autoControls: false,
	                adaptiveHeight: true,
	                speed: 500,
	                pager: false,
	                controls: false, 
	                nextSelector: '#product-slider-next',
	                prevSelector: '#product-slider-prev',
	            };
	            var settings2 = {
	                auto: true,
	                infiniteLoop: true,
	                wrapperClass: 'product-wrapper',
	                autoControls: false,
	                adaptiveHeight: true,
	                speed: 500,
	                pager: true,
	                controls: false, 
	                nextSelector: '#product-slider-next',
	                prevSelector: '#product-slider-prev',
	                pagerCustom: '#pro-bx-pager',
	            };
	            return ($(window).width()>1024) ? settings1 : settings1;
	        }

	        var mySlider;
	        function tourLandingScript() {
	            mySlider.reloadSlider(settings());
	        }

	        mySlider = $('.product-slider').bxSlider(settings());

	        $('#slider-prev a').click(function(e){
				e.preventDefault();
				mySlider.stopAuto();
				mySlider.goToPrevSlide();
				mySlider.startAuto();
				return false;
			});
			$('#slider-next a').click(function(e){
				e.preventDefault();
				mySlider.stopAuto();
				mySlider.goToNextSlide();
				mySlider.startAuto();
				return false;
			});

			$('#slider-play a').click(function(e){
				e.preventDefault();
				var toggle = $(this).attr('data-toggle');

				if(toggle=="stop"){
					mySlider.stopAuto();
					$(this).attr('data-toggle', 'start');
					$(this).find('.fas').removeClass('xi-pause').addClass('xi-play');
					$(this).find('span').html('시작');
				} else {
					mySlider.stopAuto();
					mySlider.startAuto();
					$(this).attr('data-toggle', 'stop');
					$(this).find('.fas').removeClass('xi-play').addClass('xi-pause');
					$(this).find('span').html('정지');
				}

			});
	        $(window).resize(tourLandingScript);       
	    });
	   
	</script>

    <link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.cert.css?ver=<?php echo G5_CSS_VER?>" />
	<section class="k_wrap" id="cert_section">
    	<div class="k_container type_center certInner">

                <div class="cert_half bg">
                    <div class="page-header">
                       <h4 class="" data-aos="fade-up"><span><?php echo $infodu['lang']['index']['main']['cert01']?></span> <?php echo $infodu['lang']['index']['main']['cert02']?><div class="bottomLine"></div></h4>
                    </div>
                    <p class="cert_con" data-aos="fade-up" data-aos-duration="400">
                        <strong><?php echo $infodu['lang']['index']['main']['cert03']?></strong>
                        <?php echo $infodu['lang']['index']['main']['cert04']?>
                    </p>
                    <div data-aos="fade-up" data-aos-duration="600" class="more_view">
                        <a href="#" class="btnMore inline tran-animate"><?php echo $infodu['lang']['index']['main']['cert05']?></a>
                    </div>
                </div>
                <div class="cert_half pos">
                    <span id="cert-slider-prev"><a class="control-btn" href="#" data-toggle="prev"><span class="blind">이전</span></a></span>
                    <span id="cert-slider-next"><a class="control-btn" href="#" data-toggle="next"><span class="blind">다음</span></a></span>

                    <ul class="cert-slider">  
                        <li class="" data-aos="fade-up" data-aos-duration="200">
                            <a href="#"><div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cert01.jpg" /></div></a>
                        </li>
                        <li class="" data-aos="fade-up" data-aos-duration="400">
                            <a href="#"><div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cert02.jpg" /></div></a>
                        </li>
                        <li class="" data-aos="fade-up" data-aos-duration="600">
                            <a href="#"><div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cert03.jpg" /></div></a>
                        </li>
                    </ul>
                </div>

    	</div>
    </section>
    <script>
        $(document).ready(function(){
            var cert_setting = function() {
                var settings1 = {
                    auto: true,
                    infiniteLoop: true,
                    slideMargin:40,
                    slideWidth:248,
                    minSlides:3,
                    maxSlides:3,
                    moveSlides:1,
                    wrapperClass: 'cert-wrapper',
                    autoControls: false,
                    adaptiveHeight: true,
                    speed: 500,
                    pager: false,
                    controls: false, 
                };
                return settings1;
            }

            var cert_slider;
            function tourLandingScript() {
                cert_slider.reloadSlider(cert_setting());
            }

            cert_slider = $('.cert-slider').bxSlider(cert_setting());

            $('#cert-slider-prev a').click(function(e){
                e.preventDefault();
                cert_slider.stopAuto();
                cert_slider.goToPrevSlide();
                cert_slider.startAuto();
                return false;
            });
            $('#cert-slider-next a').click(function(e){
                e.preventDefault();
                cert_slider.stopAuto();
                cert_slider.goToNextSlide();
                cert_slider.startAuto();
                return false;
            });

            $(window).resize(tourLandingScript);       
        });
       
    </script>





	<section class="k_wrap" id="inquiry_section">
	    <div class="k_container type_center">
	    	<div class="inquiry_toggle">
                <div class="page-header">
                    <h4 class="" data-aos="fade-up"><span><?php echo $infodu['lang']['index']['main']['inq_title01']?></span> <?php echo $infodu['lang']['index']['main']['inq_title02']?><div class="bottomLine"></div></h4>
                </div>

                <div class="inquiry_title" data-aos="fade-up" data-aos-duration="400">
                    <div class="inqBox">
                        <a href="#" class="">
                            <div class="thumb tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/inq01.png" alt="" title=""></div>
                            <div class="desc">
                                <h3 class="title"><?php echo $infodu['lang']['index']['main']['inq_c01']?></h3>
                                <p class="content"><?php echo $infodu['lang']['index']['main']['inq_c02']?></p>
                            </div>
                            <span class="more"></span>
                        </a>
                    </div>
                    <div class="inqBox">
                        <a href="#" class="">
                            <div class="thumb tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/inq02.png" alt="" title=""></div>
                            <div class="desc">
                                <h3 class="title"><?php echo $infodu['lang']['index']['main']['inq_c03']?></h3>
                                <p class="content"><?php echo $infodu['lang']['index']['main']['inq_c04']?></p>
                            </div>
                            <span class="more"></span>
                        </a>
                    </div>
                    <div class="inqBox">
                        <a href="#" class="">
                            <div class="thumb tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/inq03.png" alt="" title=""></div>
                            <div class="desc">
                                <h3 class="title"><?php echo $infodu['lang']['index']['main']['inq_c05']?></h3>
                                <p class="content"><?php echo $infodu['lang']['index']['main']['inq_c06']?></p>
                            </div>
                            <span class="more"></span>
                        </a>
                    </div>
                    <div class="inqBox">
                        <a href="#" class="">
                            <div class="thumb tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/inq04.png" alt="" title=""></div>
                            <div class="desc">
                                <h3 class="title"><?php echo $infodu['lang']['index']['main']['inq_c07']?></h3>
                                <p class="content"><?php echo $infodu['lang']['index']['main']['inq_c08']?></p>
                            </div>
                            <span class="more"></span>
                        </a>
                    </div>



                </div>


		        <div class="inquiry_content" data-aos="fade-up" data-aos-duration="800">
		            <form id="frmAjax" name="frmAjax" method="post" enctype="multipart/form-data" action="<?php echo G5_LANG_URL?>/_mailMain.php" onSubmit="return checkForm(this);">

		            	<h4 class="font_montserrat"><?php echo $infodu['lang']['index']['main']['inq01']?></h4>
		            	<p><?php echo $infodu['lang']['index']['main']['inq02']?></p>
		                
		                <div class="mailBox">
		                    <ul class="mail_table">          
		                        <li class="mail_input">
		                            <label class="laTxt mr_right" for="label1"><input type="text" name="company" id="label1" class="frmMailInput" placeholder="<?php echo $infodu['lang']['index']['main']['inq_m01']?>"/></label>
		                        </li>
		                        <li class="mail_input">
		                            <label class="laTxt" for="label2"><input type="text" name="name" id="label2" class="frmMailInput" placeholder="<?php echo $infodu['lang']['index']['main']['inq_m02']?>"/></label>
		                        </li>
		                    </ul>
		                    <ul class="mail_table"> 
		                        <li class="mail_input">
		                            <label class="laTxt mr_right" for="label3"><input type="text" name="tel" id="label3" class="frmMailInput" placeholder="<?php echo $infodu['lang']['index']['main']['inq_m03']?>"/></label>
		                        </li>
		                        <li class="mail_input">
		                            <label class="laTxt" for="label4"><input type="text" name="mail" id="label4" class="frmMailInput" placeholder="<?php echo $infodu['lang']['index']['main']['inq_m04']?>"/></label>
		                        </li>
		                    </ul>

		                </div>
		                <div class="mailBox">
		                    <ul class="mail_table ">    
		                        <li class="mail_input2">
		                            <label class="laTxt" for="label5"><textarea name="memo" id="label5" class="frmMailTextArea" placeholder="<?php echo $infodu['lang']['index']['main']['inq_m05']?>"></textarea></label>
		                        </li>
		                    </ul>
		                    <ul class="mail_table"> 
		                        <li class="mail_input">
		                        	<span class="agreeTxt2"><?php echo $infodu['lang']['index']['main']['inq_m07']?></span>
		                        </li>
		                        <li class="mail_input">
		                        	<div class="agreeFrmChk">
										<label class="agreeTxt" for="agree"><?php echo $infodu['lang']['index']['main']['inq_m08']?></label>
										<input class="checkbox" type="checkbox" id="agree" name="agree" value="Y">
									</div>
		                        </li>
		                    </ul>
		                </div>

		                <div class="mail_submit">
		                    <button type="submit" class="frmMailSubmit tran-animate"><?php echo $infodu['lang']['index']['main']['inq_m06']?></button>
		                </div>
		            </form>
		        </div>

		        

		    
		    </div>
	          
	            
	    </div>
	</section>
	<script>
		$(document).ready(function(e){
			$('#inq_btn').tog
			$( '#inq_btn' ).click( function(e) {
				e.preventDefault();
	          $( '.inquiry_toggle' ).toggle( 'active' );
	        });
		})
	    <!--
	    function checkForm(f) {

	        if(!f.company.value) {
	            alert('<?php echo $infodu['lang']['index']['main']['inq_err01']?>');
	            f.company.focus();
	            return false;
	        }
	        if(!f.name.value) {
	            alert('<?php echo $infodu['lang']['index']['main']['inq_err02']?>');
	            f.name.focus();
	            return false;
	        }
	        if(!f.tel.value) {
	            alert('<?php echo $infodu['lang']['index']['main']['inq_err03']?>');
	            f.tel.focus();
	            return false;
	        }
	        if(!f.mail.value) {
	            alert('<?php echo $infodu['lang']['index']['main']['inq_err04']?>');
	            f.mail.focus();
	            return false;
	        }
	        if(!f.memo.value) {
	            alert('<?php echo $infodu['lang']['index']['main']['inq_err05']?>');
	            f.memo.focus();
	            return false;
	        }
	        return true;
	    }
	    //-->
	</script>


    <section class="k_wrap" id="etc_section">
        <div class="k_container type_center">
            <div class="etcInner">    
                <div class="etc_content" >
                    <p data-aos="fade-left" data-aos-duration="400" class="big"><?php echo $infodu['lang']['index']['main']['etc01']?></p>
                    <p data-aos="fade-right" data-aos-duration="600"><?php echo $infodu['lang']['index']['main']['etc02']?></p>
                </div>
            </div>

        </div>
    </section>


</div>


<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>