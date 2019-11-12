var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();

var rectHeight = 50;
var rectWidth = 100;
var rectY = (stage.height() - rectHeight) / 2;

var hbox = new Konva.Text({
  x: 20,
  y: 70,
  fontSize: 24,
  fontFamily: 'Calibri',
  text: 'horizontal',
  fill: 'black',
  padding: 15,
  draggable: true,
  dragBoundFunc: function(pos) {
    return {
      x: pos.x,
      y: this.absolutePosition().y
    };
  }
});

var vbox = new Konva.Text({
  x: 150,
  y: 70,
  draggable: true,
  fontSize: 24,
  fontFamily: 'Calibri',
  text: 'vertical',
  fill: 'black',
  padding: 15,
  dragBoundFunc: function(pos) {
    return {
      x: this.absolutePosition().x,
      y: pos.y
    };
  }
});

layer.add(hbox);
layer.add(vbox);
// add the layer to the stage
stage.add(layer);