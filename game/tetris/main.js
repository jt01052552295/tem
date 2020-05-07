const canvas = document.getElementById('board');
const ctx = canvas.getContext('2d');
const canvasNext = document.getElementById('next');
const ctxNext = canvasNext.getContext('2d');

let accountValues = {
  score: 0,
  level: 0,
  lines: 0
} 

// 스코어, 라인, 레벨 화면표시
function updateAccount(key, value) {
  let element = document.getElementById(key);
  if (element) {
    element.textContent = value;
  }
}

let account = new Proxy(accountValues, {
  set: (target, key, value) => {
    target[key] = value;
    updateAccount(key, value);
    return true;
  }
});

let requestId; // 실행중인 게임이 있는지 체크;

moves = {
  [KEY.LEFT]:  p => ({ ...p, x: p.x - 1 }),
  [KEY.RIGHT]: p => ({ ...p, x: p.x + 1 }),
  [KEY.DOWN]:  p => ({ ...p, y: p.y + 1 }),
  [KEY.SPACE]: p => ({ ...p, y: p.y + 1 })
};


let board = new Board(ctx, ctxNext);


function addEventListener() {
  document.addEventListener('keydown', event => {
    event.preventDefault();

  	if (event.keyCode === KEY.ESC) {
      gameOver();
    } else if (event.keyCode === KEY.P) {
      pause();
    } else if (moves[event.keyCode]) {
      console.log(moves[event.keyCode])
    } else {

    }

  });
}

function resetGame() {
  account.score = 0;
  account.lines = 0;
  account.level = 0;
  board.reset();
  time = { start: 0, elapsed: 0, level: LEVEL[account.level] };
}

// 게임 실행
function play() {
  addEventListener();
  resetGame();
  // time.start = performance.now();
  // // If we have an old game running a game then cancel the old
  // if (requestId) {
  //   cancelAnimationFrame(requestId);
  // }

  // animate();
}

function gameOver() {
  console.log('gameOver')
}

function pause() {
  console.log('pause')	
}

