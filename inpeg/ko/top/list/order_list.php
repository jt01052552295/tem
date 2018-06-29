<?
//++++++++++++++++++++++++ 카테고리 순서 +++++++++++++++++++
$order_category[0] = "0입니다 비워두세요"; //손대지마세요
$order_category[] = "products";
$order_category[] = "lpr";
$order_category[] = "ucity";
$order_category[] = "image";
$order_category[] = "business";
$order_category[] = "customer";
$order_category[] = "company";

//손대지마세요
for ($i=1 ; $i < sizeof($order_category) ; $i++){
	@include "list_$order_category[$i].php";
}
?>