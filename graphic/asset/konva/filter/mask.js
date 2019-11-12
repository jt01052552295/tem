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

  var vader = new Konva.Image({
    image: images.vader,
    x: 80,
    y: 30,
    threshold: 20,
    draggable: true
  });

  vader.cache();
  vader.filters([Konva.Filters.Mask]);
  layer.add(vader);
  stage.add(layer);
  var slider = document.getElementById('slider');
  slider.oninput = function() {
    vader.threshold(slider.value);
    layer.batchDraw();
  };
}

var sources = {
  vader: './asset/darth-vader.jpg'
};

loadImages(sources, buildStage);