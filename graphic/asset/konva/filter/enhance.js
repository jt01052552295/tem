      var stage = new Konva.Stage({
        container: 'container',
        width: window.innerWidth,
        height: window.innerHeight
      });

      var layer = new Konva.Layer();
      stage.add(layer);

      Konva.Image.fromURL('./asset/lion.png', function(lion) {
        lion.setAttrs({
          x: 80,
          y: 30,
          enhance: 0.5,
          draggable: true
        });
        lion.cache();
        lion.filters([Konva.Filters.Enhance]);
        layer.add(lion);
        layer.draw();

        var slider = document.getElementById('slider');
        slider.oninput = function() {
          lion.enhance(parseFloat(slider.value));
          layer.batchDraw();
        };
      });