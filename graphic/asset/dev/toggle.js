var myVar = false;

function myHandler(){
 if(myVar) console.log('do something')
}

function myFunc(myElement) {
  var ele = myElement;
  myVar = !myVar;
  
  if (myVar) {
  	window.addEventListener('mousemove', myHandler, false);
  } else {
  	window.addEventListener('mousemove', myHandler, false);
  }
 
  var node = document.createElement("p");
  var textnode = document.createTextNode( myVar  ); 
  node.appendChild(textnode);    	
  document.getElementById('result').appendChild(node);
}

document.getElementById('btn').onclick = function(e){
  //console.info(e)
	myFunc(this);
};
