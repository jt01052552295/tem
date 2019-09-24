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
	      foreGroundColor: 'white',
	      backGroundColor: 'black',
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
				this.toggleModal();
				return this;
			},
			showMode: function() {
		        console.log('current mode is ' + defaults.mode)
		        return this;
		    },
		    topMenu: function(){
		    	
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

		    	self.toggleModal(mode);

		    	$(btnGroundColor).on('click', function(e){
		    		e.preventDefault();
		    		var mode = $(this).attr('data-colorMode');
		    		var modal = $(this).attr('data-modal');

		    		
		    		if(modal){
		    			defaults.modalActivate = !defaults.modalActivate;
		    			self.toggleModal(mode);
		    		}

	    			
	    			// var foreColor = $(defaults.foreSelector).attr("data-currentColor");
	    			// var backColor = $(defaults.backSelector).attr("data-currentColor");

	    			// self.setGroundColor(backColor, foreColor);	    		
		    	})



		    	return this;
		    },
		    toggleModal: function(mode){
		    	var modal = document.getElementById('modal');
		    	var closeBtn = document.getElementsByClassName("closeModal")[0];  
		    	var getModalData = document.getElementById('getModalData');

    			modal.style.display = "block";   	
    			if(defaults.modalActivate){
    				modal.style.display = "block";   				
    				//getModalData.innerHTML = mode;
    			} 

		        // window.onclick = function(event) {

		        //     if (event.target == modal || event.target == closeBtn) {
		        //         modal.style.display = "none";
		        //         getModalData.innerHTML = '';
		        //         defaults.modalActivate = !defaults.modalActivate;
		        //     }
		        // }
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
