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
	    	hero:hero
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