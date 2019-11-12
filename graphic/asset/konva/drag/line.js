var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();

// complex dashed and dotted line
var blueLine = new Konva.Line({
  y: 50,
  points: [10, 70, 40, 23, 150, 60, 250, 20],
  stroke: 'blue',
  strokeWidth: 10,
  lineCap: 'round',
  lineJoin: 'round',
  /*
   * line segments with a length of 29px with a gap
   * of 20px followed by a line segment of 0.001px (a dot)
   * followed by a gap of 20px
   */
  dash: [29, 20, 0.001, 20],
  draggable: true
});

layer.add(blueLine);
stage.add(layer);