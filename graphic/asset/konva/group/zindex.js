var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();
stage.add(layer);

// create first group with two shapes
var group1 = new Konva.Group();
layer.add(group1);

var blackRect = new Konva.Rect({
  x: 20,
  y: 20,
  fill: 'black',
  width: 100,
  height: 100
});
group1.add(blackRect);

var redCircle = new Konva.Circle({
  x: 70,
  y: 70,
  fill: 'red',
  radius: 30
});
group1.add(redCircle);

// now the red circle on on top of black rectangle
// we can change its zIndex with:
redCircle.zIndex(0);

// if we what to move it back to the top we can change its zIndex again
// or we can change zIndex of black rectangle:
blackRect.zIndex(0);
// after that zIndex of red circle will be changed back to 1:
console.log('red circle index: ' + redCircle.zIndex());

// crete second group with one shape
var group2 = new Konva.Group();
layer.add(group2);

var greenRect = new Konva.Rect({
  x: 70,
  y: 70,
  width: 100,
  height: 100,
  fill: 'green'
});
group2.add(greenRect);

layer.draw();