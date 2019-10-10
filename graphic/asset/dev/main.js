"use strict"

/*

 언제 다하니...

 */

var Main = (function() {

	var instance;
	var initiate = function(mode) {
		var defaults = {
	      mode: mode,
	      topMenuActivate: false,
	      foreGroundColor: 'rgb(255,255,255)',
	      backGroundColor: 'rgb(0,0,0)',
	      foreSelector: '#foreG',
	      backSelector: '#backG',
	      modalActivate: false,
	      
	      
	    };

		return {
			opt:defaults,
			init:function(){
				this.showMode();
				this.topMenu();
				this.sideMenu();
				this.setGroundColor(defaults.foreGroundColor, defaults.backGroundColor);
				this.groundToggle();
				this.groundColor();
				return this;
			},
			showMode: function() {
		        console.log('current mode is ' + defaults.mode)
		        return this;
		    },
		    topMenu: function(){
		    	var self = this;
		    	var dropDownBtn = 'a.dropbtn';
		    	var dropDownMenu = 'ul.dropdown-content';

		    	$(dropDownBtn).on('click', function(e){
		    		e.preventDefault();
		    		defaults.topMenuActivate = !defaults.topMenuActivate;
		    		if(defaults.topMenuActivate){
		    			$(this).addClass('on')
		    			$(this).siblings(dropDownMenu).addClass('on')
		    		}
		    	})
		    	$(dropDownBtn).on('mouseenter', function(e){
		    		$(dropDownBtn).removeClass('on')
		    		$(dropDownMenu).removeClass('on')
		    		if(defaults.topMenuActivate){
		    			$(this).addClass('on')
		    			$(this).siblings(dropDownMenu).addClass('on')
		    		}	
		    	})
		    	$('html').click(function (event) {
					if ($(dropDownMenu).is(":visible") && !$(event.target).is("#header *")) {
						if ($(dropDownMenu).is(":visible")) {
							defaults.topMenuActivate = !defaults.topMenuActivate;
							$(dropDownBtn).removeClass('on')
							$(dropDownMenu).removeClass( "on" );
						}   
					}
				});

				$(dropDownMenu).on("click","a",function(event){
					if ($(dropDownMenu).is(":visible")) {
						defaults.topMenuActivate = !defaults.topMenuActivate;
						$(dropDownBtn).removeClass('on')
						$(dropDownMenu).removeClass( "on" );
					}
					if($(event.target).attr("data-menuName")){
						self.callDataMenu(event.target);
					}
				});


		    	return this;
		    },
		    callDataMenu: function(menuName){
		    	

				defaults.modalActivate = !defaults.modalActivate;
		    	this.viewModal(menuName);

		    	return this;
		    },
		    sideMenu: function(){
		    	
		    	var sBtn = 'button.mBtn';

		    	$(sBtn).on('click', function(e){
		    		e.preventDefault();
		    		$(sBtn).removeClass('active')
		    		$(this).addClass('active')
		    		var func = $(this).attr('data-menuName')
		    		console.log(func)
		    	});

		    	return this;
		    },
		    setGroundColor: function(foreColor, backColor){
		    	if(!foreColor) foreColor = defaults.foreGroundColor;
		    	if(!backColor) backColor = defaults.backGroundColor;

		    	defaults.foreGroundColor = foreColor;
		    	defaults.backGroundColor = backColor;

		    	$(defaults.foreSelector).css({'background-color':foreColor});
		    	$(defaults.foreSelector).attr("data-currentColor",foreColor);

		    	$(defaults.backSelector).css({'background-color':backColor});	    	
		    	$(defaults.backSelector).attr("data-currentColor",backColor);

		    	return this;
		    },
		    groundToggle: function(){
		    	var self = this;
		    	var toggleBtn = '.groundToggle > a';
		    	$(toggleBtn).on('click', function(e){
		    		e.preventDefault();
	    			var foreColor = $(defaults.foreSelector).attr("data-currentColor");
	    			var backColor = $(defaults.backSelector).attr("data-currentColor");

	    			self.setGroundColor(backColor, foreColor);	    		
		    	})
		    	return this;
		    },
		    groundColor: function(){
		    	var self = this;
		    	var btnGroundColor = 'button.groundColor';

		    	$(btnGroundColor).on('click', function(e){
		    		e.preventDefault();
		    		// var mode = $(this).attr('data-colorMode');
		    		var mode = e.target;
		    		
		    		defaults.modalActivate = !defaults.modalActivate;
		    		self.toggleModal(mode);
	
		    	})

		    	return this;
		    },
		    viewModal: function(menuName){
		    	var self = this;
		    	var modal = document.getElementById('modal');
		    	var closeBtn = document.getElementsByClassName("closeModal")[0];  

		    	var menu = $(menuName).attr("data-menuName");
		    	var frms = $("#modal").find("#getModalData-menu-"+menu);
				frms.show()



		    	if(defaults.modalActivate){
    				modal.style.display = "block";   	
    			} 

    			window.onclick = function(event) {
    				console.log(event.target)
    				console.log(closeBtn)

    				if (event.target == modal || event.target == closeBtn) {
		                modal.style.display = "none";
		                frms.hide()
		                defaults.modalActivate = !defaults.modalActivate;
		            }
		        }


		    	return this;
		    },
		    toggleModal: function(menuName){
		    	var self = this;
		    	var modal = document.getElementById('modal');
		    	var closeBtn = document.getElementsByClassName("closeModal")[0];  
		    	var rs = null;
		    	var setColorClose = document.getElementsByClassName("setColorClose")[0];  

		    	var menu = $(menuName).attr("data-menuName");
		    	var frms = $("#modal").find("#getModalData-menu-"+menu);
				frms.show()

				var mode = $(menuName).attr("data-colorMode");

		    	switch(mode){
		    		case 'foreColorMode':
		    		rs = colorPicker(defaults.foreGroundColor);
		    		
		    		break;
		    		case 'backColorMode':
		    		rs = colorPicker(defaults.backGroundColor);
		    		break;
		    	}
		    	

    			//modal.style.display = "block";   	
    			if(defaults.modalActivate){
    				modal.style.display = "block";   	
    			} 

    			window.onclick = function(event) {

		            if (event.target == modal || event.target == setColorClose) {
		                modal.style.display = "none";
		                frms.hide()
		                switch(mode){
				    		case 'foreColorMode':
				    		defaults.foreGroundColor = rs.getCurrentColor();
				    		
				    		break;
				    		case 'backColorMode':
				    		defaults.backGroundColor = rs.getCurrentColor();
				    		break;
				    	}
		                self.setGroundColor(defaults.foreGroundColor, defaults.backGroundColor);	 

		                defaults.modalActivate = !defaults.modalActivate;
		            }
		            if (event.target == modal || event.target == closeBtn) {
		                modal.style.display = "none";
		                frms.hide()
		                defaults.modalActivate = !defaults.modalActivate;
		            }
		        }
		        return this; 

		    },



		};
	};

	return {
	    getInstance: function(name) {
	      if (!instance) {
	        instance = initiate(name);
	      }
	      return instance;
	    }
	};


})();
