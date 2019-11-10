function writeMessage(message) {
  text.text(message);
  layer.draw();
}
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
  var monkey = new Konva.Image({
    image: images.monkey,
    x: 120,
    y: 50
  });

  var lion = new Konva.Image({
    image: images.lion,
    x: 280,
    y: 30
  });

  monkey.on('mouseover', function() {
    writeMessage('mouseover monkey');
  });

  monkey.on('mouseout', function() {
    writeMessage('');
  });

  lion.on('mouseover', function() {
    writeMessage('mouseover lion');
  });

  lion.on('mouseout', function() {
    writeMessage('');
  });

  lion.cache();
  lion.drawHitFromCache();

  layer.add(monkey);
  layer.add(lion);
  layer.add(text);
  stage.add(layer);
}
var stage = new Konva.Stage({
  container: 'container',
  width: 578,
  height: 200
});

var layer = new Konva.Layer();

var text = new Konva.Text({
  x: 10,
  y: 10,
  fontFamily: 'Calibri',
  fontSize: 24,
  text: '',
  fill: 'black'
});

var sources = {
  lion: './asset/lion.png',
  monkey: './asset/monkey.png'
};

loadImages(sources, buildStage);