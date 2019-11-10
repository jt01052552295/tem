var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});
var layer = new Konva.Layer();

var shape1 = new Konva.RegularPolygon({
  x: 80,
  y: stage.height() / 2,
  sides: 5,
  radius: 70,
  fill: 'red',
  stroke: 'black',
  strokeWidth: 4,
  draggable: true
});

var shape2 = new Konva.RegularPolygon({
  x: 220,
  y: stage.height() / 2,
  sides: 5,
  radius: 70,
  fill: 'green',
  stroke: 'black',
  strokeWidth: 4,
  draggable: true
});

var shape3 = new Konva.RegularPolygon({
  x: 360,
  y: stage.height() / 2,
  sides: 5,
  radius: 70,
  fillLinearGradientStartPoint: { x: -50, y: -50 },
  fillLinearGradientEndPoint: { x: 50, y: 50 },
  fillLinearGradientColorStops: [0, 'red', 1, 'yellow'],
  stroke: 'black',
  strokeWidth: 4,
  draggable: true
});

shape1.on('mouseenter', function() {
  stage.container().style.cursor = 'pointer';
});

shape1.on('mouseleave', function() {
  stage.container().style.cursor = 'default';
});

shape2.on('mouseenter', function() {
  stage.container().style.cursor = 'move';
});

shape2.on('mouseleave', function() {
  stage.container().style.cursor = 'default';
});

shape3.on('mouseenter', function() {
  stage.container().style.cursor = 'crosshair';
});

shape3.on('mouseleave', function() {
  stage.container().style.cursor = 'default';
});

layer.add(shape1);
layer.add(shape2);
layer.add(shape3);
stage.add(layer);