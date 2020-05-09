const canvas = document.getElementById('board');
const ctx = canvas.getContext('2d');
const canvasNext = document.getElementById('next');
const ctxNext = canvasNext.getContext('2d');

let accountValues = {
  playTime: 0,
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
let requestTime;

moves = {
  [KEY.LEFT]:   p => ({ ...p, x: p.x - 1 }),
  [KEY.RIGHT]:  p => ({ ...p, x: p.x + 1 }),
  [KEY.DOWN]:   p => ({ ...p, y: p.y + 1 }),
  [KEY.SPACE]:  p => ({ ...p, y: p.y + 1 }),
  [KEY.UP]: 	p => board.rotate(p, ROTATION.RIGHT)
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
      let p = moves[event.keyCode](board.piece);
      
      if (event.keyCode === KEY.SPACE) {

      	// Hard drop
        while (board.valid(p)) {
          account.score += POINTS.HARD_DROP;
          board.piece.move(p);
          p = moves[KEY.DOWN](board.piece);
        }
        board.piece.hardDrop();

      } else if (board.valid(p)) {
      	board.piece.move(p);
        if (event.keyCode === KEY.DOWN) {
          account.score += POINTS.SOFT_DROP;
        }
      }	

    } else {

    }

  });
}

// pad value with zero
function pad(value) {
  return ('0' + Math.floor(value)).slice(-2);
}


function resetGame() {
  account.playTime = TIMER.COUNTDOWN;
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
  time.start = performance.now();
  requestTime = TIMER.COUNTDOWN;
  // If we have an old game running a game then cancel the old
  if (requestId) {
    cancelAnimationFrame(requestId);
  }
  animate();
}



function animate(now = 0) {
  // 지난 시간을 업데이트한다.
  time.elapsed = now - time.start;
  // 지난 시간이 현재 레벨의 시간을 초과했는지 확인한다.
  if (time.elapsed > time.level) {
  	// 현재 시간을 다시 측정한다.
    time.start = now;
    if (!board.drop()) {
      gameOver();
      return;
    }
    if(requestTime>=0){
      account.playTime = requestTime--;
    } else {
      gameOver();
      return;
    }
  }

  // 새로운 상태로 그리기 전에 보드를 지운다.
  ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
  board.draw();
  requestId = requestAnimationFrame(animate);
}


function gameOver() {
  cancelAnimationFrame(requestId);
  ctx.fillStyle = 'black';
  ctx.fillRect(1, 3, 8, 1.2);
  ctx.font = '1px Arial';
  ctx.fillStyle = 'red';
  ctx.fillText('GAME OVER', 1.8, 4);
}

function pause() {
  if (!requestId) {
    animate();
    return;
  }

  cancelAnimationFrame(requestId);
  requestId = null;

  ctx.fillStyle = 'black';
  ctx.fillRect(1, 3, 8, 1.2);
  ctx.font = '1px Arial';
  ctx.fillStyle = 'yellow';
  ctx.fillText('PAUSED', 3, 4);
}

