      var stage = new Konva.Stage({
        container: 'container',
        width: window.innerWidth,
        height: window.innerHeight
      });

      var layer = new Konva.Layer();

      /*
       * create a triangle shape by defining a
       * drawing function which draws a triangle
       */
      var triangle = new Konva.Shape({
        sceneFunc: function(context, shape) {
          context.beginPath();
          context.moveTo(20, 50);
          context.lineTo(220, 80);
          context.quadraticCurveTo(150, 100, 260, 170);
          context.closePath();

          // (!) Konva specific method, it is very important
          context.fillStrokeShape(shape);
        },
        fill: '#00D2FF',
        stroke: 'black',
        strokeWidth: 4
      });

      // add the triangle shape to the layer
      layer.add(triangle);

      // add the layer to the stage
      stage.add(layer);