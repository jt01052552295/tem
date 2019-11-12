var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();

// bound below y=50
var blueGroup = new Konva.Group({
  x: 30,
  y: 70,
  draggable: true,
  dragBoundFunc: function(pos) {
    var newY = pos.y < 50 ? 50 : pos.y;
    return {
      x: pos.x,
      y: newY
    };
  }
});

// bound inside a circle
var yellowGroup = new Konva.Group({
  x: stage.width() / 2,
  y: 70,
  draggable: true,
  dragBoundFunc: function(pos) {
    var x = stage.width() / 2;
    var y = 70;
    var radius = 50;
    var scale =
      radius / Math.sqrt(Math.pow(pos.x - x, 2) + Math.pow(pos.y - y, 2));
    if (scale < 1)
      return {
        y: Math.round((pos.y - y) * scale + y),
        x: Math.round((pos.x - x) * scale + x)
      };
    else return pos;
  }
});

var blueText = new Konva.Text({
  fontSize: 26,
  fontFamily: 'Calibri',
  text: 'bound below',
  fill: 'black',
  padding: 10
});

var blueRect = new Konva.Rect({
  width: blueText.width(),
  height: blueText.height(),
  fill: '#aaf',
  stroke: 'black',
  strokeWidth: 4
});

var yellowText = new Konva.Text({
  fontSize: 26,
  fontFamily: 'Calibri',
  text: 'bound in circle',
  fill: 'black',
  padding: 10
});

var yellowRect = new Konva.Rect({
  width: yellowText.width(),
  height: yellowText.height(),
  fill: 'yellow',
  stroke: 'black',
  strokeWidth: 4
});

blueGroup.add(blueRect).add(blueText);
yellowGroup.add(yellowRect).add(yellowText);

layer.add(blueGroup);
layer.add(yellowGroup);

// add the layer to the stage
stage.add(layer);