
      var width = window.innerWidth;
      var height = window.innerHeight;

      var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height
      });

      var layer = new Konva.Layer();
      for (var n = 0; n < 10; n++) {
        var circle = new Konva.Circle({
          x: Math.random() * stage.width(),
          y: Math.random() * stage.height(),
          radius: Math.random() * 50 + 25,
          fill: 'red',
          strokeWidth: 3,
          stroke: 'black'
        });

        layer.add(circle);
      }

      var rect = new Konva.Rect({
        x: 300,
        y: 90,
        width: 100,
        height: 50,
        fill: 'green',
        strokeWidth: 3,
        offset: {
          x: 50,
          y: 25
        },
        draggable: true,
        id: 'myRect'
      });

      layer.add(rect);
      stage.add(layer);

      var tween;

      document.getElementById('activate').addEventListener(
        'click',
        function() {
          // or var shape = stage.findOne('#myRect');
          var shape = stage.find('#myRect')[0];

          if (tween) {
            tween.destroy();
          }

          tween = new Konva.Tween({
            node: shape,
            duration: 1,
            scaleX: Math.random() * 2,
            scaleY: Math.random() * 2,
            easing: Konva.Easings.ElasticEaseOut
          }).play();
        },
        false
      );