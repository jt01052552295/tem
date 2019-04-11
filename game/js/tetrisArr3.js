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
var curShape = shapes[0], curShapeType = 0;
var sPos = {x:0, y:0};
var gamePanel = [];


// 게임패널 초기화
for (var y = 0; y < 20; y++) {
    gamePanel[y] = [];
    for (var x = 0; x < 10; x++) {
        gamePanel[y][x] = 0;
    }
}



//console.log(gamePanel)


// var intervalHandler = setInterval( 
//     function () { 
//         playingTetris(); 
//     }, 400 
// ); 

function playingTetris(){
    console.log('playingTetris1', sPos.y, sPos.x)
    console.log('playingTetris2', sPos.y+1, sPos.x)
    console.log(intersects(sPos.y + 1, sPos.x))
    if ( intersects(sPos.y + 1, sPos.x)) {
        for (var i = 0; i < 4; i++){
            for (var j = 0; j < 4; j++){
                if (curShape[i][j]) {
                    gamePanel[sPos.y+i][sPos.x+j] = 1;
                }
            }
        }
        console.log(gamePanel)
        
        
        curShape = getNextShape();        
        sPos = {x:0, y:0};
        if ( intersects(sPos.y, sPos.x)) {
            //clearInterval(intervalHandler);
            alert("Game Over");
        }
    } else {
        sPos.y++; // 현재위치를 다음위치로 바꾼 뒤 게임판을 다시 그림.
    }

    draw();
}

function intersects(y, x) { // 다음 행(칸)에 값이 있는지 없는지 체크
    for (var i = 0; i < 4; i++){
        for (var j = 0; j < 4; j++){

            if (curShape[i][j]){
                   console.log('intersects',i,j, curShape[i][j])
                if (y+i >= 20 || x+j < 0 || x+j >= 10 || gamePanel[y+i][x+j]){
                    //  y+i >= 20 ; 이동하려는 위치가 바닥을 벗어나거나,
                    //  x+j < 0 ; 좌우 이동시 왼쪽으로 벗어나거나,
                    //  x+j >= 10 ; 오른쪽으로 벗어나도 이동하지 말라는 의미 /
                    return true;
                }
            }
        }
    }
    return false;
}



// 도형 그리기
function draw() {
    ctx.fillStyle = 'gray';
    ctx.fillRect(0, 0, 200, 400);
    ctx.rect(0, 0, 200, 400);
    ctx.strokeStyle="blue";
    ctx.fillStyle = 'black';


    for (var x = 0; x <= 200; x+=20) {
        ctx.beginPath();
        ctx.moveTo(x,0);
        ctx.lineTo(x,400);
        ctx.stroke();
    }
    for (var y = 0; y <= 400; y+=20) {
        ctx.beginPath();
        ctx.moveTo(0, y);
        ctx.lineTo(200, y);
        ctx.stroke();
    }

    // 자기차례가 끝난 블록 화면 저장
    for (var y = 0; y < gamePanel.length; y++) {
        for (var x = 0; x < gamePanel[y].length; x++) {
            if (gamePanel[y][x]) {
                ctx.fillRect(x * 20, y * 20, 19, 19);
            }
        }
    }


    for (var y = 0; y < 4; y++) {
        for (var x = 0; x < 4; x++) {
            if (curShape[y][x]) {
                //console.log((sPos.x+x) * 20)
                ctx.fillRect((sPos.x+x) * 20, (sPos.y+y) * 20, 19, 19);
            }
        }
    }

}

function getNextShape() {
	var ran = Math.floor( Math.random() * shapes.length ) // 비추 
    curShapeType = (curShapeType + 1) % 7;
    return shapes[curShapeType];
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
