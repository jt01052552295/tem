<?
//설정
$_w = '1920'; // width
$_h = '1143'; // height

$_i[1] = './img/09.policy/9_1.jpg'; 
$_t[1] = '이용약관'; 

$_i[2] = './img/09.policy/9_2.jpg'; 
$_t[2] = '개인정보보호정책'; 

$_i[3] = './img/09.policy/9_3.jpg'; 
$_t[3] = '이메일무단수집거부'; 



//$_i[6] = './img/main.jpg'; 
//$_t[6] = '서브'; 
?>

<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<style>
.btn_view {color:#fff;}
body {margin:0; padding:0; }
a { text-decoration:none; }
.btn_view {color:#fff;}
ul {width:1200px;  height:40px; margin:0 auto; list-style:none;  }
ul li { border:1px solid #333; float:left; padding:15px; font-size:15px; margin-bottom:20px;  }
ul li a {color:#333; text-decoration:none; }
</style>
<title>신화종합건설(주)</title>
<script type="text/javascript" src="/admin/common/js/jquery-1.8.3.js"></script>
</head>
<body>
<div>
	<ul >
		<li style="border:none; ">대메뉴를 </br> 선택해 주세요 ▶</li>
		<li><a href="/sian/index.php">메인시안</a></li>
		<li><a href="../sian/company.php">1.회사소개</a></li>
		<li><a href="../sian/client.php">2.건축주</a></li>
		<li><a href="../sian/request.php">3.공사의뢰</a></li>
		<li><a href="../sian/cc.php">4.고객지원</a></li>
		<li><a href="../sian/construction.php">5.공사관리</a></li>
		<li><a href="../sian/business.php">6.사업소개</a></li>
		<li><a href="../sian/mypage.php">7.마이페이지</a></li>
		<li><a href="../sian/join.php">8.회원가입</a></li>
		<li><a href="../sian/policy.php">9.추가페이지</a></li>
	</ul>
<div>
<div style="width:<?=$_w?>px; height:<?=$_h?>px; border:1px solid #dfdfdf; float:left;">
<? for($i=1;$i<=count($_i);$i++) {?>
<img src="<?=$_i[$i]?>" <?=($i>1)? "style='display:none'":"" ?> class='img' id="img<?=$i?>" />
<? } ?>
</div>
<div style="position:absolute; top:100px; left:1450px; width:100px; margin-left:30px;  height:auto; line-height:20px; padding:10px; font-size:14px; text-align:center; background:#333; color:#fff; border-radius:10%;">
- 시안보기 -<br/>
<? for($i=1;$i<=count($_i);$i++) {?>
<a href="#" class='btn_view' num='<?=$i?>' ><?=$_t[$i]?> -></a><br/>
<? } ?>
</div>
</body>
</html>
<script>
$(function() {
	$(".btn_view").click(function() {
		num = $(this).attr('num');
		//alert(num);
		$(".img").css({"display":"none"});
		$("#img"+num).css({"display":"block"});
	});
});
</script>
