<?
// 타이틀
if ($page_1_name[$code_high][$code_sub_1_no]){
	$title_echo=$page_1_name[$code_high][$code_sub_1_no];
}
else{
	$title_echo=$cate_name[$code_high];
}

$_menu_current = basename($_SERVER['PHP_SELF']);
$_menu_current_arr = explode(".", $_menu_current );
$_menu_current_name = $_menu_current_arr[0];

switch($_menu_current_name):
	case "sitemap": $title_echo = "사이트맵"; break;
	case "inquiry": $title_echo = "고객센터"; break;

	default: $title_echo = $cate_name[$code_high];
endswitch;


// 포지션
if ($cate_name[$code_high]) {$po_high = "&nbsp;&nbsp;>&nbsp;&nbsp;".$cate_name[$code_high];}
if ($code_sub_1)	{
		$po_sub_1="&nbsp;&nbsp;>&nbsp;&nbsp;";
	}
if ($code_sub_2)	{
		$po_sub_2="&nbsp;&nbsp;>&nbsp;&nbsp;";
	}


if($code_high_no == 1){
	$cate_left = $order_category[sizeof($order_category)-1];
}else{
	$cate_left = $order_category[$code_high_no-1];
}
if($code_high_no == sizeof($order_category)-1){
	$cate_right = $order_category[1];
}else{
	$cate_right = $order_category[$code_high_no+1];
}
?>
<div class="title_wrap">    
	<h2 class="title"><?=$title_echo?></h2>
    <div class="position"><!--&#8226;  -->Home<?=$po_high?><?=$po_sub_1?><?=$page_1_name[$code_high][$code_sub_1_no]?><?=$po_sub_2?><?=$page_2_name[$code_high][$code_sub_1_no][$code_sub_2_no]?></div>    
   
</div>