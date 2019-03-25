var 후보군 = Array(45).fill().map(function(요소, 인덱스){
	return 인덱스+1;
})

console.log(후보군)


var 셔플 = [];
while(후보군.length>0) {
	var 이동값 = 후보군.splice(Math.floor(Math.random() * 후보군.length), 1)[0];
	셔플.push(이동값);
}

console.log(셔플)

var 보너스 = 셔플[셔플.length-1]
var 당첨숫자들 = 셔플.splice(0, 6).sort(function(p,c){return p-c;})

console.log( 보너스 , 당첨숫자들)

var 결과창 = document.getElementById('result')

for(var i=0; i<당첨숫자들.length; i++){

	var 공 = document.createElement('div')
	공.textContent = 당첨숫자들[i]
	공.style.display = 'inline-block'
	공.style.border = '1px solid black'
	공.className = 'ball'
	결과창.appendChild(공)

	
}


var 보너스창 = document.getElementsByClassName('bonus')['0']
var 보너스공 = document.createElement('div')

// document.querySelector("#선택자")
// document.querySelector(".선택자")
// document.querySelectorAll(".선택자")

보너스공.textContent = 보너스
보너스창.appendChild(보너스공)