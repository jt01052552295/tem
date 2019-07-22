<?php
define('_INDEX_', true); 
include_once('./_common.php');

//if (G5_IS_MOBILE) {
    //include_once(G5_LANG_MOBILE_PATH.'/index.php');
    //return;
//}
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
//include_once(G5_LIB_PATH.'/latest.lib.php');

?>
<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/aos/aos.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/aos/aos.js"></script>
<script>
  AOS.init();
</script>

<?php 
 //include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
?>


<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css?ver=<?php echo G5_CSS_VER?>" />
<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main_pro.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>

<div class="vg_inner">
	
	<ul class="main-slider">
		<li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg.jpg);"></li>
	</ul>

	<div class="vg_title" id="title1" style="display: block">
		<h2 class=""><?php echo $infodu['lang']['index']['main']['txt01']?></h2>
		<h2 class=""><?php echo $infodu['lang']['index']['main']['txt02']?></h2>
		
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
        
    });
   
</script>

<div class="main_con">



<section class="k_wrap" id="portfolio_section">
    <div class="k_container type_center">
        <ul id="portfolio-list">
            <?php for($i=1; $i<=6; $i++):?>
                <?php 
                    $last = '';
                    if($i%3==0){
                        $last = 'last';
                    }
                ?>

                <li class="gall_li <?php echo $last?>">
                    <a href="#">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/product_1.jpg"></div>
                        <div class="desc"><h3>MC NYLON(무정전)</h3></div>
                        <div class="more"><img src="<?php echo G5_LANG_IMG_URL?>/pro_more.png"></div>
                    </a>
                </li>
            <?php endfor;?>
        </ul>     

    </div>

    

    <div class="k_container type_center portfolio-more-wrap">
        <a href="javascript:alert('준비중 입니다.');" id="portfolio-more" data-init='2' data-cate='0'>
            <span>제품 더보기</span>
            <div><img src="<?php echo G5_LANG_IMG_URL?>/pro_list_more.png" /></div>
        </a>
    </div>
</section>

<script>
$(document).ready(function(){
    //$.fn.callPortList(1, 0, 'all');
});
</script>



    <section class="k_wrap" id="ban_section">
        <div class="k_container type_center carMain">

            <div class="car_desc">
                <h3><?php echo $infodu['lang']['index']['main']['spo01']?></h3>
                <p>
                    <?php echo $infodu['lang']['index']['main']['spo02']?><br/><br/>

                    <?php echo $infodu['lang']['index']['main']['spo03']?>
                </p>
                <div class="more_view"><a href="#" class="btnMore inline tran-animate"><?php echo $infodu['lang']['index']['main']['spoMore']?></a></div>
            </div> 
            <div class="car_img">
                <a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/company.jpg" alt="" /></a>
            </div>

        </div>
    </section>


    <section class="k_wrap">
        <div class="k_container type_center">
               <div class="businessInner">       
                    <div class="business ">
                        <a href="#" class="tran-animate">
                            <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/icon_1.png"></div>
                            <div class="desc">
                                <h3 class="title">변화와 혁신</h3>
                                <p class="content">끊임없는 도전과 혁신으로 새로운 가치를 만듭니다.</p>
                            </div>
                        </a>
                    </div>
                    <div class="business ">
                        <a href="#" class="tran-animate">
                            <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/icon_2.png"></div>
                            <div class="desc">
                                <h3 class="title">혁신구호 생활화</h3>
                                <p class="content">조화와 균형으로 도전정신을 이어갑니다</p>
                            </div>
                        </a>
                    </div>
                    <div class="business ">
                        <a href="#" class="tran-animate">
                            <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/icon_3.png"></div>
                            <div class="desc">
                                <h3 class="title">품질 / 납기준수</h3>
                                <p class="content">고객가치를 기본으로 품질과 납기일을 보장합니다</p>
                            </div>
                        </a>
                    </div>
                    <div class="business last">
                        <a href="#" class="tran-animate">
                            <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/icon_4.png"></div>
                            <div class="desc">
                                <h3 class="title">원가 / 비용절감</h3>
                                <p class="content">고객사와 함께 성장을 목표로 경쟁력을 높이겠습니다</p>
                            </div>
                        </a>
                    </div>

                </div>

        </div>
    </section>







</div>


<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>