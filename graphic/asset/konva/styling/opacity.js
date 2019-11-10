var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});
var layer = new Konva.Layer();

var pentagon = new Konva.RegularPolygon({
  x: stage.width() / 2,
  y: stage.height() / 2,
  sides: 5,
  radius: 70,
  fill: 'red',
  stroke: 'black',
  strokeWidth: 4,
  opacity: 0.5
});

pentagon.on('mouseover', function() {
  this.opacity(1);
  layer.draw();
});

pentagon.on('mouseout', function() {
  this.opacity(0.5);
  layer.draw();
});

// add the shape to the layer
layer.add(pentagon);

// add the layer to the stage
stage.add(layer);