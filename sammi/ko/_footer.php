<?php if (!defined("_INDEX_")) { ?>
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->


<footer id="footer">

    <div class="goTop">
        <div class="telBox">
            <ul>
                <li class="title"><i class="fas fa-phone-volume"></i><span>문의전화</span></li>
                <li class="tel"><span>051)</span>781-9292</li>
            </ul>

        </div>
        <a href="#" class="top_btn">TOP<span class="sr-only">위로</span></a>
    </div>
    <script>
        $(window).scroll(function(){

            if($(this).scrollTop() > 100) {
                  $(".goTop").addClass("active");
            } else {
                  $(".goTop").removeClass("active");
            }
        });
        $('.top_btn').click(function(e){
            e.preventDefault;
            $('html, body').animate({ scrollTop : 0 }, 500 );
        });
    </script>


    <div class="copyright_wrap">
        <div class="foot_widget">
            <div class="copy_logo"><img src="<?php echo G5_LANG_IMG_URL?>/copy_logo.png" border="0"/></div>
            <div class="copy_title"><h4><?php echo $infodu['admin']['company']?></h4></div>

            <div class="basicInfo">
                <p>대표 : 홍 길 동<br/>사업자등록번호 : 000-00-00000</p>
                <ul class="foot_nav">
                    <li><a href="<?php echo G5_LANG_URL?>">HOME</a></li>
                    <li class="line">|</li>
                    <li><a href="<?php echo G5_LANG_URL?>/customer/sitemap.html">SITE MAP</a></li>
                    <li class="line">|</li>
                    <li><a href="<?php echo G5_LANG_URL?>/inquiry.html">CONTACT US</a></li>

                    <?php if($is_member){?>
                        <li class="line">|</li>
                        <li><a href="<?php echo G5_BBS_URL?>/member_confirm.php?url=register_form.php">정보수정</a></li>
                        <li class="line">|</li>
                        <li><a href="<?php echo G5_BBS_URL?>/logout.php">LOGOUT</a></li>
                    <?php }else{?>
                        <li class="line">|</li>
                        <li><a href="<?php echo G5_BBS_URL?>/login.php">ADMIN</a></li>
                    <?php }?>
                </ul>

                <div class="designby"><a href="http://www.koreaind.com" target="_blank"><span>Design by 한국산업정보</span></a></div>
            </div>

        </div>

        <div class="foot_widget">
            <div class="inner_wrap">
                <h4><div class="title_line"></div>ADDRESS</h4>
                <div class="inner_content">
                    <table class="companyInfo">
                        <tr>
                            <th>본사</th>
                            <td>부산광역시 해운대구 재송1로 32번길 48</td>
                        </tr>
                        <tr>
                            <th>TEL</th>
                            <td class="red">051)781-9292</td>
                        </tr>
                        <tr>
                            <th>FAX</th>
                            <td>051)781-8293</td>
                        </tr>
                        <tr>
                            <th>E-mail</th>
                            <td>sammi2017@naver.com</td>
                        </tr>
                    </table>
                </div>
                 <p class="copy_txt">Copyright© DDC CHICKEN All rights reserved.</p>
            </div>
        </div>

        <div class="foot_widget last">
            <div class="inner_wrap">
                <h4><div class="title_line"></div>CONTACT</h4>
                <div class="inner_content">
                    <form id="frmAjax" name="frmAjax" method="post" >
                        <div class="input">
                            <label class="laTxt" for="name">성함</label> <input type="text" id="name" name="name" value="" maxlength="15" placeholder="성함 입력">
                        </div>
                        <div class="input">
                            <label class="laTxt" for="tel">연락처</label> <input type="text" id="tel" name="tel" value="" placeholder="연락처 입력">
                        </div>
                        <div class="input">
                            <label class="laTxt">점포유무</label>  

                            <div class="raBox">
                                <label class="laRadio">
                                    <input type="radio" name="store" value="yes" />있음</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label class="laRadio"><input type="radio" name="store" value="no" /> 없음</label>
                            </div>
                        </div>
                        <div class="submit">
                            <input type="submit" id="onSubmit" value="상담신청" />
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script type="text/javascript">

        $(document).ready(function(){

                var ing = "";

                $('#onSubmit').on('click', function(e){
                    
                    var frmURL  = '<?php echo G5_URL?>'+'/mail/mailAjax.php';
                    var params = $("#frmAjax").serialize();
                    var f = document.frmAjax;


                    if(!f.name.value){alert('성함을 입력해 주십시오.');f.name.focus();  return false;}
                    if(!f.tel.value){alert('연락처를 입력해 주세요.');f.tel.focus();  return false;}

                    if (!$("input[name=store]").is(":checked")) {
                        alert('점포유무를 선택해 주세요.'); $("input[name=store]").focus();  return false;
                    }

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





    </div>
</footer>

<?php
    // echo "<!-- <pre _GET>\n";print_r($_GET);echo "\n</pre> -->";
    // echo "<!-- <pre _POST>\n";print_r($_POST);echo "\n</pre> -->";
    // echo "<!-- <pre _SESSION>\n";print_r($_SESSION);echo "\n</pre> -->";
    // echo "<!-- <pre _COOKIE>\n";print_r($_COOKIE);echo "\n</pre> -->";
    // echo "<!-- <pre _SERVER>\n";print_r($_SERVER);echo "\n</pre> -->";
    // echo "<!-- <pre currentMenuArr>\n";print_r($currentMenuArr);echo "\n</pre> -->";
?>
</body>
</html>
