<?
// 타이틀
if ($page_1_name[$code_high][$code_sub_1_no]){
	$title_echo=$page_1_name[$code_high][$code_sub_1_no];
	}
else{
	$title_echo=$cate_name[$code_high];
	}

// 포지션
if ($cate_name[$code_high]) {$po_high = "&nbsp;&nbsp;>&nbsp;&nbsp;".$cate_name[$code_high];}
if ($code_sub_1)	{
		$po_sub_1="&nbsp;&nbsp;>&nbsp;&nbsp;";
	}
if ($code_sub_2)	{
		$po_sub_2="&nbsp;&nbsp;>&nbsp;&nbsp;";
	}
?>
  
<h2 class="title"><?=$title_echo?></h2>
<div class="position"><!--&#8226;  -->홈<?=$po_high?><?=$po_sub_1?><?=$page_1_name[$code_high][$code_sub_1_no]?><?=$po_sub_2?><?=$page_2_name[$code_high][$code_sub_1_no][$code_sub_2_no]?></div>  
