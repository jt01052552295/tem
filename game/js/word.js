var word = "컴퓨터"

var wrong_count = 0;
var wrong_max_count = 3;
while(true){

	var answer = prompt(word)

	//console.info(answer.length)
	if(word[word.length-1] === answer[0] && answer.length === 3){
		console.log('correct')
		word = answer
	} else {
		wrong_count++;
		console.error('wrong')

	}

	if(wrong_count == wrong_max_count) {
		console.info('exit')
		break;
	}


}