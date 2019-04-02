<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>

<div class="location">

	<div class="mapBox">
		<iframe src="http://infodu.co.kr/map/dongadaesin.php"></iframe>
		<div class="addr">
			<p>부산광역시 서구 대신공원로 32</p>
			<p>T. 051-960-0100</p>
		</div>
	</div>


	<div class="info">
		<div class="map"><img src="images/map.jpg" alt="" /></div>


		<div class="card first">
			<div class="ico"><img src="images/ico_sub.png" alt="" /></div>
			<div class="conn">
				<h5>지하철<em>이용시</em></h5>
				<p>서대신역이나 동대신역에서 내리셔서 병원 순환버스<br/>(10 ~ 15분 간격으로 운행)를 이용하시거나<br/>택시를 이용하시면 5분이내에 도착할 수 있습니다.</p>
			</div>
		</div>

		<div class="card second">
			<div class="ico"><img src="images/ico_bus.png" alt="" /></div>
			<div class="conn">
				<h5>일반버스<em>이용시</em></h5>
				<p>8, 15, 67, 161, 167, 190번 버스 이용</p>
			</div>
		</div>

		<div class="card">
			<div class="ico"><img src="images/ico_bus2.png" alt="" /></div>
			<div class="conn">
				<h5>순환버스<em>이용시</em></h5>
				<div class="desc">
					<p>동아대학교(병원)  →   동대신역  →  서대시장  →  서대신역  →  부경고등학교  →  병원</p>
				</div>
				<div class="row_gr">
					<ul class="grid3">
						<li class="method">
							<div class="con">
								<div class="left"><span>첫차 / 막차</span></div>
								<div class="right career">
									<ul>
										<li>평일 첫차 오전 7시</li>
										<li>평일 막차 오후 21시 45분 (동아대학교병원 출발)</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="method">
							<div class="con">
								<div class="left"><span>운행시간</span></div>
								<div class="right career">
									<ul>
										<li>평일 07시 ~ 12시까지 (10분간격 운행)</li>
										<li>평일 12시 ~ 22시까지 (15분간격 운행)</li>
										<li>주말 07시 ~ 22시까지 (15분간격 운행)</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="method">
							<div class="con">
								<div class="left"><span>순환버스 정류장</span></div>
								<div class="right career">
									<ul>
										<li>동대신동 지하철 2번 출구</li>
										<li>서대신동 시장</li>
										<li>서대신동 지하철 4번 출구</li>
										<li>부경고등학교 정문 앞 버스정류소 옆</li>										
									</ul>
								</div>
							</div>
						</li>
						
					</ul>
				</div>
				
			</div>
		</div>

		<div class="card">
			<div class="ico"><img src="images/ico_taxi.png" alt="" /></div>
			<div class="conn">
				<h5>택시<em>이용시</em></h5>
				<div class="row_gr">
					<ul class="grid2">
						<li class="method">
							<div class="con">
								<div class="left"><span>목적지</span></div>
								<div class="right career">
									<ul>
										<li>동아대학교병원 / 동아대학교 대신동캠퍼스</li>
										<li>서대신동시장</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="method">
							<div class="con">
								<div class="left"><span>승강장</span></div>
								<div class="right career">
									<ul>
										<li>동대신동역 : 지하철 1번출구</li>
										<li>서대신동역 : 지하철 4번출구</li>
									</ul>
								</div>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="ico"><img src="images/ico_area.png" alt="" /></div>
			<div class="conn">
				<h5>타지역</h5>
				<div class="row_gr">
					<ul class="grid2">
						<li class="method">
							<div class="con">
								<div class="left"><span>김해공항 출발시</span></div>
								<div class="right career">
									<ul>
										<li>경전철(사상역방면)  →  시내버스(8번, 15번, 161번)환승  →  하차(구덕운동장) <span class="red">[약 60분 소요]</span></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="method">
							<div class="con">
								<div class="left"><span>사상시외버스터미널 출발시</span></div>
								<div class="right career">
									<ul>
										<li>시내버스(8번, 15번, 161번)탑승  →  하차(구덕운동장)  <span class="red">[약 40분 소요]</span></li>
									</ul>
								</div>
							</div>
						</li>

						<li class="method">
							<div class="con">
								<div class="left"><span>부산역 출발시</span></div>
								<div class="right career">
									<ul>
										<li>시내버스(167번)이용  →  하차(동아대학교병원 or 경남고등학교) <span class="red">[약 20분 소요]</span></li>
										<li>시내버스(67번)이용 - 하차(동아대학교병원입구) <span class="red">[약 25분 소요]</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="method">
							<div class="con">
								<div class="left"><span>노포동고속버스터미널 출발시</span></div>
								<div class="right career">
									<ul>
										<li>지하철(신평역방면)  →  하차(동대신동역 or 서대신동역)  →  셔틀버스이용 <span class="red">[약 40분 소요]</span></li>
									</ul>
								</div>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
		</div>




	</div>


</div>


<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>