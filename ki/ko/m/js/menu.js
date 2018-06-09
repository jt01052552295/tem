$(function () {
	
	$gnb.init();

})

var $gnb = {

	timer: null,

	timer2: null,

	init: function () {
		
		$(".navi li").each(function (i) {
			$(this).mouseenter(function () {
				$gnb.selectDepth1(i);
			}).mouseleave(function () {

				$gnb.deselectDepth1();
			});
		});

		$(".text_box>li").each(function (i) {
			$(this).mouseenter(function () {
				$gnb.selectDepth1(i);
				
			}).mouseleave(function () {
				$gnb.deselectDepth1();
				
			});
		});

		$(".navi").mouseenter(function () {
			$gnb.expand();
		}).mouseleave(function () {
			$gnb.shrink();
		});

		$(".top_layer").mouseenter(function () {
			if ($gnb.timer)
				clearTimeout($gnb.timer);
		}).mouseleave(function () {
			$gnb.shrink();
		});

	},


	deselectDepth1: function () {
		
		if ($gnb.timer2)
			clearTimeout($gnb.timer2);

		$gnb.timer2 = setTimeout(function () {
			$($(".navi li")).removeClass("on");
			$($(".text_box .sub_box")).removeClass("on");

		}, 150);
	},

	selectDepth1: function (i) {
		if ($gnb.timer2)
			clearTimeout($gnb.timer2);

		$($(".navi li")).removeClass("on");
		$($(".navi li")[i]).addClass("on");
		$($(".text_box .sub_box")).removeClass("on");
		$($(".text_box .sub_box")[i]).addClass("on");

	} , 

	shrink: function (force) {
		var self = $(".top_layer");
		if ($gnb.timer)
			clearTimeout($gnb.timer);

		var top = $(".top_bg").offset().top;
		top = top - 300-$(window).scrollTop();
		
		// header 가 스크롤되는 형태는 메뉴 높이만큼 top position 을 민다.
		if ($(".top_bg").hasClass("nofixed") || force) {
			top = -$(".top_layer").height();
		}

		$gnb.timer = setTimeout(function () {
			self.stop().animate({ "top": top + "px" }, 300);
		}, 100);
	},

	expand: function () {
		if ($gnb.timer)
			clearTimeout($gnb.timer);

		var top = $(".top_bg").offset().top;
		top = top + $(".nav_box").height() - $(window).scrollTop();
		
		$(".top_layer").stop().animate({ "top": top + "px" }, 300);
	}

}