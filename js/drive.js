
var slideIndex = 1;
var time=2000;
showDivs(slideIndex);

function plusDivs() {

	slideIndex += 1;
	console.log(slideIndex);
	showDivs(slideIndex);
}

function showDivs(n) {
	var i;
	var x = document.getElementsByClassName("display-container");
  	// console.log(n);
	if (n > x.length) {slideIndex = 1}
	if (n < 1) {slideIndex = x.length}
	for (i = 0; i < x.length; i++) {
   	x[i].classList.add("hide-slides");  
	}
	x[slideIndex-1].classList.remove("hide-slides");  
}


setInterval("plusDivs()", time);

window.onload = showDivs(slideIndex);

