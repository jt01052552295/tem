<?php
define('_CONTENTS_', true);
include_once('./_common.php');


if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/content.php');
    return;
}

//  서브페이지 CSS 경로 : /page/asset/contents.css
//  언어별 파일 경로 : /language/**.php 

// 페이지 제목 설정 
$g5['title'] = $currentMenuArr['title'];
include_once('./_head.php');
?>


<div class="company">
	

	<div class="img"><img src="./asset/images/company.jpg" alt=""></div>

	<h4><?php echo $infodu['lang']['company']['txt01']?></h4>
	<p><?php echo $infodu['lang']['company']['txt02']?></p>

	<table class="table">
		<?php foreach($infodu['lang']['company']['proTbl'] as $key=>$val):?>
			<tr>
				<th><?php echo $key?></th>
				<td><?php echo $val?></td>
			</tr>
		<?php endforeach;?>
	</table>

</div>




<?php
include_once('./_tail.php');
?>