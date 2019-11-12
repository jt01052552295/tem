var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();
stage.add(layer);

var circle = new Konva.Circle({
  x: 150,
  y: 150,
  radius: 70,
  fill: 'red',
  draggable: true
});
layer.add(circle);

// create new transformer
var tr = new Konva.Transformer({
  anchorStroke: 'red',
  anchorFill: 'yellow',
  anchorSize: 20,
  borderStroke: 'green',
  borderDash: [3, 3]
});
layer.add(tr);
tr.attachTo(circle);
layer.draw();