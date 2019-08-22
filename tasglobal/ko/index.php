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
                <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.png);">
                    <div class="vg_title">
                        <small class="vg_text_ani delay01">
                            <?php echo $infodu['lang']['index']['main']['txt01']?>   
                        </small>
                        <h2 class="vg_text_ani delay02">
                            <div class="vg_tit_box"><div class=""><?php echo $infodu['lang']['index']['main']['txt02']?></div></div>
                        </h2>
                        <p class="vg_text_ani delay03"><?php echo $infodu['lang']['index']['main']['txt03']?></p>
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




    <section class="k_wrap" id="car_section">
        <div class="k_container type_center carMain">
            <div class="car_img">
                <a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/company.jpg" alt="" /><div class="innerBox"><div class="line"></div></div></a>
            </div>
            <div class="car_desc">
                <h3 data-aos="fade-up" data-aos-duration="400"><?php echo $infodu['lang']['index']['main']['spo01']?></h3>
                <p data-aos="fade-up" data-aos-duration="600"><?php echo $infodu['lang']['index']['main']['spo02']?></p>
                <div data-aos="fade-up" data-aos-duration="800" class="more_view"><a href="#" class="btnMore inline tran-animate"><?php echo $infodu['lang']['index']['main']['spoMore']?></a></div>
            </div> 
            

        </div>
    </section>


    <section class="k_wrap" id="ban_section">
        <div class="k_container type_center">
            <div class="loc_desc">
                <p class="big" data-aos="fade-up" data-aos-duration="500"><?php echo $infodu['lang']['index']['main']['ban01']?></p>
                <p class="sm" data-aos="fade-up" data-aos-duration="1000"><?php echo $infodu['lang']['index']['main']['ban02']?></p>
            </div>
        </div>
    </section>

