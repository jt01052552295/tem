var table = document.getElementById('table');
var data = [];
var score = document.getElementById('score');

function init() {
  var fragment = document.createDocumentFragment();
  [1, 2, 3, 4].forEach(function() {
    var colData = [];
    data.push(colData);
    var tr = document.createElement('tr');
    [1, 2, 3, 4].forEach(function() {
      colData.push(0);
      var td = document.createElement('td');
      tr.appendChild(td);
    });
    fragment.appendChild(tr);
  });
  table.appendChild(fragment);
}


// 랜덤으로 임의자료 만듬.
function makeRandom() {
  var blankArr = [];
  data.forEach(function(colData, i) {
    colData.forEach(function(rowData, j) {
      if (!rowData) {
        blankArr.push([i, j]);
      }
    });
  });
  //console.log(blankArr)
  if (blankArr.length === 0) {
    console.log('게임오버: ' + score.textContent);
    table.innerHTML = '';
    init();
  } else {
    var randomBox = blankArr[Math.floor(Math.random() * blankArr.length)];
    data[randomBox[0]][randomBox[1]] = 2;

    //console.log(data)
    draw();
  }
}


//data배열 -> 테이블에 넣어준다. 
function draw() {
  data.forEach(function(colData, i) {
    colData.forEach(function(rowData, j) {
      if (rowData > 0) {
        table.children[i].children[j].textContent = rowData;
      } else {
        table.children[i].children[j].textContent = '';
      }
    });
  });
}

init();
makeRandom();
draw();

function getVector(direction){
  var map = {
    0: { x: 0,  y: -1 }, // Up
    1: { x: 1,  y: 0 },  // Right
    2: { x: 0,  y: 1 },  // Down
    3: { x: -1, y: 0 }   // Left
  };
  return map[direction];	
}
function buildTraversals(vector){
	var traversals = { x: [], y: [] };


	for (var pos = 0; pos < 4; pos++) {
		traversals.x.push(pos);
		traversals.y.push(pos);
	}

	if (vector.x === 1) traversals.x = traversals.x.reverse();
  	if (vector.y === 1) traversals.y = traversals.y.reverse();


  	//console.log(traversals)
  	return traversals
}
document.onkeydown = checkKey;
function checkKey(e) {

    e = e || window.event;

    console.log(data)

    data.forEach(function(row, i) {
    	//console.log(row)
    	row.forEach(function(col, j){
    		//console.log(i,j, col)
    	})
    });

    var cell, tile;
    var vector;
    var traversals;
    var moved      = false;


    if (e.keyCode == '38') {  // up arrow
       vector     = getVector(0);
    }
    else if (e.keyCode == '40') { // down arrow
       vector     = getVector(2);
    }
    else if (e.keyCode == '37') { // left arrow
       vector     = getVector(3);
    }
    else if (e.keyCode == '39') { // right arrow
       vector     = getVector(1);
    }
    traversals = buildTraversals(vector);

    console.log(traversals)
    traversals.x.forEach(function (x) {
    	traversals.y.forEach(function (y) {
    		cell = { x: x, y: y }; 

    		console.log(cell)

    	}) 
    })

}

var dragStart = false;
var dragIng = false;
var startPos;
var endPos;

var xDirection = "";
var yDirection = "";
var oldX = 0;
var oldY = 0;


// screenX : 모니터 기준 좌표
// pageX : 페이지 (스크롤 포함)
// clientX : 브라우저 화면 기준 
// offsetX : 이벤트 타겟 기준 
// window.addEventListener('mousedown', function(event) {
//   dragStart = true;
//   startPos = [event.clientX, event.clientY];
  
// });

// window.addEventListener('mousemove', function(event) {
//   if (dragStart) {
//     dragIng = true;

// 	if (oldX < event.pageX) {
// 	    xDirection = "right";
// 	} else {
// 	    xDirection = "left";
// 	}
// 	//deal with the vertical case
// 	if (oldY < event.pageY) {
// 	    yDirection = "down";
// 	} else {
// 	    yDirection = "up";
// 	}
// 	oldX = event.pageX;
// 	oldY = event.pageY;
// 	//console.log(xDirection + " " + yDirection);
//   }
// });

// window.addEventListener('mouseup', function(event) {
// 	endPos = [event.clientX, event.clientY];

// 	if (dragIng) {




// 		var direction;
// 		var x차이 = endPos[0] - startPos[0];
// 		var y차이 = endPos[1] - startPos[1];
// 		if (x차이 < 0 && Math.abs(x차이) / Math.abs(y차이) > 1) {
// 		  direction = 'left';
// 		} else if (x차이 > 0 && Math.abs(x차이) / Math.abs(y차이) > 1) {
// 		  direction = 'right';
// 		} else if (y차이 > 0 && Math.abs(x차이) / Math.abs(y차이) < 1) {
// 		  direction = 'down';
// 		} else if (y차이 < 0 && Math.abs(x차이) / Math.abs(y차이) < 1) {
// 		  direction = 'up';
// 		}
// 		console.log(x차이, y차이, direction);
// 	}
// 	dragStart = false;
// 	dragIng = false;
	
// 	switch(direction){
// 		case 'left':
// 		break;
// 		case 'right':
// 		break; 
// 		case 'up':
// 		break;
// 		case 'down': 
// 		break;

// 	}
// 	draw();
// 	makeRandom();
// });












