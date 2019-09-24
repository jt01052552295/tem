(function() {

	console.info('color picker')

	var bCanPreview = true; // can preview
	// create canvas and context objects
	var canvas = document.getElementById('picker');
	var ctx = canvas.getContext('2d');
	// drawing active image
	var image = new Image();
	image.onload = function () {
	    ctx.drawImage(image, 0, 0, image.width, image.height); // draw the image on the canvas
	}
	// select desired colorwheel
	var imageSrc = './asset/img/colorwheel3.png';
	image.src = imageSrc;


})();