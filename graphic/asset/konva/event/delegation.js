var stage = new Konva.Stage({
  container: 'container',
  width: window.innerWidth,
  height: window.innerHeight
});

var layer = new Konva.Layer();

var star = new Konva.Star({
  x: stage.width() / 2,
  y: stage.height() / 2,
  numPoints: 15,
  innerRadius: 40,
  outerRadius: 70,
  fill: 'blue',
  scale: {
    x: 2,
    y: 0.5
  },
  name: 'my star'
});

layer.on('click', function(evt) {
  // get the shape that was clicked on
  var shape = evt.target;
  alert('you clicked on "' + shape.name() + '"');
});

layer.add(star);

// add the layer to the stage
stage.add(layer);