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
stage.add(layer);

var text = new Konva.Text({
  x: 10,
  y: 30,
  fontSize: 24,
  fill: 'black'
});
layer.add(text);

var star = new Konva.Star({
  x: stage.width() / 2,
  y: stage.height() / 2,
  numPoints: 7,
  innerRadius: 50,
  outerRadius: 70,
  fill: 'red',
  stroke: 'black',
  strokeWidth: 4,
  hitFunc: function(context) {
    context.beginPath();
    context.arc(0, 0, this.outerRadius() + 10, 0, Math.PI * 2, true);
    context.closePath();
    context.fillStrokeShape(this);
  }
});
layer.add(star);

var line = new Konva.Line({
  x: 50,
  y: 100,
  points: [0, 0, 50, 0, 50, 100, 0, 100],
  tension: 1,
  strokeWidth: 1,
  hitStrokeWidth: 20,
  stroke: 'black'
});
layer.add(line);

layer.draw();

star.on('mouseover', function() {
  writeMessage('Mouseover star');
});
star.on('mouseout', function() {
  writeMessage('Mouseout star');
});
star.on('mousedown', function() {
  writeMessage('Mousedown star');
});
star.on('mouseup', function() {
  writeMessage('Mouseup star');
});

line.on('mouseover', function() {
  writeMessage('Mouseover line');
});
line.on('mouseout', function() {
  writeMessage('Mouseout line');
});
line.on('mousedown', function() {
  writeMessage('Mousedown line');
});
line.on('mouseup', function() {
  writeMessage('Mouseup line');
});

document.getElementById('toggle').addEventListener('click', function() {
  layer.toggleHitCanvas();
});