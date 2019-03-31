var tbody = document.querySelector("#table tbody")
var dataset = [];
var gameover = false;
var openCount = 0;

var 코드표 = {
	연칸: -1,
	물음표:-2,
	깃발:-3,
	깃발지뢰:-4,
	물음표지뢰:-5,
	지뢰:1,
	보통칸:0
}


document.querySelector("#exec").addEventListener('click', function(){
	tbody.innerHTML = '';
	dataset = [];
	gameover = false;
	openCount = 0;
	var hor = parseInt(document.querySelector("#hor").value)
	var ver = parseInt(document.querySelector("#ver").value)
	var mine = parseInt(document.querySelector("#mine").value)

	// 지뢰만들기
	var 후보군 = Array(hor * ver).fill().map(function(요소, 인덱스){
		return 인덱스;
	})
	var 셔플 = [];
	while(후보군.length> hor*ver-mine) {
		var 이동값 = 후보군.splice(Math.floor(Math.random() * 후보군.length), 1)[0];
		셔플.push(이동값);
	}
	//셔플.sort(function(p,c){return p-c;})

	console.log(셔플)

	// 지뢰테이블 만들기
	for( var i=0; i<ver; i++){
		var arr = [];
		var tr = document.createElement('tr')
		dataset.push(arr);
		for(var j=0; j<hor; j++){
			arr.push(코드표.보통칸);
			var td = document.createElement('td')

			// 오른쪽버튼 클릭 액션
			td.addEventListener('contextmenu', function(e){
				e.preventDefault();
				if(gameover) return;
				var parentTr =  e.currentTarget.parentNode
				var parentTbody = e.currentTarget.parentNode.parentNode
				var cell = Array.prototype.indexOf.call(parentTr.children, e.currentTarget);
				var row =  Array.prototype.indexOf.call(parentTbody.children, parentTr);	
				
				if(e.currentTarget.textContent === '' || e.currentTarget.textContent === 'X'){
					e.currentTarget.textContent = '!';
					if(dataset[row][cell] === 코드표.지뢰){
						dataset[row][cell] = 코드표.깃발지뢰;
					} else {
						dataset[row][cell] = 코드표.깃발;
					}
				} else if(e.currentTarget.textContent === '!'){
					e.currentTarget.textContent = '?';
					if(dataset[row][cell] === 코드표.깃발지뢰){
						dataset[row][cell] = 코드표.물음표지뢰;
					} else {
						dataset[row][cell] = 코드표.물음표;
					}
				} else if(e.currentTarget.textContent === '?'){
					if(dataset[row][cell] === 코드표.물음표지뢰){
						e.currentTarget.textContent = 'X';
						dataset[row][cell] = 코드표.지뢰;
					} else {
						e.currentTarget.textContent = '';
						dataset[row][cell] = 코드표.보통칸;
					}
				}		
			});

			// 왼쪽버튼 클릭 액션
			td.addEventListener('click', function(e){
				e.preventDefault();
				if(gameover) return;
				var parentTr =  e.currentTarget.parentNode
				var parentTbody = e.currentTarget.parentNode.parentNode
				var cell = Array.prototype.indexOf.call(parentTr.children, e.currentTarget);
				var row =  Array.prototype.indexOf.call(parentTbody.children, parentTr);	

				if( [코드표.연칸, 코드표.깃발, 코드표.깃발지뢰, 코드표.물음표지뢰, 코드표.물음표].includes(dataset[row][cell])  ){
					return;
				}

				e.currentTarget.classList.add('opened')
				openCount++;
				if(dataset[row][cell] === 코드표.지뢰){
					e.currentTarget.textContent = '펑';
					gameover = true;
					console.log('game over!!')
				} else {

					var search = [
						dataset[row][cell-1],	 	                  dataset[row][cell+1]
					]
					if(dataset[row-1]){
						search = search.concat([dataset[row-1][cell-1],dataset[row-1][cell],dataset[row-1][cell+1]])
					}

					if(dataset[row+1]){
						search = search.concat([dataset[row+1][cell-1],dataset[row+1][cell],dataset[row+1][cell+1]])
					}

					var around = search.filter(function(v){
						// return v === 코드표.지뢰;
						return [코드표.지뢰, 코드표.깃발지뢰, 코드표.물음표지뢰].includes(v);
					})

					console.log(around.length)
					console.log(around)
					// false, '', 0, null, undefined, NaN
					e.currentTarget.textContent = around.length || '';
					dataset[row][cell] = 코드표.연칸;
					if(around.length===0){
						//주변 8칸 동시오픈
						var arrAround = [];
						if(tbody.children[row-1]){
							arrAround = arrAround.concat([
								tbody.children[row-1].children[cell-1],
								tbody.children[row-1].children[cell],
								tbody.children[row-1].children[cell+1]
							])
						}
						arrAround = arrAround.concat([
							tbody.children[row].children[cell-1],
							tbody.children[row].children[cell+1]
						])
						if(tbody.children[row+1]){
							arrAround = arrAround.concat([
								tbody.children[row+1].children[cell-1],
								tbody.children[row+1].children[cell],
								tbody.children[row+1].children[cell+1]
							])
						}
						arrAround.filter(function(v){return !!v}).forEach(function(cell){
							var parentTr =  cell.parentNode
							var parentTbody = cell.parentNode.parentNode
							var cell2 = Array.prototype.indexOf.call(parentTr.children, cell);
							var row2 =  Array.prototype.indexOf.call(parentTbody.children, parentTr);	
							if(dataset[row2][cell2] !== 코드표.연칸){
								cell.click();
							}
						})
					}
				}
				if(openCount === hor * ver - mine){
					gameover = true;
					console.log('game Win!!!')
				}
			})
			tr.appendChild(td)
		}
		tbody.appendChild(tr)
	}


	// 지뢰심기
	for(var k=0; k<셔플.length; k++){
		var 세로 = Math.floor(셔플[k]/ver)
		var 가로 = 셔플[k]%ver

		tbody.children[세로].children[가로].textContent = 'X';
		dataset[세로][가로] = 코드표.지뢰;
	}

	console.log(dataset)

})

function repeatOpen(num){
	if(num<5){
		repeatOpen(num+1)
	}
}

tbody.addEventListener('contextmenu', function(e){
	//console.info(e.currentTarget) 	// 이벤트리스너를 단 대상
	//console.info(e.target)			// 이벤트가 실제로 발생하는 대상
});





