
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
        radius: 70,
        fill: 'red',
        stroke: 'black',
        strokeWidth: 4
      });

      layer.add(hexagon);
      stage.add(layer);

      var amplitude = 150;
      // in ms
      var period = 2000;
      var centerX = stage.width() / 2;

      var anim = new Konva.Animation(function(frame) {
        hexagon.x(
          amplitude * Math.sin((frame.time * 2 * Math.PI) / period) + centerX
        );
      }, layer);

      document.getElementById('start').addEventListener(
        'click',
        function() {
          anim.start();
        },
        false
      );

      document.getElementById('stop').addEventListener(
        'click',
        function() {
          anim.stop();
        },
        false
      );