
      var width = window.innerWidth;
      var height = window.innerHeight;

      var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height
      });

      var layer = new Konva.Layer();
      stage.add(layer);

      var box = new Konva.Rect({
        x: stage.width() / 2 - 50,
        y: stage.height() / 2 - 25,
        width: 100,
        height: 50,
        fill: '#00D2FF',
        stroke: 'black',
        strokeWidth: 4,
        draggable: true
      });
      layer.add(box);

      var circle = new Konva.Circle({
        x: stage.width() - 50,
        y: stage.height() - 50,
        radius: 50,
        fill: 'red',
        stroke: 'black',
        strokeWidth: 4,
        draggable: true
      });
      layer.add(circle);

      layer.draw();

      // function from https://stackoverflow.com/a/15832662/512042
      function downloadURI(uri, name) {
        var link = document.createElement('a');
        link.download = name;
        link.href = uri;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        delete link;
      }

      document.getElementById('save').addEventListener(
        'click',
        function() {
          var dataURL = stage.toDataURL({ pixelRatio: 3 });
          downloadURI(dataURL, 'stage.png');
        },
        false
      );