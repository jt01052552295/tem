(function() {

	console.info('color picker')


    function colorPicker() {
        if (!(this instanceof colorPicker)) { return new colorPicker(); }
        this.initUI();    
    }

    colorPicker.prototype = {
        initUI : function() {
            this.obj = this;
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

            this.r01 = document.getElementById("r01");
            this.g01 = document.getElementById("g01");
            this.b01 = document.getElementById("b01");
            this.h01 = document.getElementById("h01");
            this.s01 = document.getElementById("s01");
            this.l01 = document.getElementById("l01");
            this.c01 = document.getElementById("c01");
            this.m01 = document.getElementById("m01");
            this.y01 = document.getElementById("y01");
            this.k01 = document.getElementById("k01");

            this.r01v = document.getElementById("r01v");
            this.g01v = document.getElementById("g01v");
            this.b01v = document.getElementById("b01v");
            this.h01v = document.getElementById("h01v");
            this.s01v = document.getElementById("s01v");
            this.l01v = document.getElementById("l01v");
            this.c01v = document.getElementById("c01v");
            this.m01v = document.getElementById("m01v");
            this.y01v = document.getElementById("y01v");
            this.k01v = document.getElementById("k01v");



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
        setColorValue: function(c){
            
            $('#rVal').val(c.red);
            $('#gVal').val(c.green);
            $('#bVal').val(c.blue);
            $('#hslVal').val(c.toHslString());
            $('#rgbVal').val(c.toRgbString());
            $('#hexVal').val(c.toHexString());
            $('#cmykVal').val(c.toCmykString()); 

            this.r01.value = c.red;
            this.g01.value = c.green;
            this.b01.value = c.blue;
            this.h01.value = c.hue;
            this.s01.value = Math.round(c.sat * 100);
            this.l01.value = Math.round(c.lightness * 100);
            this.c01.value = Math.round(c.cyan * 100);
            this.m01.value = Math.round(c.magenta * 100);
            this.y01.value = Math.round(c.yellow * 100);
            this.k01.value = Math.round(c.black * 100);
            this.r01v.value = c.red;
            this.g01v.value = c.green;
            this.b01v.value = c.blue;
            this.h01v.value = c.hue;
            this.s01v.value = Math.round(c.sat * 100);
            this.l01v.value = Math.round(c.lightness * 100);
            this.c01v.value = Math.round(c.cyan * 100);
            this.m01v.value = Math.round(c.magenta * 100);
            this.y01v.value = Math.round(c.yellow * 100);
            this.k01v.value = Math.round(c.black * 100);
        },
        updatePreviewColor: function(colorData){
            if(!colorData) return;
            var self = this;
            var pixel = colorData.data;
            // update preview color
            var color = "rgba("+pixel[0]+", "+pixel[1]+", "+pixel[2]+", "+self.cAlpha+")";
            var c = w3color(color);

            self.setColorValue(c);             

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



            return this;
        },
        updatePreviewColor2: function(colorData){
            if(!colorData) return;
            var self = this;
            var pixel = colorData.data;
            // update preview color
            var color = "rgba("+pixel[0]+", "+pixel[1]+", "+pixel[2]+", "+self.cAlpha+")";
            var c = w3color(color);

            

            self.setColorValue(c); 

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
            var c = w3color("hsl(" + this.h01.value + ", " + this.s01.value + "%, " + this.l01.value + "%)");
            self.setColorValue(c);   

            var cPanel = $('.cPanel');
            cPanel.each(function(){
               
                var range = $(this).find('input[type=range]');
                range.on('input', function(){
                    var val = this.value
                    $(this).closest("div.slide_panel").siblings('label').find('input[type=number]').val(val)
                    self.updateRangeInputColor(this);
                });  

                var number = $(this).find('input[type=number]');
                number.on('input', function(){
                    var val = this.value
                    if(val<0)val=0;
                    $(this).closest("label").siblings('div.slide_panel').find('input[type=range]').val(val)
                    self.updateRangeInputColor(this);
                }).on('change', function(){
                    var val = this.value
                    if(val<0)val=0;
                    $(this).closest("label").siblings('div.slide_panel').find('input[type=range]').val(val)
                    self.updateRangeInputColor(this);
                });  
            })

            return self;
        },
        updateRangeInputColor: function(e){
            // console.log(this.r01.value)
            // console.log(e.className, e.value)

            // var a = w3color("rgb(" + this.r01.value + ", " + this.g01.value + "%, " + this.b01.value + "%)");
            // var b = w3color("hsl(" + this.h01.value + ", " + this.s01.value + "%, " + this.l01.value + "%)");
            // var c = w3color("cmyk(" + this.c01.value  + ", " + this.m01.value + ", " + this.y01.value + ", " + this.k01.value + ")");


            return this;
        },
        
        toRgbString : function () {
            return "rs - rgb(" + this.red + ", " + this.green + ", " + this.blue + ")";
        }
    };



    window.colorPicker = colorPicker;


})();