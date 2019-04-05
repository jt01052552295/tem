var com = {
  영웅: document.getElementById('rival-hero'),
  덱: document.getElementById('rival-deck'),
  필드: document.getElementById('rival-cards'),
  코스트: document.getElementById('rival-cost'),
  덱data: [],
  영웅data: [],
  필드data: [],
  선택카드: null,
  선택카드data: null,
};

var user = {
  영웅: document.getElementById('my-hero'),
  덱: document.getElementById('my-deck'),
  필드: document.getElementById('my-cards'),
  코스트: document.getElementById('my-cost'),
  덱data: [],
  영웅data: [],
  필드data: [],
  선택카드: null,
  선택카드data: null,
};


var 상대덱 = document.querySelector('#rival-deck')
var 내덱 = document.querySelector('#my-deck')

var 상대영웅 = document.querySelector('#rival-hero')
var 내영웅 = document.querySelector('#my-hero')

var 상대필드 = document.querySelector('#rival-cards')
var 내필드 = document.querySelector('#my-cards')

var deckComData = [];
var deckMyData = [];
var heroComData;
var heroMyData;

var 상대필드data = [];
var 내필드data = [];

var turnBtn = document.getElementById('turn-btn');
var turn = true; // true면 내턴, false면 니턴

function Card(hero, myCard) {
  if (hero) {
    this.att = Math.ceil(Math.random() * 2);
    this.hp = Math.ceil(Math.random() * 5) + 25;
    this.hero = true;
    this.field = true;
  } else {
    this.att = Math.ceil(Math.random() * 5);
    this.hp = Math.ceil(Math.random() * 5);
    this.cost = Math.floor((this.att + this.hp) / 2);
  }
  if (myCard) {
    this.mine = true;
  }
}

function cardMake(hero, myCard) {
  return new Card(hero, myCard);
}


function copyCard(data, dom, hero) { // 카드돔연결
  var card = document.querySelector('.card-hidden .card').cloneNode(true);
  card.querySelector('.card-cost').textContent = data.cost;
  card.querySelector('.card-att').textContent = data.att;
  card.querySelector('.card-hp').textContent = data.hp;

  if (hero) {
    card.querySelector('.card-cost').style.display = 'none';
    var div = document.createElement('div');
    div.textContent = '영웅';
    card.appendChild(div)
  }

  card.addEventListener('click', function(){
    turnAct(card, data, turn);
  })

  dom.appendChild(card)
}

function turnAct(card, data, turn){
  console.log(card)
  console.log(data)
  console.log(turn)


}



function makeComputerDeck(cnt){
	for(var i=0; i<cnt; i++){
		deckComData.push(cardMake())
	}
  deckComData.forEach(function(data){
    copyCard(data, 상대덱)
  })

}

function makeMyDeck(cnt){
	for(var i=0; i<cnt; i++){
		deckMyData.push(cardMake())
	}
  deckMyData.forEach(function(data){
    copyCard(data, 내덱)
  })
}

function createMyHero(){
	heroComData = cardMake(true);
  copyCard(heroComData, 내영웅, true)
}

function createComHero(){
	heroMyData = cardMake(true);
  copyCard(heroMyData, 상대영웅, true)
}



function init() {
  makeComputerDeck(5); 	//상대덱생성
  makeMyDeck(5);		//내덱생성
  createMyHero();		//내영웅생성
  createComHero();		//상대영웅생성

  //화면다시그리기(true); // 상대화면
  //화면다시그리기(false); // 내화면
}


init(); // 진입점

// console.log(deckComData)
// console.log(deckMyData)
// console.log(heroComData)
// console.log(heroMyData)