var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();

/*
 * create a group which will be used to combine
 * multiple simple shapes.  Transforming the group will
 * transform all of the simple shapes together as
 * one unit
 */
var group = new Konva.Group({
  x: 120,
  y: 40,
  rotation: 20
});

var colors = ['red', 'orange', 'yellow'];

for (var i = 0; i < 3; i++) {
  var box = new Konva.Rect({
    x: i * 30,
    y: i * 18,
    width: 100,
    height: 50,
    name: colors[i],
    fill: colors[i],
    stroke: 'black',
    strokeWidth: 4
  });

  group.add(box);
}

layer.add(group);
stage.add(layer);