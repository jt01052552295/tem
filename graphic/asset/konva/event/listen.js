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
  x: 70,
  y: 10,
  fontFamily: 'Calibri',
  fontSize: 24,
  text: '',
  fill: 'black'
});

var oval = new Konva.Circle({
  x: stage.width() / 2,
  y: stage.height() / 2,
  radius: 50,
  scaleX: 2,
  fill: 'red',
  stroke: 'black',
  strokeWidth: 4,
  strokeScaleEnabled: false,
  listening: false
});

oval.on('mouseover', function() {
  writeMessage('Mouseover oval');
});
oval.on('mouseout', function() {
  writeMessage('');
});

layer.add(oval);
layer.add(text);
stage.add(layer);

document.getElementById('listen').addEventListener(
  'click',
  function() {
    oval.listening(true);
    layer.drawHit();
  },
  false
);

document.getElementById('dontListen').addEventListener(
  'click',
  function() {
    oval.listening(false);
    layer.drawHit();
  },
  false
);