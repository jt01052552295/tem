"use strict"

/*


 */

var jKeditor = (function() {

	var instance;
	var initiate = function(mode) {
		var defaults = {
	      mode: mode,
	      isCurrentMode: {},
	      isPaint : false,
	      lastX : 0,
	      lastY : 0,
	      topMenuActivate: false,
	    };

		return {
			init:function(){
				this.showMode();
				this.topMenu();
				this.btnExec();
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
					console.error(msg);
				}
				if(type == 'dir'){
					console.dir(msg);
				}
				return this;
			},
			showMode: function() {
				var date1 = new Date();
		    	var dateStr = this.formatDate(date1);
		        this.showMsg('current editor mode is ' + defaults.mode + ' ;; ' + dateStr) 
		        return this;
		    },
		    formatDate: function(date) {
			    var year = date.getFullYear(),
			        month = date.getMonth() + 1, // months are zero indexed
			        monthFormatted = month < 10 ? "0" + month : month,
			        day = date.getDate(),
			        hour = date.getHours(),
			        minute = date.getMinutes(),
			        second = date.getSeconds(),
			        hourFormatted = hour % 12 || 12, // hour returned in 24 hour format
			        hourFormatted = hour < 10 ? "0" + hour : hour,
			        minuteFormatted = minute < 10 ? "0" + minute : minute,
			        morning = hour < 12 ? "am" : "pm";

			    return year + "." + monthFormatted + "." + day;
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
					if ($(dropDownMenu).is(":visible") && !$(event.target).is(".font_size_box *")) {
						if ($(dropDownMenu).is(":visible")) {
							defaults.topMenuActivate = !defaults.topMenuActivate;
							$(dropDownBtn).removeClass('on')
							$(dropDownMenu).removeClass( "on" );
						}   
					}
				});

				$(dropDownMenu).on("click","li",function(event){
					if ($(dropDownMenu).is(":visible")) {
						defaults.topMenuActivate = !defaults.topMenuActivate;
						$(dropDownBtn).removeClass('on');
						$(dropDownMenu).removeClass( "on" );

						
						$(this).siblings().removeClass('on')
						$(this).addClass('on')
					}
					if($(event.target).attr("data-fn")){ // 글꼴 변경
						document.execCommand("fontName", false, $(event.target).attr("data-fn"));
						$('#fn').html($(event.target).attr("data-fn"))
					}
					if($(event.target).attr("data-fs")){ // 글꼴 사이즈 변경
						document.execCommand("FontSize", false, $(event.target).attr("data-fs"));
						$('#fsn').html($(event.target).attr("data-fsn"))
					}
				});


		    	return self;
		    },
		    fontAct:function(act, val){
				console.log(act, val)
				return this;
			},
			btnExec:function(){
				var self = this;
				var btn = 'button.eBtn';
				var sel, range;

				$(btn).on("click", function(event){
					var act = $(this).attr("data-action");

	
					var selObj = window.getSelection(); 
				    var selRange = selObj.getRangeAt(0);
				    var selectedText = selObj.toString();
				    console.log(selectedText)


					// if (window.getSelection && (sel = window.getSelection()).rangeCount) {
				 //        range = sel.getRangeAt(0);
				 //        range.collapse(true);
				 //        var span = document.createElement("div");
				 //        span.id = "myId";
				 //        span.appendChild( document.createTextNode("hi") );
				 //        range.insertNode(span);

				 //        // Move the caret immediately after the inserted span
				 //        range.setStartAfter(span);
				 //        range.collapse(true);
				 //        sel.removeAllRanges();
				 //        sel.addRange(range);
				 //    }
					
				});


				return self;
			}
		    



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
