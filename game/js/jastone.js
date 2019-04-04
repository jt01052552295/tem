
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



function makeComputerDeck(cnt){
	for(var i=0; i<cnt; i++){
		deckComData.push(cardMake())
	}

}

function makeMyDeck(cnt){
	for(var i=0; i<cnt; i++){
		deckMyData.push(cardMake())
	}
}

function createMyHero(){
	heroComData = cardMake();
}

function createComHero(){
	heroMyData = cardMake();
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

console.log(deckComData)
console.log(deckMyData)
console.log(heroComData)
console.log(heroMyData)