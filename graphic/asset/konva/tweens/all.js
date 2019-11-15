
      var width = window.innerWidth;
      var height = 707;

      var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height
      });

      var layer = new Konva.Layer();

      var easings = [
        { name: 'Linear', color: 'blue' },
        { name: 'EaseIn', color: 'green' },
        { name: 'EaseOut', color: 'green' },
        { name: 'EaseInOut', color: 'green' },
        { name: 'BackEaseIn', color: 'blue' },
        { name: 'BackEaseOut', color: 'blue' },
        { name: 'BackEaseInOut', color: 'blue' },
        { name: 'ElasticEaseIn', color: 'green' },
        { name: 'ElasticEaseOut', color: 'green' },
        { name: 'ElasticEaseInOut', color: 'green' },
        { name: 'BounceEaseIn', color: 'blue' },
        { name: 'BounceEaseOut', color: 'blue' },
        { name: 'BounceEaseInOut', color: 'blue' },
        { name: 'StrongEaseIn', color: 'green' },
        { name: 'StrongEaseOut', color: 'green' },
        { name: 'StrongEaseInOut', color: 'green' }
      ];

      var tweens = [];

      for (var n = 0; n < easings.length; n++) {
        var num = n + 1;
        var ease = easings[n];
        var text = new Konva.Text({
          x: 10,
          y: 60 + (n * 400) / easings.length,
          padding: 4,
          text: num + ') ' + ease.name,
          fontSize: 18,
          fontFamily: 'Calibri',
          fill: ease.color
        });

        layer.add(text);

        // the tween has to be created after the node has been added to the layer
        var tween = new Konva.Tween({
          node: text,
          x: 280,
          easing: Konva.Easings[ease.name],
          duration: 2
        });

        // add tween to tweens array
        tweens.push(tween);
      }

      stage.add(layer);

      // play
      document.getElementById('play').addEventListener(
        'click',
        function() {
          for (var n = 0; n < tweens.length; n++) {
            tweens[n].play();
          }
        },
        false
      );

      // pause
      document.getElementById('pause').addEventListener(
        'click',
        function() {
          for (var n = 0; n < tweens.length; n++) {
            tweens[n].pause();
          }
        },
        false
      );

      // reverse
      document.getElementById('reverse').addEventListener(
        'click',
        function() {
          for (var n = 0; n < tweens.length; n++) {
            tweens[n].reverse();
          }
        },
        false
      );