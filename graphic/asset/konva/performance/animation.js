
      var width = window.innerWidth;
      var height = window.innerHeight;

      var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height
      });

      var layer = new Konva.Layer();

      var hexagon = new Konva.RegularPolygon({
        x: stage.width() / 2,
        y: stage.height() / 2,
        sides: 6,
        radius: 20,
        fill: 'red',
        stroke: 'black',
        strokeWidth: 4
      });

      layer.add(hexagon);
      stage.add(layer);

      var amplitude = 100;
      var period = 2000;
      // in ms
      var centerX = stage.width() / 2;

      // we have animation that do nothing in some cases
      var anim = new Konva.Animation(function(frame) {
        if (frame.time % (period * 2) < period) {
          // regular update
          hexagon.x(
            amplitude * Math.cos((frame.time * 2 * Math.PI) / period) + centerX
          );
        } else {
          // this is "pause" phase
          // we don't need update layer in this case
          // so return false and Konva will skip layer draw
          return false;
        }
      }, layer);

      anim.start();