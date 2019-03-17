var numA = [1,2,3,4,5,6,7,8,9];
var numB = [];


for(var i=0; i<4; i++){
	var select = numA.splice(Math.floor(Math.random() * (9-i) ), 1)[0]
	numB.push(select)
}

console.log(numB)


var id = document.getElementById('btn')
id.addEventListener('click', function(e){
	e.preventDefault();
	var test = document.getElementById('test').value

	if( test === numB.join('') ){
		console.info('home run!')
	} else {
		var input = test.split('');
		var strike = 0;
		var ball = 0;

		for(var i = 0; i<4; i++){

			console.log(Number(input[i]), numB[i])
			if(Number(input[i]) === numB[i]) { // 같은자리
				strike++;
			} else if(numB.indexOf(input[i]) > -1) { // 입력값이 존재하지만, 같은자리가 아님
				ball++;
			}
			console.info(i + '  strike = ' + strike + ' ball = ' + ball)
		}
		//console.info('strike = ' + strike + ' ball = ' + ball)

	}	
})

