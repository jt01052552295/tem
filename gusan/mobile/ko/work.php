<?php
define('_INDEX_', true); 
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>


<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>
<section class="k_wrap">
    <div class="vg_inner">
        <div class="vg_title">
            <h2>Faulty quality practice</h2>
            <p>무결점품질을 목표로 고객만족을 실현하는  피혁염료업체 나토상사(주)입니다.</p>
        </div>
        
        <ul class="main-slider">
            <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg1.jpg);"></li>
        </ul>

        

        <!-- <div class="vg_down">
            <a href="#" id="go_service"><img src="<?php echo G5_LANG_IMG_URL?>/tt.png" alt="" /></a>
            <span id="main-slider-prev"></span>
            <span id="main-slider-next"></span>
        </div> -->
    </div>
</section>
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
            $('.vg_title h2').addClass('active');
            $('.vg_title p').addClass('active');
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
        $('#main-slider-prev a').click(function(){
           mainSlider.goToPrevSlide();
        }); 
        $('#main-slider-next a').click(function(){
            mainSlider.goToNextSlide();
        }); 

        // setInterval(function(e){ 
        //     mainSlider.goToNextSlide();
        // }, 5000);
        
    });
   
</script>

<section class="k_wrap">
    <div class="k_container type_center">
        <div class="productWrap">
            <h4>Main Products</h4>
            <div class="row_product">
                <ul class="grid4 mg0">
                    <li><a href="javascript:;" class="proA b" data-img=""><span>BROWN 1</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA b" data-img=""><span>BROWN 2</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA n" data-img=""><span>BROWN 3</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA o" data-img=""><span>BROWN 4</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA y" data-img=""><span>BROWN 5</span> <span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA b" data-img=""><span>HAVANA 1</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA n" data-img=""><span>HAVANA 2</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA o" data-img=""><span>ORANGE 1</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA y" data-img=""><span>YELLOW 1</span> <span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA b" data-img=""><span>YELLOW 2</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA n" data-img=""><span>YELLOW 3</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA o" data-img=""><span>RED 1</span><span class="arr">&gt;&gt;</span></a></li>
					<li><a href="javascript:;" class="proA o" data-img=""><span>BLUE 1</span><span class="arr">&gt;&gt;</span></a></li>
					<li><a href="javascript:;" class="proA o" data-img=""><span>BLUE 2</span><span class="arr">&gt;&gt;</span></a></li>
					<li><a href="javascript:;" class="proA o" data-img=""><span>GREEN 1</span><span class="arr">&gt;&gt;</span></a></li>
					<li><a href="javascript:;" class="proA o" data-img=""><span>YELLOW N3</span><span class="arr">&gt;&gt;</span></a></li>
					<li><a href="javascript:;" class="proA o" data-img=""><span>YELLOW N6</span><span class="arr">&gt;&gt;</span></a></li>
					<li><a href="javascript:;" class="proA o" data-img=""><span>BLACK 1</span><span class="arr">&gt;&gt;</span></a></li>
					<li><a href="javascript:;" class="proA o" data-img=""><span>BLACK 2</span><span class="arr">&gt;&gt;</span></a></li>
					<li><a href="javascript:;" class="proA o" data-img=""><span>BLACK 3</span><span class="arr">&gt;&gt;</span></a></li>
                </ul>
            </div>

            <div class="a-box"><a href="<?php echo G5_LANG_URL?>/product/product.php" class="tran-animate"><span>View</span><span class="arrow"></span></a></div>

            <div class="p-image">
                <img src="<?php echo G5_LANG_IMG_URL?>/product01.jpg" id="proImg" alt="" /> 
            </div>

        </div>

    </div>
</section>



