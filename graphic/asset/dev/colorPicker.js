(function() {

	console.info('color picker')


    function colorPicker() {
        if (!(this instanceof colorPicker)) { return new colorPicker(); }
        this.initUI();    
    }

    colorPicker.prototype = {
        initUI : function() {
            this.red = 'color.red';
            this.green = 'color.green';
            this.blue = 'color.blue';
            this.bCanPreview = true; // can preview
            this.cAlpha = 1;    

            this.canvas = document.getElementById('picker');
            this.ctx = this.canvas.getContext('2d');
            this.cpCanvas = document.getElementById('colorPalette');    
            this.cpCtx = this.cpCanvas.getContext('2d');  
            this.colorPaletteControlHandler = document.getElementById('colorPaletteControlHandler'); 
            this.cpCanvasRect = this.cpCanvas.getBoundingClientRect();
            this.colorPaletteControlMove = false; 
            this.cpCanvasPosY = 0;

            this.initCanvas();
            this.initPalette();
            this.selectColorPalette();

            this.initRangeInputColor();
            
        },
        initCanvas : function(){
            var canvas = document.getElementById('picker');
            var ctx = canvas.getContext('2d');
            
            var gradient = null;
            var gradient2 = null; 

            gradient = ctx.createLinearGradient(0, 150, 300, 150);
            gradient.addColorStop(0, 'hsla(0, 0%, 50%, 1)');
            gradient.addColorStop(1, 'hsla(0, 0%, 50%, 0)');
            
            gradient2 = ctx.createLinearGradient(150, 0, 150, 300);
            gradient2.addColorStop(0, 'hsl(0, 0%, 100%)');
            gradient2.addColorStop(.5, 'hsla(0, 0%, 100%, 0)');
            gradient2.addColorStop(.5, 'hsla(0, 0%, 0%, 0)');
            gradient2.addColorStop(1, 'hsl(0, 0%, 0%)');

            ctx.fillStyle = gradient;
            ctx.fillRect(0, 0, 300, 300);

            ctx.fillStyle = gradient2;
            ctx.fillRect(0, 0, 300, 300);
        },
        initPalette: function(){
            // The start gradient point is at x1=0, y1=0
            // The end gradient point is at x2=30, y2=300
            var gradient = this.cpCtx.createLinearGradient(0, 0, 30, 300);
            gradient.addColorStop(0  / 100, 'hsl(0, 100%, 50%)');
            gradient.addColorStop(4  / 100, 'hsl(15, 100%, 50%)');
            gradient.addColorStop(8  / 100, 'hsl(30, 100%, 50%)');
            gradient.addColorStop(12 / 100, 'hsl(45, 100%, 50%)');
            gradient.addColorStop(16 / 100, 'hsl(60, 100%, 50%)');
            gradient.addColorStop(20 / 100, 'hsl(75, 100%, 50%)');
            gradient.addColorStop(24 / 100, 'hsl(90, 100%, 50%)');
            gradient.addColorStop(28 / 100, 'hsl(105, 100%, 50%)');
            gradient.addColorStop(32 / 100, 'hsl(120, 100%, 50%)');
            gradient.addColorStop(36 / 100, 'hsl(135, 100%, 50%)');
            gradient.addColorStop(40 / 100, 'hsl(150, 100%, 50%)');
            gradient.addColorStop(44 / 100, 'hsl(165, 100%, 50%)');
            gradient.addColorStop(48 / 100, 'hsl(180, 100%, 50%)');
            gradient.addColorStop(52 / 100, 'hsl(195, 100%, 50%)');
            gradient.addColorStop(56 / 100, 'hsl(210, 100%, 50%)');
            gradient.addColorStop(60 / 100, 'hsl(225, 100%, 50%)');
            gradient.addColorStop(64 / 100, 'hsl(240, 100%, 50%)');
            gradient.addColorStop(68 / 100, 'hsl(255, 100%, 50%)');
            gradient.addColorStop(72 / 100, 'hsl(270, 100%, 50%)');
            gradient.addColorStop(76 / 100, 'hsl(285, 100%, 50%)');
            gradient.addColorStop(80 / 100, 'hsl(300, 100%, 50%)');
            gradient.addColorStop(84 / 100, 'hsl(315, 100%, 50%)');
            gradient.addColorStop(88 / 100, 'hsl(330, 100%, 50%)');
            gradient.addColorStop(92 / 100, 'hsl(345, 100%, 50%)');
            gradient.addColorStop(96 / 100, 'hsl(0, 100%, 50%');
            this.cpCtx.fillStyle = gradient;
            this.cpCtx.fillRect(0, 0, 30, 300);

        },
        updatePreviewColor: function(colorData){
            if(!colorData) return;
            var self = this;
            var pixel = colorData.data;
            // update preview color
            var color = "rgba("+pixel[0]+", "+pixel[1]+", "+pixel[2]+", "+self.cAlpha+")";
            var c = w3color(color);

            

            if ((color.indexOf("rgba") > -1 || color.indexOf("hsla") > -1 || color.indexOf("hwba") > -1 || color.indexOf("ncola")) > -1
            || (color.indexOf("cmyk") == -1 && color.split(",").length == 4)
            || (color.indexOf("cmyk") > -1 && color.split(",").length == 5)) {

                $('#hslVal').val(c.toHslaString());
                $('#rgbVal').val(c.toRgbaString());
            } else {

                $('#hslVal').val(c.toHslString());
                $('#rgbVal').val(c.toRgbString());
            }

            // update controls
            $('.preview').css('backgroundColor', c.toRgbString());
            self.ctx.fillStyle = c.toRgbString().toLowerCase();
            self.ctx.fillRect(0, 0, 300, 300);

            var gradient = null;
            var gradient2 = null; 

            //ctx.fillStyle = 'white'; 

            gradient = self.ctx.createLinearGradient(0, 150, 300, 150);
            gradient.addColorStop(0, 'hsla(0, 0%, 50%, 1)');
            gradient.addColorStop(1, 'hsla(0, 0%, 50%, 0)');
            
            gradient2 = self.ctx.createLinearGradient(150, 0, 150, 300);
            gradient2.addColorStop(0, 'hsl(0, 0%, 100%)');
            gradient2.addColorStop(.5, 'hsla(0, 0%, 100%, 0)');
            gradient2.addColorStop(.5, 'hsla(0, 0%, 0%, 0)');
            gradient2.addColorStop(1, 'hsl(0, 0%, 0%)');

            self.ctx.fillStyle = gradient;
            self.ctx.fillRect(0, 0, 300, 300);

            self.ctx.fillStyle = gradient2;
            self.ctx.fillRect(0, 0, 300, 300);

            $('#rVal').val(pixel[0]);
            $('#gVal').val(pixel[1]);
            $('#bVal').val(pixel[2]);
            $('#aVal').val(self.cAlpha);
            $('#hexVal').val(c.toHexString());
            $('#cmykVal').val(c.toCmykString()); 


            console.log(c.toRgb())
            console.log(c.toHsl())
            console.log(c.toCmyk())

            return this;
        },
        updatePreviewColor2: function(colorData){
            if(!colorData) return;
            var self = this;
            var pixel = colorData.data;
            // update preview color
            var color = "rgba("+pixel[0]+", "+pixel[1]+", "+pixel[2]+", "+self.cAlpha+")";
            var c = w3color(color);

            

            if ((color.indexOf("rgba") > -1 || color.indexOf("hsla") > -1 || color.indexOf("hwba") > -1 || color.indexOf("ncola")) > -1
            || (color.indexOf("cmyk") == -1 && color.split(",").length == 4)
            || (color.indexOf("cmyk") > -1 && color.split(",").length == 5)) {

                $('#hslVal').val(c.toHslaString());
                $('#rgbVal').val(c.toRgbaString());
            } else {

                $('#hslVal').val(c.toHslString());
                $('#rgbVal').val(c.toRgbString());
            }

            $('#rVal').val(pixel[0]);
            $('#gVal').val(pixel[1]);
            $('#bVal').val(pixel[2]);
            $('#aVal').val(self.cAlpha);
            $('#hexVal').val(c.toHexString());
            $('#cmykVal').val(c.toCmykString()); 

            // update controls
            $('.preview').css('backgroundColor', c.toRgbString());
        },
        selectColorPalette: function(){
            var self = this;


            $(this.canvas).click(function(e) { // mouse click handler
                if (self.bCanPreview) {
                    // get coordinates of current position
                    var currentOffset = $(this).offset();
                    var currentX = Math.floor(e.pageX - currentOffset.left);
                    var currentY = Math.floor(e.pageY - currentOffset.top);

                    // get current pixel
                    var colorData = self.ctx.getImageData(currentX, currentY, 1, 1);                  
                    self.updatePreviewColor2(colorData);                                     
                }
            });
            $(this.cpCanvas).click(function(e) { // mouse click handler
                if (self.bCanPreview) {
                    // get coordinates of current position
                    var currentOffset = $(this).offset();
                    var currentX = Math.floor(e.pageX - currentOffset.left);
                    self.cpCanvasPosY = Math.floor(e.pageY - currentOffset.top);

                    $('.colorPaletteControl').css({'top':self.cpCanvasPosY+'px'})
                    // get current pixel
                    var colorData = self.cpCtx.getImageData(currentX, self.cpCanvasPosY, 1, 1);                  
                    self.updatePreviewColor(colorData);                                     
                }
            });

            $(this.cpCanvas).mousedown(function(e) {
                    self.colorPaletteControlMove = true;
            });
            $(this.cpCanvas).mousemove(function(e) {
                if (self.colorPaletteControlMove === true) {

                    var currentOffset = $(this).offset();
                    var currentX = Math.floor(e.pageX - currentOffset.left);
                    self.cpCanvasPosY = Math.floor(e.pageY - currentOffset.top);

                    $('.colorPaletteControl').css({'top':self.cpCanvasPosY+'px'})
                    // get current pixel
                    var colorData = self.cpCtx.getImageData(currentX, self.cpCanvasPosY, 1, 1);                  
                    self.updatePreviewColor(colorData);     
                    
                    
                }
            });
            $(this.cpCanvas).mouseup(function(e) {
                if (self.colorPaletteControlMove === true) {
                     self.colorPaletteControlMove = false;
                }
            });

            return this;

        },
        initRangeInputColor: function(){
            var self = this;

            var cPanel = $('.cPanel');

            cPanel.each(function(){
                
                var range = $(this).find('input[type=range]');
                range.on('input', function(){
                    var val = this.value
                    $(this).closest("div.slide_panel").siblings('label').find('input[type=number]').val(val)
                });  

                var number = $(this).find('input[type=number]');
                number.on('input', function(){
                    var val = this.value
                    if(val<0)val=0;
                    $(this).closest("label").siblings('div.slide_panel').find('input[type=range]').val(val)
                });  
                var number = $(this).find('input[type=number]');
                number.on('change', function(){
                    var val = this.value
                    if(val<0)val=0;
                    $(this).closest("label").siblings('div.slide_panel').find('input[type=range]').val(val)
                });  

                
            })



            return this;
        },
        toRgbString : function () {
            return "rs - rgb(" + this.red + ", " + this.green + ", " + this.blue + ")";
        }
    };


    window.colorPicker = colorPicker;

    



/*
	var bCanPreview = true; // can preview
	var canvas = document.getElementById('picker');
	var ctx = canvas.getContext('2d');
	var cAlpha = 1;

    var gradient = null;
    var gradient2 = null; 
    //ctx.fillStyle = 'white'; 
    gradient = ctx.createLinearGradient(0, 150, 300, 150);
    gradient.addColorStop(0, 'hsla(0, 0%, 50%, 1)');
    gradient.addColorStop(1, 'hsla(0, 0%, 50%, 0)');
    
    gradient2 = ctx.createLinearGradient(150, 0, 150, 300);
    gradient2.addColorStop(0, 'hsl(0, 0%, 100%)');
    gradient2.addColorStop(.5, 'hsla(0, 0%, 100%, 0)');
    gradient2.addColorStop(.5, 'hsla(0, 0%, 0%, 0)');
    gradient2.addColorStop(1, 'hsl(0, 0%, 0%)');

    ctx.fillStyle = gradient;
    ctx.fillRect(0, 0, 300, 300);

    ctx.fillStyle = gradient2;
    ctx.fillRect(0, 0, 300, 300);

	var cpCanvas = document.getElementById('colorPalette');
	var cpCtx = cpCanvas.getContext('2d');

	// The start gradient point is at x1=0, y1=0
	// The end gradient point is at x2=30, y2=300
	var gradient = cpCtx.createLinearGradient(0, 0, 30, 300);
	gradient.addColorStop(0  / 100, 'hsl(0, 100%, 50%)');
	gradient.addColorStop(4  / 100, 'hsl(15, 100%, 50%)');
	gradient.addColorStop(8  / 100, 'hsl(30, 100%, 50%)');
	gradient.addColorStop(12 / 100, 'hsl(45, 100%, 50%)');
	gradient.addColorStop(16 / 100, 'hsl(60, 100%, 50%)');
	gradient.addColorStop(20 / 100, 'hsl(75, 100%, 50%)');
	gradient.addColorStop(24 / 100, 'hsl(90, 100%, 50%)');
	gradient.addColorStop(28 / 100, 'hsl(105, 100%, 50%)');
	gradient.addColorStop(32 / 100, 'hsl(120, 100%, 50%)');
	gradient.addColorStop(36 / 100, 'hsl(135, 100%, 50%)');
	gradient.addColorStop(40 / 100, 'hsl(150, 100%, 50%)');
	gradient.addColorStop(44 / 100, 'hsl(165, 100%, 50%)');
	gradient.addColorStop(48 / 100, 'hsl(180, 100%, 50%)');
	gradient.addColorStop(52 / 100, 'hsl(195, 100%, 50%)');
	gradient.addColorStop(56 / 100, 'hsl(210, 100%, 50%)');
	gradient.addColorStop(60 / 100, 'hsl(225, 100%, 50%)');
	gradient.addColorStop(64 / 100, 'hsl(240, 100%, 50%)');
	gradient.addColorStop(68 / 100, 'hsl(255, 100%, 50%)');
	gradient.addColorStop(72 / 100, 'hsl(270, 100%, 50%)');
	gradient.addColorStop(76 / 100, 'hsl(285, 100%, 50%)');
	gradient.addColorStop(80 / 100, 'hsl(300, 100%, 50%)');
	gradient.addColorStop(84 / 100, 'hsl(315, 100%, 50%)');
	gradient.addColorStop(88 / 100, 'hsl(330, 100%, 50%)');
	gradient.addColorStop(92 / 100, 'hsl(345, 100%, 50%)');
	gradient.addColorStop(96 / 100, 'hsl(0, 100%, 50%');
	cpCtx.fillStyle = gradient;
	cpCtx.fillRect(0, 0, 30, 300);

	

	$(cpCanvas).mousemove(function(e) { // mouse move handler
        if (bCanPreview) {
            // get coordinates of current position
            var currentOffset = $(this).offset();
            var currentX = Math.floor(e.pageX - currentOffset.left);
            var currentY = Math.floor(e.pageY - currentOffset.top);
           
        }
    });

    $(cpCanvas).click(function(e) { // mouse move handler
        if (bCanPreview) {
            // get coordinates of current position
            var currentOffset = $(this).offset();
            var currentX = Math.floor(e.pageX - currentOffset.left);
            var currentY = Math.floor(e.pageY - currentOffset.top);

            // get current pixel
           	var colorData = cpCtx.getImageData(currentX, currentY, 1, 1);
           	var pixel = colorData.data;
            // update preview color
            var color = "rgba("+pixel[0]+", "+pixel[1]+", "+pixel[2]+", "+cAlpha+")";
            
            var c = w3color(color);

            if ((color.indexOf("rgba") > -1 || color.indexOf("hsla") > -1 || color.indexOf("hwba") > -1 || color.indexOf("ncola")) > -1
            || (color.indexOf("cmyk") == -1 && color.split(",").length == 4)
            || (color.indexOf("cmyk") > -1 && color.split(",").length == 5)) {

            	$('#hslVal').val(c.toHslaString());
            	$('#rgbVal').val(c.toRgbaString());
            } else {

            	$('#hslVal').val(c.toHslString());
            	$('#rgbVal').val(c.toRgbString());
            }

            // update controls
            $('.preview').css('backgroundColor', c.toRgbString());
            //$('#picker').css('backgroundColor', c.toRgbString()); 
            ctx.fillStyle = c.toRgbString().toLowerCase();
            ctx.fillRect(0, 0, 300, 300);

            var gradient = null;
			var gradient2 = null; 

			//ctx.fillStyle = 'white'; 

		    gradient = ctx.createLinearGradient(0, 150, 300, 150);
			gradient.addColorStop(0, 'hsla(0, 0%, 50%, 1)');
			gradient.addColorStop(1, 'hsla(0, 0%, 50%, 0)');
		    
			gradient2 = ctx.createLinearGradient(150, 0, 150, 300);
			gradient2.addColorStop(0, 'hsl(0, 0%, 100%)');
			gradient2.addColorStop(.5, 'hsla(0, 0%, 100%, 0)');
		    gradient2.addColorStop(.5, 'hsla(0, 0%, 0%, 0)');
		    gradient2.addColorStop(1, 'hsl(0, 0%, 0%)');

		    ctx.fillStyle = gradient;
			ctx.fillRect(0, 0, 300, 300);

		    ctx.fillStyle = gradient2;
			ctx.fillRect(0, 0, 300, 300);
		    
			
		    
		    


            $('#rVal').val(pixel[0]);
            $('#gVal').val(pixel[1]);
            $('#bVal').val(pixel[2]);
            $('#aVal').val(cAlpha);
            $('#hexVal').val(c.toHexString());
            $('#cmykVal').val(c.toCmykString()); 
       
       
            
        }
    });



    $('#picker').click(function(e) { // click event handler
    		var currentOffset = $(this).offset();
            var currentX = Math.floor(e.pageX - currentOffset.left);
            var currentY = Math.floor(e.pageY - currentOffset.top);
    		// get current pixel
           	var colorData = ctx.getImageData(currentX, currentY, 1, 1);
           	var pixel = colorData.data;
            // update preview color
            var color = "rgba("+pixel[0]+", "+pixel[1]+", "+pixel[2]+", "+cAlpha+")";

            console.log(color)
            
            // var c = w3color(color);
            // $('.preview').css('backgroundColor', c.toRgbString());
            // console.log(c.toRgbString(), c.toHexString())
    	
    }); 
    $('.preview').click(function(e) { // preview click
        //$('.colorpicker').fadeToggle("slow", "linear");
        //bCanPreview = true;
    });

*/

    
})();