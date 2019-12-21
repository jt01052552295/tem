
      var width = window.innerWidth;
      var height = window.innerHeight;

      var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height
      });
      var layer = new Konva.Layer();

      var button = new Konva.Group({
        x: stage.width() / 2,
        y: stage.height() / 2
      });

      var offset = 10;
      var text = new Konva.Text({
        x: offset,
        y: offset,
        text: 'press me!',
        // as we don't really need text on hit graph we can set:
        listening: false
      });
      var rect = new Konva.Rect({
        width: text.width() + offset * 2,
        height: text.height() + offset * 2,
        fill: 'grey',
        shadowColor: 'black'
      });
      button.add(rect, text);

      button.on('click tap', function() {
        alert('button clicked');
      });

      layer.add(button);
      stage.add(layer);