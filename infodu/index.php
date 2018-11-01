<?php
define('_INDEX_', true); 
include_once('./_config.php');
include_once(KI_PATH.'/_header.php'); 
include_once(KI_PATH.'/_top.php'); 
?>


<link rel="stylesheet" href="<?php echo KI_JS_URL?>/bxslider/dist/jquery.bxslider.main.css" />
<script src="<?php echo KI_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>
<section class="k_wrap">
    <div class="vg_inner">
        
        <ul class="main-slider">
            <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo KI_IMG_URL?>/vg01.png);">
                <div class="vg_title" id="title1">
                    <h2>
                        <div class="vg_tit_box1"><div class="parallax-init-pc init-up">디자인에</div></div>
                        <div class="vg_tit_box1"><div class="parallax-init-pc init-up">기획을 더합니다.</div></div>
                    </h2>
                    <p><span>기획없는</span> <span>단순한</span> <span>디자인은</span> <span>껍데기에</span> <span>불과합니다.</span><br/><span>기획,</span> <span>디자인,</span> <span>프로그래머가</span> <span>합작하는</span> <span>전문가</span> <span>그룹을</span> <span>만나보세요.</span></p>
                </div>

            </li>
            <li class="main-slider-li" id="main-slider-1" style="background-image: url(<?php echo KI_IMG_URL?>/vg02.png);">
                <div class="vg_title" id="title2">
                    <h2>
                         <div class="vg_tit_box2"><div class="parallax-init-pc init-up">신뢰! 20년동안 이자리를</div></div>
                          <div class="vg_tit_box2"><div class="parallax-init-pc init-up">지켜온 결과로 말씀드립니다.</div></div>
                    </h2>
                    <p><span>고객들과</span> <span>함께</span> <span>20여년동안</span> <span>이자리를</span> <span>지켜왔습니다.</span><br/></span> <span>고객의</span> <span>믿음에</span> <span>보답하기</span> <span>위해</span> <span>항상</span> <span>발전하고</span> <span>최선을</span> <span>다하고</span> <span>있습니다.</span></p>
                </div>
            </li>
        </ul>

        <div class="vg_down"><a href="#" id="go_service"><img src="<?php echo KI_IMG_URL?>/mouse.png" alt="" /></a></div>
    </div>
</section>
<script>
    $(window).load(function() { 
        // setInterval(function(){
        //     $('.vg_title h2 > span, .vg_title p > span').each(function(index){
        //         var $_this = $(this);
        //         $_this.stop().delay(500).animate({opacity:0},500).promise().done(function () {
        //             $.fn.sloganAniamte();
        //         });
        //     });

           
        // },5000);

    });
    $(document).ready(function(){

        $('#go_service').click(function(e){
            e.preventDefault();
            var service_section = $('#service_section').offset().top;

            var heights = $('#header_height').map(function(){
                return $(this).outerHeight(true);
            }).get(),
            maxHeight = Math.max.apply(null, heights);
            var goTo = service_section - 71;
            $('html, body').animate({scrollTop : goTo}, 400);
        }); 

        $.fn.shuffle = function() {
            // credits: http://bost.ocks.org/mike/shuffle/
            var m = this.length, t, i;

            while (m) {
                i = Math.floor(Math.random() * m--);

                t = this[m];
                this[m] = this[i];
                this[i] = t;
            }

            return this;
        };
        

        $.fn.sloganAniamte = function(){
            $('#title1 p span:odd').shuffle().each(function(index){
                var $_this = $(this);
                var basic = 300;
                var delay = basic*index;
                $_this.stop().delay(delay).animate({opacity:1},basic);
            });
            $('#title1 p span:even').shuffle().each(function(index){
                var $_this = $(this);
                var basic = 300;
                var delay = basic*index;
                $_this.stop().delay(delay).animate({opacity:1},basic);
            });

            $('#title1 .parallax-init-pc').each(function(e){
                var currLink = $(this)
                currLink.addClass("add-stage");
            });
        };

        $.fn.sloganAniamteInit = function(){
            $('#title1 p > span').each(function(index){
                var $_this = $(this);
                $_this.stop().delay(0).animate({opacity:0},0);
            });

            $('#title1 .parallax-init-pc').each(function(e){
                var currLink = $(this)
                currLink.removeClass("add-stage");
            });
        };


        $.fn.sloganAniamte2 = function(){
            $('#title2 p span:odd').shuffle().each(function(index){
                var $_this = $(this);
                var basic = 300;
                var delay = basic*index;
                $_this.stop().delay(delay).animate({opacity:1},basic);
            });
            $('#title2 p span:even').shuffle().each(function(index){
                var $_this = $(this);
                var basic = 300;
                var delay = basic*index;
                $_this.stop().delay(delay).animate({opacity:1},basic);
            });

            $('#title2 .parallax-init-pc').each(function(e){
                var currLink = $(this)
                currLink.addClass("add-stage");
            });
        };

        $.fn.sloganAniamteInit2 = function(){
            $('#title2 p > span').each(function(index){
                var $_this = $(this);
                $_this.stop().delay(0).animate({opacity:0},0);
            });

            $('#title2 .parallax-init-pc').each(function(e){
                var currLink = $(this)
                currLink.removeClass("add-stage");
            });
        };



        var mainSlider = $('.main-slider').bxSlider({
            auto: false,
            mode:'fade',
            infiniteLoop: true,
            wrapperClass: 'main-wrapper',
            autoControls: false,
            adaptiveHeight: true,
            speed: 2000,
            pager: true,
            controls: false,
            onSliderLoad: function(){
                $.fn.sloganAniamte();

                
            },
            onSlideAfter: function (slide, oldIndex, newIndex) {
                var current = mainSlider.getCurrentSlide();
                switch (oldIndex){
                    case 0 :$.fn.sloganAniamteInit();break;
                    case 1 :$.fn.sloganAniamteInit2();break;
                }
                switch (current){
                    case 0 :$.fn.sloganAniamte();break;
                    case 1 :$.fn.sloganAniamte2();break;
                }
            }

        });

        setInterval(function(e){ 
            mainSlider.goToNextSlide();
        }, 10000);
        
    });
   
