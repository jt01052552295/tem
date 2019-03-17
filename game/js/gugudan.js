var wrong_chk = true;
while(wrong_chk){

	var test = Math.random() * 9
	test = Math.floor(test) + 1

	var test2 = Math.random() * 9
	test2 = Math.floor(test2) + 1

	var result = test * test2

	var input = prompt( String(test) + ' X ' + String(test2) + ' = ??????')



	if(result === Number(input)){
		console.info("correct")
		break;

	} else if ( Number(input) == 0 ){
		console.info("cancel")
		break;
	} else {
		console.info("wrong!")
	}



}

console.log(String(test) + ' X ' + String(test2) + ' = ' + result)