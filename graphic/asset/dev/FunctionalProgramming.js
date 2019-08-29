/*
대표적인 함수형 프로그래밍 함수들이 있습니다. map, filter와 reduce
주로 배열에 사용되는 것들..
*/

/*
var arr = [1, 2, 3, 4, 5];
var map = arr.map(function(x) {
  return x * 2;
}); // [2, 4, 6, 8, 10]
console.info(map)


// filter() 메서드는 주어진 함수의 테스트를 통과하는 모든 요소를 모아 새로운 배열로 반환합니다.

var condition = function(x) { return x % 2 === 0; }
var ex = function(array, cond){
	return array.filter(cond);
}
var rs = ex(arr, condition)
console.info(rs) // [2, 4]


function add(sum, count) {
  sum += count;
  if (count > 0) {
    return add(sum, count - 1);
  } else {
    return sum;
  }
}
var rs = add(0, 10); 
console.info(rs) // 55
*/

// 빈 요소를 제외하고 배열 내에 존재하는 각 요소에 대해 callback 함수를 한 번씩 실행하는데, 콜백 함수는 다음의 네 인수를 받습니다:
var arr = [1,2,3,4,5,6,7,8,9,10];
var intValue = 0;
// 네개의 인자를 가진다.  1- 누산기  2 현재값, 3-현재인덱스, 4-원본배열
// 리듀서 함수의 반환 값은 누산기에 할당되고, 누산기는 순회 중 유지되므로 결국 최종 결과는 하나의 값이 됩니다.
var rs = arr.reduce(function(prevValue, currentValue, currentIndex, arr) {
  console.info(currentIndex + ' 번', prevValue, currentValue)
  return prevValue + currentValue;
}, intValue); 
console.info(rs) // 55