<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
/*
$_SERVER['HTTP_HOST'];    //현재 페이지의 호스트값 불러오기
$_SERVER['REQUEST_URI']; // 호스트를 제외한 나머지 주소
$_SERVER['QUERY_STRING'];  // 현재 페이지의 쿼리 스트링 값
bo_table, co_id, ca_id, 
*/

$siteMenu = array();

$siteMenu[] = array(
	mCode => "10",
	title => "1번메뉴",
	url => "#",
	pid => "first",
	me_use => true
);

$siteMenu[] = array(
	mCode => "1010",
	title => "자유게시판",
	url => "/gnu/bbs/board.php?bo_table=free",
	pid => "free",
	me_use => true
);

$siteMenu[] = array(
	mCode => "1020",
	title => "갤러리",
	url => "/gnu/bbs/board.php?bo_table=gallery",
	pid => "gallery",
	me_use => true
);

$siteMenu[] = array(
	mCode => "1030",
	title => "공지사항",
	url => "/gnu/bbs/board.php?bo_table=notice",
	pid => "notice",
	me_use => true
);


$siteMenu[] = array(
	mCode => "1040",
	title => "질문답변",
	url => "/gnu/bbs/board.php?bo_table=qa",
	pid => "qa",
	me_use => true
);

$siteMenu[] = array(
	mCode => "20",
	title => "2번메뉴",
	url => "#",
	pid => "second",
	me_use => true
);


$siteMenu[] = array(
	mCode => "2010",
	title => "회사소개",
	url => "/gnu/bbs/content.php?co_id=company",
	pid => "company",
	me_use => true
);

$siteMenu[] = array(
	mCode => "2020",
	title => "개인정보 처리방침",
	url => "/gnu/bbs/content.php?co_id=privacy",
	pid => "privacy",
	me_use => true
);

$siteMenu[] = array(
	mCode => "2030",
	title => "서비스 이용약관",
	url => "/gnu/bbs/content.php?co_id=provision",
	pid => "provision",
	me_use => true
);

$siteMenu[] = array(
	mCode => "30",
	title => "3번메뉴",
	url => "/gnu/page/sub2.php",
	pid => "third",
	me_use => true
);

$siteMenu[] = array(
	mCode => "40",
	title => "4번메뉴",
	url => "#",
	pid => "fourth",
	me_use => true
);

$siteMenu[] = array(
	mCode => "4010",
	title => "서브페이지",
	url => "/gnu/page/sub1.php",
	pid => "sub1",
	me_use => true
);

$siteMenu[] = array(
	mCode => "50",
	title => "회원관리",
	url => "/gnu/bbs/login.php",
	pid => "login",
	me_use => false
);

$nav1st = array();
$nav2nd = array();
$nav3rd = array();
$k1 = 0;
$k2 = 0;
$k3 = 0;
for($i=0; $i<count($siteMenu); $i++):
	if(strlen($siteMenu[$i]['mCode']) == 2 && $siteMenu[$i]['me_use'] == true) { $nav1st[$k1] = $siteMenu[$i]; $k1++; }
	if(strlen($siteMenu[$i]['mCode']) == 4 && $siteMenu[$i]['me_use'] == true) { $nav2nd[$k2] = $siteMenu[$i]; $k2++; }
	if(strlen($siteMenu[$i]['mCode']) == 6 && $siteMenu[$i]['me_use'] == true) { $nav3rd[$k3] = $siteMenu[$i]; $k3++; }
endfor;


//print_r2($_SERVER);
// $_SERVER['HTTP_HOST'];    //현재 페이지의 호스트값 불러오기  www.jtm.com
// $_SERVER['REQUEST_URI']; // 호스트를 제외한 나머지 주소     /gnu/bbs/board.php?bo_table=free
// $_SERVER['PHP_SELF'];  //  나머지주소에서 쿼리 스트링 뺀 주소 /gnu/bbs/board.php
// $_SERVER['QUERY_STRING'];  // 현재 페이지의 쿼리 스트링 값  bo_table=free

$currentMenuArr = array();
$currentParentArr = array();

if($bo_table){


   foreach ($siteMenu as $key => $val) {
       if ($val['pid'] === $bo_table) {

           $parentMcode =  substr($val['mCode'],0,2);
           $currentMenuArr = $val;
       }
   }

   foreach ($siteMenu as $key => $val) {
       if ($val['mCode'] === $parentMcode) {
           $currentParentArr = $val;
       }
   }


} else if($co_id){


   foreach ($siteMenu as $key => $val) {
       if ($val['pid'] === $co_id) {

           $parentMcode =  substr($val['mCode'],0,2);
           $currentMenuArr = $val;
       }
   }

   foreach ($siteMenu as $key => $val) {
       if ($val['mCode'] === $parentMcode) {
           $currentParentArr = $val;
       }
   }
   print_r2($currentParentArr);
   print_r2($currentMenuArr);

} else if($ca_id){

} else {
   foreach ($siteMenu as $key => $val) {
       if ($val['url'] === $_SERVER['PHP_SELF']) {

           $parentMcode =  substr($val['mCode'],0,2);
           $currentMenuArr = $val;
       }
   }

   foreach ($siteMenu as $key => $val) {
       if ($val['mCode'] === $parentMcode) {
           $currentParentArr = $val;
       }
   }
}



?>