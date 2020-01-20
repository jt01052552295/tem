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

<div class="equip">
	
	<table class="table">
		<tr>
			<th><?php echo $infodu['lang']['equip']['th01']?></th>
			<th><?php echo $infodu['lang']['equip']['th02']?></th>
			<th><?php echo $infodu['lang']['equip']['th03']?></th>
			<th><?php echo $infodu['lang']['equip']['th04']?></th>
		</tr>
		
		<?php foreach($infodu['lang']['equip']['eqTbl'] as $key=>$val):?>
		<tr>
			<?php foreach($val as $key=>$data):?>
			<td><?php echo $data?></td>
			<?php endforeach;?>
		</tr>
		<?php endforeach;?>
		
  	</table>


  	<div class="img"><img src="./asset/images/equip.jpg" alt=""></div>
</div>



<?php
include_once('./_tail.php');
?>