
      var width = window.innerWidth;
      var height = window.innerHeight;

      var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height
      });
      var animLayer = new Konva.Layer();
      var staticLayer = new Konva.Layer();

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
        x: stage.width() / 2,
        y: stage.height() / 2,
        sides: 6,
        radius: 30,
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
        x: 250,
        y: stage.height() / 2,
        sides: 6,
        radius: 30,
        fill: 'red',
        stroke: 'black',
        strokeWidth: 4,
        offset: {
          x: 30,
          y: 0
        },
        draggable: true
      });

      var text = new Konva.Text({
        x: 10,
        y: 10,
        text: 'Static Layer',
        fontSize: '30',
        fontFamily: 'Calibri',
        fill: 'black'
      });

      staticLayer.add(text);

      animLayer.add(blueHex, yellowHex, redHex);
      stage.add(animLayer, staticLayer);

      var period = 2000;
      var anim = new Konva.Animation(function(frame) {
        var scale = Math.sin((frame.time * 2 * Math.PI) / period) + 0.001;
        // scale x and y
        blueHex.scale({ x: scale, y: scale });
        // scale only y
        yellowHex.scaleY(scale);
        // scale only x
        redHex.scaleX(scale);
      }, animLayer);

      anim.start();