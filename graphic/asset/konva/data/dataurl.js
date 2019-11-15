
      var width = window.innerWidth;
      var height = window.innerHeight;

      var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height
      });

      var layer = new Konva.Layer();

      var rectX = stage.width() / 2 - 50;
      var rectY = stage.height() / 2 - 25;

      var box = new Konva.Rect({
        x: rectX,
        y: rectY,
        width: 100,
        height: 50,
        fill: '#00D2FF',
        stroke: 'black',
        strokeWidth: 4,
        draggable: true
      });

      box.on('mouseover', function() {
        document.body.style.cursor = 'pointer';
      });

      box.on('mouseout', function() {
        document.body.style.cursor = 'default';
      });

      layer.add(box);
      stage.add(layer);

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
          var dataURL = stage.toDataURL();
          downloadURI(dataURL, 'stage.png');
        },
        false
      );