"use strict"
var TurnGame = (function() {

	var instance;
	var initiate = function(heroName) {
		 var hero = {
	      name: heroName,
	      lev: 1,
	      maxHp: 100,
	      hp: 100,
	      xp: 0,
	      att: 10
	    };

	    return {
	    	stat:hero,
	    	showLevel: function() {
		        document.getElementById('hero-level').innerHTML = 'level : '+ hero.lev;
		        return this;
		    },
		    showXp: function() {
		        var self = this;
		        if (hero.xp > 15 * hero.lev) {
		          hero.xp -= 15 * hero.lev;
		          hero.maxHp += 10;
		          hero.hp = hero.maxHp;
		          hero.att += hero.lev;
		          hero.lev++;
		          window.setTimeout(function() {
		            self.setMessage('레벨업!');
		          }, 1000);
		        }
		        document.getElementById('hero-xp').innerHTML = 'XP: ' + hero.xp + '/' + 15 * hero.lev;
		        document.getElementById('hero-att').innerHTML = 'ATT: ' + hero.att;
		        return this.showLevel().showHp();
		    },
		    showHp: function() {
		        if (hero.hp < 0) {
		          return this.gameOver();
		        }
		        document.getElementById('hero-hp').innerHTML = 'HP: ' + hero.hp + '/' + hero.maxHp;
		        return this;
		    },
		    toggleMenu: function () {
		        document.getElementById('hero-name').innerHTML = hero.name;
		        document.getElementById('start-screen').style.display = 'none';
		        if (document.getElementById('game-menu').style.display === 'block') {
		          document.getElementById('game-menu').style.display = 'none';
		          document.getElementById('battle-menu').style.display = 'block';
		          document.getElementById('battle-input').focus();
		        } else {
		          document.getElementById('game-menu').style.display = 'block';
		          document.getElementById('battle-menu').style.display = 'none';
		          document.getElementById('menu-input').focus();
		        }
		        return this;
		    },
		    setMessage: function(msg) {
		        document.getElementById('message').innerHTML = msg;
		        return this;
		    },
	    };

	};

	return {
	    getInstance: function(name) {
	      if (!instance) {
	        instance = initiate(name);
	      }
	      return instance;
	    }
	  };

})();

document.getElementById('start-screen').onsubmit = function(e) {
  var name = document.getElementById('name-input').value;
  e.preventDefault();
  if (name && name.trim() && confirm(name + '으로 하시겠습니까?')) {
    TurnGame.getInstance(name).showXp().toggleMenu(); // 메소드 체이닝 (체인처럼 연속으로 실행 할수 있다는 뜻.)
    // instance 객체를 연속으로 씀.
    // instance 또는 this 를 return 함.
    // showXp 는 showHp와 showLevel을 내부적으로 return 해서 객체의 메소드를 연속으로 쓸 수 있음.
  } else {
    alert('이름을 입력해주세요');
  }
};



document.getElementById('game-menu').onsubmit = function(e) {
  var input = document.getElementById('menu-input');
  var option = input.value;
  e.preventDefault();
  input.value = '';
};
document.getElementById('battle-menu').onsubmit = function(e) {
  var input = document.getElementById('battle-input');
  var option = input.value;
  e.preventDefault();
  input.value = '';
};