<?php
define('_INDEX_', true); 
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>


<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>

<div class="vg_inner">
    
    <div class="vg_title" id="title1">
        <h2>
            <div class="vg_tit_box "><div class="parallax-init-pc topTxt">특허받은 저분자화 공법</div></div>
            <div class="vg_tit_box "><div class="parallax-init-pc">씨허브 후코이단</div></div>
        </h2>
    </div>

    
    <ul class="main-slider">
        <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg_1.jpg);"></li>
        <li class="main-slider-li" id="main-slider-1" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg_2.jpg);"></li>
    </ul>     

    <div class="vg_link">
        <a href="#"><span>후코이단이란?</span></a>
    </div>

    <div class="vg_down"><a href="#" id="go_service"><img src="<?php echo G5_LANG_IMG_URL?>/mouse.png" alt="" class="upDownAni" /> <span>Scroll Down</span></a></div>

</div>

<script>
    $(document).ready(function(){

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
            controls: false,
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
                

            }

        });
       

        setInterval(function(e){ 
            mainSlider.goToNextSlide();
        }, 7000);
        
    });
   
</script>


<div class="main_con">

    <section class="k_wrap" id="product_section">
        <div class="k_container type_center">

                <div class="row_product">
                    <ul class="grid2 mg0">
                        <li>
                            <h4 class="msg_effect">PURE SKIN</h4>
                            <p class="msg_effect">
                                순수한바다약초로 만든 피부를 위한 스프레이. 피부에 노폐물을 제거 하고, 영양과 활력을 주며, 
                                피부보습과 보호에 탁월한 효과를 주는 바다약초로서 알긴산, 푸코이단 라미나란 비타민과 
                                미네랄이   농축 되어 있습니다.<br/>
                                제품에 농축된 성분이 피부에 스며들어 피부에 전통 해수 온천욕의 효과를 줍니다. 
                                또한 글리세린, 히아루론산의 보습효과와 알로에, 은행잎 추출물의 진정, 혈행촉진 효과로 
                                아토피, 건선 및 주부습진 개선효과가 우수하며 바다 약초 추출농축 엑기스와 더불어 광범위한 
                                피부 트러블  방지 의 상승 효과를 가집니다.
                            </p>
                            <div class="p-image">
                                <img src="<?php echo G5_LANG_IMG_URL?>/img_skin.png" alt="" />
                                <div class="a-box"><a href="#" class="tran-animate"><span>상세보기</span><span class="arr">&gt;&gt;</span></a></div>
                            </div>
                            

                        </li>
                        <li>
                            <h4 class="msg_effect">Seaherb Fucoidan</h4>
                            <p class="msg_effect">
                                각종 바다약초와 육상 약초류에서 추출된 푸코이단, 알긴산, 라미나란, 식이섬유, 미네랄, 
                                푸코갈락탄, 각종 비타민, 클로렐라, 푸코스테롤 등의 생명 연장 물질들을 추출한 100% 천연 
                                추출 제품입니다. 또한 추출 성분이나 원료의 모든 영양소를 다 포함 하고 있으며 불순물 만을 
                                제거 했습니다.<br/>
                                한 티스푼(1.5g)의 씨 허브 푸코이단을 드실때는 한 접시 가득 들어있는 유기농 약초류 와 
                                바다약초를 드시는 것과 같은 양의 인체의 생명 연장 물질 들을 섭취 할수 있는 것 입니다.
                            </p>
                            <div class="p-image">
                                <img src="<?php echo G5_LANG_IMG_URL?>/img_fuco.png" alt="" />
                                <div class="a-box"><a href="#" class="tran-animate"><span>상세보기</span><span class="arr">&gt;&gt;</span></a></div>
                            </div>

                        </li>
                    </ul>
                </div>
        </div>
    </section>

    <script>
    $(window).scroll(function() {
        var wScroll1 = $(this).scrollTop();   
        var activeMainEffect = $("#product_section").offset().top - 1000;
        if(wScroll1 >= activeMainEffect){
            $('#product_section .msg_effect').each(function(index){
                var index = index + 1;
                var _d = 100 * (index)
                $(this).delay(_d).animate({opacity:"1.0"}, _d );
            });
        }
    });
    </script>



    <section class="k_wrap" id="about_section">
        <div class="thumb2"><img src="<?php echo G5_LANG_IMG_URL?>/main_about.jpg" alt="" /></div>
        <div class="k_container type_center">
            <div class="entryWrapTr">
                <div class="concon">
                    <div class="ctit msg_effect">
                        <h4 class="ic_air">about seaherb</h4>
                    </div>
                    <div class="ccon msg_effect">
                        <p>
                            (주)씨허브는 1998년도 창립되어 해조류와 각종 약초류에서 생명연장 물질들을 특허 받은 기술인 저분자화 
                            공법으로 추출하고 있습니다. 주력 상품으로는 추출 후 액체 형태의 “퓨어스킨”이라는 아토피 피부용 제품과 
                            환, 캡슐, 알약 형태의 “씨허브 후코이단”이라는 제품이 있습니다. 또한 추출 원료를 액상 벌크 또는 분말벌크 
                            형태로 공급하고 있습니다.<br/><br/>

                            저희 회사는 수출 주력 기업으로 전세계 15개국에 연간 100만불 이상 수출하고 있습니다. 
                            한국내 1등급 원료 재배업자와 계약 재배하여 제조하고 있으며 대학 연구소와 공동 연구로 기술개발과 품질 
                            테스트를 하고 있습니다.<br/><br/> 

                            씨허브 후코이단 에 대하여 미국 식품 의학 안전청(Food and Drug Association)으로부터 식품안전 테스트에 
                            합격했으며 생산 제조 방법에 있어서 ISO 14001 ISO 9001 을 획득하여 탁월한 안정성을 자랑하고 있습니다. 
                            특허받은 저분자화 기술인 “저분자화 공법”으로 제품의 체내 흡수율을 57% 이상 끌어올렸습니다. 
                            그래서 빠른 효과를 보장합니다. 인정 받은 저희 회사는 고객 여러분께 최고의 제품을 공급하기 위하여 
                            최선을 다할것을 약속 합니다. 
                        </p>
                    </div>
                    <div class="a-box msg_effect"><a href="<?php echo G5_LANG_URL?>/company/company.php" class="sub_link_btn tran-animate"><span>회사소개 더보기</span><span class="arrow"></span></a></div>
                 </div>
                
            </div>

        </div>
        
    </section>
    <script>
    $(window).scroll(function() {
        var wScroll1 = $(this).scrollTop();   
        var activeMainEffect1 = $("#about_section").offset().top - 800;
        if(wScroll1 >= activeMainEffect1){
            $('#about_section .msg_effect').each(function(index){
                var index = index + 1;
                var _d = 300 * (index)
                $(this).delay(_d).animate({opacity:"1.0"}, _d );
            });
        }
    });
    </script>


    <section class="k_wrap" id="mainEffect3">
        <div class="k_container type_center">
            <div class="customerInner">
                <h2 class="title msg_effect">후코이단이란?</h2>
                <div class="customer_center msg_effect">    
                    <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cus01.jpg" alt="" class="cus" /></div>              
                    <p class="content">
                        1913년 다시마를 연구하던 스웨덴 웁살라(Uppsala)대학의 클라인
                        (Kylin.H.Z)박사가 처음으로 발견을 하였습니다. 클라인 박사는 갈조류
                        의 다시마에서 분비되는 점질물질을 연구하던 중 황산기가 함유된 다당
                        류를 발견하고, 이를 후코이단(Fucoidan)이라 명명하였습니다.
                    </p>
                </div>
                <div class="customer_center msg_effect">    
                    <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cus02.jpg" alt="" class="cus" /></div>          
                    <p class="content">
                        1. 암세포 자기파괴 유도 (Cancer Cell aporosis)<br/>
                        2. HCF (Hepatocyte Growth Factor)증가<br/>
                        3. 항 바이러스 작용 (Antivirus ettect)<br/>
                        4. 면역증가, 소염효과 (Fremette)<br/>
                        5. 제독(Shamdala)
                    </p>
                </div>
                <div class="customer_center msg_effect">       
                    <div class="thumb"><a href="#" class="callVideo"><img src="<?php echo G5_LANG_IMG_URL?>/cus03.jpg" alt="" /></a></div>        
                    <p class="content">
                        1996년 일본 암학회에서 “후코이단의 X세포 자살작용”이라는 논문이 
                        발표되면서 전 세계적으로 후코이단의 의학적인 효과에 대한 다양한 
                        연구가 이루어지고 있습니다. 해마다 100편이 넘는 후코이단에 대한 
                        의학논문이 일본, 미국, 러시아, 프랑스등의 의학 선진국에서 쏟아져 
                        나오고 있습니다. <a href="#" class="callVideo tran-animate vid">동영상보기<span>▶</span></a>
                    </p>
                </div>



                <div class="moreView"><a href="#" class="tran-animate">상세보기</a></div>
            </div>

        </div>
    </section>
    <script>
    var currentScroll=0;
    $(window).scroll(function() {
        var wScroll = $(this).scrollTop();   
        currentScroll = $(this).scrollTop();
        var activePos = $("#mainEffect3").offset().top - 1000;
        if(wScroll >= activePos){
            $('#mainEffect3 .msg_effect').each(function(index){
                var index = index + 1;
                var _d = 400 * (index)
                $(this).delay(_d).animate({opacity:"1.0"}, _d );
            });
        }
    });
    $(document).ready(function(){

        $("a.callVideo").click(function(e){
            e.preventDefault();
            $("body").addClass('layer-open'); 
            $(".videoBg").fadeIn();
        });
        
        $(".videoBg, a.closeBtn").click(function(e){
            e.preventDefault();
            $("body").removeClass("layer-open"); 
            var div = document.getElementById("youtube-video");
            var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
            iframe.postMessage('{"event":"command","func":"pauseVideo","args":""}','*');
            $(".videoBg").fadeOut();
        }); 

    });
    </script>


    <section class="k_wrap" id="ban_section">
        <div class="k_container type_center">
            <div class="loc_desc">
                <p class="de01">100% 천연 갈조류 추출물</p>
                <p class="de02">Choose a patented technology you can trust</p>
                <p class="de03">15개국 미국 유럽 등 선진국에서 인정받아 연간 100만불 이상 수출 중입니다.</p>
                <div class="de04">미국 FDA 승인과 특허</div>
                <div class="ksc parallax-init-opcity "><img src="<?php echo G5_LANG_IMG_URL?>/img_ksc.jpg" alt="" class="" /></div>
                <div class="more_view"><a href="#" class="btnMore tran-animate">특허 상세보기</a></div>

            </div>
        </div>
        <div class="k_wrap inner_wrap" >
            <div class="k_container type_center">
                <div class="inner_title"><h4>customer<br/>inquiry</h4></div>
                <div class="inner_content">
                    <form id="frmAjax" name="frmAjax" method="post" >
                        <div class="frm-box">
                            <div class="input">
                                <label class="laTxt" for="name">성함</label> <input type="text" id="name" name="name" value="" maxlength="15" placeholder="">
                            </div>
                            <div class="input">
                                <label class="laTxt" for="email">E-mail</label> <input type="text" id="email" name="email" value="" placeholder="">
                            </div>
                        </div>

                        <div class="frm-box">
                            <div class="input">
                                <label class="laTxt" for="tel">Tel</label> <input type="text" id="tel" name="tel" value="" placeholder="">
                            </div>
                            <div class="input">
                                <label class="laTxt" for="con">문의내용</label> <input type="text" id="con" name="con" value="" placeholder="">
                            </div>
                        </div>

                        <div class="frm-box2">
                            <div class="submit">
                                <input type="submit" id="onSubmit" class="tran-animate" value="문의하기" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
    $(window).scroll(function() {
        var wScroll2 = $(this).scrollTop();   
        var activeMainEffect2 = $("#ban_section").offset().top - 300;
        if(wScroll2 >= activeMainEffect2){
            $('#ban_section .parallax-init-opcity').each(function(e){
                var currLink = $(this)
                var e = e + 1;
                var _d = 200 * (e)
                currLink.addClass("add-stage");
            });
        }
    });
    </script>
    <script type="text/javascript">

        $(document).ready(function(){

                var ing = "";

                $('#onSubmit').on('click', function(e){
                    
                    var frmURL  = '<?php echo G5_LANG_URL?>'+'/_mailMain.php';
                    var params = $("#frmAjax").serialize();
                    var f = document.frmAjax;


                    if(!f.name.value){alert('성함을 입력해 주십시오.');f.name.focus();  return false;}
                    if(!f.tel.value){alert('연락처를 입력해 주세요.');f.tel.focus();  return false;}
                    if(!f.email.value){alert('이메일을 입력해 주십시오.');f.email.focus();  return false;}
                    if(!f.con.value){alert('내용을 입력해 주십시오.');f.con.focus();  return false;}


                    if(ing == ""){
                        $.ajax({
                            url: frmURL,
                            type: 'POST',
                            data:params,
                            contentType: 'application/x-www-form-urlencoded; charset=UTF-8', 
                            dataType: 'html',
                            beforeSend: function(res) {
                            },
                            success: function (result) {
                                if (result){
                                    document.frmAjax.reset();
                                    alert(result);
                                }
                            },
                            error: function (res){
                                alert(res);
                            }
                        });
                        ing = "ing";
                    } else {
                        alert('처리중 입니다.');
                        return false;
                    }

                    return false;
                });
        });

    </script>



    <section class="k_wrap" id="map_section">
        <div class="k_container type_center">
            <div class="map_area">

                <!-- * Daum 지도 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1547094355334" class="root_daum_roughmap root_daum_roughmap_landing" style=""></div>

                <!--
                    2. 설치 스크립트
                    * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                -->
                <script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>

                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp" : "1547094355334",
                        "key" : "rprh",
                    }).render();
                </script>

            </div>
            <div class="map_info">
                <h3 class="msg_effect">Location</h3>
                <table class="companyInfo">
                    <tr>
                        <th class="msg_effect">Address</th>
                        <td class="msg_effect" colspan="3">부산광역시 해운대구 재송동 1210 벽산 e-센텀 클래스 원 719</td>
                    </tr>
                    <tr>
                        <th class="msg_effect">TEL</th>
                        <td class="msg_effect">051 - 322 - 3531</td>
                        <th class="msg_effect">FAX</th>
                        <td class="msg_effect">051 - 322 - 3532</td>
                    </tr>
                    <tr>
                        <th class="msg_effect">E-mail</th>
                        <td class="msg_effect" colspan="3">fucoidan@yahoo.com</td>
                    </tr>
                </table>
                <div class="map_view"><a href="<?php echo G5_LANG_URL?>/company/location.php" class="btnMore tran-animate msg_effect"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;LOCATION</a></div>
            </div>
             
        </div>
    </section>
    <script>
    $(window).scroll(function() {
        var wScroll1 = $(this).scrollTop();   
        var activeMainEffect1 = $("#map_section").offset().top - 1000;
        if(wScroll1 >= activeMainEffect1){
            $('#map_section .msg_effect').each(function(index){
                var index = index + 1;
                var _d = 100 * (index)
                $(this).delay(_d).animate({opacity:"1.0"}, _d );
            });
        }
    });
    </script>

</div>

<div class="videoBg">
    <div class="videoInner" id="youtube-video" >
        <div class="videoClose"><a href="#" class="closeBtn"><i class="fas fa-times"></i></a></div>
        <iframe src="https://www.youtube.com/embed/qyDcamUrdQc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
</div>
<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>