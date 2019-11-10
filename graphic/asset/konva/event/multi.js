function writeMessage(message) {
  text.text(message);
  layer.draw();
}

var stage = new Konva.Stage({
  container: 'container',
  width: window.innerWidth,
  height: window.innerHeight
});

var layer = new Konva.Layer();

var text = new Konva.Text({
  x: 10,
  y: 10,
  fontFamily: 'Calibri',
  fontSize: 20,
  text: '',
  fill: 'black'
});

var numEvents = 0;

var circle = new Konva.Circle({
  x: stage.width() / 2,
  y: stage.height() / 2 + 10,
  radius: 70,
  fill: 'red',
  stroke: 'black',
  strokeWidth: 4
});

circle.on('mouseover mousedown mouseup', function() {
  writeMessage('Multi-event binding!  Events: ' + ++numEvents);
});
circle.on('mouseout', function() {
  writeMessage('');
});

layer.add(circle);
layer.add(text);

// add the layer to the stage
stage.add(layer);