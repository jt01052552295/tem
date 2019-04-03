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
function makeCard(name, att, hp){ // factory pattern
	var card = Object.create(prototype);
	card.name = name;
	card.att = att;
	card.hp = hp;
	return card
}

var card = makeCard('aaa', 10, 20)

console.log(card)

var card2 = Object.assign({}, card)

console.log(card2)

//card2.type = '메롱'

console.log(card)
console.log(card2)