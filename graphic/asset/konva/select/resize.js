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

var MAX_WIDTH = 200;
// create new transformer
var tr = new Konva.Transformer({
  boundBoxFunc: function(oldBoundBox, newBoundBox) {
    // "boundBox" is an object with
    // x, y, width, height and rotation properties
    // transformer tool will try to fit node into that box
    // "width" property here is a visible width of the object
    // so it equals to rect.width() * rect.scaleX()

    // the logic is simple, if new width is too big
    // we will return previous state
    if (Math.abs(newBoundBox.width) > MAX_WIDTH) {
      return oldBoundBox;
    }

    return newBoundBox;
  }
});
layer.add(tr);
tr.attachTo(rect);
layer.draw();