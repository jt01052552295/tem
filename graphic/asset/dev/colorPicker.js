(function() {

	console.info('color picker')

	var bCanPreview = true; // can preview
	// create canvas and context objects
	var canvas = document.getElementById('picker');
	var ctx = canvas.getContext('2d');


	var cpCanvas = document.getElementById('colorPalette');
	var cpCtx = cpCanvas.getContext('2d');
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

	// drawing active image
	var image = new Image();
	image.onload = function () {
	    ctx.drawImage(image, 0, 0, image.width, image.height); // draw the image on the canvas
	}
	// select desired colorwheel
	var imageSrc = './asset/img/colorwheel3.png';
	image.src = imageSrc;

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
           	
           	console.log(pixel)
            // update preview color
            var pixelColor = "rgb("+pixel[0]+", "+pixel[1]+", "+pixel[2]+")";
            $('.preview').css('backgroundColor', pixelColor);

            // update controls
            $('#rVal').val(pixel[0]);
            $('#gVal').val(pixel[1]);
            $('#bVal').val(pixel[2]);
            $('#rgbVal').val(pixel[0]+','+pixel[1]+','+pixel[2]);
            var dColor = pixel[2] + 256 * pixel[1] + 65536 * pixel[0];
            $('#hexVal').val('#' + ('0000' + dColor.toString(16)).substr(-6));
       
            
        }
    });



    $('#picker').click(function(e) { // click event handler
        //bCanPreview = !bCanPreview;
    }); 
    $('.preview').click(function(e) { // preview click
        //$('.colorpicker').fadeToggle("slow", "linear");
        //bCanPreview = true;
    });

	


})();