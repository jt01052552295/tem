<?php
define('_CONTENTS_', true);
include_once('./_common.php');


if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/content.php');
    return;
}


//  서브페이지 CSS 경로 : /page/asset/contents.css


// 페이지 제목 설정 (안해도됨)
$g5['title'] = $currentMenuArr['title'];
include_once('./_head.php');
?>


<div class="product">
	<div class="sit_pvi">
		<div class="thumb"><img src="./asset/images/roving.jpg" alt=""></div>
	</div>
	<div class="sit_ov">
		<h4><span><?php echo $infodu['lang']['rovingtape']['txt01']?></span><?php echo $infodu['lang']['rovingtape']['txt02']?></h4>
		<p><?php echo $infodu['lang']['rovingtape']['txt03']?></p>
	</div>
</div>


<div class="product rowc">
	<ul class="grid2 mg0">
		<?php foreach($infodu['lang']['rovingtape']['proTbl'] as $key=>$val):?>
			<li class="pro">
				<h5><?php echo $key?></h5>
				<p><?php echo $val?></p>
			</li>
		<?php endforeach;?>
	
	</ul>
	
</div>




<?php
include_once('./_tail.php');
?>