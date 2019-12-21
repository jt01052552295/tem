var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();

var group = new Konva.Group({
  clip: {
    x: 100,
    y: 40,
    width: 200,
    height: 100
  },
  draggable: true
});

var blueBlob = new Konva.Line({
  points: [73, 140, 340, 23, 500, 109, 300, 170],
  stroke: 'blue',
  strokeWidth: 10,
  fill: '#aaf',
  tension: 0.8,
  closed: true
});

var redBlob = new Konva.Line({
  points: [73, 140, 340, 23, 500, 109],
  stroke: 'red',
  strokeWidth: 10,
  fill: '#faa',
  tension: 1.2,
  scale: { x: 0.5, y: 0.5 },
  x: 100,
  y: 50,
  closed: true
});

group.add(blueBlob);
group.add(redBlob);
layer.add(group);

// add the layer to the stage
stage.add(layer);