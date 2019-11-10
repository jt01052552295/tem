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

var triangle = new Konva.RegularPolygon({
  x: 80,
  y: 120,
  sides: 3,
  radius: 80,
  fill: '#00D2FF',
  stroke: 'black',
  strokeWidth: 4
});

var text = new Konva.Text({
  x: 10,
  y: 10,
  fontFamily: 'Calibri',
  fontSize: 24,
  text: '',
  fill: 'black'
});

triangle.on('mouseout', function() {
  writeMessage('Mouseout triangle');
});

triangle.on('mousemove', function() {
  var mousePos = stage.getPointerPosition();
  var x = mousePos.x - 190;
  var y = mousePos.y - 40;
  writeMessage('x: ' + x + ', y: ' + y);
});

var circle = new Konva.Circle({
  x: 230,
  y: 100,
  radius: 60,
  fill: 'red',
  stroke: 'black',
  strokeWidth: 4
});

circle.on('mouseover', function() {
  writeMessage('Mouseover circle');
});
circle.on('mouseout', function() {
  writeMessage('Mouseout circle');
});
circle.on('mousedown', function() {
  writeMessage('Mousedown circle');
});
circle.on('mouseup', function() {
  writeMessage('Mouseup circle');
});

layer.add(triangle);
layer.add(circle);
layer.add(text);

// add the layer to the stage
stage.add(layer);