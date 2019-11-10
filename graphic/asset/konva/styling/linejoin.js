var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});
var layer = new Konva.Layer();

var triangle = new Konva.RegularPolygon({
  x: stage.width() / 2,
  y: stage.height() / 2,
  sides: 3,
  radius: 70,
  fill: 'red',
  stroke: 'black',
  strokeWidth: 20,
  lineJoin: 'bevel'
});

triangle.on('mouseover', function() {
  this.lineJoin('round');
  layer.draw();
});

triangle.on('mouseout', function() {
  this.lineJoin('bevel');
  layer.draw();
});

// add the shape to the layer
layer.add(triangle);

// add the layer to the stage
stage.add(layer);