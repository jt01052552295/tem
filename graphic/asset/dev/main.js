"use strict"


var Main = function(mode){

	this.dev = (mode ? mode : "product");

	this.init = function(){	
		$(".topMenu").on("click","a",function(e){
			e.preventDefault();

			console.log(e)
			// wc2.closeOnclickNavbar(event);
			// if($(event.target).attr("data-wc-menu")){
			// 	wc2.btnShowMenuDetail(event.target);
			// }
			//return;
		});

		return 'rs';
	};


};

