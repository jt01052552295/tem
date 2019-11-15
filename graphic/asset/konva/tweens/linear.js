
      var width = window.innerWidth;
      var height = window.innerHeight;

      var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height
      });

      var layer = new Konva.Layer();

      var rect = new Konva.Rect({
        x: 50,
        y: 20,
        width: 100,
        height: 50,
        fill: 'green',
        stroke: 'black',
        strokeWidth: 2,
        opacity: 0.2
      });

      layer.add(rect);
      stage.add(layer);

      // the tween has to be created after the node has been added to the layer
      var tween = new Konva.Tween({
        node: rect,
        duration: 1,
        x: 140,
        y: 90,
        fill: 'red',
        rotation: Math.PI * 2,
        opacity: 1,
        strokeWidth: 6,
        scaleX: 1.5
      });

      // start tween after 2 seconds
      setTimeout(function() {
        tween.play();
      }, 2000);