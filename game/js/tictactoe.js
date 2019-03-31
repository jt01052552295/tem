var body = document.body;
var table = document.createElement('table')
var rows = [];
var cells = [];
var turn = 'X';

var chk_rs = function(find_row, find_cell){
	var allTrue = false;

	// 가로줄 체크
	if(cells[find_row][0].textContent === turn && cells[find_row][1].textContent === turn && cells[find_row][2].textContent === turn){
		allTrue = true;
	}

	// 세로줄 체크
	if(cells[0][find_cell].textContent === turn && cells[1][find_cell].textContent === turn && cells[2][find_cell].textContent === turn){
		allTrue = true;
	}

	// 대각선 체크
	if(find_row - find_cell === 0) {
		if(cells[0][0].textContent === turn && cells[1][1].textContent === turn && cells[2][2].textContent === turn ){
			allTrue = true;
		}
	}
	if(Math.abs(find_row - find_cell) === 2) {
		if(cells[0][2].textContent === turn && cells[1][1].textContent === turn && cells[2][0].textContent === turn ){
			allTrue = true;
		}
	}

	return allTrue;
}



function initGame(param) { // 초기화
  if (param) {
    console.log('무승부')
  } else { // 승부
    console.log(turn + ' WIN!')
  }

  setTimeout(function() {
    cells.forEach(function(line){
		line.forEach(function(cell){
			cell.textContent = '';
		})
	})
    turn = 'X';
  }, 1000);
}


var cell_cb = function(e){
	// console.log(e.target)
	// console.log(e.target.parentNode)
	// console.log(e.target.parentNode.parentNode)
	// console.log(e.target.parentNode.children)
	
	if (turn === 'O') { // 컴퓨터의 턴일 때 내가 클릭하지 않도록
    	return;
  	}
	var find_row = rows.indexOf(e.target.parentNode)
	var find_cell = cells[find_row].indexOf(e.target)

	console.info('find', find_row, find_cell)
	if(cells[find_row][find_cell].textContent !== ''){
		console.log('빈칸이 아닙니다')
		
	} else {
		//console.log('빈칸 입니다.')
		cells[find_row][find_cell].textContent = turn;
		

		var allTrue = chk_rs(find_row, find_cell);

		// 모든 칸이 다 찼는지 검사
	    var com_cells = [];
	    cells.forEach(function (line) {
	      line.forEach(function (cell) {
	        com_cells.push(cell);
	      });
	    });
	    com_cells = com_cells.filter(function (cell) { return !cell.textContent }); // '', 0, NaN, undefined, null, false


		// 전부 체크됨 
		if(allTrue){
			initGame();
		} else if (cells.length === 0) { // 칸을 더이상 선택할 수 없음
	      initGame(true);
	    } else {
			if(turn ==='X'){
				turn = 'O';
			}

			setTimeout(function(){
				console.log('computer turn') // 빈칸중 하나를 고름, 턴을 유저에게 넘김
				
				var com_choice = com_cells[Math.floor(Math.random() * com_cells.length)]
				com_choice.textContent = turn;

				var find_row = rows.indexOf(com_choice.parentNode)
				var find_cell = cells[find_row].indexOf(com_choice)
				var allTrue = chk_rs(find_row, find_cell);
				
				if(allTrue){ // 컴퓨터 승
					initGame();
				}
				turn = 'X';
			},1000)
		}
	}
};

for(var i=0; i<3; i++){
	var row = document.createElement('tr')
	rows.push(row)
	cells.push([])

	for(var j=0; j<3; j++){
		var cell = document.createElement('td')
		cell.addEventListener('click', cell_cb)
		cells[i].push(cell)
		row.appendChild(cell)
	}

	table.appendChild(row)
}

body.appendChild(table)

console.log(rows, cells)