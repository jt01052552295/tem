var body = document.body;
var table = document.createElement('table')
var rows = [];
var cells = [];

var turn = 'X';

var cell_cb = function(e){
	// console.log(e.target)
	// console.log(e.target.parentNode)
	// console.log(e.target.parentNode.parentNode)
	// console.log(e.target.parentNode.children)
	var find_row = rows.indexOf(e.target.parentNode)
	var find_cell = cells[find_row].indexOf(e.target)

	console.info('find', find_row, find_cell)
	if(cells[find_row][find_cell].textContent !== ''){
		console.log('빈칸이 아닙니다')
		
	} else {
		//console.log('빈칸 입니다.')
		cells[find_row][find_cell].textContent = turn;
		

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


		// 전부 체크됨 
		if(allTrue){
			console.info(turn + ' win!')
			turn = 'X';
			cells.forEach(function(line){
				line.forEach(function(cell){
					cell.textContent = '';
				})
			})
		} else {
			turn = turn==='X'?'O':'X';
			//console.info('game over!')
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