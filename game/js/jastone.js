var com = {
  hero: document.getElementById('rival-hero'),
  deck: document.getElementById('rival-deck'),
  field: document.getElementById('rival-cards'),
  cost: document.getElementById('rival-cost'),
  deckdata: [],
  herodata: [],
  fielddata: [],
  choiceCard: null,
  choiceCarddata: null,
};
var user = {
  hero: document.getElementById('my-hero'),
  deck: document.getElementById('my-deck'),
  field: document.getElementById('my-cards'),
  cost: document.getElementById('my-cost'),
  deckdata: [],
  herodata: [],
  fielddata: [],
  choiceCard: null,
  choiceCarddata: null,
};
var turnBtn = document.getElementById('turn-btn');
var turn = true; // true면 내턴, false면 니턴


function deckToField(data, myTurn) { //덱에서필드로
  var obj = myTurn ? com : user; // 조건 ? 참 : 거짓;
  var currentCost = Number(obj.cost.textContent);
  if (currentCost < data.cost) {
    return 'end';
  }
  var idx = obj.deckdata.indexOf(data);
  obj.deckdata.splice(idx, 1);
  obj.fielddata.push(data);
  redrawField(obj);
  redrawDeck(obj);
  data.field = true;
  obj.cost.textContent = currentCost - data.cost;
}

function redrawField(obj) { // 필드다시그리기
  obj.field.innerHTML = '';
  obj.fielddata.forEach(function(data) {
    cardDom(data, obj.field);
  });
}

function redrawDeck(obj) { // 덱다시그리기
  obj.deck.innerHTML = '';
  obj.deckdata.forEach(function(data) {
    cardDom(data, obj.deck);
  });
} 

function redrawHero(obj) { // 영웅다시그리기
  obj.hero.innerHTML = '';
  cardDom(obj.herodata, obj.hero, true);
}

function redrawScreen(myScreen) { // 화면다시그리기
  var obj = myScreen ? user : com; // 조건 ? 참 : 거짓;
  redrawField(obj);
  redrawDeck(obj);
  redrawHero(obj);
}


function turnAct(card, data, turn) { //턴액션수행
  console.log(card, data, turn)
  // 턴이 끝난 카드면 아무일도 일어나지 않음
  var my = turn ? user : com;
  var enemy = turn ? com : user;
  if (card.classList.contains('card-turnover')) {
    return;
  }
  // 적군 카드면서 아군 카드가 선택되어 있고, 또 그게 턴이 끝난 카드가 아니면 공격
  var enemyCard = turn ? !data.mine : data.mine;
  if (enemyCard && my.choiceCard) {
    data.hp = data.hp - my.choiceCarddata.att;
    if (data.hp <= 0) { // 카드가 죽었을 때
      var index = enemy.fielddata.indexOf(data);
      if (index > -1 ) { // 쫄병이 죽었을 때
        enemy.fielddata.splice(index, 1);
      } else { // 영웅이 죽었을 때
        alert('승리하셨습니다!');
        init();
      }
    }
    redrawScreen(!turn);
    my.choiceCard.classList.remove('card-selected');
    my.choiceCard.classList.add('card-turnover');
    my.choiceCard = null;
    my.choiceCarddata = null;
    return;
  } else if (enemyCard) { // 상대 카드면
    return;
  }
  if (data.field) { // 카드가 필드에 있으면
    card.parentNode.querySelectorAll('.card').forEach(function(card) {
      card.classList.remove('card-selected');
    });
    card.classList.add('card-selected');
    my.choiceCard = card;
    my.choiceCarddata = data;
  } else { // 덱이 있으면
    if (deckToField(data, turn) !== 'end') {
      turn ? makeMyDeck(1) : makeComputerDeck(1);
    }
  }
}


function cardDom(data, dom, hero) { //카드돔연결
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
  card.addEventListener('click', function() {
    
    turnAct(card, data, turn);
  });
  dom.appendChild(card);
}
function makeComputerDeck(cnt) {
  for (var i = 0; i < cnt; i++) {
    com.deckdata.push(cardMake());
  }
  redrawDeck(com);
}
function makeMyDeck(cnt) {
  for (var i = 0; i < cnt; i++) {
    user.deckdata.push(cardMake(false, true));
  }
  redrawDeck(user);
}
function createMyHero() {
  user.herodata = cardMake(true, true);
  cardDom(user.herodata, user.hero, true);
}
function createComHero() {
  com.herodata = cardMake(true);
  cardDom(com.herodata, com.hero, true);
}

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

function init() {
  makeComputerDeck(5); 	//상대덱생성
  makeMyDeck(5);		//내덱생성
  createMyHero();		//내영웅생성
  createComHero();		//상대영웅생성
  redrawScreen(true); // 상대화면
  redrawScreen(false); // 내화면
}

turnBtn.addEventListener('click', function() {
  var obj = turn ? user : com;
  document.getElementById('rival').classList.toggle('turn');
  document.getElementById('my').classList.toggle('turn');
  redrawField(obj);
  redrawHero(obj);
  turn = !turn; // 턴을 넘기는 코드
  if (turn) {
    user.cost.textContent = 10;
  } else {
    com.cost.textContent = 10;
  }
});

init(); // 진입점

// console.log(deckComData)
// console.log(deckMyData)
// console.log(heroComData)
// console.log(heroMyData)