<!-- 제품소개 -->
<style>
.vid .tt{font-size:26px; text-align:center; border-bottom:1px solid #000000; padding-bottom:15px; margin-bottom:25px;}

.vid .tb_1{width:800px; text-align:center; font-size:16px; border-collapse:collapse; margin-top:30px; margin-bottom:15px;}
.vid .tb_1 th {border:1px solid #c6c6c6; text-align:center; background:#eeeeee; padding:3px 5px 3px 5px; font-size:15px; }
.vid .tb_1 td {border:1px solid #c6c6c6; text-align:center; background:#FFF; padding:5px; font-size:14px;}

.vid .tb_2{text-align:center; font-size:14px; border-collapse:collapse;  margin-bottom:15px;}
.vid .tb_2 th {border:1px solid #c6c6c6; text-align:center; background:#eeeeee; padding:3px 5px 3px 5px; font-size:15px; }
.vid .tb_2 td {border:1px solid #c6c6c6; text-align:center; background:#FFF; padding:5px; font-size:14px;}

.vid .tb_3{height:250px; text-align:center; font-size:14px; border-collapse:collapse;  margin-bottom:15px;}
.vid .tb_3 th {border:1px solid #c6c6c6; text-align:center; background:#eeeeee; padding:3px 5px 3px 5px; font-size:15px; }
.vid .tb_3 td {border:1px solid #c6c6c6; text-align:center; background:#FFF; padding:5px; font-size:14px;}



.vid .pro_spec{ margin-top:30px;}
.vid .p_s div{float:left; margin-right:40px;}
.vid .p_s p{ margin-bottom:10px;}
.vid .p_s p img{border:1px solid #c6c6c6; padding:5px;}
</style>


<div class="videoBg">
    <div class="videoInner">
        <div class="videoClose"><a href="#" class="closeBtn"><i class="fas fa-times"></i></a></div>
        <div class="" id="vidCon">
			
			<!-- 내용들어가는곳 -->
			<div id="vid01" class="vid">
				
				<p class="tt">BROWN 1</p>

				<table class="tb_1">
					<tr>
						<th rowspan="3">Color No.</th>
						<th rowspan="3">Dyestuffs Name</th>
						<th rowspan="3">60℃(g/L) Solubility</th>
						<th rowspan="3">Penetration</th>
						<th colspan="6">Fastness</th>
						<th rowspan="3">PVC Migration</th>
						<th rowspan="3">참고사항</th>
					</tr>
					<tr>
						<th rowspan="2">Light</th>
						<th rowspan="2">Perspiration</th>
						<th colspan="2">Rubbing</th>
						<th colspan="2">Lacquer <br />Migration</th>				
					</tr>
					<tr>
						<th>Dry</th>
						<th>Wet</th>
						<th>Dry</th>
						<th>Wet</th>						
					</tr>
					<tr>
						<td>1</td>
						<td>BROWN 1</td>
						<td>100</td>
						<td>4</td>
						<td>3-4</td>
						<td>3</td>
						<td>4</td>
						<td>3-4</td>
						<td>4-5</td>
						<td>4</td>
						<td>5</td>
						<td>Metal=100%</td>
					</tr>
				</table>

				<p style="font-size:13px;">
				※All data contained in this catalogue are based on our current knowledge and experience.<br />
				Therefore they may be a little bit different from the results of other different conditions.</p>

				
				


				<div class="pro_spec">
					<div class="p_s">
						<p>1. Dyestuff Name : <span style="font-size:20px;">BROWM 1</span></p>
					</div>
					<div class="p_s">
						<div>
							<p>2. Dyeing Test : 침투 3%</p>
							<p><img src="<?php echo G5_LANG_IMG_URL?>/images/p_1.jpg"  alt=""></p>
						</div>

						<div style="margin-left:50px;">
							<p>3. Perspiration Test</p>
							<p>
								<table class="tb_2" style="width:340px;">
									<tr>
										<th>Name</th>
										<th>&nbsp;</th>
										<th>Grain</th>
									</tr>
									<tr>
										<th>Acetate</th>
										<td rowspan="6"><img src="<?php echo G5_LANG_IMG_URL?>/images/p_2.jpg"  alt=""></td>
										<td rowspan="6"><img src="<?php echo G5_LANG_IMG_URL?>/images/p_3.jpg"  alt=""></td>
									</tr>
									<tr>
										<th>Cotton</th>
									</tr>
									<tr>
										<th>Nylon</th>
									</tr>
									<tr>
										<th>Polyester</th>
									</tr>
									<tr>
										<th>Polyacryl</th>
									</tr>
									<tr>
										<th>Wool</th>
									</tr>
								</table>
							</p>
						</div>

						<div>
							<p>4.Water Test</p>
							<p>
								<table class="tb_2"  style="width:320px;">
									<tr>
										<th>Name</th>
										<th>Grain</th>
										<th>&nbsp;</th>
										<th>Flesh</th>
										
									</tr>
									<tr>
										<th>Acetate</th>
										<td rowspan="6"><img src="<?php echo G5_LANG_IMG_URL?>/images/p_4.jpg"  alt=""></td>
										<td rowspan="6"><img src="<?php echo G5_LANG_IMG_URL?>/images/p_5.jpg"  alt=""></td>
										<td rowspan="6"><img src="<?php echo G5_LANG_IMG_URL?>/images/p_6.jpg"  alt=""></td>
									</tr>
									<tr>
										<th>Cotton</th>
									</tr>
									<tr>
										<th>Nylon</th>
									</tr>
									<tr>
										<th>Polyester</th>
									</tr>
									<tr>
										<th>Polyacryl</th>
									</tr>
									<tr>
										<th>Wool</th>
									</tr>
								</table>
							</p>
						</div>

						<div>
							<p>5. Migration Test</p>
							<p>
								<table class="tb_2">
									<tr>
										<th>Dry</th>
									</tr>
									<tr>
										<td><img src="<?php echo G5_LANG_IMG_URL?>/images/p_7.jpg"  alt=""></td>
									</tr>
									<tr>
										<th>Wet</th>
									</tr>
									<tr>
										<td><img src="<?php echo G5_LANG_IMG_URL?>/images/p_8.jpg"  alt=""></td>
									</tr>

								</table>
							</p>
						</div>

						<div>
							<p>6. Rubbing Test</p>
							<p>
								<table class="tb_2">
									<tr>
										<th>Dry</th>
									</tr>
									<tr>
										<td><img src="<?php echo G5_LANG_IMG_URL?>/images/p_9.jpg"  alt=""></td>
									</tr>
									<tr>
										<th>Wet</th>
									</tr>
									<tr>
										<td><img src="<?php echo G5_LANG_IMG_URL?>/images/p_10.jpg"  alt=""></td>
									</tr>

								</table>
							</p>
						</div>

						<div>
							<p>7. Light Test</p>
							<p>
								<table class="tb_3">
									<tr>
										<th>전</th>
										<td rowspan="2"><img src="<?php echo G5_LANG_IMG_URL?>/images/p_11.jpg"  alt=""></td>
									</tr>
									<tr>
										<th>후</th>
									</tr>

								</table>
							</p>
						</div>

					</div>
				
				
				</div>







				
			</div>








			<!-- 내용들어가는곳 -->

		</div>
    </div>
</div>
<!-- 제품소개 -->















<script>
    $(document).ready(function(){
        $('a.proA').on('mouseenter', function(e){
            e.preventDefault();
            console.info($(this).html())
           
        }); 

		$("body").addClass('layer-open'); 
        $(".videoBg").fadeIn();
		
		//$("a.proA").on('click', function(e){
            //e.preventDefault();
            //$("body").addClass('layer-open'); 
            //$(".videoBg").fadeIn();
        //});
        
        //$("a.closeBtn").on('click', function(e){
            //e.preventDefault();
            //$("body").removeClass("layer-open"); 
            //$(".videoBg").fadeOut();
        //}); 
    });
</script>

<section class="k_wrap">
    <div class="k_container type_center">
        <div class="entryWrapTr">
            <div class="concon">
                <div class="ctit">
                    <h4 class="ic_air">company info</h4>
                </div>
                <div class="ccon">
                    <p>
                        나토는 1969년 설립이래 각고의 노력으로 축적해온 기술과 경험을 바탕으로<br/> 
                        고품질의 환경 친화적인 피혁, 산성, 직접 염료를 생산 공급하고 있으며,<br/> 
                        국내는 물론 세계의 섬유와 피혁 등의 관련 업계발전을 위하여 제품과 기술<br/> 
                        서비스를 제공 하고 있습니다.
                    </p>
                </div>
                <div class="a-box"><a href="<?php echo G5_LANG_URL?>/company/company.php" class="sub_link_btn tran-animate"><span>View</span><span class="arrow"></span></a></div>
             </div>
            <div class="thumb2"><img src="<?php echo G5_LANG_IMG_URL?>/company_info.jpg" alt="" /></div>
        </div>

    </div>
</section>


<section class="k_wrap">
    <div class="k_container type_center">
        <div class="customerInner">
            <div class="customer_center">    
                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cus01.png" alt="" /></div>              
                <h3 class="title tran-animate">Products</h3>
                <p class="content">인간존중, 기술본위의 경영을 바탕으로<br/>쾌적하고 풍요로운 삶을 위한 새로운<br/>염료개발에 힘쓰고 있습니다.</p>
                <a href="<?php echo G5_LANG_URL?>/company/company.php">more <span class="right_arrow">&gt;&gt;</span></a>
            </div>
            <div class="customer_center">    
                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cus02.png" alt="" /></div>              
                <h3 class="title tran-animate">R&D</h3>
                <p class="content">인간존중, 기술본위의 경영을 바탕으로<br/>쾌적하고 풍요로운 삶을 위한 새로운<br/>염료개발에 힘쓰고 있습니다.</p>
                <a href="<?php echo G5_LANG_URL?>/company/company.php">more <span class="right_arrow">&gt;&gt;</span></a>
            </div>
            <div class="customer_center">       
                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cus03.png" alt="" /></div>           
                <h3 class="title tran-animate">Customer</h3>
                <p class="content">인간존중, 기술본위의 경영을 바탕으로<br/>쾌적하고 풍요로운 삶을 위한 새로운<br/>염료개발에 힘쓰고 있습니다.</p>
                <a href="<?php echo G5_LANG_URL?>/company/company.php">more <span class="right_arrow">&gt;&gt;</span></a>
            </div>
        </div>
    </div>
</section>


<section class="k_wrap" id="ban_section">
    <div class="k_container type_center">
        <div class="loc_desc">
            <p>
                 We strive to develop high quality dye.
            </p>
            <div class="more_view"><a href="<?php echo G5_LANG_URL?>/company/location.php" class="btnMore tran-animate"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;LOCATION</a></div>

        </div>
    </div>
</section>



<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>