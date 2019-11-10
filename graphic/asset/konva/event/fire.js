
var stage = new Konva.Stage({
  container: 'container',
  width: window.innerWidth,
  height: window.innerHeight
});

var layer = new Konva.Layer();

var circle = new Konva.Circle({
  x: stage.width() / 2,
  y: stage.height() / 2 + 10,
  radius: 70,
  fill: 'red',
  stroke: 'black',
  strokeWidth: 4
});

var text = new Konva.Text({
  text: '',
  fontFamily: 'Calibri',
  fontSize: 24,
  fill: 'black',
  x: 10,
  y: 10
});

circle.on('click', function(evt) {
  text.text('you clicked on the circle!');
  layer.draw();
});

layer.add(circle).add(text);
stage.add(layer);

// simulate click on circle
circle.fire('click');