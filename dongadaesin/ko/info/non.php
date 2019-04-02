<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>

<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/aos/aos.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/aos/aos.js"></script>
<script>
  AOS.init();
</script>


<div class="non">

	<h4>재활치료실 비급여 항목 안내서</h4>
	<div class="div_scroll">
		<div class="mobile_table_arrow" data-aos="fade-up" data-aos-duration="1000">
			<i class="fas fa-arrows-alt-h"></i>	<span>좌, 우 드래그가능</span>
		</div>
		<table class="table">
			<colgroup>
				<col style="width:10%" />
				<col style="width:10%" />
				<col style="width:auto" />
				<col style="width:10%" />
			</colgroup>
			<tr>
				<th>항목</th>
				<th>시간</th>
				<th>내용</th>
				<th>수가(원)</th>
			</tr>
			<tr>
				<td>정형계 도수</td>
				<td>15분</td>
				<td>통증완화, 근육의 경축이완, 혈액순환 증진 및 비정상적인 자세 교정을 목적으로 치료사의 손으로 직접 적용하여 환자의 움직임을 향상시키기 위해 적용하는 프로그램 </td>
				<td>30,000</td>
			</tr>
			<tr>
				<td>정형계 도수</td>
				<td>30분</td>
				<td>통증완화, 근육의 경축이완, 혈액순환 증진 및 비정상적인 자세 교정을 목적으로 치료사의 손으로 직접 적용하여 환자의 움직임을 향상시키기 위해 적용하는 프로그램 </td>
				<td>50,000</td>
			</tr>
			<tr>
				<td>정형계 도수 & 체외충격파 치료</td>
				<td>60분</td>
				<td>정형계 도수치료는 통증완화, 근육의 경축이완, 혈액순환 증진 및 비정상적인 자세 교정을 목적으로 치료사의 손으로 직접 적용하여 환자의 정상 움직임을 향상시키기 위해 적용하는 프로그램 <br/>체외충격파치료(ESWT)는 대표적인 비수술치료법 중 하나로 음속보다 빠른 압축 파장을 통증부위에 직접 적용하여 주변조직 자극 및 염증반응을 일으켜 통증 감소와 조직 회복을 목적으로 치료 (대표적으로 발목염좌,족저근막염,테니스엘보,석회화건염 등에 적용이 가능)</td>
				<td>100,000</td>
			</tr>
			<tr>
				<td>신경계 도수</td>
				<td>30분</td>
				<td>뇌졸중 등 중추신경계질환 환자들에게 치료사의 손으로 직접 반복적인 움직임을 제공하고, 관절구축과 근위축 방지 및 심폐능력 향상을 위해 적용하는 프로그램</td>
				<td>60,000</td>
			</tr>
			<tr>
				<td>체외 충격파 치료</td>
				<td>30분</td>
				<td>체외충격파치료(ESWT)는 대표적인 비수술치료법 중 하나로 음속보다 빠른 압축 파장을 통증부위에 직접 적용하여 주변조직 자극 및 염증반응을 일으켜 통증 감소와 조직 회복을 목적으로 치료 (대표적으로 발목염좌,족저근막염,테니스엘보,석회화건염 등에 적용이 가능)</td>
				<td>50,000</td>
			</tr>

			<tr>
				<td>언어치료</td>
				<td>30분</td>
				<td>실어증과 마비말장애 환자 대상으로 의사소통 향상을 위한 실어증환자에게는 유창성, 알아듣기, 따라말하기, 명명하기에 대한 치료를 마비말장애 환자는 구강 기능 및 조음 정확도 향상을 통한 의사소통 기능 향상에 대한 치료를 실시</td>
				<td>35,000</td>
			</tr>
			<tr>
				<td>언어평가</td>
				<td>30분</td>
				<td>실어증과 마비말장애환자 대상으로 파라다이스 한국판 웨스턴 실어증 검사(PK-WAB-R), 우리말 조음음운평가(U-TAP), 조음기관 구조 기능 선별검사(SMST)를 통해 실어증환자의 유형 및 정도평가와 마비말장애 환자의 조음정확도 및 구강구조 기능 평가 실시</td>
				<td>50,000</td>
			</tr>
			<tr>
				<td>인지재활치료</td>
				<td>30분</td>
				<td>고령자 및 치매위험군 등의 인지장애를 가지고 계신 환자분을 위한 훈련 및 치료를 위하여 게임형식의 컨텐츠를 제공하여 두뇌의 활성화와 치매예방 및 인지치료에 도움을 주는 프로그램</td>
				<td>30,000</td>
			</tr>
		</table>
	</div>
</div>



<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>