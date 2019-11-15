
      var width = window.innerWidth;
      var height = window.innerHeight;

      var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height
      });

      var layer = new Konva.Layer();

      /*
       * leave center point positioned
       * at the default which is at the center
       * of the hexagon
       */
      var blueHex = new Konva.RegularPolygon({
        x: 50,
        y: stage.height() / 2,
        sides: 6,
        radius: 40,
        fill: '#00D2FF',
        stroke: 'black',
        strokeWidth: 4,
        draggable: true
      });

      var yellowHex = new Konva.RegularPolygon({
        x: 150,
        y: stage.height() / 2,
        sides: 6,
        radius: 50,
        fill: 'yellow',
        stroke: 'black',
        strokeWidth: 4,
        draggable: true
      });

      /*
       * move center point to right side
       * of hexagon
       */
      var redHex = new Konva.RegularPolygon({
        x: 300,
        y: stage.height() / 2,
        sides: 6,
        radius: 50,
        fill: 'red',
        stroke: 'black',
        strokeWidth: 4,
        offset: {
          x: 50,
          y: 0
        },
        draggable: true
      });

      layer.add(blueHex);
      layer.add(yellowHex);
      layer.add(redHex);
      stage.add(layer);

      var period = 2000;

      var anim = new Konva.Animation(function(frame) {
        var scale = Math.sin((frame.time * 2 * Math.PI) / period) + 0.001;
        // scale x and y
        blueHex.scale({ x: scale, y: scale });
        // scale only y
        yellowHex.scaleY(scale);
        // scale only x
        redHex.scaleX(scale);
      }, layer);

      anim.start();