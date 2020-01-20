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
		<div class="thumb"><img src="./asset/images/woven.jpg" alt=""></div>
	</div>
	<div class="sit_ov">
		<h4><span><?php echo $infodu['lang']['wovenroving']['txt01']?></span><?php echo $infodu['lang']['wovenroving']['txt02']?></h4>
		<p><?php echo $infodu['lang']['wovenroving']['txt03']?></p>
	</div>
</div>


<div class="product rowc">
	<ul class="grid2 mg0">
		<?php foreach($infodu['lang']['wovenroving']['proTbl'] as $key=>$val):?>
			<li class="pro">
				<h5><?php echo $key?></h5>
				<p><?php echo $val?></p>
			</li>
		<?php endforeach;?>
	
	</ul>
	
</div>



<div class="product">
	<table class="table">
		<?php foreach($infodu['lang']['wovenroving']['tblTh'] as $key=>$val):?>
		<tr>
			<?php foreach($val as $key=>$data):?>
			<th><?php echo $data?></th>
			<?php endforeach;?>
		</tr>
		<?php endforeach;?>
		
		<?php foreach($infodu['lang']['wovenroving']['tblTd'] as $key=>$val):?>
		<tr>
			<?php foreach($val as $key=>$data):?>
			<td><?php echo $data?></td>
			<?php endforeach;?>
		</tr>
		<?php endforeach;?>
		
  	</table>
</div>


<?php
include_once('./_tail.php');
?>