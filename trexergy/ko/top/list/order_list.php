<?
//++++++++++++++++++++++++ 카테고리 순서 +++++++++++++++++++
$order_category[0] = "0입니다 비워두세요"; //손대지마세요
$order_category[] = "company";
$order_category[] = "tech";
$order_category[] = "products";
$order_category[] = "gallery";
$order_category[] = "news";
// $order_category[] = "customer";

//손대지마세요
for ($i=1 ; $i < sizeof($order_category) ; $i++){
	@include "list_$order_category[$i].php";
}
?>