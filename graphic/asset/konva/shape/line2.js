var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();

// To define the path of the line you should use points property. 
// If you have three points with x and y coordinates you should define points property as: [x1, y1, x2, y2, x3, y3].

var poly = new Konva.Line({
  points: [23, 20, 23, 160, 70, 93, 150, 109, 290, 139, 270, 93],
  fill: '#00D2FF',
  stroke: 'black',
  strokeWidth: 5,
  closed: true
});

// add the shape to the layer
layer.add(poly);

// add the layer to the stage
stage.add(layer);