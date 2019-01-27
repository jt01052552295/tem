(function($) {	
	var jQuery = $;


	$.fn.showBadge = function(){
		var globalnav = $('#gNav');
		var badgview = $('.ac-gn-badgview');
		
		$(this).on("click", function(e){
			e.preventDefault();
			window.scrollTo(0, 0);
			globalnav.toggleClass( "with-bagview" );
		});
		
		
		$('html').click(function (event) {
			if (badgview.is(":visible") && !$(event.target).is(".ac-gn-badgview, .ac-gn-badgview *, .ac-gn-link-bag")) {
				if (badgview.is(":visible")) {
					globalnav.removeClass( "with-bagview" );
				}   
			}
		});
		

	};

	$.fn.showSearch = function(){ // searchshow, searchopen, searchhide
		var globalnav = $('#gNav');
		var searchView = $('.ac-gn-searchview');

		$(this).on("click", function(e){
			e.preventDefault();
			window.scrollTo(0, 0);
			//globalnav.addClass( "searchopen" );

			globalnav.addClass("searchshow").delay(600).queue(function(){
				$(this).removeClass("searchshow").dequeue().addClass("searchopen");
			});

		});

		$('html').click(function (event) {
			if (searchView.is(":visible") && !$(event.target).is(".ac-gn-searchview, .ac-gn-searchview *, a#ac-gn-link-search, a#ac-gn-link-search-small *")) {
				
				console.log(event.target)
				
				if (searchView.is(":visible") ) {
					globalnav.removeClass( "searchopen" );
					globalnav.addClass("searchhide").delay(600).queue(function(){
						$(this).removeClass("searchhide").dequeue();
					});
				}
			}
		});

		$('.ac-gn-searchview-close').click(function (event) {
			if (searchView.is(":visible") ) {
				globalnav.removeClass( "searchopen" );
				globalnav.addClass("searchhide").delay(600).queue(function(){
					$(this).removeClass("searchhide").dequeue();
				});
			}
		});
	};

	$.fn.mobileShowSearch = function(){
		var globalnav = $('#gNav');

		$(this).on("click", function(e){
			e.preventDefault();
			globalnav.addClass("searchshow").delay(600).queue(function(){
				$(this).removeClass("searchshow").dequeue().addClass("searchopen");
			});

		});

	};


}(jQuery3_3_1));



jQuery3_3_1(document).ready(function($){
	var jQuery = $;

	if (jQuery) {
		//console.log(jQuery3_3_1.fn.jquery);
		//console.log($.fn.jquery);
		//console.log(jQuery.fn.jquery);
	}


	$('a.ac-gn-link-bag').showBadge();
	$('a#ac-gn-link-search').showSearch();
	$('a#ac-gn-link-search-small').mobileShowSearch();



	var myLazyLoad = new LazyLoad({
		elements_selector: ".lazy"
	});

	//console.log('%c 디자인스킨 app 작업 중... ', 'color: #bada55; font-size:3.0em;');
});