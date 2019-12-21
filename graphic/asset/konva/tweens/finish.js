
function writeMessage(message) {
  text.text(message);
  layer.draw();
}

var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();

var text = new Konva.Text({
  x: 10,
  y: 10,
  fontFamily: 'Calibri',
  fontSize: 24,
  text: '',
  fill: 'black'
});

var wheel = new Konva.Star({
  x: stage.width() / 2,
  y: stage.height() / 2,
  numPoints: 8,
  outerRadius: 70,
  innerRadius: 50,
  fill: 'purple',
  stroke: 'black',
  strokeWidth: 5,
  lineJoin: 'bevel'
});

layer.add(wheel);
layer.add(text);
stage.add(layer);

// the tween has to be created after the node has been added to the layer
var tween = new Konva.Tween({
  node: wheel,
  duration: 4,
  rotation: 360,
  easing: Konva.Easings.BackEaseOut,
  onFinish: function() {
    writeMessage('tween finished!');
  }
});

setTimeout(function() {
  tween.play();
}, 1000);