</div>
<div class="main_con">

	<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.product.css?ver=<?php echo G5_CSS_VER?>" />
	<section class="k_wrap" id="pro_section">
	    <div class="k_container type_center">
	        <div class="pro_wrap">
	            <div class="page-header">
	                <h4 class="" data-aos="fade-up">주요사업</h4>

	                <div id="pro-bx-pager">
		                <ul>
		                    <li> <a data-slide-index="0" href=""><span class="tt"><div class="on"></div>로봇 선체 청소</span></a></li>
		                    <li> <a data-slide-index="1" href=""><span class="tt"><div class="on"></div>로봇 수중 검사</span></a></li>
		                    <li> <a data-slide-index="2" href=""><span class="tt"><div class="on"></div>수중 검사</span></a></li>
		                    <li> <a data-slide-index="3" href=""><span class="tt"><div class="on"></div>프로펠러 폴리싱</span></a></li>
		                    <li> <a data-slide-index="4" href=""><span class="tt"><div class="on"></div>수중용접 / 절단</span></a></li>
		                    <li> <a data-slide-index="5" href=""><span class="tt"><div class="on"></div>선박구난</span></a></li>
		                </ul>
		            </div>



	                <!-- <span id="product-slider-prev"></span>
	                <span id="product-slider-next"></span> -->

	                <div class="pro-slider-controls">
						<span id="slider-prev"><a class="control-play-btn" href="#" data-toggle="prev"><i class="fas xi-angle-left"></i><span class="blind">이전</span></a></span>
						<span id="slider-play"><a class="control-play-btn" href="#" data-toggle="stop"><i class="fas xi-pause"></i><span class="blind">정지</span></a></span>
						<span id="slider-next"><a class="control-play-btn" href="#" data-toggle="next"><i class="fas xi-angle-right"></i><span class="blind">다음</span></a></span>
					</div>

	            </div>
	            <div class="product_wrap">
	                <ul class="product-slider">  
	                    
                        <li class="pro" data-aos="fade-up" data-aos-duration="200">
                            <a href="#">
                            	<div class="innerLine"></div>
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/business_1.jpg" /></div>
                                <div class="desc">
                                	<span class="sm">business 1</span>
                                    <h5>로봇 선체 청소</h5>
                                    <span class="more">view</span>
                                </div>
                            </a>
                        </li>
                        <li class="pro" data-aos="fade-up" data-aos-duration="400">
                            <a href="#">
                            	<div class="innerLine"></div>
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/business_2.jpg" /></div>
                                <div class="desc">
                                	<span class="sm">business 2</span>
                                    <h5>로봇 수중 검사</h5>
                                    <span class="more">view</span>
                                </div>
                            </a>
                        </li>
                        <li class="pro" data-aos="fade-up" data-aos-duration="600">
                            <a href="#">
                            	<div class="innerLine"></div>
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/business_3.jpg" /></div>
                                <div class="desc">
                                	<span class="sm">business 3</span>
                                    <h5>수중 검사</h5>
                                    <span class="more">view</span>
                                </div>
                            </a>
                        </li>
                        <li class="pro" data-aos="fade-up" data-aos-duration="600">
                            <a href="#">
                            	<div class="innerLine"></div>
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/business_1.jpg" /></div>
                                <div class="desc">
                                	<span class="sm">business 4</span>
                                    <h5>프로펠러 폴리싱</h5>
                                    <span class="more">view</span>
                                </div>
                            </a>
                        </li>
                        <li class="pro" data-aos="fade-up" data-aos-duration="600">
                            <a href="#">
                            	<div class="innerLine"></div>
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/business_2.jpg" /></div>
                                <div class="desc">
                                	<span class="sm">business 5</span>
                                    <h5>수중용접 / 절단</h5>
                                    <span class="more">view</span>
                                </div>
                            </a>
                        </li>
                        <li class="pro" data-aos="fade-up" data-aos-duration="600">
                            <a href="#">
                            	<div class="innerLine"></div>
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/business_3.jpg" /></div>
                                <div class="desc">
                                	<span class="sm">business 6</span>
                                    <h5>선박구난</h5>
                                    <span class="more">view</span>
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
	                slideMargin:25,
	                slideWidth:325,
	                minSlides:3,
	                maxSlides:3,
	                moveSlides:1,
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
	            return ($(window).width()>1024) ? settings1 : settings2;
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


	<section class="k_wrap" id="business_section">
    	<div class="k_container type_center businessInner">

                <div class="business " data-aos="fade-down" data-aos-duration="200">
                    <a href="#" class="tran-animate">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/icon_1.png" alt="" /></div>
                        <div class="desc">
                            <h3 class="title"><?php echo $infodu['lang']['index']['main']['busi01']?></h3>
                            <p class="content"><?php echo $infodu['lang']['index']['main']['busi02']?></p>
                        </div>
                        <span class="more"><?php echo $infodu['lang']['index']['main']['busi_more']?></span>
                        <span class="more_ic tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/icon_btn.png" alt="" /></span>
                    </a>
                </div>
                <div class="business " data-aos="fade-down" data-aos-duration="400">
                    <a href="#" class="tran-animate">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/icon_2.png" alt="" /></div>
                        <div class="desc">
                            <h3 class="title"><?php echo $infodu['lang']['index']['main']['busi03']?></h3>
                            <p class="content"><?php echo $infodu['lang']['index']['main']['busi04']?></p>
                        </div>
                        <span class="more"><?php echo $infodu['lang']['index']['main']['busi_more']?></span>
                        <span class="more_ic tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/icon_btn.png" alt="" /></span>
                    </a>
                </div>
                <div class="business" data-aos="fade-down" data-aos-duration="600">
                    <a href="#" class="tran-animate">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/icon_3.png" alt="" /></div>
                        <div class="desc">
                            <h3 class="title"><?php echo $infodu['lang']['index']['main']['busi05']?></h3>
                            <p class="content"><?php echo $infodu['lang']['index']['main']['busi06']?></p>
                        </div>
                        <span class="more"><?php echo $infodu['lang']['index']['main']['busi_more']?></span>
                        <span class="more_ic tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/icon_btn.png" alt="" /></span>
                    </a>
                </div>
                <div class="business last" data-aos="fade-down" data-aos-duration="800">
                    <a href="#" class="tran-animate">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/icon_4.png" alt="" /></div>
                        <div class="desc">
                            <h3 class="title"><?php echo $infodu['lang']['index']['main']['busi07']?></h3>
                            <p class="content"><?php echo $infodu['lang']['index']['main']['busi08']?></p>
                        </div>
                        <span class="more"><?php echo $infodu['lang']['index']['main']['busi_more']?></span>
                        <span class="more_ic tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/icon_btn.png" alt="" /></span>
                    </a>
                </div>

    	</div>
    </section>


    <section class="k_wrap" id="etc_section">
	    <div class="k_container type_center">
	           <div class="etcInner">       
	                <div class="etc_title">
	                    <h4 data-aos="fade-down" data-aos-duration="200"><img src="<?php echo G5_LANG_IMG_URL?>/cont_logo.png" /></h4>
	                </div>
	                <div class="etc_content" >
	                    <p data-aos="fade-down" data-aos-duration="400" class="big"><?php echo $infodu['lang']['index']['main']['etc01']?></p>
	                    <p data-aos="fade-down" data-aos-duration="600"><?php echo $infodu['lang']['index']['main']['etc02']?></p>
	                </div>

	                <div class="etc_wrap">
		                <div class="etcBox" data-aos="fade-down" data-aos-duration="600">
		                	<span class="line_right"></span>
		                	<span class="circle"></span>
		                    <span class="txt"><?php echo $infodu['lang']['index']['main']['etc03']?></span>
		                </div>
		                <div class="etcBox" data-aos="fade-down" data-aos-duration="600">
		                	<span class="line_full"></span>
		                	<span class="circle"></span>
		                    <span class="txt"><?php echo $infodu['lang']['index']['main']['etc04']?></span>
		                </div>
		                <div class="etcBox" data-aos="fade-down" data-aos-duration="600">
		                	<span class="line_full"></span>
		                	<span class="circle"></span>
		                    <span class="txt"><?php echo $infodu['lang']['index']['main']['etc05']?></span>
		                </div>
		                <div class="etcBox" data-aos="fade-down" data-aos-duration="600">
		                	<span class="line_full"></span>
		                	<span class="circle"></span>
		                    <span class="txt"><?php echo $infodu['lang']['index']['main']['etc06']?></span>
		                </div>
		                <div class="etcBox" data-aos="fade-down" data-aos-duration="600">
		                	<span class="line_left"></span>
		                	<span class="circle"></span>
		                    <span class="txt"><?php echo $infodu['lang']['index']['main']['etc07']?></span>
		                </div>
		            </div>

	            </div>

	    </div>
	</section>


	<section class="k_wrap" id="inquiry_section">
	    <div class="k_container type_center">
	    	<div class="inquiry_close">
	    		<a href="#" id="inq_btn"><span class="tt"><?php echo $infodu['lang']['index']['main']['inq_close']?><!-- <i class="fa fa-angle-down" aria-hidden="true"></i> --></span><span class="arrow tran-animate">&gt;</span></a>
	    	</div>
	    	<div class="inquiry_toggle">
		        <div class="inquiry_content">
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
		                    <button type="submit" class="frmMailSubmit"><?php echo $infodu['lang']['index']['main']['inq_m06']?>&nbsp;<img src="<?php echo G5_LANG_IMG_URL?>/inquiry_pencil.png" alt="" /></button>
		                </div>
		            </form>
		        </div>

		        <div class="inquiry_title">
		            <div class="company_info">
		                <table class="table">
		                    <tr>
		                        <th colspan="2"><?php echo $infodu['lang']['index']['main']['inq_t01']?></th>
		                    </tr>
		                    <tr>
		                        <td><img src="<?php echo G5_LANG_IMG_URL?>/ic_tel.png" alt="" />&nbsp;&nbsp;<?php echo $infodu['lang']['index']['main']['inq_d01']?></td>
		                        <td><img src="<?php echo G5_LANG_IMG_URL?>/ic_fax.png" alt="" />&nbsp;&nbsp;<?php echo $infodu['lang']['index']['main']['inq_d02']?></td>
		                    </tr>
		                </table>
		            </div>
		        </div>

		        <div class="inquiry_map">
		            <h4><?php echo $infodu['lang']['index']['main']['inq_map01']?></h4>
		            <p><?php echo $infodu['lang']['index']['main']['inq_map02']?></p>
		            <span class="more_ic"><a href="#" class="tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/icon_btn.png" alt=""></a></span>
		            <div class="mapBox">
		            	<!-- * 카카오맵 - 지도퍼가기 -->
						<!-- 1. 지도 노드 -->
						<div id="daumRoughmapContainer1566372897973" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%"></div>

						<!--
							2. 설치 스크립트
							* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
						-->
						<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

						<!-- 3. 실행 스크립트 -->
						<script charset="UTF-8">
							new daum.roughmap.Lander({
								"timestamp" : "1566372897973",
								"key" : "uses",
								"mapHeight" : "180"
							}).render();
						</script>
		            </div>
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

</div>


<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>