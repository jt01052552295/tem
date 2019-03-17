var word = "컴퓨터"
var wrong_count = 0;
var wrong_max_count = 3;

var body = document.body;
var divElm = document.createElement('div');
divElm.createTextNode(word)
document.body.appendChild(divElm);

var inputElm = document.createElement('input')
document.body.appendChild(inputElm)

var btnElm = document.createElement('buttton')
document.body.appendChild(btnElm)

btnElm.addEventListener('click', function(e){
	e.preventDefault();

})

// while(true){

// 	var answer = prompt(word)

// 	//console.info(answer.length)
// 	if(word[word.length-1] === answer[0] && answer.length === 3){
// 		console.log('correct')
// 		word = answer
// 	} else if(answer == 0){
// 		console.log('cancel')
// 		break;
// 	} else {
// 		wrong_count++;
// 		console.error('wrong')

// 	}

// 	if(wrong_count == wrong_max_count) {
// 		console.info('exit')
// 		break;
// 	}


// }

