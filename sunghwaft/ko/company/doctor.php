<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>


<div class="doctor">


		<div class="row_gr doc">
			<ul class="grid2">
				<li class="profile">
					<div class="photo"><img src="images/doc01.jpg" alt=""></div>
					<div class="preview">
						<h5>김기림<em>원장</em></h5>
						<p>진료과목 : <strong>재활의학과</strong></p>
						<a href="#" class="tran-animate callBtn" data-id="doc01"><span class="ico"></span><span class="">프로필 보기</span></a>
					</div>
				</li>
				<li class="profile">
					<div class="photo"><img src="images/doc02.jpg" alt=""></div>
					<div class="preview">
						<h5>유경현<em>진료부장</em></h5>
						<p>진료과목 : <strong>재활의학과</strong></p>
						<a href="#" class="tran-animate callBtn" data-id="doc02"><span class="ico"></span><span class="">프로필 보기</span></a>
					</div>
				</li>
				<li class="profile">
					<div class="photo"><img src="images/doc03.jpg" alt=""></div>
					<div class="preview">
						<h5>배수영<em>신경과과장</em></h5>
						<p>진료과목 : <strong>신경과</strong></p>
						<a href="#" class="tran-animate callBtn" data-id="doc03"><span class="ico"></span><span class="">프로필 보기</span></a>
					</div>
				</li>
				<li class="profile">
					<div class="photo"><img src="images/doc04.jpg" alt=""></div>
					<div class="preview">
						<h5>서하라<em>한방재활의학과장</em></h5>
						<p>진료과목 : <strong>한방재활의학과</strong></p>
						<a href="#" class="tran-animate callBtn" data-id="doc04"><span class="ico"></span><span class="">프로필 보기</span></a>
					</div>
				</li>
			</ul>
		</div>

	
</div>


<div class="productBg"></div>
<div class="proInner2">
	<div class="titleArea">
		<h5>의료진 프로필</h5>
		<div class="proClose"><a href="#" class="closeLayerBtn"><img src="images/profile_close.png" alt=""></a></div>
	</div>
	
	<div id="product_con"></div>
</div>

<script>
$(document).ready(function(){
	var ping = "";
	$("a.callBtn").click(function(e){
		e.preventDefault();
		
		$("html").addClass('layer-open'); 

		var it_id = $(this).data('id');
		if(ping == ""){
			$.fn.openPop(it_id);
			
		} else {
			alert('처리중 입니다.');
			return false;
		}     
	});

	$("a.closeLayerBtn, .productBg").click(function(e){
		e.preventDefault();
		$("html").removeClass("layer-open"); 
		//$('.parallax-init-pc').removeClass('add-stage');
		$('#product_con').html('');
		$(".proInner2").fadeOut();
		$(".productBg").fadeOut();
	}); 

	$.fn.openPop = function(it_id){

		console.log(it_id)

		var frmURL	= './'+it_id+'.html';

		$("html").addClass('layer-open'); 
		
		$.ajax({
			url: frmURL,
			type: 'GET',
			contentType: 'application/x-www-form-urlencoded; charset=UTF-8', 
			dataType: 'html',
			beforeSend: function(res) {
				//console.log('before');
			},
			success: function (result) {
				if (result){
					$(".productBg").fadeIn();
					$(".proInner2").fadeIn();
					$('#product_con').html(result);

				}
			},
			error: function (res){

			}
		});     
	};





});
</script>

<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>