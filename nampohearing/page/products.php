<?php
define('_CONTENTS_', true);
define('_WIDE_CONTENTS_', true);
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/content.php');
    return;
}


//  서브페이지 CSS 경로 : /page/asset/contents.css

// 페이지 제목 설정 (안해도됨)
$g5['title'] = '';
include_once('./_head.php');
?>


<div class="products">
	<div class="subpage_ad_text">
		140년이 넘는 시간동안 축적된 경험과 전문성을 토대로 세계 보청기 시장을 <br>선도하며 뛰어난 음질은 물론 편의성으로 <br>
		프리미엄 그 이상의 가치를 더하는 <span class="font_red">시그니아 보청기</span>입니다.
	</div>


	<ul class="product_tabList new_5w">
		<li data-tab="tab-1" class="selected">슬림 오픈형 보청기</li>
		<li data-tab="tab-2" class="">충전식 보청기</li>
		<li data-tab="tab-3" class="">귓속형 보청기</li>
		<li data-tab="tab-4" class="">오픈형 보청기</li>
		<li data-tab="tab-5" class="">귀걸이형 보청기</li>
	</ul>
	<?php 
		include_once('./products.tab01.php');
		include_once('./products.tab02.php');
		include_once('./products.tab03.php');
		include_once('./products.tab04.php');
		include_once('./products.tab05.php');
	?>
</div>

<script>

	function productVisible(selector, content, items){
		var $selector = $(selector);
	    $selector.on("click", function() {
	    var objThis = $(this);
	    var listId = this.id;
	    var selected_item = $('#list_'+listId);   
	    var visible_item = $(content).find('.menu:visible');
	    var selectedList = $(items);
	    var visible_box =  selectedList.parents("div.selected").find('.product_list_detail');
	    var visible_boxHeight = selected_item.height();

	// 같은상품을 반복해서 누를때
	    if(!objThis.hasClass("on")){
	                    selectedList.removeClass("on");
	                    objThis.addClass("on");
	                    visible_box.stop().slideDown();   
	                    visible_box.height(visible_boxHeight);     
	            }else{
	                objThis.removeClass("on");
	                visible_box.stop().slideUp();
	             }
	  
	// 한개의 상품이 선택되어진 상태에서 다른 상품을 눌렀을때
	    if( visible_item.length > 0 && selected_item.attr('id') !== visible_item.attr('id') ){
	          visible_item.slideUp(function(){ selected_item.slideToggle() });       
	         
	          // 상품 이미지 높이값 구해서 적용
	        visible_box.height(visible_boxHeight);
	        
	    }else{
	        selected_item.stop().slideToggle(); 
	    }
	    return false;
	    });
	}
	productVisible('.product_tabContent .product_list .product_list_linkTo > div', '.product_tabContent', '.product_tabContent.selected div');


	function tabList(selector, content){
	    var $selector = $(selector);
	    var $content = $(content);
	    $selector.on("click focusin", function() {
	        var objThis = $(this);
	        var tab_id = objThis.attr('data-tab');

	        $selector.removeClass('selected');
	        $content.removeClass('selected');
	    
	        objThis.addClass('selected');
	        $("#" + tab_id).addClass('selected');
	    });
	}


	tabList('.product_tabList > li', '.product_tabContent');
</script>


<?php
include_once('./_tail.php');
?>