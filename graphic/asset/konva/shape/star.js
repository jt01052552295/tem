     var stage = new Konva.Stage({
        container: 'container',
        width: window.innerWidth,
        height: window.innerHeight
      });

      var layer = new Konva.Layer();

      var star = new Konva.Star({
        x: stage.width() / 2,
        y: stage.height() / 2,
        numPoints: 6,
        innerRadius: 40,
        outerRadius: 70,
        fill: 'yellow',
        stroke: 'black',
        strokeWidth: 4
      });

      // add the shape to the layer
      layer.add(star);

      // add the layer to the stage
      stage.add(layer);