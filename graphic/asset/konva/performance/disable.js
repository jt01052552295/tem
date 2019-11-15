
      var width = window.innerWidth;
      var height = window.innerHeight;

      var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height
      });

      var layer = new Konva.Layer();
      stage.add(layer);

      var group1 = new Konva.Group({
        x: 50,
        y: 50
      });
      layer.add(group1);
      var lebel1 = new Konva.Text({
        text: 'Shape with defaul drawing behaviour'
      });
      group1.add(lebel1);
      var rect = new Konva.Rect({
        y: 20,
        width: 100,
        height: 50,
        fill: 'green',
        stroke: 'black',
        strokeWidth: 10,
        opacity: 0.5
      });
      group1.add(rect);

      var group1 = new Konva.Group({
        x: 200,
        y: 100
      });
      layer.add(group1);
      var lebel1 = new Konva.Text({
        text: 'Shape with perfectDrawEnabled = false'
      });
      group1.add(lebel1);
      var rect = new Konva.Rect({
        y: 20,
        width: 100,
        height: 50,
        fill: 'green',
        stroke: 'black',
        strokeWidth: 10,
        opacity: 0.5,
        perfectDrawEnabled: false
      });
      group1.add(rect);

      layer.draw();