
      var possibleFilters = ['', 'blur', 'invert'];

      function createObject(attrs) {
        return Object.assign({}, attrs, {
          // define position
          x: 0,
          y: 0,
          // here should be url to image
          src: '',
          // and define filter on it, let's define that we can have only
          // "blur", "invert" or "" (none)
          filter: 'blur'
        });
      }
      function createYoda(attrs) {
        return Object.assign(createObject(attrs), {
          src: './asset/yoda.jpg'
        });
      }

      function createDarth(attrs) {
        return Object.assign(createObject(attrs), {
          src: './asset/darth-vader.jpg'
        });
      }

      // initial state
      var state = [createYoda({ x: 50, y: 50 })];

      // our history
      var appHistory = [state];
      var appHistoryStep = 0;

      var width = window.innerWidth;
      var height = window.innerHeight;
      var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height
      });

      var layer = new Konva.Layer();
      stage.add(layer);

      // create function will destroy previous drawing
      // then it will created required nodes and attach all events
      function create() {
        layer.destroyChildren();
        state.forEach((item, index) => {
          var node = new Konva.Image({
            draggable: true,
            name: 'item-' + index,
            // make it smaller
            scaleX: 0.5,
            scaleY: 0.5
          });
          layer.add(node);
          node.on('dragend', () => {
            // make new state
            state = state.slice();
            // update object data
            state[index] = Object.assign({}, state[index], {
              x: node.x(),
              y: node.y()
            });
            // save it into history
            saveStateToHistory(state);
            // don't need to call update here
            // because changes already in node
          });

          node.on('click', () => {
            // find new filter
            var oldFilterIndex = possibleFilters.indexOf(state[index].filter);
            var nextIndex = (oldFilterIndex + 1) % possibleFilters.length;
            var filter = possibleFilters[nextIndex];

            // apply state changes
            state = state.slice();
            state[index] = Object.assign({}, state[index], {
              filter: filter
            });
            // save state to history
            saveStateToHistory(state);
            // update canvas from state
            update(state);
          });

          var img = new window.Image();
          img.onload = function() {
            node.image(img);
            update(state);
            layer.batchDraw();
          };
          img.src = item.src;
        });
        update(state);
      }

      function update() {
        state.forEach(function(item, index) {
          var node = stage.findOne('.item-' + index);
          node.setAttrs({
            x: item.x,
            y: item.y
          });

          if (!node.image()) {
            return;
          }
          if (item.filter === 'blur') {
            node.filters([Konva.Filters.Blur]);
            node.blurRadius(10);
            node.cache();
          } else if (item.filter === 'invert') {
            node.filters([Konva.Filters.Invert]);
            node.cache();
          } else {
            node.filters([]);
            node.clearCache();
          }
        });
        layer.batchDraw();
      }

      //
      function saveStateToHistory(state) {
        appHistory = appHistory.slice(0, appHistoryStep + 1);
        appHistory = appHistory.concat([state]);
        appHistoryStep += 1;
      }
      create(state);

      document
        .querySelector('#create-yoda')
        .addEventListener('click', function() {
          // create new object
          state.push(
            createYoda({
              x: width * Math.random(),
              y: height * Math.random()
            })
          );
          // recreate canvas
          create(state);
        });

      document
        .querySelector('#create-darth')
        .addEventListener('click', function() {
          // create new object
          state.push(
            createDarth({
              x: width * Math.random(),
              y: height * Math.random()
            })
          );
          // recreate canvas
          create(state);
        });

      document.querySelector('#undo').addEventListener('click', function() {
        if (appHistoryStep === 0) {
          return;
        }
        appHistoryStep -= 1;
        state = appHistory[appHistoryStep];
        // create everything from scratch
        create(state);
      });

      document.querySelector('#redo').addEventListener('click', function() {
        if (appHistoryStep === appHistory.length - 1) {
          return;
        }
        appHistoryStep += 1;
        state = appHistory[appHistoryStep];
        // create everything from scratch
        create(state);
      });