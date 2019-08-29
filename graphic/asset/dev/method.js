"use strict"
/*
	console.log('기본');
	console.info('정보');
	console.warn('경고');
	console.error('에러');
	console.log('%d는 숫자 %s는 문자열', a, b); // C 언어처럼 로그

	dir : 객체 
	log : 나머지

	function f() { return true; }
	console.log(f);
	console.dir(f);

	console.count('카운터1'); // 카운터1: 1
	console.count('카운터1'); // 카운터1: 2
	console.count('카운터2'); // 카운터2: 1
	console.count('카운터2'); // 카운터2: 2
	console.count('카운터1'); // 카운터1: 3

	var z;
	console.time('타이머');
	for (var i = 0; i < 1000000; i++) z = 5;
	console.timeEnd('타이머'); // 타이머: 6.76611328125ms
*/

var example = function (a, b, c) {
  return a + b + c;
};
var rs1 = example(1, 1, 3);
var rs2 = example.call(null, 1, 2, 3);
var rs3 = example.apply(null, [1, 3, 3]);

//console.info(rs1, rs2, rs3)
// null 은 this 를 대체하는 것.

function example2() {
  console.log(arguments);
  //console.log(arguments.join()); // 함수에 들어온 인자를 배열 형식으로 반환 (배열은 아님, 유사배열)  그래서 오류남
  console.log(Array.prototype.join.call(arguments)); // 이런식으로 프로토타입으로 사용해야됨.
}
//example2(1, 'string', true); // [1, 'string', true]

var obj = {
  string: 'zero',
  yell: function() {
    console.info(this.string);
  }
};
var obj2 = {
  string: 'what?'
};
//obj.yell(); // 'zero';
//obj.yell.call(obj2); // 'what?'

// bind 함수는 함수가 가리키는 this만 바꾸고 호출하지는 않는것.
// 호출하지않고 함수만 반환 하는것.

var yell2 = obj.yell.bind(obj2);
//yell2(); // 'what?'


// 보충설명 call, apply, bind
// call 메서드는 모든 함수에서 사용할 수 있으며, this를 특정 값으로 지정할 수 있다.
// call의 첫 번째 매개변수는 this로 사용할 값이고, 매개변수가 더 있으면 그 매개변수는 호출하는 함수로 전달된다.

function sum(arg1, arg2) {
  return arg1 + arg2;
}
 
document.write(sum.call(null, 2, 3));
document.write(sum.apply(null, [2, 3]));

o1 = {val1:1, val2:2, val3:3};
o2 = {v1:10, v2:50, v3:100, v4:25};
 
function sum(){
    var _sum = 0;
    for(name in this){
        _sum += this[name];
    }
    return _sum;
}
 
console.info(sum.apply(o1)); // 결과 : 6
console.info(sum.apply(o2)); // 결과 : 185


window.color = "red";
var obj = {
  color : "blue"
};
 
function func() {
  console.info(this.color);
};
 
func(); //red
func.call(this); //red
func.call(obj); //blue
func.apply(this); //red
func.apply(obj); //blue





// apply 
// apply는 함수 매개변수를 처리하는 방법을 제외하면 call과 완전히 같다. call은 일반적인 함수와 마찬가지로 매개변수를 직접 받지만, apply는 매개변수를 배열로 받는다.


// bind
// this의 값을 바꿀 수 있는 마지막 함수는 bind이다. bind를 사용하면 함수의 this 값을 영구히 바꿀 수 있다. 
// update 메서드를 이리저리 옮기면서 호출할 때 this 값은 항상 bruce가 되게끔, call이나 apply, 
// 다른 bind와 함께 호출하더라도 this 값이 bruce가 되도록 하려면 bind를 사용한다.

// bind는 함수의 동작을 영구적으로 바꾸므로 찾기 어려운 버그의 원인이 될 수 있다. 
// bind는 매우 유용하지만, 함수의 this가 어디에 묶이는지 정확히 파악하고 사용해야 한다.
function Button(content) { 
  this.content = content;
};
 
Button.prototype.click = function() {
  document.write(this.content + ' clicked');
};
 
var myButton = new Button('OK');
myButton.click(); // OK clicked
 
var looseClick = myButton.click;
looseClick(); // undefined clicked
 
var boundClick = myButton.click.bind(myButton);
boundClick(); // OK clicked

// 9행에서 Button형 객체인 myButton를 만들었고, 인자 값은 'OK'이다. 이 때, 10행과 같이 myButton.click()을 실행하면, 프로토타입 체인에 의해서 OK clicked가 정상적으로 출력이 된다.
// 하지만 12행에서는 myButton.click을 looseClick에 담고, 13행에서 looseClick()을 실행했다. 
// 그러나 이렇게 하면, 12행에서 이미 click 함수가 종료되었기 때문에 13행에서는 this.content를 찾을 수 없게 되어 undefined가 뜬다.
// bind 메소드는 이와 같은 문제를 해결해준다. 
// bind 메소드는 특정 함수에 대해 원본 함수와 동일한 본문을 갖는 바인딩된 함수를 만들기 때문에, 
// 16행에서 boundClick()을 실행하면 정상적으로 OK clicked가 출력이 된다.