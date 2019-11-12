var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();
var yellowGroup = new Konva.Group({
  x: 100,
  y: 100,
  draggable: true
});
var blueGroup = new Konva.Group({
  x: 300,
  y: 80,
  draggable: true
});

var box = new Konva.Rect({
  x: 10,
  y: 10,
  width: 100,
  height: 50,
  fill: 'red',
  stroke: 'black'
});

var yellowCircle = new Konva.Circle({
  x: 0,
  y: 0,
  radius: 50,
  fill: 'yellow',
  stroke: 'black'
});

var blueCircle = new Konva.Circle({
  x: 0,
  y: 0,
  radius: 50,
  fill: 'blue',
  stroke: 'black'
});

// build node tree
yellowGroup.add(yellowCircle);
yellowGroup.add(box);
blueGroup.add(blueCircle);
layer.add(yellowGroup);
layer.add(blueGroup);
stage.add(layer);

// add button event bindings
document.getElementById('toBlue').addEventListener(
  'click',
  function() {
    box.moveTo(blueGroup);
    layer.draw();
  },
  false
);

document.getElementById('toYellow').addEventListener(
  'click',
  function() {
    box.moveTo(yellowGroup);
    layer.draw();
  },
  false
);