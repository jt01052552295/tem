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
	    };

		return {
			init:function(){
				this.showMode();
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
