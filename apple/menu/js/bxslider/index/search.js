(function($) {
	var searchSlider = $('#searchSlider').bxSlider({
		auto: true,
		mode:'vertical',
		infiniteLoop: true,
		wrapperClass: 'search-wrapper',
		autoControls: false,
		pager:false,
		controls: false
	});

	$('.searchActive').on('mouseenter focusin', function(){
		$('#keywordList').show();
	});
	$('#keywordList').on('mouseleave', function(){
		$('#keywordList').hide();
	});


}(jQuery3_3_1));