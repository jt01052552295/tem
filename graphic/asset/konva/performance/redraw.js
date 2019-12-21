
      var width = window.innerWidth;
      var height = window.innerHeight;

      var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height
      });

      var layer = new Konva.Layer();
      stage.add(layer);

      var BOX_SIZE = 15;
      var box;
      // generate boxes
      for (var ix = 0; ix < width / BOX_SIZE; ix++) {
        for (var iy = 0; iy < height / BOX_SIZE; iy++) {
          box = new Konva.Rect({
            x: ix * BOX_SIZE,
            y: iy * BOX_SIZE,
            width: BOX_SIZE - 1,
            height: BOX_SIZE - 1,
            fill: 'darkgrey',
            stroke: 'white'
          });
          layer.add(box);
        }
      }
      layer.draw();

      // as all boxes stay separately with no overlap
      // and they have no opacity
      // we can call 'box.draw()' and we will have expected result
      // REMEMBER that is this case box will be drawn on top of existing layer
      // without clearing
      layer.on('mouseover', function(evt) {
        var box = evt.target;
        box.fill('#E5FF80');
        box.draw();
      });
      layer.on('mouseout', function(evt) {
        var box = evt.target;
        box.fill('darkgrey');
        box.draw();
      });