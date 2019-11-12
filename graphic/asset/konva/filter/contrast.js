
Konva.Image.fromURL('./asset/lion.png', function(lion) {
  var stage = new Konva.Stage({
    container: 'container',
    width: window.innerWidth,
    height: window.innerHeight
  });

  var layer = new Konva.Layer();

  lion.position({
    x: 50,
    y: 50
  });
  lion.cache();
  lion.filters([Konva.Filters.Contrast]);
  layer.add(lion);
  stage.add(layer);

  var sliders = ['contrast'];
  sliders.forEach(function(attr) {
    var slider = document.getElementById(attr);
    function update() {
      lion[attr](parseFloat(slider.value));
      layer.batchDraw();
    }
    slider.oninput = update;
    update();
  });
});