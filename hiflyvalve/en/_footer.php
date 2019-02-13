<?php if (!defined("_INDEX_")) { ?>
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->

<footer id="footer">



    <div class="copyright_wrap">
        <div class="foot_widget first">
            <div class="copy_logo"><img src="<?php echo G5_LANG_IMG_URL?>/copy_logo.png" border="0"/></div>

            <div class="basicInfo">
                <ul class="foot_nav">
                    <li><a href="<?php echo G5_LANG_URL?>">HOME</a></li>
                    
                    <li><a href="<?php echo G5_LANG_URL?>/customer/sitemap.php">SITE MAP</a></li>
                    
                    <li><a href="<?php echo G5_LANG_URL?>/mail/mail.php">CONTACT US</a></li>

                    <?php if($is_member){?>
                        
                        <li><a href="<?php echo G5_BBS_URL?>/member_confirm.php?url=register_form.php">정보수정</a></li>
                        
                        <li><a href="<?php echo G5_BBS_URL?>/logout.php">LOGOUT</a></li>
                    <?php }else{?>
                        
                        <li><a href="<?php echo G5_BBS_URL?>/login.php">ADMIN</a></li>
                    <?php }?>
                </ul>

                <div class="copy_by"><p class="copy_txt">Copyright© HIFLY VALVE CO,.LTD. All rights reserved.</p></div>

            </div>

        </div>

        <div class="foot_widget second">
            <div class="inner_wrap">
                <h4><div class="title_line"></div>ADDRESS</h4>
                <div class="inner_content">
                    <table class="companyInfo">
                        <colgroup>
                            <col style="width:40%"/>
                            <col style="width:auto"/>
                        </colgroup>
                        <tr>
                            <th>Head office & Factory</th>
                            <td>
                                568-4, Sinpyeong-Dong, Saha-Gu, Busan, 604-030, South Korea<br/>
                                Tel  : +82 - 51 - 831 - 8482<br/>
                                Fax : +82 - 51 - 831 - 8486<br/><br/>
                            </td>
                        </tr>
                        <tr>
                            <th>Seoul Business office</th>
                            <td>
                                Hoban Metrocube #803, 31, Daewangpangro-ro 606 beon-Gil, Bundang-Gu, Seongnam-Si, Gyeonggi-Do, South Korea<br/>
                                Tel  : +82 - 31 - 698 - 3131<br/>
                                Fax : +82 - 31 - 698 - 3132
                            </td>
                        </tr>
                    </table>
                </div>
                 
            </div>
        </div>

        <div class="foot_widget last">
            <div class="inner_wrap">
                <h4><div class="title_line"></div>CONTACT</h4>
                <div class="inner_content">
                    <form id="frmAjax" name="frmAjax" method="post" >
                        <div class="input">
                            <label class="laTxt" for="name">Name</label> <input type="text" id="name" name="name" value="" maxlength="15" placeholder="Input Name">
                        </div>
                        <div class="input">
                            <label class="laTxt" for="tel">Tel</label> <input type="text" id="tel" name="tel" value="" placeholder="Contact Information">
                        </div>
                        <div class="input">
                            <label class="laTxt" for="email">E-mail</label> <input type="text" id="email" name="email" value="" placeholder="E-mail">
                        </div>
                        
                        <div class="submit">
                            <input type="submit" id="onSubmit" value="Application" />
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script type="text/javascript">

        $(document).ready(function(){

                var ing = "";

                $('#onSubmit').on('click', function(e){
                    
                    var frmURL  = '<?php echo G5_LANG_URL?>'+'/_mailAjax.php';
                    var params = $("#frmAjax").serialize();
                    var f = document.frmAjax;


                    if(!f.name.value){alert('Please enter your name.');f.name.focus();  return false;}
                    if(!f.tel.value){alert('Please enter your Telephone.');f.tel.focus();  return false;}
                    if(!f.email.value){alert('Please enter your E-mail Address.');f.email.focus();  return false;}


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
                        alert('Processing...');
                        return false;
                    }

                    return false;
                });
        });

        </script>





    </div>
</footer>