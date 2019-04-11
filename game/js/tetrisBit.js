// rotate shape by bitmasks 
// source: https://stackoverflow.com/questions/38594574/tetris-2d-array-logic
var canvas = document.getElementById('tetrisCanvas');
var ctx = canvas.getContext('2d');

var shapes = [
            [ 0x4640, 0x0E40, 0x4C40, 0x4E00 ], // 'T'
            [ 0x8C40, 0x6C00, 0x8C40, 0x6C00 ], // 'S'
            [ 0x4C80, 0xC600, 0x4C80, 0xC600 ], // 'Z'
            [ 0x4444, 0x0F00, 0x4444, 0x0F00 ], // 'I'
            [ 0x44C0, 0x8E00, 0xC880, 0xE200 ], // 'J'
            [ 0x88C0, 0xE800, 0xC440, 0x2E00 ], // 'L'
            [ 0xCC00, 0xCC00, 0xCC00, 0xCC00 ]  // 'O'
];

var curShapeType = 0, curRotation = 0;
draw();

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
            if (shapes[curShapeType][curRotation] & (0x8000 >> (y * 4 + x))) {
                ctx.fillRect(x * 20, y * 20, 19, 19);
            }
        }
    }
}

function getNextShape() {
    curShapeType = (curShapeType + 1) % 7;
    draw(curShapeType, curRotation);
}

function leftBtnClick() {
    curRotation = (curRotation - 1);
    if (curRotation < 0) curRotation=3;
    draw(curShapeType, curRotation);
}

function rightBtnClick() {
    curRotation = (curRotation + 1) % 4;
    draw(curShapeType, curRotation);
}