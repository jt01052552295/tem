$(function() {
	//상단메뉴 이벤트
	$(".menu").mouseover(function() {
		$("#headerDetail").stop().animate({"top":"100px"},{ duration:400 , easing:"easeOutQuad" });
	});
	
	$("#content").mouseover(function() {
		$("#headerDetail").stop().animate({"top":"-100px"},{ duration:400 , easing:"easeOutQuad" });
	});

	$("#sub_content").mouseover(function() {
		$("#headerDetail").stop().animate({"top":"-100px"},{ duration:400 , easing:"easeOutQuad" });
	});

});


