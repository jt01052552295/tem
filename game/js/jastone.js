var 상대덱 = document.querySelector('#rival-deck')
var 내덱 = document.querySelector('#my-deck')

var 상대영웅 = document.querySelector('#rival-hero')
var 내영웅 = document.querySelector('#my-hero')

var deckComData = [];
var deckMyData = [];
var heroComData;
var heroMyData;

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
    console.log(card)
  })

  dom.appendChild(card)
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