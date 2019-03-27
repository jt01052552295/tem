var tbody = document.querySelector("#table tbody")
var dataset = [];

document.querySelector("#exec").addEventListener('click', function(){

	var hor = parseInt(document.querySelector("#hor").value)
	var ver = parseInt(document.querySelector("#ver").value)
	var mine = parseInt(document.querySelector("#mine").value)

	// 지뢰만들기
	var 후보군 = Array(hor * ver).fill().map(function(요소, 인덱스){
		return 인덱스;
	})
	var 셔플 = [];
	while(후보군.length>80) {
		var 이동값 = 후보군.splice(Math.floor(Math.random() * 후보군.length), 1)[0];
		셔플.push(이동값);
	}
	셔플.sort(function(p,c){return p-c;})

	console.log(셔플)

	// 지뢰테이블 만들기
	for( var i=0; i<ver; i++){
		var arr = [];
		var tr = document.createElement('tr')
		dataset.push(arr);
		for(var j=0; j<hor; j++){
			arr.push(1);
			var td = document.createElement('td')
			td.addEventListener('contextmenu', function(e){
				e.preventDefault();
				var parentTr =  e.currentTarget.parentNode
				var parentTbody = e.currentTarget.parentNode.parentNode
				
				var cell = Array.prototype.indexOf.call(parentTr.children, e.currentTarget);
				var row =  Array.prototype.indexOf.call(parentTbody.children, parentTr);	

				e.currentTarget.textContent = '!';
				dataset[row][cell] = '!';


				console.log(cell, row)			
			});
			tr.appendChild(td)
			//td.textContent = 1;
		}
		tbody.appendChild(tr)
	}


	// 지뢰심기
	for(var k=0; k<셔플.length; k++){
		var 세로 = Math.floor(셔플[k]/10)
		var 가로 = 셔플[k]%10

		tbody.children[가로].children[세로].textContent = 'X';
		dataset[세로][가로] = 'X';
	}

	console.log(dataset)

})



tbody.addEventListener('contextmenu', function(e){
	console.info(e.currentTarget) 	// 이벤트리스너를 단 대상
	console.info(e.target)			// 이벤트가 실제로 발생하는 대상
});



