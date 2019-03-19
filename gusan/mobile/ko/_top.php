<?php
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<header id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <div class="to_content"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        //include G5_LANG_MOBILE_PATH.'/newwin.inc.php'; // 팝업레이어
    } ?>

    <div id="hd_wrapper">

        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_LANG_MOBILE_IMG_URL ?>/sub_logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>

        <button type="button" id="gnb_open" class="hd_opener"><i class="fa fa-bars" aria-hidden="true"></i><span class="sound_only"> 메뉴열기</span></button>

        <div id="gnb" class="hd_div">
            <button type="button" id="gnb_close" class="hd_closer"><i class="fas fa-times" aria-hidden="true"></i></button>

			

			<ul id="gnb_1dul">
            <?php for($i=0; $i<count($nav1st); $i++): ?>

                <li class="gnb_1dli font_daehan">
                    <a href="<?php echo $nav1st[$i]['url']?>" class="gnb_1da"><?php echo $nav1st[$i]['title']?></a>

					<?php
						for($j=0; $j<count($nav2nd); $j++):
							if($j == 0) echo '<button type="button" class="btn_gnb_op">하위분류</button><ul class="gnb_2dul">'.PHP_EOL;
					?>

							<?php if(substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']): ?>
								<li class="gnb_2dli"><a href="<?php echo $nav2nd[$j]['url']?>" class="gnb_2da"><span></span><?php echo $nav2nd[$j]['title']?></a></li>
							<?php endif; ?>

                    <?php
						endfor;
							if($j > 0) echo '</ul>'.PHP_EOL;
                    ?>
                </li>
            <?php endfor; ?>
            </ul>

			<ul id="hd_nb">
                <li class="hd_nb1 font_daehan"><a href="<?php echo G5_LANG_MOBILE_URL ?>/customer/sitemap.php" id="snb_qa"><i class="fas fa-sitemap" aria-hidden="true"></i><br>사이트맵</a></li>
                <li class="hd_nb2 font_daehan"><a href="<?php echo G5_LANG_MOBILE_URL ?>/mail/mail.php" id="snb_faq"><i class="fa fa-question-circle" aria-hidden="true"></i><br>고객센터</a></li>
                
            </ul>

			<div class="m_lang" style="display:none">
				<ul>
					<li><a href="<?php echo G5_URL?>/ko" class="on" >Korean</a></li>
					<li><a href="<?php echo G5_URL?>/en" >English</a></li>
					<li><a href="<?php echo G5_URL?>/cn">Chinese</a></li>
				</ul>
			</div>

        </div>


        <script>
        jQuery(function ($) {
            //폰트 크기 조정 위치 지정
            var font_resize_class = get_cookie("ck_font_resize_add_class");
            if( font_resize_class == 'ts_up' ){
                $("#text_size button").removeClass("select");
                $("#size_def").addClass("select");
            } else if (font_resize_class == 'ts_up2') {
                $("#text_size button").removeClass("select");
                $("#size_up").addClass("select");
            }

            $(".hd_opener").on("click", function(e) {
                var $this = $(this);
                var $hd_layer = $this.next(".hd_div");

                if($hd_layer.is(":visible")) {
                    $hd_layer.hide();
                    $this.find("span").text("열기");
                } else {
                    var $hd_layer2 = $(".hd_div:visible");
                    $hd_layer2.prev(".hd_opener").find("span").text("열기");
                    $hd_layer2.hide();

                    $hd_layer.show();
                    $this.find("span").text("닫기");
                }
            });

            $("#container").on("click", function(e) {
                $(".hd_div").hide();
            }).on("click_font_resize", function(e) {

                var $this = $(this),
                    $text_size_button = $("#text_size button");
                
                $text_size_button.removeClass("select");

                if( $this.hasClass("ts_up") ){
                    $text_size_button.eq(1).addClass("select");
                } else if ( $this.hasClass("ts_up2") ) {
                    $text_size_button.eq(2).addClass("select");
                } else {
                    $text_size_button.eq(0).addClass("select");
                }
            });

            $(".btn_gnb_op").click(function(e){
                $(this).toggleClass("btn_gnb_cl").next(".gnb_2dul").slideToggle(300);
                
            });
			$(".gnb_1da").click(function(e){
				e.preventDefault();
				
				if($(this).siblings(".gnb_2dul").find('li').length > 0){
					$(this).siblings(".gnb_2dul").slideToggle(300);
				} else {
				 	var src = $(this).attr('href');
					location.href=src;
				}

                
                
            });
			


            $(".hd_closer").on("click", function(e) {
                var idx = $(".hd_closer").index($(this));
                $(".hd_div:visible").hide();
                $(".hd_opener:eq("+idx+")").find("span").text("열기");
            });
        });
        </script>
        
    </div>
</header>



<div id="wrapper">

    <div id="container">
    <?php if (!defined("_INDEX_")) { ?>
		<h2 id="container_title" class="top font_daehan" title="<?php echo get_text($g5['title']); ?>">
			<?php 

				$level = count($breadcrumArr)-1;
				$titleChk = true;
				for($b=$level; $b>=0; $b--):
					if($breadcrumArr[$b]['title']): 
						echo $breadcrumArr[$b]['title']; 
						$titleChk = false;
						break;
					endif;
				endfor;

				if ($titleChk === true) {
					if (function_exists('get_head_title')) {
						echo get_head_title($g5['title']);
					}
				}


			?>
		</h2>

		<div id="subPage">


			<?php if($breadcrumArr[2]['title']):?>


			<div class="view_toggle">
				<a href="#" id="toggle_search" class=""><span class="d1"><?php echo $breadcrumArr[2]['title']?></span> <span class="basic"></span></a>
			</div>
			<div class="mobile_search_wrap">
				<ul class="toggle_nav">
                    <?php 
                        for($j=0; $j<count($nav3rd); $j++):
                            if(substr($breadcrumArr[2]['mCode'],0,4) == substr($nav3rd[$j]['mCode'],0,4)):
                            //if(substr($currentMenuArr['mCode'],0,4) == $nav2nd[$j]['mCode']):
                                $cls = "";
                                $access = "이동";
                                if($breadcrumArr[2]['mCode'] == $nav3rd[$j]['mCode']): 
                                    $cls = "active"; 
                                    $access = "메뉴 활성화";
                                endif;
                    ?>
                                    <li class="<?php echo $cls?>"><a href="<?php echo $nav3rd[$j]['url']?>"><?php echo $nav3rd[$j]['title']?></a></li>
                    <?php   
                            endif;
                        endfor;
                    ?>
                </ul>

			</div>
			<script>
				$(document).ready(function(){
					$('#toggle_search').on('click', function(e){
						e.preventDefault();
						if($('.mobile_search_wrap').hasClass('active')){
							$('.mobile_search_wrap').removeClass('active');
							$(this).find('span.basic').removeClass('up');
						} else {
							$('.mobile_search_wrap').addClass('active');
							$(this).find('span.basic').addClass('up');
						}
					});
				});
			</script>
            <?php endif; ?> 
	<?php } ?>