"use strict"
const prototype = {
	type: 'card'
}

function Card(name, att, hp){
	this.name = name;
	this.att = att;
	this.hp = hp;
}

Card.prototype = prototype;

var ovj = new Card('aaa', 11, 22)
console.log(ovj)

