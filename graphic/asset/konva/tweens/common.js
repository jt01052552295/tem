
      var width = window.innerWidth;
      var height = window.innerHeight;

      var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height
      });

      var layer = new Konva.Layer();

      var greenBox = new Konva.Rect({
        x: 70,
        y: stage.height() / 2,
        width: 100,
        height: 50,
        fill: 'green',
        stroke: 'black',
        strokeWidth: 4,
        offset: {
          x: 50,
          y: 25
        }
      });

      var blueBox = new Konva.Rect({
        x: 190,
        y: stage.height() / 2,
        width: 100,
        height: 50,
        fill: 'blue',
        stroke: 'black',
        strokeWidth: 4,
        offset: {
          x: 50,
          y: 25
        }
      });

      var redBox = new Konva.Rect({
        x: 310,
        y: stage.height() / 2,
        width: 100,
        height: 50,
        fill: 'red',
        stroke: 'black',
        strokeWidth: 4,
        offset: {
          x: 50,
          y: 25
        }
      });

      layer.add(greenBox);
      layer.add(blueBox);
      layer.add(redBox);
      stage.add(layer);

      // the tween has to be created after the node has been added to the layer
      greenBox.tween = new Konva.Tween({
        node: greenBox,
        scaleX: 2,
        scaleY: 1.5,
        easing: Konva.Easings.EaseIn,
        duration: 1
      });

      blueBox.tween = new Konva.Tween({
        node: blueBox,
        scaleX: 2,
        scaleY: 1.5,
        easing: Konva.Easings.EaseInOut,
        duration: 1
      });

      redBox.tween = new Konva.Tween({
        node: redBox,
        scaleX: 2,
        scaleY: 1.5,
        easing: Konva.Easings.EaseOut,
        duration: 1
      });

      // use event delegation
      layer.on('mouseover touchstart', function(evt) {
        evt.target.tween.play();
      });

      layer.on('mouseout touchend', function(evt) {
        evt.target.tween.reverse();
      });