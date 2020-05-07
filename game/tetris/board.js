class Board {
  ctx;
  ctxNext;
  grid;
  piece;
  next;
  requestId;
  time;
  
  constructor(ctx, ctxNext) {
    this.ctx = ctx;
    this.ctxNext = ctxNext;
    this.init();
    this.initNext();
  }

  init() {
    // 게임화면, 블록 크기
    this.ctx.canvas.width = COLS * BLOCK_SIZE;
    this.ctx.canvas.height = ROWS * BLOCK_SIZE;
    this.ctx.scale(BLOCK_SIZE, BLOCK_SIZE);
  }

  initNext() {
    // 다음블록 초기화
    ctxNext.canvas.width = 4 * BLOCK_SIZE;
    ctxNext.canvas.height = 4 * BLOCK_SIZE;
    ctxNext.scale(BLOCK_SIZE, BLOCK_SIZE);
  }

  reset() {
    this.grid = this.getEmptyGrid();
    console.table(this.grid)
  }


  getEmptyGrid() {
    return Array.from({ length: ROWS }, () => Array(COLS).fill(0));
  }







}