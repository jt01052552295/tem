
var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();
// add the layer to the stage
stage.add(layer);

var circle = new Konva.Circle({
  x: stage.width() / 2,
  y: stage.height() / 2,
  fill: 'blue',
  radius: 30
});

layer.add(circle).draw();

stage.on('click', function(e) {
  // e.target is a clicked Konva.Shape or current stage if you clicked on empty space
  console.log('clicked on', e.target);
  console.log(
    'usual click on ' + JSON.stringify(stage.getPointerPosition())
  );
});