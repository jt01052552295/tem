class Piece {
  x;
  y;
  color;
  shape;
  ctx;
  typeId;
  hardDropped;


  constructor(ctx) {
    this.ctx = ctx;
    this.spawn();
  }
  
  spawn() {
    this.typeId = this.randomizeTetrominoType(COLORS.length - 1);
    this.shape = SHAPES[this.typeId];
    this.color = COLORS[this.typeId];
    this.x = 0;
    this.y = 0;
    this.hardDropped = false;
  }


  randomizeTetrominoType(noOfTypes) {
    return Math.floor(Math.random() * noOfTypes + 1);
  }

  draw() {
    this.ctx.fillStyle = this.color;
    this.shape.forEach((row, y) => {
      row.forEach((value, x) => {
        // this.x, this.y는 shape의 상단 왼쪽 좌표이다
        // shape 안에 있는 블록 좌표에 x, y를 더한다.
        // 보드에서 블록의 좌표는 this.x + x가 된다.
        if (value > 0) {
          this.ctx.fillRect(this.x + x, this.y + y, 1, 1);
        }
      });
    });
  }

  move(p) {
    if(!this.hardDropped){
      this.x = p.x;
      this.y = p.y;
    }
    this.shape = p.shape;
  }

  hardDrop(){
    this.hardDropped = true;
  }

  setStartingPosition() {
    this.x = this.typeId === 4 ? 4 : 3;
  }



}