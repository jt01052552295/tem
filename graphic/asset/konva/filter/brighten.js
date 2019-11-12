
function loadImages(sources, callback) {
  var images = {};
  var loadedImages = 0;
  var numImages = 0;
  for (var src in sources) {
    numImages++;
  }
  for (var src in sources) {
    images[src] = new Image();
    images[src].onload = function() {
      if (++loadedImages >= numImages) {
        callback(images);
      }
    };
    images[src].src = sources[src];
  }
}
function buildStage(images) {
  var stage = new Konva.Stage({
    container: 'container',
    width: window.innerWidth,
    height: window.innerHeight
  });

  var layer = new Konva.Layer();

  var lion = new Konva.Image({
    image: images.lion,
    x: 80,
    y: 30,
    draggable: true
  });

  lion.cache();
  lion.filters([Konva.Filters.Brighten]);
  layer.add(lion);
  stage.add(layer);
  var slider = document.getElementById('slider');
  slider.oninput = function() {
    lion.brightness(slider.value);
    layer.batchDraw();
  };
}

var sources = {
  lion: './asset/lion.png'
};

loadImages(sources, buildStage);