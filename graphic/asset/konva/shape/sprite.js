var width = window.innerWidth;
var height = window.innerHeight;

var stage = new Konva.Stage({
  container: 'container',
  width: width,
  height: height
});

var layer = new Konva.Layer();
var animations = {
  idle: [
    // x, y, width, height (4 frames)
    2, 2, 70, 119,
    71, 2, 74, 119,
    146, 2, 81, 119,
    226, 2, 76, 119
  ],
  punch: [
      // x, y, width, height (4 frames)
      2, 138, 74, 122,
      76, 138, 84, 122,
      346, 138, 120, 122
  ]
};

var imageObj = new Image();
imageObj.onload = function() {
  var blob = new Konva.Sprite({
    x: 50,
    y: 50,
    image: imageObj,
    animation: 'idle',
    animations: animations,
    frameRate: 7,
    frameIndex: 0
  });

  // add the shape to the layer
  layer.add(blob);

  // add the layer to the stage
  stage.add(layer);

  // start sprite animation
  blob.start();

  // resume transition
  document.getElementById('punch').addEventListener(
    'click',
    function() {
      blob.animation('punch');
      blob.on('frameIndexChange.button', function() {
        if (this.frameIndex() === 2) {
          setTimeout(function() {
            blob.animation('idle');
            blob.off('.button');
          }, 1000 / blob.frameRate());
        }
      });
    },
    false
  );
};
imageObj.src = './asset/blob-sprite.png';