(function($) {	
	var jQuery = $;


	$.fn.topBnList = function(){
		
		var total = $(this).find('li').length;
		var current = 1;
		var el = this;
		var slideWidth = 0;
		var len = $(el).children().length;

		var init = function(){
			$(el).wrap('<div class="viewWrapper"><div class="viewInner"></div></div>');
			var viewPort = $(el).parent();

			$(el).css({
				width:(total * 1000 + 215) + '%',
				position: 'relative',
				left: '-180px'
			});
			viewPort.css({
				width: '100%',
				overflow: 'hidden',
				position: 'relative'
			});

			viewPort.parent().css({
				maxWidth: '100%'
			});

			$(el).children().css({
				'float': 'left',
				listStyle: 'none',
				position: 'relative'
			});


			//var sliceAppend  = $(el).children().slice(0, 1).clone(true).addClass('elm-clone');
			//var slicePrepend = $(el).children().slice(-1).clone(true).addClass('elm-clone');
			//sliceAppend.attr('aria-hidden', true);
			//slicePrepend.attr('aria-hidden', true);
			//$(el).append(sliceAppend).prepend(slicePrepend);

			var first = $(el).children().filter(':first');
			var last = $(el).children().filter(':last');
			first.before(last.clone(true)); 
			last.after(first.clone(true)); 


			var position, lastChild, lastShowingIndex;

			lastChild = $(el).children().last();
			position = lastChild.position();

			

			//$(el).css('transition-duration', 500 / 1000 + 's');
			//$(el).css('transform', 'translate3d('+ -lastChild.outerWidth() +'px, 0px, 0px)');

		};

		init();

		$('.adBtnWrap button').on('click', function() {
			var cycle = false, delta = (this.id === "prev")? -1 : 1;

			$(el).animate({ left: "+=" + (-180 * delta) }, function() {

				current += delta;

				cycle = (current === 0 || current > len);

				if (cycle) {
					current = (current === 0)? len : 1; 
					$(el).css({left:  -180 * current });
				}
			});   
		});


		$.fn.currentShowPage = function(current_page){
			var length = $(el).children().length -1;
			var firstChild = $(el).children().first();
			var lastChild = $(el).children().last();
			var position = $(el).children().eq(current_page).position();

			var pagerIndex = current_page;
			var propValue = -( pagerIndex*lastChild.outerWidth());


			console.info(pagerIndex, propValue)


			

			if(pagerIndex == 0){
				
				//var last_position = $(el).children().eq(length-1).position();


				//$(el).css('transition-duration', 500 / 1000 + 's')
					//.css('transform', 'translate3d('+  -position.left +'px, 0px, 0px)');
				

				//setTimeout(function(){
					//$(el).css('transition-duration', '0s')
					//.css('transform', 'translate3d('+  -last_position.left +'px, 0px, 0px)');
				//}, 300);


				
			} else if(pagerIndex == length){
				//var first_position = $(el).children().eq(1).position();
				
				//$(el).css('transition-duration', 500 / 1000 + 's')
					//.css('transform', 'translate3d('+  -position.left +'px, 0px, 0px)');

				//setTimeout(function(){
					//$(el).css('transition-duration', '0s')
						//.css('transform', 'translate3d('+  -first_position.left +'px, 0px, 0px)');
				//}, 300);
				


				
					
				
			} else {
				//$(el).css('transition-duration', 500 / 1000 + 's').css('transform', 'translate3d('+  -position.left +'px, 0px, 0px)');
			}
			

		};


		

	};
	
	

}(jQuery3_3_1));

jQuery3_3_1(document).ready(function($){
	var jQuery = $;

	//if (jQuery) {
		//console.log(jQuery3_3_1.fn.jquery);
		//console.log($.fn.jquery);
		//console.log(jQuery.fn.jquery);
	//}

	$('#adShowList').topBnList();
});