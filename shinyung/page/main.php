<section class="k_wrap font_nanum" id="ban_section">
    <div class="k_container type_center carMain">

        <div class="car_desc">
            <h3><?php echo $infodu['lang']['main']['about01']?><small><?php echo $infodu['lang']['main']['about02']?></small></h3>
            <p>
                <?php echo $infodu['lang']['main']['about03']?>
            </p>
            <div class="more_view">
            	<a href="#none" class="btnMore inline tran-animate"><?php echo $infodu['lang']['main']['about04']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="right_arrow"></span></a>
            </div>
        </div> 
        <div class="car_img">
            <img src="<?php echo G5_THEME_IMG_URL?>/about.jpg" alt="" class="img-responsive">
        </div>

    </div>
</section>


<section class="k_wrap" id="pro_section">
    <div class="k_container type_center partner_inner">
    		
    		<h3><span><?php echo $infodu['lang']['main']['pro01']?></span></h3>
            <div class="partner-wrap">
                <div class="partner-box">
                    <a href="#none">
                        <img src="<?php echo G5_THEME_IMG_URL?>/pro01.jpg"  alt="" />
                        <div class="con">
                            <h4><?php echo $infodu['lang']['main']['pro02']?></h4>
                        </div>
                    </a>
                </div>
                <div class="partner-box last">
                    <a href="#none">
                        <img src="<?php echo G5_THEME_IMG_URL?>/pro02.jpg"  alt="" />
                        <div class="con">
                            <h4><?php echo $infodu['lang']['main']['pro03']?></h4>
                        </div>
                    </a>
                </div>
            </div>  

    </div>
</section>



<section class="k_wrap" id="inquiry_section">
    <div class="k_container type_center inq_inner">
        <h3><span><?php echo $infodu['lang']['main']['inq01']?></span></h3>
        <p class="subTit"><?php echo $infodu['lang']['main']['inq02']?></p>


        <div class="inquiry_content">
            <form id="frmAjax" name="frmAjax" method="post" enctype="multipart/form-data" action="<?php echo G5_URL?>/_mailMain.php" onSubmit="return checkForm(this);">

                <div class="company_inquiry">
                    <table class="table">
                        <tr>
                            <td>
                                <div class="mail_input">
                                    <label class="laTxt" for="label1"><?php echo $infodu['lang']['main']['inq_m01']?></label>
                                    <input type="text" name="name" id="label1" class="frmMailInput" placeholder="<?php echo $infodu['lang']['main']['inq_inp']?>">
                                </div>
                            </td>
                            <td>
                                <div class="mail_input">
                                    <label class="laTxt" for="label2"><?php echo $infodu['lang']['main']['inq_m02']?></label>
                                    <input type="text" name="tel" id="label2" class="frmMailInput" placeholder="<?php echo $infodu['lang']['main']['inq_inp']?>">
                                </div>
                            </td>
                            <td rowspan="2" class="w600">
                                <div class="mail_input">
                                    <label class="laTxt" for="label5"><?php echo $infodu['lang']['main']['inq_m05']?></label>
                                    <textarea name="memo" id="label5" class="frmMailTextArea" placeholder="<?php echo $infodu['lang']['main']['inq_inp']?>"></textarea>
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <div class="mail_input">
                                    <label class="laTxt" for="label3"><?php echo $infodu['lang']['main']['inq_m03']?></label>
                                    <input type="text" name="email" id="label3" class="frmMailInput" placeholder="<?php echo $infodu['lang']['main']['inq_inp']?>">
                                </div>
                            </td>
                            <td>
                                <div class="mail_input">
                                    <label class="laTxt" for="label4"><?php echo $infodu['lang']['main']['inq_m04']?></label>
                                    <select name="category" class="frmMailSelect">
                                        <option value=""><?php echo $infodu['lang']['main']['inq_sel']?></option>
                                        <?php foreach($infodu['lang']['main']['inq_ton'] as $val):?>
                                            <option value="<?php echo $val?>"><?php echo $val?></option>
                                        <?php endforeach?>
                                    </select>
                                </div>
                            </td>
                            
                           
                        </tr>
                    </table>
                </div>

                <ul class="mail_table"> 
                    <li >
                        <span class="agreeTxt2"><a href="#none"><?php echo $infodu['lang']['main']['inq_m07']?></a></span>
                    </li>
                    <li >
                        <div class="agreeFrmChk">
                            <label class="agreeTxt" for="agree"><?php echo $infodu['lang']['main']['inq_m08']?></label>
                            <input class="checkbox" type="checkbox" id="agree" name="agree" value="Y">
                        </div>
                    </li>
                </ul>


                <div class="mail_submit">
                    <input type="submit" id="onSubmit" class="frmMailSubmit" value="<?php echo $infodu['lang']['main']['inq_m06']?>" />
                </div>
            </form>
            <script>
            <!--
            function checkForm(f) {

                if(!f.name.value) {
                    alert("<?php echo $infodu['lang']['main']['inq_err01']?>");
                    f.name.focus();
                    return false;
                }
                if(!f.tel.value) {
                    alert("<?php echo $infodu['lang']['main']['inq_err02']?>");
                    f.tel.focus();
                    return false;
                }
                if(!f.email.value) {
                    alert("<?php echo $infodu['lang']['main']['inq_err03']?>");
                    f.email.focus();
                    return false;
                }
                if(!f.category.value) {
                    alert("<?php echo $infodu['lang']['main']['inq_err04']?>");
                    f.category.focus();
                    return false;
                }
                if(!f.memo.value) {
                    alert("<?php echo $infodu['lang']['main']['inq_err05']?>");
                    f.memo.focus();
                    return false;
                }
                return true;
            }
            //-->
        </script>

        </div>


        <div class="etcInner">

            <div class="etc_center">    
                <a href="#none">              
                    <h4 class="title"><?php echo $infodu['lang']['main']['etc01']?>
                        <small><?php echo $infodu['lang']['main']['etc02']?></small>
                    </h4>
                    <span class="more"><?php echo $infodu['lang']['main']['etcMore']?></span>
                </a>
            </div>
            <div class="etc_center">    
                <a href="#none">              
                    <h4 class="title"><?php echo $infodu['lang']['main']['etc03']?>
                        <small><?php echo $infodu['lang']['main']['etc04']?></small>
                    </h4>
                    <span class="more"><?php echo $infodu['lang']['main']['etcMore']?></span>
                </a>
            </div>
            <div class="etc_center last">    
                <a href="#none">              
                    <h4 class="title"><?php echo $infodu['lang']['main']['etc05']?>
                        <small><?php echo $infodu['lang']['main']['etc06']?></small>
                    </h4>
                    <span class="more"><?php echo $infodu['lang']['main']['etcMore']?></span>
                </a>
            </div>

        </div>


    </div>
</section>