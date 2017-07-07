<div class="container">
	<div class="box_wrap ">

					<link rel="stylesheet" href="/js/jquery.bxslider/jquery.bxslider.ing.css">
					<script src="/js/jquery.bxslider/jquery.bxslider.ing.js"></script>
					<div class="ing">
						<div class="tit"><a href="./?path=ing"><span class="blind">more</span></a></div>
						
						<div class="ing_wrap">
							
							<ul class="bxslider_ing">
							<?
								if (count($cfg['mainBuild']['code'])>0) {
									for($i=0; $i<count($cfg['mainBuild']['code']); $i++){
							?>
								<li>
									<a href="./?b2Type=view&strCode=<?=$cfg['mainBuild']['code'][$i]?>&path=ing">
										<div class="outline">&nbsp;</div>
										<div class="ing_name"><?=$cfg['mainBuild']['name'][$i]?></div>
										<div class="thumb"><img src="<?=$cfg['mainBuild']['thumnail'][$i]?>"/></div>
									</a>
								</li>
							<?		
									}
								}
								if (count($cfg['mainBuild']['code'])==0) {
							?>
								<li>
									<a href="javascript:;">
										<div class="outline">&nbsp;</div>
										<div class="ing_name">등록된 자료 없습니다.</div>
										<div class="thumb"><img src="/img/img_noImageMain.jpg"/></div>
									</a>
								</li>

							<? }?>

							</ul>
							<span id="ing-slider-prev"></span> <!-- 이전 -->
							<span id="ing-slider-next"></span> <!-- 다음 -->
						</div>
					</div>
					<script type="text/javascript">
						$(document).ready(function(){
							var ing_slide = $('.bxslider_ing').bxSlider({
								auto: true,
								mode: 'fade',
								infiniteLoop: true,
								wrapperClass: 'ing-wrapper',
								autoControls: false,
								adaptiveHeight: false,
								pager:false,
								nextSelector: '#ing-slider-next',
								prevSelector: '#ing-slider-prev',
								speed:300
							});

							$('#ing-slider-prev a, #ing-slider-next a').click(function(){
								ing_slide.stopAuto();
								ing_slide.startAuto();
							});

							$(".ing-wrapper").mouseenter(function () {
								ing_slide.stopAuto();
								ing_slide.startAuto();
							});

						});
					</script>



		<link rel="stylesheet" href="/js/jquery.bxslider/jquery.bxslider.main.css">
		<script src="/js/jquery.bxslider/jquery.bxslider.main.js"></script>
		<ul class="bxslider_main">
			<li><img src="/img/main/slide01.png"/></li>
			<li><img src="/img/main/slide02.png"/></li>
			<li><img src="/img/main/slide03.png"/></li>
		</ul>
		<script type="text/javascript">
			$(document).ready(function(){
				var main_slide = $('.bxslider_main').bxSlider({
					auto: true,
					autoHover: true,
					mode: 'fade',
					infiniteLoop: true,
					wrapperClass: 'main-wrapper',
					autoControls: false,
					adaptiveHeight: true,
					pager:true,
					controls:false,
					speed:1000
				});

				$(".bx-pager-link").click(function () {
					main_slide.stopAuto();
					main_slide.startAuto();
				});

				$(".main-wrapper").mouseenter(function () {
					main_slide.stopAuto();
					main_slide.startAuto();
				});

			});
		</script>







	</div>
</div>


