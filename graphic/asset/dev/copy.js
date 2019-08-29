
var string = 'hello';
var copy = string;
console.log(copy); // 'hello'
copy = 'hi';
console.log(string); // 'hello'



var array = ['a', 'b', 'c'];
var ref = array;
ref[0] = 'd';
console.log(array); // ['d', 'b', 'c']


var array = ['a', 'b', 'c'];
var copy = Array.prototype.slice.call(array);
copy[0] = 'd';
console.log(array); // ['a', 'b', 'c']
console.log(copy);  // ['d', 'b', 'c']


// copy에는 두 가지가 있습니다. shallow copy(얕은 복사)와 deep copy(깊은 복사)
// 

var array = [{ name: 'a' }, { name: 'b' }, { name: 'c' }];
var shallow = Array.prototype.slice.call(array);
shallow[0].name = 'd';
shallow[1] = 'e';

console.log(array); // ['d', 'b', 'c']
//  위에껀 적용되지만, 밑에껀 적용되지 않는다. 
// 가장 상위객체에 직접 변경하는건 적용 안되고, 내부 객체들은 참조로 이어져 있기 때문에 적용됨.
// 이것이 얕은복사 임.

function copyObj(obj) {
  var copy = {};
  if (Array.isArray(obj)) {
    copy = obj.slice().map((v) => {
      return copyObj(v);
    });
  } else if (typeof obj === 'object' && obj !== null) {
    for (var attr in obj) {
      if (obj.hasOwnProperty(attr)) {
        copy[attr] = copyObj(obj[attr]);
      }
    }
  } else {
    copy = obj;
  }
  return copy;
}
/*
 for ~ in 은 obj안의 키를 순서대로 반복합니다. 
 (주의할 점은 키가 숫자면 순서대로 반복되지 않는다는 겁니다. 숫자로된 키가 없을 때 사용하세요) 
 문제는 prototype에 있는 상속된 객체의 속성도 반복되기 때문에 obj.hasOwnProperty(keyName)메소드로 상속되지 않은 자기의 속성만 반복되도록 제한하는 겁니다. 
 hasOwnProperty 부분을 빼고 복사하면, 왜 그 부분이 필요한지 이유를 알 수 있을 겁니다.
*/
var obj = { a: 1, b: 2, c: [{ d: null, e: 'f' }] };
var obj2 = copyObj(obj);

console.log(obj)
console.log(obj2)

obj2.a = 3;
obj2.c[0].d = true;

console.log(obj); 
console.log(obj2); 

// 결과적으로 위 두 객체는 복사한 이후 따로 놀게 됨.


var func = function () {
  console.info('hi');
};
func2 = func.bind(this);
func2(); // 'hi'

//함수는 복사할 때 bind를 하면 됩니다. this를 기존 함수와 같게 하면 똑같게 함수가 복사됩니다.

