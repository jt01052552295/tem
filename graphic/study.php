<!DOCTYPE html>
<!--[if IE 7]> <html lang="ko" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="ko" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="ko" class="ie9"> <![endif]-->
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>html5, canvas 테스트</title>
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="google" content="notranslate">
<meta name="format-detection" content="telephone=no">
<link href="./asset/css/fonts.css?ver=1" rel="stylesheet">
<link href="./asset/css/default.css?ver=1" rel="stylesheet">
<link href="./asset/css/style.css?ver=1" rel="stylesheet">
<link href="./asset/fontawesome/css/all.css?ver=1" rel="stylesheet">
<script src="./asset/js/jquery-3.3.1.min.js?ver=1" crossorigin="anonymous"></script>
<script src="./asset/js//jquery-2.x-git.min.js" crossorigin="anonymous"></script>
<!--[if lt IE 9]><script src="./asset/js/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="./asset/js/respond.min.js"></script><![endif]-->
<!--[if lt IE 9]><script src="./asset/js/IE9.js"></script><![endif]-->
</head>
<body>


<style>
#message{background:#ccc;position:fixed;bottom:0;width:100%;padding:10px;height:500px;overflow: auto;}
</style>

<!-- 턴게임 뷰 -->
<form id="start-screen">
  <input id="name-input" placeholder="영웅 이름을 입력하세요!" value="aaaa" />
  <button id="start">시작</button>
</form>


<!-- 게임화면 창 -->
<div id="screen">
  <!-- 주인공 스탯 -->
  <div id="hero-stat">
    <span id="hero-name"></span>
    <span id="hero-level"></span>
    <span id="hero-hp"></span>
    <span id="hero-xp"></span>
    <span id="hero-att"></span>
  </div>

  <!-- 게임 메뉴 -->
  <form id="game-menu" style="display: none;">
    <div id="menu-1">1.모험</div>
    <div id="menu-2">2.휴식</div>
    <div id="menu-3">3.종료</div>
    <input id="menu-input" placeholder="게임메뉴선택" />
    <button id="menu-button">게임메뉴입력</button>
  </form>

  <!-- 배틀 메뉴 -->
  <form id="battle-menu" style="display: none;">
    <div id="battle-1">1.공격</div>
    <div id="battle-2">2.회복</div>
    <div id="battle-3">3.도망</div>
    <input id="battle-input" placeholder="배틀메뉴선택" />
    <button id="battle-button">배틀메뉴입력</button>
  </form>

  <!-- 메시지창 -->
  <div id="message"></div>

  <!-- 몬스터 스탯 -->
  <div id="monster-stat">
    <span id="monster-name"></span>
    <span id="monster-hp"></span>
    <span id="monster-att"></span>  
  </div>

</div>


<!-- script 모음 -->
 
<?php 
$ver_time = date("Y-m-dH:i:s");
$ver_time = preg_replace("/[^0-9]*/s", "", $ver_time);
?>
<script src="./asset/dev/turnGame.js?t=<?php echo $ver_time?>"></script>

<script>

// var hero = TurnGame.getInstance('445544');
// console.dir(hero)
// console.log(hero.stat)
	

</script>




</body>
</html>