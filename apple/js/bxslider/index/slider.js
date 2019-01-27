(function($) {
	var mainSlider = $('.main1').bxSlider({
		auto: true,
		mode:'fade',
		infiniteLoop: true,
		wrapperClass: 'main1-wrapper',
		autoControls: false,
		adaptiveHeight: true,
		pager:true,
		controls: true,
		nextSelector: '#main-slider-next',
		prevSelector: '#main-slider-prev',
	});
	$('#main-slider-prev a, #main-slider-next a').click(function(){
		mainSlider.stopAuto();
		mainSlider.startAuto();
	});
}(jQuery3_3_1));