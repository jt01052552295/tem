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
	      backgroundContext: document.createElement('canvas').getContext('2d'),
	      drawingCanvas: document.getElementById('drawingCanvas'),
	      drawingCTX: document.getElementById('drawingCanvas').getContext("2d"),
	      dataMenu : '',
	      drawTool : null,
	      mousePressed : false,
	      lastX : 0,
	      lastY : 0,
	      drawingSurfaceImageData: null,
	      rubberbandRect : {},
	      mousedown : {},
	      eraserSize : 20,
	      
	      
	    };

		return {
			opt:defaults,
			init:function(){
				this.drawBackground();
				this.showMode();
				this.topMenu();
				this.sideMenu();
				this.setGroundColor(defaults.foreGroundColor, defaults.backGroundColor);
				this.groundToggle();
				this.groundColor();
				this.canvasSize();
				this.drawCanvas();
				this.saveImageFile();
				return this;
			},
			drawBackground: function(){
				defaults.backgroundContext.canvas.width = defaults.drawingCTX.canvas.width;
   				defaults.backgroundContext.canvas.height = defaults.drawingCTX.canvas.height;
			},
			drawInitCanvas: function(){
				defaults.drawingCTX.save()

				defaults.drawingCTX.strokeStyle = '#ffffff';
				defaults.drawingCTX.fillStyle = '#ffffff';
				defaults.drawingCTX.lineWidth = 0.5;
				defaults.drawingCTX.fillRect(0, 0, defaults.drawingCTX.canvas.width, defaults.drawingCTX.canvas.height);
				defaults.drawingCTX.restore();
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
		    		if(!_this) return;
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

            		self.drawBackground();

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
			windowToCanvas: function(x, y) {
			   	var bbox = defaults.drawingCTX.canvas.getBoundingClientRect();
			   	return { 
			   		x: x - bbox.left * (defaults.drawingCanvas.width  / defaults.drawingCanvas.width),
            		y: y - bbox.top  * (defaults.drawingCanvas.height / defaults.drawingCanvas.height) 
            	};
			
			},
			saveDrawingSurface: function() {
			   defaults.drawingSurfaceImageData = defaults.drawingCTX.getImageData(0, 0, defaults.drawingCTX.canvas.width, defaults.drawingCTX.canvas.height);
			},
			restoreDrawingSurface: function() {
			   defaults.drawingCTX.putImageData(defaults.drawingSurfaceImageData, 0, 0);
			},
			updateRubberbandRectangle: function(loc) {
			   defaults.rubberbandRect.width  = Math.abs(loc.x - defaults.mousedown.x);
			   defaults.rubberbandRect.height = Math.abs(loc.y - defaults.mousedown.y);

			   if (loc.x > defaults.mousedown.x) defaults.rubberbandRect.left = defaults.mousedown.x;
			   else                     defaults.rubberbandRect.left = loc.x;

			   if (loc.y > defaults.mousedown.y) defaults.rubberbandRect.top = defaults.mousedown.y;
			   else                     defaults.rubberbandRect.top = loc.y;

			   
			},
			drawLine: function(loc) {
			   defaults.drawingCTX.beginPath();
			   defaults.drawingCTX.moveTo(defaults.mousedown.x, defaults.mousedown.y);
			   defaults.drawingCTX.lineTo(loc.x, loc.y);
			   defaults.drawingCTX.strokeStyle = defaults.foreGroundColor;
			   defaults.drawingCTX.stroke();
			},
			drawCircle: function(loc) {
			   var angle, radius;
			   if(defaults.mousedown.y === loc.y){
			   		radius = Math.abs(loc.x - defaults.mousedown.x);	
			   } else { 
			   		angle = Math.atan(defaults.rubberbandRect.height / defaults.rubberbandRect.width),
      				radius = defaults.rubberbandRect.height / Math.sin(angle);
			   }

			   defaults.drawingCTX.beginPath();
			   defaults.drawingCTX.strokeStyle = defaults.foreGroundColor;
			   defaults.drawingCTX.arc(defaults.mousedown.x, defaults.mousedown.y, radius, 0, Math.PI*2, false); 
			   defaults.drawingCTX.stroke();
			   //defaults.drawingCTX.fill(); //색상채우기

			},
			drawRect: function(loc) {
				var width = loc.x - defaults.mousedown.x;
				var height = loc.y - defaults.mousedown.y;
			    defaults.drawingCTX.beginPath();
				defaults.drawingCTX.lineWidth = 1;
				defaults.drawingCTX.strokeStyle = defaults.foreGroundColor;
				defaults.drawingCTX.rect(defaults.mousedown.x, defaults.mousedown.y, width, height);
				defaults.drawingCTX.closePath();
				defaults.drawingCTX.stroke();
			   //defaults.drawingCTX.fill(); 색상채우기

			},
			drawBrush: function(loc) {
				    defaults.drawingCTX.beginPath();
				    defaults.drawingCTX.strokeStyle = defaults.foreGroundColor;
				    defaults.drawingCTX.lineWidth = 1;
				    defaults.drawingCTX.lineJoin = "round";
				    defaults.drawingCTX.moveTo(loc.x, loc.y);
				    defaults.drawingCTX.lineTo(defaults.lastX, defaults.lastY);
				    defaults.drawingCTX.closePath();
				    defaults.drawingCTX.stroke();
			},
			updateRubberband: function(loc, drawTool) {
			   this.updateRubberbandRectangle(loc);
			   switch(drawTool){
			    	case "drawLine": 	this.drawLine(loc); 	break;
			    	case "drawCircle": 	this.drawCircle(loc); break;
			    	case "drawRect": 	this.drawRect(loc); break;
			    	case "drawBrush": 	this.drawBrush(loc); break;
			    }

			},
			setEraserAttributes: function() {
			  defaults.drawingCTX.lineWidth     = 1;
			  defaults.drawingCTX.shadowColor   = 'rgb(0,0,0)';
			  defaults.drawingCTX.shadowOffsetX = -5; 
			  defaults.drawingCTX.shadowOffsetY = -5;
			  defaults.drawingCTX.shadowBlur    = 20;
			  defaults.drawingCTX.strokeStyle   = 'rgb(0,0,255)';
			},
			setErasePathForEraser: function(){
				var eraserWidth = parseFloat(defaults.eraserSize);
				defaults.drawingCTX.beginPath();
				defaults.drawingCTX.arc(defaults.lastX, defaults.lastY, eraserWidth/2+1,0, Math.PI*2, false);
				defaults.drawingCTX.clip();
			},
			setDrawPathForEraser: function(loc){
				var eraserWidth = parseFloat(defaults.eraserSize);
				defaults.drawingCTX.beginPath();
				defaults.drawingCTX.arc(loc.x, loc.y, eraserWidth/2,0, Math.PI*2, false);
				defaults.drawingCTX.clip();
			},
			eraseLast: function() {
			   defaults.drawingCTX.save();
			   this.setErasePathForEraser();
			   this.drawInitCanvas();
			   defaults.drawingCTX.restore();
			},
			drawEraser: function(loc) {
			   defaults.drawingCTX.save();
			   this.setEraserAttributes();     
			   this.setDrawPathForEraser(loc);
			   defaults.drawingCTX.stroke();
			   defaults.drawingCTX.restore();
			},
			setDrawFunc: function(mBtn){
		    	var func = $(mBtn).attr('data-draw-func')
		    	defaults.drawTool = func;
		    	this.showMsg(defaults.drawTool) // drawLine 
		    },
		    drawCanvas: function(){
		    	var self = this;

		
		    	$(drawingCanvas).mousedown(function (e) {
		    		var loc = self.windowToCanvas(e.clientX, e.clientY);
		    		e.preventDefault();
				    
				    switch(defaults.drawTool){
				    	case "drawRect": case "drawCircle": case "drawLine":
				    		self.saveDrawingSurface();
				    		break;
				    	case "drawFill":
				    		//draw_fill(ctx, x, y, rgba[0], rgba[1], rgba[2], rgba[3]);
				    		break;
				    }


				    
				    

				    defaults.mousedown.x = loc.x;
				    defaults.mousedown.y = loc.y;
				    defaults.lastX = loc.x;
				    defaults.lastY = loc.y;
				    defaults.mousePressed = true;


				});

				$(drawingCanvas).mousemove(function (e) {
					var loc;
					e.preventDefault();

					if(defaults.mousePressed){
						loc = self.windowToCanvas(e.clientX, e.clientY);

						switch(defaults.drawTool){
					    	case "drawRect": case "drawCircle": case "drawLine":
					    		self.restoreDrawingSurface();
								self.updateRubberband(loc, defaults.drawTool);
					    		break;
					    	case "drawBrush":
					    		self.updateRubberband(loc, defaults.drawTool);
					    		break;
					    	case "drawEraser":
					    		self.eraseLast();
         						self.drawEraser(loc);
					    		break;
					    }

					    defaults.lastX = loc.x;
				    	defaults.lastY = loc.y;
					}


				});

				$(drawingCanvas).mouseup(function (e) {
					var loc = self.windowToCanvas(e.clientX, e.clientY);
					e.preventDefault();
					switch(defaults.drawTool){
				    	case "drawRect": case "drawCircle": case "drawLine":
				    		self.restoreDrawingSurface();
							self.updateRubberband(loc, defaults.drawTool);
				    		break;
				    	case "drawEraser":
					    	self.eraseLast();
					    	break;
				    }
				    defaults.mousePressed = false;
				});

				$(drawingCanvas).mouseleave(function (e) {
					e.preventDefault();
				    defaults.mousePressed = false;
				});

		    	
		    },
		    formatDate: function(date) {
			    var year = date.getFullYear(),
			        month = date.getMonth() + 1, // months are zero indexed
			        day = date.getDate(),
			        hour = date.getHours(),
			        minute = date.getMinutes(),
			        second = date.getSeconds(),
			        hourFormatted = hour % 12 || 12, // hour returned in 24 hour format
			        hourFormatted = hour < 10 ? "0" + hour : hour,
			        minuteFormatted = minute < 10 ? "0" + minute : minute,
			        morning = hour < 12 ? "am" : "pm";

			    return year + "" + month + "" + day + "" + hourFormatted + "" + minuteFormatted;
			},
		    saveImageFile: function(){
		    	var self = this;
		    	var saveBtn = 'button.saveBtn';

		    	$(saveBtn).on('click', function(e){
		    		e.preventDefault();
		    		var file = $(this).attr('data-file');
		    		var date1 = new Date();
		    		var dateStr = self.formatDate(date1);

		    		var canvas = defaults.drawingCanvas;
		    		var context = defaults.drawingCTX;
		    		
		    		var imgData;
		    		var img = new Image();
		    		img.crossOrigin='anonymous';

            		
            		if(file == 'jpg'){
            			// 포토샵에서 못불러옴. 압축률 때문인지..비트 때문인지 ....


            			var dataURL = defaults.drawingCanvas.toDataURL('image/jpeg', 0.8);
            			dataURL = dataURL.replace('/^data:image\/[^;]*/', 'data:application/octet-stream');
            			var aTag = document.createElement('a');
            			aTag.href = dataURL;
			            aTag.download = dateStr+'temp.jpg';
			            aTag.click();



            		} else if(file == 'png'){
            			var dataURL = defaults.drawingCanvas.toDataURL('image/png');
            			dataURL = dataURL.replace('/^data:image\/[^;]*/', 'data:application/octet-stream');
            			dataURL = dataURL.replace('/^data:application\/octet-stream/', 'data:application/octet-stream;headers=Content-Disposition%3A%20attachment%3B%20filename=Canvas.png');

            			var aTag = document.createElement('a');
			            aTag.download = dateStr+'temp.png';
			            aTag.href = dataURL;
			            aTag.click();

            		} else {
            			this.showMsg('잘못된 경로입니다.')
            		}

            		self.closeModal(defaults.dataMenu);

		    	})
		    }
		    
		    



		};
	};


	function formatDate(date) {
	    var year = date.getFullYear(),
	        month = date.getMonth() + 1, // months are zero indexed
	        day = date.getDate(),
	        hour = date.getHours(),
	        minute = date.getMinutes(),
	        second = date.getSeconds(),
	        hourFormatted = hour % 12 || 12, // hour returned in 24 hour format
	        minuteFormatted = minute < 10 ? "0" + minute : minute,
	        morning = hour < 12 ? "am" : "pm";

	    return month + "/" + day + "/" + year + " " + hourFormatted + ":" +
	            minuteFormatted + morning;
	}


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
