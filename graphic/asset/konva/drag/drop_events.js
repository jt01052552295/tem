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

var box = new Konva.Rect({
  x: 20,
  y: 100,
  offset: [50, 25],
  width: 100,
  height: 50,
  fill: '#00D2FF',
  stroke: 'black',
  strokeWidth: 4,
  draggable: true
});

// write out drag and drop events
box.on('dragstart', function() {
  writeMessage('dragstart');
});
box.on('dragend', function() {
  writeMessage('dragend');
});

layer.add(text);
layer.add(box);

// add the layer to the stage
stage.add(layer);