</script>



<section class="k_wrap" id="service_section">
    <div class="k_container type_center">
        <h2 class="main_section_title">Service</h2>

        <div class="service_inner">
                <div class="serviceBox">
                    <a href="javascript:;" class="">
                        <div class="con">
                            <h4>전문가그룹이 함께합니다.</h4>
                            <p> 홈페이지 구성을 탄탄하게 할 기획자<br class="pc_only"/>
                                ​​기획에 생기를 불어넣는 전문 웹디자이너<br class="pc_only"/>
                                ​​어떠한 디스플레이에서도 정확하게 보여지게 구현하는 웹퍼블리셔<br class="pc_only"/>
                                ​​아이템, 전경 촬영 전문 사진촬영 작가<br class="pc_only"/>
                                ​​각 분야의 전문가 그룹이 귀사의 프로젝트를 성공적으로 완성시킵니다.</p>
                        </div>
                        <div class="thumb">
                            <span class="arrow down"></span>
                            <img src="<?=KI_IMG_URL?>/service01.png"  alt="" class="img-responsive" />
                        </div>
                    </a>
                </div>
                <div class="serviceBox">
                    <a href="javascript:;">
                        <div class="con">
                            <h4>고객들과 20년 동안 이자리를 지켜왔습니다.</h4>
                            <p>​​산업정보지 출판, 브로슈어 인쇄 디자인을 시작으로<br class="pc_only"/>
                                ​​홈페이지, 전자카다록 등 온라인 웹디자인까지<br class="pc_only"/>
                                ​​고객들의 홍보디자인을 위해 20년을 이자리에서 힘써왔습니다.<br class="pc_only"/>
                                ​​신뢰! 20년 넘게 이자리를 지켜온 결과로 말씀드립니다.</p>
                        </div>
                        <div class="thumb">
                            <span class="arrow down"></span>
                            <img src="<?=KI_IMG_URL?>/service02.png"  alt="" class="img-responsive" />
                        </div>
                    </a>
                </div>
                <div class="serviceBox">
                    <a href="javascript:;">
                        <div class="con">
                            <h4>합리적인 가격</h4>
                            <p>고퀄리티 홈페이지를 원하는 고객업체에게는<br class="pc_only"/> 업계 최고의 홈페이지를!
                                ​​저렴한 가격을 원하는 고객업체에게는<br class="pc_only"/> 기교를 줄이고 기간을 단축하여 깔끔하면서 완성도는 떨어지지 않는<br class="pc_only"/> 가성비 좋은 홈페이지를 개발해 드립니다.<br class="pc_only"/>
                                ​​고객 만족도를 높이기위해 최선을 다합니다.</p>
                        </div>
                        <div class="thumb">
                            <span class="arrow down"></span>
                            <img src="<?=KI_IMG_URL?>/service03.png"  alt="" class="img-responsive" />
                        </div>
                    </a>
                </div>
                <div class="serviceBox">
                    <a href="javascript:;">
                        <div class="con">
                            <h4>유지관리 담당자지정 시스템 </h4>
                            <p>​​홈페이지 수정해야하는데 연락하기도 힘들고 시간도 오래걸린다구요?<br class="pc_only"/>
                                ​​홈페이지 제작에 참여한 담당자가 귀사의 홈페이지 유지관리 담당자로 지정됩니다.<br class="pc_only"/>
                                ​​회사 카카오톡, 이메일, 게시판, 전화 등 으로 수정 요청주시면 해당 담당자가 즉시 답변드리고 처리합니다.</p>
                        </div>
                        <div class="thumb">
                            <span class="arrow down"></span>
                            <img src="<?=KI_IMG_URL?>/service04.png"  alt="" class="img-responsive" />
                        </div>
                    </a>
                </div>
                <div class="serviceBox">
                    <a href="javascript:;">
                        <div class="con">
                            <h4>이미지 저작권 정품사용</h4>
                            <p>귀사의 프로젝트에 사용되는 사진과 이미지는 사진제공 전문업체와 라이센스계약이된 정품만 사용합니다. <br class="pc_only"/>
                                ​​100만장 이상의 사진을 지속적으로 제공받고 있어 귀사의 프로젝트를 더욱 완성도높은 고퀄리티로 제작할 수 있습니다.<br class="pc_only"/>
                                ​​*인터넷에서 검색한 이미지 사용시 저작권위반으로 법적인 책임을 질 수도 있습니다.</p>
                        </div>
                        <div class="thumb">
                            <span class="arrow down"></span>
                            <img src="<?=KI_IMG_URL?>/service05.png"  alt="" class="img-responsive" />
                        </div>
                    </a>
                </div>
                <div class="serviceBox">
                    <a href="javascript:;">
                        <div class="con">
                            <h4>안정적인 서버성능 및 기술력</h4>
                            <p>​​FULL SSD 장착 : SSD 장착으로 혁신적인 데이터 처리속도를 자랑합니다.<br class="pc_only"/>
                                ​​미러링기술 : 2대의 디스크가 동시에 운영되어 하나의 디시크에 문제가 발생하면 자동으로 미러디스크 운영<br class="pc_only"/>
                                ​​4중백업 : 서버 2중디스크, 백업전문업체에 의뢰하여 실시간 백업보관, 본사 내부서버 백업장치 보관으로 귀사의 작업파일 및 데이터를 철저히 보관하고 있습니다.<br class="pc_only"/>
                                ​​웹방화벽 : 다양한 웹공격 및 악의적 접속공격에 철저히 대응하고 있습니다.</p>
                        </div>
                        <div class="thumb">
                            <span class="arrow down"></span>
                            <img src="<?=KI_IMG_URL?>/service06.png"  alt="" class="img-responsive" />
                        </div>
                    </a>
                </div>

                         
        </div>

    </div>
