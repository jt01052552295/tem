// for(var i=0; i<100; i++){

// 	closer(i)

// }

// function closer(i){
// 	setTimeout(function(){
// 		console.log(i)
// 	}, i*100)
// }


for(var i=0; i<100; i++){

	(function closer(j){
		setTimeout(function(){
			console.log(j)
		}, j*100)
	})(i);

}

