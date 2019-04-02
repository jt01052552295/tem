// function makeCard(name, att, hp){
// 	return {
// 		name: name,
// 		att: att,
// 		hp: hp,
// 		type: '카드',
// 		attack: function(){},
// 		depend: function(){},
// 	}
// }


// var card = makeCard('aaa',10,20)
// console.log(card)


var prototype = {
	type: '카드',
	attack: function(){ },
	depend: function(){},
}


function makeCard(name, att, hp){
	var card = {
		name: name,
		att: att,
		hp: hp
	}
	card.__proto__ = prototype;
	return card
}

var card = makeCard('aaa', 10, 20)

console.log(card)

