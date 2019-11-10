var stage = new Konva.Stage({
  container: 'container',
  width: window.innerWidth,
  height: window.innerHeight
});

var layer = new Konva.Layer();

var group = new Konva.Group();

var circle = new Konva.Circle({
  x: stage.width() / 2,
  y: stage.height() / 2,
  radius: 70,
  fill: 'red',
  stroke: 'black',
  strokeWidth: 4
});

circle.on('click', function(evt) {
  alert('You clicked the circle!');
  evt.cancelBubble = true;
});

group.on('click', function() {
  alert('You clicked on the group!');
});

layer.on('click', function() {
  alert('You clicked on the layer!');
});

group.add(circle);
layer.add(group);

// add the layer to the stage
stage.add(layer);