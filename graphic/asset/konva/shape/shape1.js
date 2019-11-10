var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();

var rect = new Konva.Rect({
  x: 20,
  y: 20,
  width: 100,
  height: 50,
  fill: 'green',
  stroke: 'black',
  strokeWidth: 4
});
// add the shape to the layer
layer.add(rect);

var rect3 = new Konva.Rect({
  x: 50,
  y: 120,
  width: 100,
  height: 100,
  fill: 'blue',
  cornerRadius: [0, 10, 20, 30]
});
layer.add(rect3);

var rect1 = new Konva.Ellipse({
  x: stage.width() / 2,
  y: stage.height() / 2,
  radiusX: 100,
  radiusY: 50,
  fill: 'yellow',
  stroke: 'black',
  strokeWidth: 4
});
// add the shape to the layer
layer.add(rect1);

var wedge = new Konva.Wedge({
  x: 200,
  y: 300,
  radius: 70,
  angle: 60,
  fill: 'red',
  stroke: 'black',
  strokeWidth: 4,
  rotation: -120
});

// add the shape to the layer
layer.add(wedge);



// add the layer to the stage
stage.add(layer);