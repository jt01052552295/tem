
var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();

var lion = new Konva.Image({
  x: 80,
  y: 30,
  draggable: true
});
layer.add(lion);
stage.add(layer);

var image = new Image();
image.onload = function() {
  lion.image(image);
  lion.cache();
  lion.filters([Konva.Filters.Blur]);
  lion.blurRadius(10);
  layer.draw();

  // the tween has to be created after the node has been added to the layer
  var tween = new Konva.Tween({
    node: lion,
    duration: 0.6,
    blurRadius: 0,
    easing: Konva.Easings.EaseInOut
  });

  lion.on('mouseover', function() {
    tween.play();
  });

  lion.on('mouseout', function() {
    tween.reverse();
  });
};
image.src = './asset/lion.png';