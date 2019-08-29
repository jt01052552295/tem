// 싱글턴 패턴입니다. 싱글턴의 싱글은 혼자의 싱글이 맞습니다. 
// 객체를 만들 때, 하나의 생성자로 여러 객체를 만들 수 있었습니다. 하지만 싱글턴은 필요에 의해 단 하나의 객체만을 만들 때 사용합니다. 아래 처럼요.

var obj = {
  a: 'hello',
  b: function() {
    console.log(this.a);
  }
};

//obj.b();

var singleton = (function() {
  var instance;
  var a = 'hello';
  function initiate() {
    return {
      a: a,
      b: function() {
        alert(a);
      }
    };
  }
  return {
    getInstance: function() {
      if (!instance) {
        instance = initiate();
      }
      return instance;
    }
  }
})();
var first = singleton.getInstance();
var second = singleton.getInstance();
//console.log(first === second); // true;

// 비공개로 만드는 게 바로 제대로 된 싱글턴입니다.
/*
first와 second 변수를 보면 두 번 다 getInstance 함수를 호출했는데요. 결과적으로 두 변수는 같습니다. 
first 때 initiate된 객체를 second 때도 똑같이 반환받았기 때문이죠. 즉, 아무리 호출해도 기존에 있던 객체는 복사되는 것도 아니고 그냥 그대로 반환됩니다. 
싱글턴 패턴은 모듈 패턴을 변형한 디자인 패턴입니다.

처음 네임스페이스를 만들 때 사용하면 됩니다! 예를 들어 게임을 만든다고 치면, 게임 객체를 싱글턴으로 만드는 겁니다. 
게임 내의 모든 것을 감싸고 있는 객체를 말이죠. 게임을 실행했을 때 게임은 한 번만 켜져야하기 때문에 싱글턴이 적절합니다.
*/


var Vehicle = (function() {
  function Vehicle(name, speed) {
    this.name = name; this.speed = speed;
  }
  Vehicle.prototype.drive = function () {
    console.log(this.name + ' runs at ' + this.speed);
  };
  return Vehicle;
})();

var car = new Vehicle('name', '100');
car.drive();

/*
생성자 패턴
생성자와 프로토타입을 모두 Vehicle 변수 안에 넣었습니다. 
변수 Vehicle과 생성자 Vehicle 이름이 같아서 걱정하시는 분이 있을 수도 있는데 IIFE라서 바로 변수 Vehicle에 생성자 Vehicle이 덮어씌워집니다.
*/