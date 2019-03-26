var 이미지좌표 = 0
var dictionary = {
	바위: '0',
	가위: '-142px',
	보: '-284px'
};

function 컴퓨터의선택(이미지좌표){
	// 2차원배열로 바꾸고 찾을때까지 반복
	return Object.entries(dictionary).find(function(y){
		return y[1] === 이미지좌표
	})[0]
}

var start = setInterval(function(){

	if(이미지좌표===dictionary.바위){
		이미지좌표 = dictionary.가위
	} else if (이미지좌표 === dictionary.가위) {
		이미지좌표 = dictionary.보
	} else {
		이미지좌표 = dictionary.바위;
	}

	document.querySelector("#computer").style.background = 'url(https://en.pimg.jp/023/182/267/1/23182267.jpg) ' + 이미지좌표 + ' 0';

}, 100)

var rsp = {
	가위:0,
	바위:1,
	보: 2
};

document.querySelectorAll(".btn").forEach(function(btn){
	btn.addEventListener('click', function(){
		clearInterval(start)
		var choice = this.textContent;
		console.log(choice, 컴퓨터의선택(이미지좌표) )
		console.log(rsp[choice], rsp[컴퓨터의선택(이미지좌표)])

		var rs = rsp[choice] - rsp[컴퓨터의선택(이미지좌표)];

		if( rs === 0 ){
			console.info('비겼습니다.')
		} else if( [1,-2].includes(rs) ){
			console.info('이겼습니다.')
		} else if( [-1,2].includes(rs) ){
			console.info('졌습니다.')
		}
	})
})

