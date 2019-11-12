var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var shapesLayer = new Konva.Layer();
var group = new Konva.Group({
  draggable: true
});
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'purple'];

for (var i = 0; i < 6; i++) {
  var box = new Konva.Rect({
    x: i * 30 + 10,
    y: i * 18 + 40,
    width: 100,
    height: 50,
    name: colors[i],
    fill: colors[i],
    stroke: 'black',
    strokeWidth: 4
  });
  group.add(box);
}

group.on('mouseover', function() {
  document.body.style.cursor = 'pointer';
});
group.on('mouseout', function() {
  document.body.style.cursor = 'default';
});

shapesLayer.add(group);
stage.add(shapesLayer);