</section>


<section class="k_wrap" id="management_section">
        <div class="work_info">
           <h2 class="main_section_title2">주요업무</h2>
           <div class="workInner">
               <div class="workBox">
                    <div class="thumb"><img src="<?=KI_IMG_URL?>/work01.png"></div>
                    <p class="desc">홈페이지</p>
                </div>
                <div class="workBox">
                    <div class="thumb"><img src="<?=KI_IMG_URL?>/work02.png"></div>
                    <p class="desc">모바일웹</p>
                </div>
                <div class="workBox">
                    <div class="thumb"><img src="<?=KI_IMG_URL?>/work03.png"></div>
                    <p class="desc">쇼핑몰</p>
                </div>
                <div class="workBox">
                    <div class="thumb"><img src="<?=KI_IMG_URL?>/work04.png"></div>
                    <p class="desc">웹솔루션</p>
                </div>
                <div class="workBox">
                    <div class="thumb"><img src="<?=KI_IMG_URL?>/work05.png"></div>
                    <p class="desc">기업메일</p>
                </div>
                <div class="workBox">
                    <div class="thumb"><img src="<?=KI_IMG_URL?>/work06.png"></div>
                    <p class="desc">웹서버</p>
                </div>
                <div class="workBox">
                    <div class="thumb"><img src="<?=KI_IMG_URL?>/work07.png"></div>
                    <p class="desc">온라인<br class="pc_only"/>마케팅</p>
                </div>
                <div class="workBox">
                    <div class="thumb"><img src="<?=KI_IMG_URL?>/work08.png"></div>
                    <p class="desc">CI·BI<br class="pc_only"/>기획디자인</p>
                </div>
                <div class="workBox">
                    <div class="thumb"><img src="<?=KI_IMG_URL?>/work09.png"></div>
                    <p class="desc">카탈로그<br class="pc_only"/>브로슈어</p>
                </div>
            </div>
        </div>


