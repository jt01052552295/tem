var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();
stage.add(layer);

var rect = new Konva.Rect({
  x: 160,
  y: 60,
  width: 100,
  height: 90,
  fill: 'red',
  name: 'rect',
  stroke: 'black',
  draggable: true
});
layer.add(rect);

var text = new Konva.Text({
  x: 5,
  y: 5
});
layer.add(text);
updateText();

// create new transformer
var tr = new Konva.Transformer();
layer.add(tr);
tr.attachTo(rect);
layer.draw();

rect.on('transformstart', function() {
  console.log('transform start');
});

rect.on('dragmove', function() {
  updateText();
});
rect.on('transform', function() {
  updateText();
  console.log('transform');
});

rect.on('transformend', function() {
  console.log('transform end');
});

function updateText() {
  var lines = [
    'x: ' + rect.x(),
    'y: ' + rect.y(),
    'rotation: ' + rect.rotation(),
    'width: ' + rect.width(),
    'height: ' + rect.height(),
    'scaleX: ' + rect.scaleX(),
    'scaleY: ' + rect.scaleY()
  ];
  text.text(lines.join('\n'));
  layer.batchDraw();
}