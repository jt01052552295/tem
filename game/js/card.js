var 가로 = 4;
var 세로 = 3;
var 색깔들 = ['red', 'red', 'orange', 'orange', 'green', 'green', 'yellow', 'yellow', 'white', 'white', 'pink', 'pink'];
var 색깔후보 = 색깔들.slice();
var 색깔 = [];
var 클릭플래그 = true;
var 클릭카드 = [];
var 완성카드 = [];
var 시작시간;
function 셔플() { // 피셔예이츠 셔플
  for (var i = 0; 색깔후보.length > 0; i += 1) {
    색깔 = 색깔.concat(색깔후보.splice(Math.floor(Math.random() * 색깔후보.length), 1));
  }
}

function 카드세팅(가로, 세로) {
  클릭플래그 = false;
  for (var i = 0; i < 가로 * 세로; i += 1) {
    var card = document.createElement('div');
    card.className = 'card';
    var cardInner = document.createElement('div');
    cardInner.className = 'card-inner';
    var cardFront = document.createElement('div');
    cardFront.className = 'card-front';
    var cardBack = document.createElement('div');
    cardBack.className = 'card-back';
    cardBack.style.backgroundColor = 색깔[i];
    cardInner.appendChild(cardFront);
    cardInner.appendChild(cardBack);
    card.appendChild(cardInner);
    (function (c) { // 클로저 문제 해결
      card.addEventListener('click', function() {
        
          c.classList.toggle('flipped');
       
         
      });
    })(card);
    document.querySelector('#wrapper').appendChild(card);
  }
}



//셔플();
카드세팅(가로, 세로);