</section>


<script src="<?php echo KI_JS_URL?>/portfolio.js?ver=<?php echo KI_TIME_YMD; ?>" crossorigin="anonymous"></script>

<section class="k_wrap" id="portfolio_section">
    <div class="k_container type_center">
        <h2 class="main_section_title">Portfolio</h2>

        <div class="vg_sub_area2">
            <ul class="sub_tab_main">
                <li class="tab_list selected"><a href="#" data-cate="0">ALL</a></li>
                <li class="tab_list "><a href="#" data-cate="1">홍보용</a></li>
                <li class="tab_list "><a href="#" data-cate="2">반응형</a></li>
                <li class="tab_list "><a href="#" data-cate="3">기능형</a></li>
                <li class="tab_list "><a href="#" data-cate="4">쇼핑몰</a></li>
                <li class="tab_list "><a href="#" data-cate="5">모바일</a></li>
            </ul> 
        </div>        
    </div>

    <ul id="portfolio-list">
        <?php for($i=0; $i<8; $i++):?>
        <li class="gall_li">
            <?php
                if (!preg_match('#^https?://#i', $port_list[$i]['url'])) $address = 'http://www.' . $port_list[$i]['url'];
            ?>
           <a href="<?php echo $address ?>" target="_blank">
                <?php 
                    $thumb = '';
                    if( file_exists('./portfolio/images/'.$port_list[$i]['img'].'.jpg') ):
                        $thumb = KI_URL.'/portfolio/images/'.$port_list[$i]['img'].'.jpg';
                    else:
                        $thumb = KI_IMG_URL.'/noData.png';
                    endif;
                ?>
                <img src="<?php echo $thumb ?>" alt="" class="img-responsive">
                <div class="info">
                    <div class="title">
                        <h5><?php echo $port_list[$i]['title'] ?></h5>

						<?php 
                            $showCategory = array();
                            if($port_list[$i]['category_1']):
                                array_push($showCategory, "홍보용");
                            endif;
                            if($port_list[$i]['category_2']):
                                array_push($showCategory, "반응형");
                            endif;
                            if($port_list[$i]['category_3']):
                                array_push($showCategory, "기능형");
                            endif;
                            if($port_list[$i]['category_4']):
                                array_push($showCategory, "쇼핑몰");
                            endif;
                            if($port_list[$i]['category_5']):
                                array_push($showCategory, "모바일");
                            endif;
                            $showCategoryTxt = implode("/",$showCategory);
                        ?>
                        <p><?php echo $showCategoryTxt ?></p>  
                        
                    </div>
                    <div class="device_ico">
                        <span class="ico_pc">PC</span>
                        <span class="ico_tablet">타블렛</span>
                        <span class="ico_mobile">모바일</span>
                    </div>
                    
                </div>
            </a>
        </li>
        <?php endfor; ?>
    </ul>

    <div class="k_container type_center portfolio-more-wrap">
       <a href="#" id="portfolio-more" data-init='2' data-cate='0'>포트폴리오 더보기</a>
    </div>
</section>

<script>
$(document).ready(function(){
    $.fn.callPortList(1, 0, 'all');
});
</script>


<section class="k_wrap" id="customer_section">
    <div class="k_container type_center">
        <h2 class="main_section_title">CS Center</h2>

        <div class="csInner">
            <div class="info_col">
                <h4>CS CENTER</h4>
                <div class="widget-box">
                    <div class="help-tel">
                        <span>대표번호</span> <span class="tel">051-504-6877</span>
                    </div>
                    <div class="help-block">
                        평일 09:00 ~ 18:00 ㅣ 토·일·공휴일 휴무<br class="pc_only"><span class="desc">업무시간 외 장애문의 : 010-8546-1517</span>
                    </div>
                    
                </div>
                <div class="help-event">
                    <a href="#"><img src="<?=KI_IMG_URL?>/img_kakao.png" alt="카카오톡" class="img-responsive" /></a>
                </div> 
            </div>
            <div class="info_col">
                <h4>BANK INFO</h4>
                <div class="widget-box">
                    <ul class="bank_list">
                        <li><img src="<?=KI_IMG_URL?>/img_bnk.png" alt="부산은행" /></li>
                        <li class="tel">093-13-000870-9</li>
                        <li>예금주 : 한국산업정보사</li>
                    </ul>
                </div>
            
            </div>
            
            <div class="info_col">
                <h4>네임서버</h4>  
                <div class="widget-box">
                    <div class="nameList">
                       <span class="titBox">1차</span> <span>ns.infodu.co.kr&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;211.234.118.50</span>
                    </div>
                    <div class="nameList">
                       <span class="titBox">2차</span> <span>ns1.infodu.co.kr&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;211.234.118.50</span>
                    </div>
                    <div class="nameList">
                       <span class="titBox">3차</span> <span>ns2.infodu.co.kr&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;211.234.118.50</span>
                    </div>
                    <div class="nameList">
                       <span class="titBox">4차</span> <span>ns3.infodu.co.kr&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;211.234.118.50</span>
                    </div>
                </div> 
            </div>
            
        </div>

    </div>
