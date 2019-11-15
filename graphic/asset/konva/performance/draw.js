
      var stage = new Konva.Stage({
        container: 'container',
        width: window.innerWidth,
        height: window.innerHeight
      });

      var layer = new Konva.Layer();

      var rect = new Konva.Rect({
        x: 110,
        y: 100,
        width: 200,
        height: 20,
        offset: {
          x: 100,
          y: 10
        },
        fill: 'green',
        stroke: 'black',
        strokeWidth: 4
      });

      // add the shape to the layer
      layer.add(rect);

      // add the layer to the stage
      stage.add(layer);

      stage.on('mousemove', function() {
        rect.rotate(5);
        layer.batchDraw();
      });