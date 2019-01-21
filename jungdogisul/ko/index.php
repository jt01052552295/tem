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
                <div class="vg_tit_box "><div class="">First Total Solution</div></div>
            </h2>
            <p>
                고객 만족을 위한 신뢰성 높은 기술<br/>
                <strong>130만, 200만, 280만, 500만 화소, 고정형, 이동형 시스템 등</strong><br/>
                지능형 객체인식 시스템, 차량번호 인식 시스템 Full Line up 구축
            </p>
            

            <div id="main-bx-pager">
                <ul>
                    <li> <a data-slide-index="0" href=""><span class="blind">1</span></a></li>
                    <li> <a data-slide-index="1" href=""><span class="blind">2</span></a></li>
                    <li> <a data-slide-index="2" href=""><span class="blind">3</span></a></li>
                </ul>
            </div> 

            <div class="vg_down"><a href="<?php echo G5_LANG_URL?>/product/product.php" class="tran-animate"><span>제품소개 바로가기</span><span class="white_arrow"></span></a></div>

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
            auto: false,
            mode:'fade',
            infiniteLoop: true,
            wrapperClass: 'main-wrapper',
            autoControls: false,
            adaptiveHeight: true,
            speed: 500,
            pager: true,
            controls: false,
            nextSelector: '#main-slider-prev',
            prevSelector: '#main-slider-next',  
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

        setInterval(function(e){ 
            mainSlider.goToNextSlide();
        }, 5000);
        
    });
   
</script>




<section class="k_wrap " id="etc_section">
    <div class="k_container type_center etcInner">
            <div class="etc_title">
                <h4>Main Solution</h4>
                <p>기술력, 신뢰성, 안정성 Total Solution 구현합니다.</p>
            </div>

            <div class="etc_center tran-animate">
                <a href="#">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/bg_etc01.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title">지능형 객체인식 시스템</h3>
                        <p class="content">
                            100만 화소급 이상의 다양한 포맷
                            (IP,HD-SDI, IEEE1394, USB)의 카메라를 활용하여
                            도로를 횡단하는 다양한 객체들을 검지 및 인식이...
                        </p>
                    </div>
                </a>
            </div>
            <div class="etc_center tran-animate">  
                 
                <a href="#">                     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/bg_etc02.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title">차량번호인식 시스템</h3>
                        <p class="content">
                            고성능 카메라 및 산업용 제어기 등으로 구성하여
                            차량번호판 및 탑승자 적재함 등의 영상을 촬영 및
                            저장하여 모니터링 및 검색 백업이 가능한 ...
                        </p>
                    </div>
                </a>
            </div>
            <div class="etc_center tran-animate"> 
                 
                <a href="#">                  
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/bg_etc03.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title">지능형 영상분석 시스템</h3>
                        <p class="content">
                            영상정보처리 기술을 바탕으로 하여 문자인식,
                            모션 디텍션 등의 다양한 영상처리 기술을 활용하여
                            지능화된 영상분석 도구를 제공하는 ...
                        </p>
                    </div>
                </a>
            </div>


    </div>
</section>













<section class="k_wrap" id="business_section">
    <div class="k_container type_center">
           <div class="businessInner">       
                <div class="business_title">
                    <h4>JUNGDO Technology</h4>
                    <p>미래지향적 선도시스템 구축 !<br/>최상의 고객 만족을 위한 서비스 !  차별화된 가치창조 !</p>
                </div>
                <div class="business ">
                    <a href="<?php echo G5_LANG_URL?>/company/company.php" class="tran-animate bc1">
                        <div class="thumb bc1"></div>
                        <div class="desc">
                            <h3 class="title">회사소개</h3>
                            <p class="content">정도기술 회사소개<br/>페이지입니다.</p>
                        </div>
                    </a>
                </div>
                <div class="business ">
                    <a href="<?php echo G5_LANG_URL?>/business/business.php" class="tran-animate bc2">
                        <div class="thumb bc2"></div>
                        <div class="desc">
                            <h3 class="title">주요사업</h3>
                            <p class="content">정도기술 주요사업<br/>페이지입니다.</p>
                        </div>
                    </a>
                </div>
                <div class="business ">
                    <a href="javascript:;" class="tran-animate bc3 ">
                        <div class="thumb bc3"></div>
                        <div class="desc">
                            <h3 class="title">인증서</h3>
                            <p class="content">정도기술 인증서<br/>페이지입니다.</p>
                        </div>
                    </a>
                </div>
                <div class="business last">
                    <a href="<?php echo G5_LANG_URL?>/mail/mail.php" class="tran-animate bc4">
                        <div class="thumb bc4"></div>
                        <div class="desc">
                            <h3 class="title">고객문의</h3>
                            <p class="content">궁금한 사항을 문의주시면<br/>답변드리겠습니다.</p>
                        </div>
                    </a>
                </div>

            </div>

    </div>
</section>




<section class="k_wrap">
    <div class="k_container type_center">

        <div class="mapBox">
            <iframe src="http://infodu.co.kr/map/jungdogisul.php"></iframe>


            <div class="map_info">
                <div class="map_info_inner">
                    <dl>
                        <dt>Location</dt>
                        <dd class="addr">경북 경산시 진량읍 대구대로 201<br/>ICC 1311호, 1312호</dd>
                        <dd class="tel">053-719-0114</dd>
                        <dd class="fax">053-719-0115</dd>
                        <dd class="mail">jd-tech@naver.com</dd>
                    </dl>
                </div>
            </div>
        </div>


    </div>
</section>            


<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>