</section>


<section class="k_wrap" id="message_section">
    <div class="k_container type_center">
        <h2 class="main_section_title">견적·고객 문의</h2>

        <div class="mail_inner">
            <form id="frmAjax" name="frmAjax" method="post" enctype="multipart/form-data" action="<?php echo KI_URL?>/mail_main.php" onSubmit="return checkForm(this);">
                <div class="mailBoxWrap">
                    <div class="mailBox">
                        <ul class="mail_table">          
                            <li class="mail_kind">업체명</li>
                            <li class="mail_input"><input type="text" name="company" placeholder="업체명"></li>
                        </ul>
                        <ul class="mail_table">  
                            <li class="mail_kind"><span class="mail_star">*</span>담당자</li>
                            <li class="mail_input"><input type="text" name="name" placeholder="담당자"></li>
                        </ul>
                        <ul class="mail_table">  
                            <li class="mail_kind">연락처</li>
                            <li class="mail_input"><input type="text" name="tel" placeholder="연락처"></li>
                        </ul>
                        <ul class="mail_table"> 
                            <li class="mail_kind"><span class="mail_star">*</span>이메일</li>
                            <li class="mail_input"><input type="text" name="mail" placeholder="이메일"></li>
                        </ul>
                        <ul class="mail_table"> 
                            <li class="mail_kind">업종선택</li>
                            <li class="mail_input">
                                <select name="businesstype">
                                    <option value="">업종선택</option>
                                    <option value="---기업홍보형---">-----기업홍보형-----</option>
                                    <option value="제조업(규격품)">제조업(규격품)</option>
                                    <option value="제조업(주문생산)">제조업(주문생산)</option>
                                    <option value="유통/판매">유통/판매</option>
                                    <option value="무역">무역</option>
                                    <option value="물류">물류</option>
                                    <option value="건설,토목">건설,토목</option>
                                    <option value="기타 업종">기타 업종</option>
                                    <option value="---서비스업---">-----서비스업-----</option>
                                    <option value="공공기관">공공기관</option>
                                    <option value="병원">병원</option>
                                    <option value="펜션">펜션</option>
                                    <option value="학원/교육">학원/교육</option>
                                    <option value="요식업">요식업</option>
                                    <option value="인테리어">인테리어</option>
                                    <option value="기타 서비스업">기타 서비스업</option>
                                    <option value="">------------</option>
                                    <option value="커뮤니티">커뮤니티</option>
                                    <option value="뉴스,기사">뉴스,기사</option>
                                </select>
                            </li>
                        </ul>

                    </div>
                    <div class="mailBox">
                        <ul class="mail_table ">    
                            <li class="mail_kind"><span class="mail_star">*</span>문의사항</li>
                            <li class="mail_input"><textarea name="memo" style="width:99%;" placeholder="문의내용을 작성해 주세요"></textarea></li>
                        </ul>
                       <ul class="mail_table"> 
                            <li class="mail_kind">첨부파일</li>
                            <li class="mail_input"><input type="file" name="upfile" /></li>
                        </ul>
                    </div>
                </div>

                <div class="mail_submit">
                    <input type="submit" id="onSubmit" value="작성완료" />
                </div>
            </form>
        </div>



    </div>
</section>
<script>
<!--
function checkForm(f) {

    if(!f.name.value) {
        alert('담당자 성명을  입력해 주세요.');
        f.name.focus();
        return false;
    }
    if(!f.mail.value) {
        alert('이메일을  입력해 주세요.');
        f.mail.focus();
        return false;
    }
    if(!f.memo.value) {
        alert('문의할 내용을  입력해 주세요.');
        f.memo.focus();
        return false;
    }
    return true;
}
//-->
</script>

<?php
include_once(KI_PATH.'/_footer.php'); 
?>