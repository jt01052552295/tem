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
	      foreGroundColor: 'rgb(0,0,0)',
	      backGroundColor: 'rgb(255,255,255)',
	      foreSelector: '#foreG',
	      backSelector: '#backG',
	      modalActivate: false,
	      drawingCanvas: document.getElementById('drawingCanvas'),
	      drawingCTX: document.getElementById('drawingCanvas').getContext("2d"),
	      dataMenu : '',
	      drawTool : null,
	      mousePressed : false,
	      lastX : 0,
	      lastY : 0,
	      drawRadius : 0,
	      
	      
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
				this.canvasSize();
				this.drawCanvas();
				return this;
			},
			showMsg:function(msg, type){
				if(!msg) msg = '알수없는 오류 발생!';
				if(!type) type = 'log';

				if(type == 'log'){
					console.log(msg);
				}
				if(type == 'info'){
					console.info(msg);
				}
				if(type == 'warn'){
					console.warn(msg);
				}
				if(type == 'error'){
					alert(msg);
					console.error(msg);
				}
				if(type == 'dir'){
					console.dir(msg);
				}


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
		    	defaults.dataMenu = menuName;

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
    				if (event.target == modal || event.target == closeBtn) {
		                modal.style.display = "none";
		                frms.hide()
		                defaults.modalActivate = !defaults.modalActivate;
		            }
		        }


		    	return this;
		    },
		    closeModal:function(menuName){
		    	var modal = document.getElementById('modal');
		    	var menu = $(menuName).attr("data-menuName");	
		    	var frms = $("#modal").find("#getModalData-menu-"+menu);

		    	if(defaults.modalActivate){
		    		modal.style.display = "none";
					frms.hide()
					defaults.modalActivate = !defaults.modalActivate;
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
		    canvasSize: function(){
		   		var self = this;
		    	var sizeBtn = 'button.sizeBtn';
		    	var resizeCanvas = 'button#resizeCanvas';

		    	$(sizeBtn).on('click', function(e){
		    		e.preventDefault();
		    		var _this = $(this).attr('data-size')
		    		var size = _this.split(',');

		    		$("#custom_width").val(size[0]);
		    		$("#custom_height").val(size[1]);
		    	})

		    	$(resizeCanvas).on('click', function(e){
		    		e.preventDefault();
		    		var c_w = $("#custom_width").val();
		    		var c_h = $("#custom_height").val();
            		defaults.drawingCanvas.width = c_w;
            		defaults.drawingCanvas.height = c_h;

            		self.closeModal(defaults.dataMenu);

		    	})

		    	
		    	return self; 	

		    },
		    sideMenu: function(){
		    	
		    	var sBtn = 'button.mBtn';
		    	var self = this;

		    	$(sBtn).on('click', function(e){
		    		e.preventDefault();
		    		$(sBtn).removeClass('active')
		    		$(this).addClass('active')
		    		self.setDrawFunc(this);

		    	});

		    	return this;
		    },
		    clearCanvas: function() {
			  // Use the identity matrix while clearing the canvas
			  defaults.drawingCTX.setTransform(1, 0, 0, 1, 0, 0);
			  defaults.drawingCTX.clearRect(0, 0, defaults.drawingCTX.canvas.width, defaults.drawingCTX.canvas.height);
			},
		    setDrawFunc: function(mBtn){
		    	var func = $(mBtn).attr('data-draw-func')
		    	defaults.drawTool = func;
		    	this.showMsg(defaults.drawTool) // drawLine 
		    },
		    drawCanvas: function(){
		    	var self = this;

		
		    	$(drawingCanvas).mousedown(function (e) {
				    defaults.mousePressed = true;

					switch(defaults.drawTool){
						case 'drawBrush': self.drawBrush(e, false); break; 
						case 'drawRect': self.drawRect(e, false); break; 
						case 'drawCircle': self.drawCircle(e, false); break; 

					}

				});

				$(drawingCanvas).mousemove(function (e) {

				    if(defaults.mousePressed){
						switch(defaults.drawTool){
							case 'drawBrush': self.drawBrush(e, true); break; 
							case 'drawRect': self.drawRect(e, true); break; 
							case 'drawCircle': self.drawCircle(e, true); break; 
						}
					}

    				//$('#output').html('current: '+mouse_x+', '+mouse_y+'<br/>last: '+defaults.lastX+', '+defaults.lastY+'<br/>mousePressed: '+defaults.mousePressed);

				});

				$(drawingCanvas).mouseup(function (e) {
				    defaults.mousePressed = false;
				});

				$(drawingCanvas).mouseleave(function (e) {
				    defaults.mousePressed = false;
				});

		    	
		    },
		    drawBrush: function(e, isDown){
		    	var x = parseInt(e.pageX - $(defaults.drawingCanvas).offset().left);
				var y = parseInt(e.pageY - $(defaults.drawingCanvas).offset().top);
		    	if (isDown) {
				    defaults.drawingCTX.beginPath();
				    defaults.drawingCTX.strokeStyle = defaults.foreGroundColor;
				    defaults.drawingCTX.lineWidth = 1;
				    defaults.drawingCTX.lineJoin = "round";
				    defaults.drawingCTX.moveTo(defaults.lastX, defaults.lastY);
				    defaults.drawingCTX.lineTo(x, y);
				    defaults.drawingCTX.closePath();
				    defaults.drawingCTX.stroke();
				}
				defaults.lastX = x; 
				defaults.lastY = y;
		    },
		    drawRect: function(e, isDown){
		    	if (!isDown) {
			    	defaults.lastX = parseInt(e.pageX - $(defaults.drawingCanvas).offset().left);
					defaults.lastY = parseInt(e.pageY - $(defaults.drawingCanvas).offset().top);
				}

		    	if (isDown) {
		    		var x = parseInt(e.pageX - $(defaults.drawingCanvas).offset().left);
					var y = parseInt(e.pageY - $(defaults.drawingCanvas).offset().top);
					var width = x - defaults.lastX;
					var height = y - defaults.lastY;


		    		this.clearCanvas();

		    		defaults.drawingCTX.beginPath();
					defaults.drawingCTX.lineWidth = 1;
					defaults.drawingCTX.strokeStyle = defaults.foreGroundColor;
					defaults.drawingCTX.rect(defaults.lastX, defaults.lastY, width, height);
					defaults.drawingCTX.closePath();
					defaults.drawingCTX.stroke();


				}

		    },
		    drawCircle: function(e, isDown){


		    	if (!isDown) {
			    	defaults.lastX = parseInt(e.pageX - $(defaults.drawingCanvas).offset().left);
					defaults.lastY = parseInt(e.pageY - $(defaults.drawingCanvas).offset().top);
					defaults.drawRadius = 0;
				}

				if (isDown) {
		    		var x = parseInt(e.pageX - $(defaults.drawingCanvas).offset().left);
					var y = parseInt(e.pageY - $(defaults.drawingCanvas).offset().top);
					
					defaults.drawRadius++;

		    		this.clearCanvas();

		    		defaults.drawingCTX.beginPath();
					defaults.drawingCTX.lineWidth = 1;
					defaults.drawingCTX.strokeStyle = defaults.foreGroundColor;

					defaults.drawingCTX.arc(defaults.lastX, defaults.lastY, defaults.drawRadius, 0 * Math.PI, 2 * Math.PI, false);

					defaults.drawingCTX.closePath();
					defaults.drawingCTX.stroke();


				}
		    },



		};
	};


	function clearArea() {
	  // Use the identity matrix while clearing the canvas
	  ctx.setTransform(1, 0, 0, 1, 0, 0);
	  ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
	}

	return {
	    getInstance: function(name) {
	      if (!instance) {
	        instance = initiate(name);
	      }
	      return instance;
	    }
	};


})();
