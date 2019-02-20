var runOnScroll =  function(evt) {

  console.log(evt.target);
};

var elements = document.querySelectorAll("[data-aos]");
elements = Array.prototype.slice.call(elements);


elements.forEach(function(element) {
	console.info(elements)
  window.addEventListener("scroll", runOnScroll);
});


