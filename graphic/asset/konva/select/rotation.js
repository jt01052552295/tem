var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();
stage.add(layer);

var text = new Konva.Text({
  x: 50,
  y: 70,
  fontSize: 30,
  text: 'Rotate me',
  draggable: true
});
layer.add(text);

var tr1 = new Konva.Transformer({
  node: text,
  centeredScaling: true,
  rotationSnaps: [0, 90, 180, 270],
  resizeEnabled: false
});
layer.add(tr1);

layer.draw();