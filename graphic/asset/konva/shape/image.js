var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();
stage.add(layer);

// For image property you can use:

// instance of window.Image or document.createElement('image')
// canvas element
// video element

// main API:
var imageObj = new Image();
imageObj.onload = function() {
  var yoda = new Konva.Image({
    x: 50,
    y: 50,
    image: imageObj,
    width: 106,
    height: 118
  });

  // add the shape to the layer
  layer.add(yoda);
  layer.batchDraw();
};
imageObj.src = './asset/yoda.jpg';

// alternative API:
Konva.Image.fromURL('./asset/darth-vader.jpg', function(darthNode) {
  darthNode.setAttrs({
    x: 200,
    y: 50,
    scaleX: 0.5,
    scaleY: 0.5
  });
  layer.add(darthNode);
  layer.batchDraw();
});