var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();

var defaultBehaviourRect = new Konva.Rect({
  width: 100,
  height: 100,
  fill: 'green'
});
layer.add(defaultBehaviourRect);

var noPreventDefaultRect = new Konva.Rect({
  x: 200,
  y: 50,
  width: 100,
  height: 100,
  fill: 'red',
  preventDefault: false
});

layer.add(noPreventDefaultRect);

// add the layer to the stage
stage.add(layer);