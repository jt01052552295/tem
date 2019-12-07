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
	      backGroundColor: 'rgb(255,0,0)',
	      foreSelector: '#foreG',
	      backSelector: '#backG',
	      modalActivate: false,
	      stage: new Konva.Stage({
	        container: 'container',
	        width: 600,
	        height: 400,
	      }),
	      layer: new Konva.Layer(),
	      dataMenu : '',
	      drawTool : 'select',
	      isCurrentMode: {},
	      isPaint : false,
	      lastX : 0,
	      lastY : 0,
	      posStart: {},
	      posEnd: {},
	      lastShape: null,    
	      seAndTr: null,
	      lastSeAndTr: null, 
	      eraserSize : 20,
	      
	      
	    };

		return {
			opt:defaults,
			init:function(){
				defaults.stage.add(defaults.layer);
				// defaults.stage.getContainer().style.backgroundColor = 'white';
				//this.drawBackground();
				this.showMode();
				this.topMenu();
				this.sideMenu();
				this.setGroundColor(defaults.foreGroundColor, defaults.backGroundColor);
				this.groundToggle();
				this.groundColor();
				this.canvasSize();
				this.drawCanvas();
				this.saveImageFile();
				this.currentDrawToolStatus('select');
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
		    		if(!_this) return;
		    		var size = _this.split(',');

		    		$("#custom_width").val(size[0]);
		    		$("#custom_height").val(size[1]);

		    		defaults.stage.setAttrs({
					  width: parseInt(size[0]),
					  height: parseInt(size[1])
					});
		    	})

		    	$(resizeCanvas).on('click', function(e){
		    		e.preventDefault();
		    		var c_w = $("#custom_width").val();
		    		var c_h = $("#custom_height").val();

            		defaults.stage.setAttrs({
					  width: parseInt(c_w),
					  height: parseInt(c_h)
					});

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
			setDrawFunc: function(mBtn){
		    	var func = $(mBtn).attr('data-draw-func')
		    	defaults.drawTool = func;
		    	this.currentDrawToolStatus(defaults.drawTool);
		    	this.showMsg(defaults.drawTool) // drawLine 
		    },
		    currentDrawToolStatus: function(mode){
		    	var curSelect	= false;
		    	var curText		= false;
		    	var curPaint	= false;
		    	var curFill		= false;
		    	var curErase	= false;
		    	var curRemove	= false;

		    	if(mode=='select'){
		    	 	curSelect	= true;
		    	}
		    	if(mode=='text'){
		    	 	curText	= true;
		    	}
		    	if (mode.indexOf('draw') != -1) {
		    		curPaint	= true;
		    	}
		    	if(mode=='fill'){
		    	 	curFill	= true;
		    	}
		    	if(mode=='eraser'){
		    	 	curErase	= true;
		    	}
		    	if(mode=='remove'){
		    	 	curRemove	= true;
		    	}

		    	defaults.isCurrentMode = {
		    		select : curSelect,
		    		text : curText,
		    		draw : curPaint,
		    		fill : curFill,
		    		eraser : curErase,
		    		remove : curRemove,
		    	};
		    	// return isMode;
		    },
		    addShape: function(mode, posStart){
		    	var shape = null;
		    	if(mode=='drawRect'){
		          shape = new Konva.Rect({
		            x: posStart.x,
		            y: posStart.y,
		            width: 0,
		            height: 0,
		            fill: 'green',
		            stroke: defaults.foreGroundColor,
		            strokeWidth: 1,
		          });
		        } else if(mode=='drawCircle'){
		          shape = new Konva.Ellipse({
		            x: posStart.x,
		            y: posStart.y,
		            radiusX: 0,
		            radiusY: 0,
		            fill: 'yellow',
		            stroke: defaults.foreGroundColor,
		            strokeWidth: 1,
		          });
		        } else if(mode=='drawBrush'){
		          shape = new Konva.Line({
		            stroke: defaults.foreGroundColor,
		            strokeWidth: 1,
		            globalCompositeOperation:'source-over',
		            points: [posStart.x, posStart.y],
		          });
		        } else if(mode=='drawLine'){
		          shape = new Konva.Line({
		            stroke: defaults.foreGroundColor,
		            strokeWidth: 1,
		            globalCompositeOperation:'source-over',
		            points: [posStart.x, posStart.y],
		          });
		        } else if(mode=='drawEraser'){
		          shape = new Konva.Line({
		          	stroke: defaults.foreGroundColor,
		            strokeWidth: defaults.eraserSize,
		            globalCompositeOperation:'destination-out',
		            points: [posStart.x, posStart.y],
		          });
		        } else {
		          shape = null;
		        }
		    	return shape;
		    },
		    drawShape: function(mode, shape, posStart, posEnd){
		    	var w = posEnd.x - posStart.x;
		        var h = posEnd.y - posStart.y;
		        if(mode=='drawRect'){
		          shape.width(w);
		          shape.height(h);
		        } else if(mode=='drawCircle'){
		          w = Math.abs(w);
		          h = Math.abs(h);
		          shape.radius({
		            x: w,
		            y: h
		          });
		        } else if(mode=='drawBrush'){
		          var newPoints = shape.points().concat([posEnd.x, posEnd.y]);
		          shape.points(newPoints);
		        } else if(mode=='drawLine'){
		          var newPoints = [posStart.x, posStart.y, posEnd.x, posEnd.y];
		          shape.points(newPoints);
		        } else if(mode=='drawEraser'){
		          var newPoints = shape.points().concat([posEnd.x, posEnd.y]);
		          shape.points(newPoints);
		        } else {
		          shape = null;
		        }

		        return shape;
		    },
		    setSeAndTr: function(target){
		    	var shape = target;

		    	defaults.stage.find('Transformer').destroy();
		    	//defaults.lastShape.draggable(false)

		    	shape.draggable(true);		    	
	            var tr = new Konva.Transformer();
	            defaults.layer.add(tr);
	            tr.attachTo(shape);
	            defaults.layer.draw();
	            defaults.lastSeAndTr = tr;
	            defaults.lastShape = shape;

		    },
		    clSeAndTr: function(){
		    	if(defaults.lastSeAndTr == null) return;    	    	

		    	defaults.stage.find('Transformer').destroy();   
		    	defaults.layer.getChildren(function(node){
				   node.draggable(false);		
				});        
	            defaults.layer.draw();

	            defaults.lastSeAndTr = null;
	            defaults.lastShape = null;
	            

		    },
		    removeShape: function(target){
		    	//this.clSeAndTr();

		    	var shape = target;
		    	shape.destroy();
		    	defaults.layer.draw();
		    },
		    eraserCanvas: function(){ 
		    	// 2019-12-07 
		    	var curPt = defaults.stage.getPointerPosition();
		    	console.log(curPt)

		    	defaults.layer.getChildren(function(node){
				   console.log(node.getClassName())		
				});  

		    },
		    drawCanvas: function(){
		    	var self = this;

		    	defaults.stage.on('mousedown touchstart', function(e) {
		    		defaults.isPaint = true;

					defaults.posStart = defaults.stage.getPointerPosition();

					if(defaults.isCurrentMode.draw){
			    		defaults.lastShape = self.addShape(defaults.drawTool, defaults.posStart);
			    		if(defaults.lastShape != null){
				          defaults.layer.add(defaults.lastShape);
				        }
				    }
				    if(defaults.isCurrentMode.eraser){
			    		self.eraserCanvas();
				    }
				  

		    	});

		    	defaults.stage.on('mouseup touchend', function(e) {
		    		defaults.isPaint = false;
		    	});

		    	// and core function - drawing
		    	defaults.stage.on('mousemove touchmove', function() {
		    		if (!defaults.isPaint) {
		    			return;
		    		}

		    		defaults.posEnd = defaults.stage.getPointerPosition();
		    		var rs;

		    		if(defaults.isCurrentMode.draw){
			    		rs = self.drawShape(defaults.drawTool, defaults.lastShape, defaults.posStart, defaults.posEnd);
				        if(rs != null){
				          defaults.layer.draw();
				          defaults.stage.add(defaults.layer);
				        }
				    }

				    if(defaults.isCurrentMode.eraser){
			    		self.eraserCanvas();
				    }
				    

				});

				defaults.stage.on('click tap', function(e) {
					// if click on empty area - remove all transformers
			        if (e.target === defaults.stage) {
			          self.clSeAndTr();
			          defaults.stage.find('Transformer').destroy();
			          defaults.layer.draw();
			          return;
			        }

		    	});

		    	defaults.layer.on('click tap', function(e) {
		    		var shape = e.target;

		    		if(shape && defaults.isCurrentMode.fill){
		    			shape.fill(defaults.foreGroundColor)
		    			shape.draw();
		    		}
		    		if(shape && defaults.isCurrentMode.select){
		    			self.setSeAndTr(shape);
		    		}
		    		if(shape && defaults.isCurrentMode.remove){
			    		self.removeShape(shape);
				    }

		    		
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
