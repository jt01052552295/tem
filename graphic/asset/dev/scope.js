// 함수의 범위(scope)

var another = function () {
  var x = 'local1';
  function y() {
    console.info(x);
  }
  return { y: y };
}
var newScope = another();
newScope.y();



var newScope = (function () {
  var x = 'local2';
  return {
    y: function() {
      console.info(x);
    }
  };
})();
newScope.y();

//  (function() {})();  : IIFE(즉시 호출 함수 표현식)이라고도 하고, 모듈 패턴이라고도 하는데, 함수를 선언하자마자 바로 실행시켜버리는 거죠

// function() {}로 선언하면서 동시에 ()를 붙이니까 즉시 실행됩니다. 이 구문이 라이브러리를 만들 때 기본입니다. 
// 많은 라이브러리가 이 구문을 활용하고 있습니다. 비공개 변수가 없는 자바스크립트에 비공개 변수 기능을 만들어주기 때문이죠. 이 패턴은 꼭 기억하고 있어야합니다!
