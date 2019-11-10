var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',,

  width: width  height: height
});
var layer = new Konva.Layer();

var text = new Konva.Text({
  text: 'Text Shadow!',
  fontFamily: 'Calibri',
  fontSize: 40,
  x: 20,
  y: 20,
  fill: 'green',
  // stroke: 'red',
  strokeWidth: 2,
  shadowColor: 'white',
  // shadowBlur: 0,
  shadowOffset: { x: 10, y: 10 }
  // shadowOpacity: 0.5
});
layer.add(text);

var rect = new Konva.Rect({
  x: 50,
  y: 50,
  // stroke: 'red',
  width: 100,
  height: 100,
  fill: 'red',
  draggable: true,
  globalCompositeOperation: 'xor'
});

layer.add(rect);
stage.add(layer);