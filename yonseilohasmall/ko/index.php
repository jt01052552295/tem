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
        
        <div class="vg_title">
            <div class="left">
                <h2 data-aos="fade-right" ><span>포에이엠교육원</span>이<br/>제2의 도약을</h2>
                <div data-aos="fade-right" ><img src="<?php echo G5_LANG_IMG_URL?>/img_mainTxt.png" /></div>
                <p data-aos="fade-right"  >
                      포에이엠은 당신이 준비하는제 2의 도약을 응원합니다.<br/>
                      체계적인 교육과정과 다양한 커리큘럼, 우수한 강사진의 강의로<br/>
                      당신의 꿈을 펼쳐보세요. 당신을 응원합니다!
                </p>
            </div>
            <div class="right" data-aos="fade-left"><img src="<?php echo G5_LANG_IMG_URL?>/img_people.png" /></div>
        </div>

        <div class="vg_box">
            <div class="vg_row">
                <div class="w50 h280 lt">
                    <h4><span>공지사항</span>
                        <div class="more_view">
                            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>" class="btnMore tran-animate">
                                <span class="line m1"></span>
                                <span class="line m2"></span>
                            </a>
                        </div>
                    </h4>
                    <ul>
                        <?php for ($i=0; $i<4; $i++) {  ?>
                        <li>
                            <a href="<?php echo $list[$i]['href']?>" class="lt_a">
                                <h5>사업자 교육신청 방법을 알려드립니다.</h5>
                                <div class="lt_date">2019-12-03</div>
                            </a>
                        </li>
                        <?php }?>                               
                    </ul>
                </div>
                <div class="w50 h280">
                    <div class="w50 ed ed01">
                        <a href="#none">
                            <h4>교육원소개</h4> 
                            <p>포에이엠교육원을 소개합니다.</p>  
                            <div class="ico"><img src="<?php echo G5_LANG_IMG_URL?>/ico_ed01.png" /></div>
                        </a>
                    </div>
                    <div class="w50 ed ed02">
                        <a href="#none">
                            <h4>교육강의정보</h4> 
                            <p>포에이엠 교육강의 정보입니다.</p>  
                            <div class="ico"><img src="<?php echo G5_LANG_IMG_URL?>/ico_ed02.png" /></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="vg_row">
                <div class="info w50">
                    <div class="info_t h280">
                        <div class="w50 info_t_bg01">
                            <a href="#none">
                                <h4>강사소개</h4> 
                                <p>포에이엠교육원 강사소개</p>  
                            </a>
                        </div>
                        <div class="w50 info_t_bg02">
                            <a href="#none">
                                <h4>강의 만족도 조사</h4> 
                                <p>94<small>%</small></p>  
                                <span>2019년 11월 기준</span>
                            </a>
                        </div>
                    </div>
                    <div class="info_b h280">
                        <h4><span>교육신청안내</span>
                            <div class="more_view">
                                <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>" class="btnMore tran-animate">
                                    <span class="line m1"></span>
                                    <span class="line m2"></span>
                                </a>
                            </div>
                        </h4>
                        <ul class="info_b_desc">
                            <li><span>강의선택 및<br/>교육신청서 작성</span></li>
                            <li><span>교육일정<br/>예약</span></li>
                            <li><span>현장방문<br/>강의</span></li>
                            <li><span>강의 졸료 후<br/>이수증 발급</span></li>
                        </ul>

                    </div>
                </div>
                <div class="story w50 h560">
                    <a href="#none">
                        <h4><span>4AM EDU</span>STORY</h4>
                        <p>포에이엠교육원 강의현장의 생생한 이야기를<br/>들어보세요.</p>
                    </a>
                </div>
            </div>

        </div>




    </div>
</section>



<section class="k_wrap" id="business_section">
    <div class="k_container type_center">

            <div class="businessInner">
                <h4>본질에 충실한, <span><strong>포에이엠교육원</strong>입니다.</span></h4>
                <p>
                    목표와 성취를 이루기위해 고민하고 계신가요?<br/>
                    포에이엠교육원에서 당신의 미래를 응원합니다!<br/>
                    다양한 커리큘럼과 체계적인 교육으로 당신의 자아실현을 향해 함께 달릴
                    포에이엠교육원에서 당신의 꿈을 찾아보세요.
                </p>
                <div class="a-box">
                    <a href="#none" class="sub_link_btn tran-animate"><span>교육원소개보러가기</span><span class="arrow"></span></a>
                </div>
            </div>
        
    </div>
</section>


<section class="k_wrap" id="customer_section">
    <div class="k_container type_center">
        <div class="customer_center" data-aos="fade-up" data-aos-duration="500">   
            <h3>포에이엠 교육원<strong>교육신청현황</strong></h3>
            <p>
                포에이엠 교육원을 찾아주셔서 감사합니다.<br/>
                많은 기업과 방문자들의 편리한 교육신청을 이용하고 계십니다.
            </p>
        </div>
        <div class="customer_center" data-aos="fade-up" data-aos-duration="700">    
            <div class="thumb cu01"><span>538<small>건</small></span></div>              
            <em>전화문의 건수</em>
        </div>
        <div class="customer_center" data-aos="fade-up" data-aos-duration="900">    
            <div class="thumb cu02"><span>745<small>건</small></span></div>              
            <em>간편문의 건수</em>
        </div>
        <div class="customer_center" data-aos="fade-up" data-aos-duration="1100">    
            <div class="thumb cu03"><span>371<small>건</small></span></div>              
            <em>현장강의 건수</em>
        </div>
    </div>
</section>


