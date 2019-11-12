var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();
stage.add(layer);

var rect = new Konva.Rect({
  x: 160,
  y: 60,
  width: 100,
  height: 90,
  fill: 'red',
  name: 'rect',
  stroke: 'black',
  draggable: true
});
layer.add(rect);

// create new transformer
var tr = new Konva.Transformer();
layer.add(tr);
tr.attachTo(rect);
layer.draw();

tr.on('transform', function() {
  var width = rect.width() * rect.scaleX();
  if (width > 200) {
    tr.stopTransform();
    // reset visible width to 200
    // so future transform is possible
    var scaleX = 200 / rect.width();
    rect.scaleX(scaleX);
  }
});