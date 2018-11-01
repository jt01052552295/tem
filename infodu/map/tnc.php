<?php
header('Content-Type: text/html; charset=UTF-8');

$client_id = "ziVBsXOUwEi_xSpoNERf";
$client_secret = "Ltkt1J6KwU";
$encText = urlencode("서울특별시 영등포구 의사당대로 1길 25 하남빌딩 610호");
$url = "https://openapi.naver.com/v1/map/geocode?query=".$encText; // json


$is_post = false;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, $is_post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = array();
$headers[] = "X-Naver-Client-Id: ".$client_id;
$headers[] = "X-Naver-Client-Secret: ".$client_secret;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec ($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close ($ch);

//echo "status_code:".$status_code."<br>";
//if($status_code == 200) {
	//echo $response;
//} else {
	//echo "Error 내용:".$response;
//}

?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Trust & Challenge TNC GROUP</title>
<style>
@import url(https://fonts.googleapis.com/earlyaccess/notosanskr.css);
html, body {padding:0px; margin:0px;     overflow: hidden;}

.iw_inner {padding:5px;width:200px;text-align:center;}
.iw_inner #init h3 {margin:0;color:#fff;font-size:25px;line-height:37px;vertical-align:middle;font-family:'Noto Sans KR', sans-serif;}
.iw_inner h3 img {vertical-align:top;margin-top:2px;}
.iw_inner #init2 h3 {margin:0;color:#fff;font-size:25px;font-weight:normal;vertical-align:middle;font-family:'Noto Sans KR', sans-serif;}
#init2 {display:none}

#map.active {-webkit-filter: blur(2px); /* Safari 6.0 - 9.0 */filter: blur(2px)}

</style>
<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=ziVBsXOUwEi_xSpoNERf&submodules=geocoder"></script>
<script src="./js/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
</head>
<body>

<div style="width:100%;height:622px;" id="map"></div>



<script type="text/javascript">
	var HOME_PATH = window.HOME_PATH || '.';
	var mapX = 37.5200651;
	var mapY = 126.9298484;
	var mapTitle = "TNC 그룹";
	var map = new naver.maps.Map('map', {
		center: new naver.maps.LatLng(mapX, mapY), 
		zoom:9, 
		minZoom: 1, 
		zoomControl: false, 
		zoomControlOptions: { 
			position: naver.maps.Position.TOP_RIGHT
		}
	});

	var marker = new naver.maps.Marker({
		position: new naver.maps.LatLng(mapX, mapY-0.02),
		map: map,
		//icon: {
			//url: HOME_PATH +'/img/map_marker.png',
			//size: new naver.maps.Size(64, 76),
			//origin: new naver.maps.Point(0, 0),
			//anchor: new naver.maps.Point(32, 70)
		//}
	});



	var contentString = [
		'<div class="iw_inner" id="iw" >',
		'   <div id="init"><h3> <img src="./img/tnc_marker.png"  alt="" class="thumb" /> '+mapTitle+'</h3></div>',
		'   <div id="init2"><h3>오시는 길 안내</h3></div>',
		'</div>'
	].join('');

	var infowindow = new naver.maps.InfoWindow({
		content: contentString,
		maxWidth: 200,
		backgroundColor: "#02314f",
		borderColor: "#02314f",
		borderWidth: 1,
		anchorSize: new naver.maps.Size(10, 10),
		anchorSkew: true,
		anchorColor: "#02314f",
	});
	infowindow.open(map, marker);

	$(document).ready(function(){
		$('#iw').mouseover(function() {
			$('#init').hide();
			$('#init2').show();
			//$('#map').addClass('active');
		})
		.mouseout(function() {
			$('#init').show();
			$('#init2').hide();
			//$('#map').removeClass('active');
		});
	});


</script>


</body>
</html>
