
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

var circle = new Konva.Circle({
  x: stage.width() / 2,
  y: stage.height() / 2 + 10,
  radius: 70,
  fill: 'red',
  stroke: 'black',
  strokeWidth: 4
});

circle.on('click', function() {
  alert('You clicked on the circle');
});

layer.add(circle);
stage.add(layer);

document.getElementById('removeClick').addEventListener(
  'click',
  function() {
    circle.off('click');
    alert('onclick removed');
  },
  false
);