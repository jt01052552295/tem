
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

      var rect1 = new Konva.Rect({
        x: 250,
        y: 90,
        width: 100,
        height: 50,
        fill: 'green',
        strokeWidth: 3,
        stroke: 'black',
        offset: {
          x: 50,
          y: 25
        },
        draggable: true,
        name: 'rectangle'
      });

      var rect2 = new Konva.Rect({
        x: 70,
        y: 90,
        width: 100,
        height: 50,
        fill: 'green',
        strokeWidth: 3,
        stroke: 'black',
        offset: {
          x: 50,
          y: 25
        },
        draggable: true,
        name: 'rectangle'
      });
      layer.add(rect1);
      layer.add(rect2);
      stage.add(layer);

      var tweens = [];

      document.getElementById('activate').addEventListener(
        'click',
        function() {
          // select shapes by name
          var shapes = stage.find('.rectangle');

          // if there are currently any active tweens, destroy them
          // before creating new ones
          for (var n = 0; n < tweens.length; n++) {
            tweens[n].destroy();
          }

          // apply transition to all nodes in the array
          shapes.each(function(shape) {
            tweens.push(
              new Konva.Tween({
                node: shape,
                duration: 1,
                scaleX: Math.random() * 2,
                scaleY: Math.random() * 2,
                easing: Konva.Easings.ElasticEaseOut
              }).play()
            );
          });
        },
        false
      );