<div class="right_wrap">
	<div class="qna">
		<div class="tit">
			<h4>견적문의</h4>
			<span>친절하게 답변 드리겠습니다.</span>
		</div>
		<form id="frmDefault" name="frmDefault" accept-charset="utf-8" method="post" onSubmit="return qnaForm(this);">
			<input type="hidden" name="bType" value="write">
			<input type="hidden" name="boardCate" value="buildRequest">
			<input type="hidden" name="strSiteId" value="<?=$_SERVER["SITE_ID"]?>">
			<table class="qna_input" summary="견적문의">
				<caption>견적문의</caption>
				<colgroup>
					<col width="63">
					<col width="">
				</colgroup>
				<tr>
					<th>성함</th>
					<td>
						<input type="text" class="input" id="strTitle" name="strTitle" value="" maxlength="15" placeholder="성함 및 업체명">
					</td>
				</tr>
				<tr>
					<th>연락처</th>
					<td>
						<input type="text" class="input" id="wr_phone" name="wr_phone" value="" maxlength="15" placeholder="">
					</td>
				</tr>
				<tr>
					<th>상담구분</th>
					<td>
						<select name="wr_type" class="input">
							<option value="건축공사">건축공사</option>
							<option value="리모델링 및 실내 인테리어 공사">리모델링 및 실내 인테리어 공사</option>
						</select>
					</td>
				</tr>
				<tr>
					<th class="none">요청사항</th>
					<td class="none">
						<textarea name="strContent" class="input"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="none">
						<input type="image" src="/img/btn/btn_contact.png" class="btn_contact" alt="Submit Form" />
					</td>
				</tr>
			</table>
		</form>
		<script type="text/javascript">
			function qnaForm(frm){
				var frmURL	= '/proc/_bbsProcAjax.php';

				if($('#strTitle').attr('value').length < 3){
					alert('성함을 최소 3자이상 입력해 주셔야 합니다.   ');
					frm.strTitle.focus();
					return false;
				}

				if($('#wr_phone').attr('value').length == 0){
					alert('연락처를 입력해 주셔야 합니다.   ');
					frm.wr_phone.focus();
					return false;
				}

				var f_opt = {
					url: frmURL,
					type: 'post',
					dataType: 'text',
					success: function(d,e){
						if (e=="success"){
							var res = d.split('|');
							if(res[0] == "ok"){
								alert(res[1]);
								if($('#strTitle').attr('value')) { $('#strTitle').val('') }
								if($('#wr_phone').attr('value')) { $('#wr_phone').val('') }
							}else{
								alert(res[1]);
							}
						}else{
							alert('서버통신에러! 다시 시도해 주십시오.   ');
						}
					},
					error:function(){
						alert('서버통신에러! 다시 시도해 주십시오.   ');
					}	
				}   
				$("#frmDefault").ajaxSubmit(f_opt);
				return false;
			}

		</script>
	</div>

	<div class="com">
		<a href="./?path=company" class="intro"><span class="blind">회사소개</span></a>
	</div>

	<div class="end">
		<div class="tit">
			<h4>완료된 현장</h4>
			<span>기술력에 정성을 더하였습니다.</span>
		</div>
		<div class="smart_wrap">
			
			<?
				if (count($cfg['mainComplete']['code'])>0) {
					for($i=0; $i<count($cfg['mainComplete']['code']); $i++){
			?>
				<div class="smart_system">
					<div class="smart_system_titimg">
						
						<a href="./?b2Type=view&strCode=<?=$cfg['mainComplete']['code'][$i]?>&path=complete">
							<div class="outline">&nbsp;</div>
							<img src="<?=$cfg['mainComplete']['thumnail'][$i]?>" alt="스마트일보 이미지">
						</a>
					</div>
					<div class="smart_system_tittxt">
						<div class="s_tit">
							<a href="./?b2Type=view&strCode=<?=$cfg['mainComplete']['code'][$i]?>&path=complete"><?=$cfg['mainComplete']['name'][$i]?></a>
						</div>
						<div class="con"><span><?=$cfg['mainComplete']['period'][$i]?></span></div>
					</div>

				</div>
			<? 
					}
				}
				if (count($cfg['mainComplete']['code'])==0) {
			?>
				<div class="smart_system">
					<div class="smart_system_titimg">
						<div class="outline">&nbsp;</div>
						<a href="javascript:;">
							<img src="/img/img_noImageMain.jpg" alt="스마트일보 이미지">
						</a>
					</div>
					<div class="smart_system_tittxt">
						<div class="s_tit">
							<a href="javascript:;">등록된 자료가 없습니다.</a>
						</div>
						<div class="con"><span>-</span></div>
					</div>

				</div>

			<? }?>


		</div><!-- smart_wrap -->
	</div><!-- ing -->

</div><!-- right_wrap -->