<section class="k_wrap" id="intro_section">
    <div class="k_container type_center">
        <h3 data-aos="fade-up"><span>포에이엠 교육원 <strong>교육강의 소개</strong></span></h3>
        <p data-aos="fade-up">고용노동부 인.지정 , 포에이엠교육원의 다양한 교육강의과 커리큘럼을 소개합니다.</p>


        <div class="intro_box" data-aos="fade-up" data-aos-duration="700">    
            <div class="thumb bg01"><span>법정의무교육<small>Legal obligation duty Education</small></span></div>              
            <div class="con">
                <ul>
                    <li>개인정보보호법</li>
                    <li>직장내 괴롭힘 예방</li>
                    <li>직장내 성희롱 예방</li>
                    <li>소방안전 재난안전 예방</li>
                    <li>안전예방 CPR</li>
                    <li>장애인 인권 존중</li>
                </ul>
            </div>
        </div>
        <div class="intro_box" data-aos="fade-up" data-aos-duration="900">    
            <div class="con">
                <ul>
                    <li>일반사무행정</li>
                    <li>엑셀 워드 파워포인트</li>
                    <li>경영기초 관리회계</li>
                    <li>인적자원관리</li>
                    <li>원가계산 및 절감</li>
                    <li>성과관리와 임금관리</li>
                </ul>
            </div>
            <div class="thumb bg02"><span>경영/회계/인사<small>Management / Acconunting<br/>/ Personnel matters</small></span></div>              
            
        </div>
        <div class="intro_box last" data-aos="fade-up" data-aos-duration="1100">    
            <div class="thumb bg03"><span>영업/마케팅<small>Sales & Marketing</small></span></div>              
            <div class="con">
                <ul>
                    <li>감성 세일즈</li>
                    <li>고객과 소통하는 힘</li>
                    <li>SNS 소통 노하우</li>
                    <li>재밌는 스포츠 마케팅</li>
                    <li>기초 마케팅</li>
                    <li>빅데이터 쉽게 이해하기</li>
                </ul>
            </div>
        </div>
    </div>
</section>



<section class="k_wrap" id="inquiry_section">
    <div class="k_container type_center">
        
           
        <div class="inquiry_title">
            <h4>포에이엠 교육원 <strong>무료 상담신청</strong></h4>
            <p>포에이엠 교육원에 교육신청을 원하시면 지금바로 간편신청하세요.</p>

            <div class="company_info">
                <ul>
                    <li class="tel">1544-<strong>0539</strong></li>
                    <li class="info">E-mail. <strong>4amedu@naver.com</strong></li>
                    <li class="info">Fax. <strong>070-4035-2035</strong></li>
                    <li class="info2"><span>토요일·일요일·공휴일 휴무</span></li>
                    <li class="info3"><span>토,일,공휴일은 1:1문의 및 자주묻는 질문을 이용해주세요.</span></li>
                </ul>
            </div>

            <div class="company_more">
                <span>편리한 <strong>카카오톡</strong> 상담  AM 10:00 ~ PM 05:00</span>
            </div>
        </div>

        <div class="inquiry_content">
            <form id="frmAjax" name="frmAjax" method="post" enctype="multipart/form-data" action="<?php echo G5_URL?>/_mailMain.php" onSubmit="return checkForm(this);">

                <div class="company_inquiry">
                    <table class="table">
                        <tr>
                            <th><label class="laTxt" for="label1">업체명</label></th>
                            <td><input type="text" name="company" id="label1" class="frmMailInput" required/></td>
                        </tr>
                        <tr>
                            <th><label class="laTxt" for="label2">담당자</th>
                            <td><input type="text" name="name" id="label2" class="frmMailInput" required/></td>
                        </tr>
                        <tr>
                            <th><label class="laTxt" for="label3">연락처</label></th>
                            <td><input type="text" name="tel" id="label3" class="frmMailInput" required/></td>
                        </tr>
                        <tr>
                            <th><label class="laTxt" for="label4">이메일</label></th>
                            <td><input type="text" name="mail" id="label4" class="frmMailInput" required/></td>
                        </tr>
                        <tr>
                            <th><label class="laTxt" for="label5">문의내용</label></th>
                            <td><textarea name="memo" id="label5" class="frmMailTextArea" required></textarea></td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td>
                                <div class="mail_policy">
                                    <div class="agreelabel"><a href="<?php echo G5_URL?>/ft02.php">개인정보 취급방침에 동의하십니까?</a></div>    
                                    <div class="agreeFrmChk">
                                        <label class="agreeTxt" for="agree">동의합니다.</label>
                                        <input class="checkbox" type="checkbox" id="agree" name="agree" value="Y" required />
                                    </div>                                         
                                </div>
                                <div class="mail_submit">
                                    <button type="submit" class="frmMailSubmit">무료상담신청하기&nbsp;<img src="<?php echo G5_LANG_IMG_URL?>/bg_inquiry.jpg" alt=""></button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>


                
            </form>
        </div>
          
            
    </div>
</section>
<script>
    <!--
    function checkForm(f) {
        var agree = f.agree.checked;

        if(!agree){
            alert("개인정보 취급방침에 동의해야 합니다.");
            f.agree.focus();
            return false;
        }

        if(!f.company.value) {
            alert("업체명을 입력하세요.");
            f.company.focus();
            return false;
        }
        if(!f.name.value) {
            alert("담당자를 입력하세요.");
            f.name.focus();
            return false;
        }
        if(!f.tel.value) {
            alert("연락처를 입력하세요.");
            f.tel.focus();
            return false;
        }
        if(!f.mail.value) {
            alert("이메일을 입력하세요.");
            f.mail.focus();
            return false;
        }
        if(!f.memo.value) {
            alert("문의내용을 입력하세요.");
            f.memo.focus();
            return false;
        }
        return true;
    }
    //-->
</script>


<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>