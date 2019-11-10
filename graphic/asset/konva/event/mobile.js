    function writeMessage(message) {
        text.text(message);
        layer.draw();
      }

      var stage = new Konva.Stage({
        container: 'container',
        width: window.innerWidth,
        height: window.innerHeight
      });

      var layer = new Konva.Layer();

      var triangle = new Konva.RegularPolygon({
        x: 80,
        y: 120,
        sides: 3,
        radius: 80,
        fill: '#00D2FF',
        stroke: 'black',
        strokeWidth: 4
      });

      var text = new Konva.Text({
        x: 10,
        y: 10,
        fontFamily: 'Calibri',
        fontSize: 24,
        text: '',
        fill: 'black'
      });

      var circle = new Konva.Circle({
        x: 230,
        y: 100,
        radius: 60,
        fill: 'red',
        stroke: 'black',
        strokeWidth: 4
      });

      triangle.on('touchmove', function() {
        var touchPos = stage.getPointerPosition();
        var x = touchPos.x - 190;
        var y = touchPos.y - 40;
        writeMessage('x: ' + x + ', y: ' + y);
      });

      circle.on('touchstart', function() {
        writeMessage('Touchstart circle');
      });
      circle.on('touchend', function() {
        writeMessage('Touchend circle');
      });

      layer.add(triangle);
      layer.add(circle);
      layer.add(text);

      // add the layer to the stage
      stage.add(layer);