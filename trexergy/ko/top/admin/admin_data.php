<?
////////////////// 운영자 확인
$admin_name="운영자";
$admin_id="1111"; //ID를 입력하세요
$admin_pass="1111"; //비밀번호를 입력해주세요
$admin_cry_pass = crypt ($admin_pass, 15);

///////////// 게시판 정보//////////////////

$admin_company = $site['title']; //// 회사명을 입력해주세요
$admin_email = $site['email']; /// 이메일을 입력해주세요
$admin_home = KI_URL; /// 홈페이지주소를 입력해주세요
?>