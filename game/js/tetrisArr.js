// rotate shape
// source: https://github.com/jstimpfle/tetris-on-a-plane/
var canvas = document.getElementById('tetrisCanvas');
var ctx = canvas.getContext('2d');

var shapes = [
   [[1, 1, 0, 0],        // 'O'
    [1, 1, 0, 0],
    [0, 0, 0, 0],
    [0, 0, 0, 0]],
   [[0, 0, 1, 0],        // 'I'
    [0, 0, 1, 0],
    [0, 0, 1, 0],
    [0, 0, 1, 0]],
   [[1, 1, 1, 0],        // 'T'
    [0, 1, 0, 0],
    [0, 0, 0, 0],
    [0, 0, 0, 0]],
   [[0, 1, 1, 0],        // 'S'
    [1, 1, 0, 0],
    [0, 0, 0, 0],
    [0, 0, 0, 0]],
   [[1, 1, 0, 0],        // 'Z'
    [0, 1, 1, 0],
    [0, 0, 0, 0],
    [0, 0, 0, 0]],
   [[0, 1, 0, 0],        // 'J'
    [0, 1, 0, 0],
    [1, 1, 0, 0],
    [0, 0, 0, 0]],
   [[1, 0, 0, 0],        // 'L'
    [1, 0, 0, 0],
    [1, 1, 0, 0],
    [0, 0, 0, 0]]
];
var shapeSize = [2,4,3,3,3,3,3];


var curShape = shapes[0], curShapeType = 0;;
draw();

// 도형 그리기
function draw() {
    ctx.fillStyle = 'gray';
    ctx.fillRect(0, 0, 100, 100);
    ctx.fillStyle = 'black';


    for (var x = 0; x <= 100; x+=20) {
        ctx.beginPath();
        ctx.moveTo(x,0);
        ctx.lineTo(x,100);
        ctx.stroke();
    }
    for (var y = 0; y <= 100; y+=20) {
        ctx.beginPath();
        ctx.moveTo(0, y);
        ctx.lineTo(100, y);
        ctx.stroke();
    }


    for (var y = 0; y < 4; y++) {
        for (var x = 0; x < 4; x++) {
            if (curShape[y][x]) {
                ctx.fillRect(x * 20, y * 20, 19, 19);
            }
        }
    }
}

function getNextShape() {
	var ran = Math.floor( Math.random() * shapes.length ) // 비추 
    curShapeType = (curShapeType + 1) % 7;
    curShape = shapes[curShapeType]
    draw();
}

function leftBtnClick() {
    curShape = rotateLeft(curShape);
    draw();
}

function rightBtnClick() {
    curShape = rotateRight(curShape);
    draw();
}

function rotateLeft(piece) {
	var newPiece = [];
	for (var y = 0; y < 4; y++) {
		newPiece[y] = piece[y].slice(); //원본배열 그대로, 얕은복사본 으로 새로운배열에 객체로 반환
	}

	var size = shapeSize[curShapeType];
	for (var y = 0; y < size; y++) {
        for (var x = 0; x < size ; x++) {
            newPiece[y][x] = piece[x][(size-1)-y];
        }
    }
    return newPiece;
    // return [ 왼쪽으로 돌림,
    //         [piece[0][3], piece[1][3], piece[2][3], piece[3][3]],
    //         [piece[0][2], piece[1][2], piece[2][2], piece[3][2]],
    //         [piece[0][1], piece[1][1], piece[2][1], piece[3][1]],
    //         [piece[0][0], piece[1][0], piece[2][0], piece[3][0]]
    // ];
}

function rotateRight(piece) {
	var newPiece = [];
	for (var y = 0; y < 4; y++) {
		newPiece[y] = piece[y].slice(); //원본배열 그대로, 얕은복사본 으로 새로운배열에 객체로 반환
	}
	var size = shapeSize[curShapeType];
	for (var y = 0; y < size; y++) {
        for (var x = 0; x < size ; x++) {
        	//console.log(3-x, y)
            newPiece[y][x] = piece[(size-1)-x][y];
        }
    }
    return newPiece;
    // return [  오른쪽으로..
    //         [piece[3][0], piece[2][0], piece[1][0], piece[0][0]],
    //         [piece[3][1], piece[2][1], piece[1][1], piece[0][1]],
    //         [piece[3][2], piece[2][2], piece[1][2], piece[0][2]],
    //         [piece[3][3], piece[2][3], piece[1][3], piece[0][3]]
    // ];
}
