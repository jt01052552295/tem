
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

circle.on('click.event1', function() {
  alert('First Listener');
});
circle.on('click.event2', function() {
  alert('Second Listener');
});

layer.add(circle);
stage.add(layer);

document.getElementById('remove1').addEventListener(
  'click',
  function() {
    circle.off('click.event1');
    alert('First onclick removed');
  },
  false
);

document.getElementById('remove2').addEventListener(
  'click',
  function() {
    circle.off('click.event2');
    alert('Second onclick removed');
  },
  false
);

document.getElementById('removeAll').addEventListener(
  'click',
  function() {
    circle.off('click');
    alert('All onclicks removed');
  },
  false
);