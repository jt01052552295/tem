var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();
var offsetX = 0;
var offsetY = 0;
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'purple'];
var yellowBox = null;

for (var n = 0; n < 6; n++) {
  // anonymous function to induce scope
  (function() {
    var i = n;
    var box = new Konva.Rect({
      x: i * 30 + 210,
      y: i * 18 + 40,
      width: 100,
      height: 50,
      fill: colors[i],
      stroke: 'black',
      strokeWidth: 4,
      draggable: true,
      name: colors[i]
    });

    box.on('mouseover', function() {
      document.body.style.cursor = 'pointer';
    });
    box.on('mouseout', function() {
      document.body.style.cursor = 'default';
    });
    if (colors[i] === 'yellow') {
      yellowBox = box;
    }
    layer.add(box);
  })();
}

stage.add(layer);

// add button event bindings
document.getElementById('toTop').addEventListener(
  'click',
  function() {
    yellowBox.moveToTop();
    layer.draw();
  },
  false
);

document.getElementById('toBottom').addEventListener(
  'click',
  function() {
    yellowBox.moveToBottom();
    layer.draw();
  },
  false
);

document.getElementById('up').addEventListener(
  'click',
  function() {
    yellowBox.moveUp();
    layer.draw();
  },
  false
);

document.getElementById('down').addEventListener(
  'click',
  function() {
    yellowBox.moveDown();
    layer.draw();
  },
  false
);

document.getElementById('zIndex').addEventListener(
  'click',
  function() {
    yellowBox.setZIndex(3);
    layer.draw();
  },
  false
);