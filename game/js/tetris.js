var tetris = document.querySelector('#tetris');
var tetrisData = [];
var currentBlock;
var nextBlock;
var currentTopLeft = [0, 3];
var blocks = [




];

const colors = ['red', 'orange', 'yellow', 'green', 'blue', 'navy', 'violet'];
const isActiveBlock = value => (value > 0 && value < 10);
const isInvalidBlock = value => (value === undefined || value >= 10);


function init() {
  const fragment = document.createDocumentFragment();
  [...Array(20).keys()].forEach((col, i) => {
    const tr = document.createElement('tr');
    fragment.appendChild(tr);
    [...Array(10).keys()].forEach((row, j) => {
      const td = document.createElement('td');
      tr.appendChild(td);
    });
    const column = Array(10).fill(0);
    tetrisData.push(column);
  });
  tetris.appendChild(fragment);
}

function draw() {
  //console.log('drawed', JSON.parse(JSON.stringify(tetrisData)), JSON.parse(JSON.stringify(currentBlock)));
  tetrisData.forEach((col, i) => {
    col.forEach((row, j) => {
      if (row > 0) {
        tetris.children[i].children[j].className = tetrisData[i][j] >= 10 ? colors[tetrisData[i][j] / 10 - 1]: colors[tetrisData[i][j] - 1];
      } else {
        tetris.children[i].children[j].className = '';
      }
    });
  });
}


function generate() { // 테트리스 블록 생성




	draw();
}

function tick() {

}

let int = setInterval(tick, 2000);
init();
generate();

document.getElementById('stop').addEventListener('click', function() {
  clearInterval(int);
});
document.getElementById('start').addEventListener('click', function() {
  if (int) {
    clearInterval(int);
  }
  int = setInterval(tick, 2000);
});
document.getElementById('mute').addEventListener('click', function() {
  if (document.getElementById('bgm').paused) {
    document.getElementById('bgm').play();
  } else {
    document.getElementById('bgm').pause();
  }
});



window.addEventListener('keydown', (e) => {
  switch (e.code) {
    case 'ArrowLeft':  // 키보드 왼쪽 클릭 = 좌측 한 칸 이동

      
      break;
    
    case 'ArrowRight':  // 키보드 오른쪽 클릭 = 우측 한 칸 이동

      break;
    
    case 'ArrowDown':  // 키보드 아래쪽 클릭 = 하방측 한 칸 이동

    
  }
});
window.addEventListener('keyup', (e) => {
  switch (e.code) {
    case 'ArrowUp': // 방향 전환

      break;
    
    case 'Space': // 한방에 쭉 떨구기

      break;
  }
});


