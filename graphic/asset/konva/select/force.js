var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();
stage.add(layer);

var group = new Konva.Group({
  x: 50,
  y: 50,
  draggable: true
});
layer.add(group);

// create new transformer
var tr = new Konva.Transformer();
layer.add(tr);
tr.attachTo(group);
layer.draw();

document.getElementById('button').addEventListener('click', addShape);
addShape();

function addShape() {
  group.add(
    new Konva.Circle({
      x: Math.random() * 100,
      y: Math.random() * 100,
      radius: Math.random() * 100,
      fill: Konva.Util.getRandomColor(),
      stroke: 'black',
      strokeWidth: Math.random() * 10
    })
  );
  // force update manually
  tr.forceUpdate();
  layer.draw();
}