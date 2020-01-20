<?php
define('_CONTENTS_', true);
include_once('./_common.php');


if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/content.php');
    return;
}


//  서브페이지 CSS 경로 : /page/asset/contents.css


// 페이지 제목 설정 
$g5['title'] = $currentMenuArr['title'];
include_once('./_head.php');
?>

<div class="history">
	<div class="history_list first">
		<div class="right_con">
			<h4 class="dtit ">2000년</h4>	
			<div class="dcon">
				<span class="month "></span><span class="txt">상동면 우계리에서 회사 설립</span>
			</div>
		</div>
	</div>


	<div class="history_list">
		<div class="left_con">
			<h4 class="dtit ">2016년</h4>	
			<div class="dcon">
				<span class="month "></span><span class="txt">상동면 매리로 증축 이전</span>
			</div>
		</div>
	</div>   

	<div class="his bg01"><img src="./asset/images/his01.jpg" alt=""></div>
	<div class="his bg02"><img src="./asset/images/his02.jpg" alt=""></div>




</div>


<?php
include_once('./_tail.php');
?>